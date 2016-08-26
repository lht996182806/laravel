<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use DB;
use App\Models\Goods;
use App\Http\Requests;
use App\Http\Requests\AddGoodRequest;
use App\Http\Controllers\Controller;

class GoodController extends Controller
{   
    /**
    *   添加商品 
    *   admin/good/add
    */
    public function getAdd(){
        return view('good.add',['res'=>CateController::getCates()]);
    }

    /**
    *  处理添加商品数据 
    *   admin/good/insert 
    */
    public function postInsert(AddGoodRequest $request){
        // dd($request->all());
        $data=$this->dealRequest($request);
        //dd($data);
        $res=DB::table('goods')->insert($data);
        if($res){
            return redirect('admin/good/index')->with('success','商品添加成功');
        }else{
            return back()->with('error','添加失败请重试');
        }
    }

    /**
    *   处理数据函数
    *   /dealRequest
    */
    public function dealRequest(Request $request){
        $data=$request->except('_token','pic');
        if($request->hasFile('pic')){
            $suffix=$request->file('pic')->getClientOriginalExtension();
            $pathname=time('Ymd').rand(1111,9999).'.'.$suffix;
            $request->file('pic')->move(Config::get('app.upload_dir'),$pathname);
            $data['pic']=trim(Config::get('app.upload_dir').$pathname,'.');
        }
        $data['color']=implode(',',$data['color'] );
        $data['size']=implode(',',$data['size']);
        $data['status']=1;
        $con=$data['editorValue'];
        unset($data['editorValue']);
        $data['content']=$con;
        return $data;
    }

    /**
    *   首页显示商品  
    *   admin/good/index
    */
    public function getIndex(Request $request){
        $list=DB::table('goods')->where(function($query) use($request){
            if($request->input('keywords')){
                $query->where('title','like','%'.$request->keywords.'%');
            }
        })->where('status',1)->paginate($request->input('num',10));
        $res=DB::table('cates')->select()->get();
        return view('good.index',['list'=>$list,'request'=>$request->all(),'res'=>$res]);
    }

    /**
    *   编辑商品  
    *   admin/good/edit
    */
    public function getEdit($id){
        // $res=DB::table('goods')->where('id',$id)->first();
        $res=Goods::find($id);
        $res->color=explode(',',$res->color);
        $res->size=explode(',',$res->size);
        return view('good.edit',['res'=>$res,'list'=>CateController::getCates()]);
    }

    /**
    *  修改商品属性  
    *   admin/good/update 
    */
    public function postUpdate(AddGoodRequest $request){
        $data=$this->dealRequest($request);
        unset($data['id']);
        $res=DB::table('goods')->where('id',$request->id)->update($data);
        if($res){
            //dd($data);
            return redirect('admin/good/index')->with('success','添加商品成功');
        }else{
            return back()->with('error','添加失败!');
        }
    }

    /**
    *   删除商品 
    *   admin/good/del
    */
    public function getDel($id){
        $res=DB::table('goods')->where('id',$id)->first();
        
        $path='.'.$res->pic;
        if(file_exists($path)){
            unlink($path);
        }

        
        preg_match_all('/src=[\'\"]?([^\'\"]*)[\'\"]?/',$res->content, $tem);
        foreach($tem[1] as $v){
            $pathname='.'.$v;
            // dd($v);
            unlink($pathname);
        }

        $res=DB::table('goods')->where('id',$id)->delete();
        if($res){
            return redirect('admin/good/index')->with('success','删除成功');
        }else{
            return redirect('admin/good/index')->with('error','删除失败');
        }
        
    }

    /**
    *   操作下架商品status=0  
    *   admin/good/lock
    */
    public function getLock($id){
        //$data=DB::table('goods')->where('id',$id)->first();
        //$status=$data->status;
        //dd($status);
        $res=DB::table('goods')->where('id',$id)->update(['status'=>0]);
        if($res){
            return redirect('admin/good/index')->with('success','下架成功');
        }else{
            return redirect('admin/good/index')->with('error','下架失败');
        }
    }


    /**
    *  被下架的商品浏览  
    *   admin/good/locklist 
    */
    public function getLocklist(Request $request){

        $list=DB::table('goods')->where(function ($query) use ($request){
            if($request->input('keywords')){
                $query->where('title','like','%'.$request->input('keywords').'%');
            }
        })->where('status',0)->paginate($request->input('num',10));
        $res=DB::table('cates')->select()->get();
        return view('good.lock',['list'=>$list,'res'=>$res,'request'=>$request->all()]);
    }


    /**
    *   上架商品status=1  
    *   admin/good/unlock
    */
    public function getUnlock($id){
        $res=DB::table('goods')->where('id',$id)->update(['status'=>1]);
        if($res){
            return redirect('admin/good/locklist')->with('success','上架成功');
        }else{
            return redirect('admin/good/locklist')->with('error','上架失败');
        }
    }
}
