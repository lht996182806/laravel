<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CateController extends Controller
{
    //添加分类
    public function getAdd($id=''){
        //$list=DB::table('cates')->select()->get();
        // dd($list);
        $list=self::getCates();
        return view('cate.add',['list'=>$list,'id'=>$id]);
    }

    //处理添加数据
    public function postInsert(Request $request){
        
        $data=$request->except('_token');
        
        if($request->input('pid')==0){
            $data['path']=0;
            $data['status']=1;
            //dd($data);
        }else{
            $res=DB::table('cates')->where('id',$request->input('pid'))->first();
            //dd($res);
            $data['path']=$res->path.','.$request->input('pid');
            $data['status']=1;
        }
        //dd($data);
        $res=DB::table('cates')->insert($data);
        if($res){
            return redirect('/admin/cate/index')->with('success','添加成功!');
        }else{
            return back()->with('error','添加失败!');
        }
    }

    //分类主页列表
    public function getIndex(){
        // $list=DB::table('cates')->get();
        //dd($this->getCatesInfo());
        $list=self::getCates();
        return view('cate.index',['list'=>$list]);
    }

    //处理分类函数
    public static function getCates(){
        $res=DB::table('cates')
        ->select(DB::raw('*,concat(path,",",id) as paths'))
        ->orderBy('id')
        ->get();
        foreach ($res as $k => $v) {
            $len=explode(',',$v->path);
            $num=count($len)-1;
            $res[$k]->name=str_repeat('|----',$num).$v->name;
        }
        return $res;
    }

    //编辑分类表单
    public function getEdit($id){
        $res=DB::table('cates')->where('id',$id)->first();
        $list=self::getCates();
        //dd($res);
        return view('cate.edit',['res'=>$res,'list'=>$list]);
    }

    //执行修改数据处理
    public function postUpdate(Request $request){
        //dd($request->all());
        $data=$request->except('_token');
        $res=DB::table('cates')->where('id',$request->input('id'))->update($data);
        if($res){
            return redirect('/admin/cate/index')->with('success','修改成功!');
        }else{
            return back()->with('error','修改失败!');
        }
    }

    //删除分类
    public function getDel($id){
        $data=DB::table('cates')->where('pid',$id)->count();
        if($data>0){
            return back()->with('error','该类下存在子类无法删除!');
        }
        $res=DB::table('cates')->where('id',$id)->delete();
        if($res){
            return redirect('/admin/cate/index')->with('success','删除成功!');
        }else{
            return back()->with('error','删除失败,请重试!');
        }
    }
    //获取所有的数据
    public static function getAllcate(){
        return DB::table('cates')->get();
    }
    //递归方式获取数据
    public static function getCatesByPidArr($cates,$pid){
        //遍历数据
        $data=[];
        foreach ($cates as $k => $v) {
            if($v->pid==$pid){
                $v->sub=self::getCatesByPidArr($cates,$v->id);
                $data[]=$v;
            }
        }
        return $data;
    }
    //递归所有分类
    public  function getCatesInfo(){
        $cates=self::getAllcate();
        $res=self::getCatesByPidArr($cates,0);
        return $res;
    }
}