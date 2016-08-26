<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\InsertArticleRequest;


class ArticleController extends Controller
{
    //添加文章模块admin/article/add
    public function getAdd(){
        $res=CateController::getCates();
        return view('article.add',['res'=>$res]);
    }

    //处理提交数据 admin/article/insert
    public function postInsert(InsertArticleRequest $request){
        //dd($request->all());
        /*数据验证
        *1.执行 php artisan make:request InsertArticleRequest 验证规则对象
        *2.类中的authorize方法必须修改为true
        *3.类型约束
        *4.导入类use App\Http\Requests\InsertArticleRequest;
        */
        $data=$this->dealRequest($request);
        //dd($data);
        $res=DB::table('articles')->insert($data);
        if($res){
            return redirect('/admin/article/index')->with('success','添加成功!');
        }else{
            return back()->with('error','添加失败!');
        }
    }

    //处理数据函数
    public function dealRequest(Request $request){
        $data=$request->except('_token','pic');
        if($request->hasFile('pic')){
            $suffix=$request->file('pic')->getClientOriginalExtension();
            $pathname=time('Ymd').rand(1111,9999).'.'.$suffix;
            $request->file('pic')->move(Config::get('app.upload_dir'),$pathname);
            $data['pic']=trim(Config::get('app.upload_dir').$pathname,'.');
        }

        $data['user_id']=1;
        $data['create_t']=time();
        $con=$data['editorValue'];
        unset($data['editorValue']);
        $data['content']=$con;
        return $data;
    }
    
    //首页获取数据  admin/article/index
    public function getIndex(Request $request){
        $num=$request->input('num',10);
        $list=DB::table('articles')
        ->join('users','articles.user_id','=','users.id')
        ->join('cates','articles.cate_id','=','cates.id')
        ->select('articles.id','articles.title','articles.descr','articles.pic','articles.create_t','users.username','cates.name')
        ->where(function($query) use ($request){
            if($request->input('keywords')){
                $query->where('articles.title','like','%'.$request->input('keywords').'%');
            }
        })->paginate($num);
       
        return view('article.index',['list'=>$list,'request'=>$request->all()]);
    }


   
    //编辑修改页面  admin/article/edit
    public function getEdit($id){

        $list=DB::table('articles')->where('id',$id)->first();
        return view('article.edit',['list'=>$list,'res'=>CateController::getCates()]);
    }
    
    //提交数据修改    admin/article/upadte
    public function postUpdate(Request $request){
        //dd($request->all());
        $data=$this->dealRequest($request);
        $res=DB::table('articles')->where('id',$request->input('id'))->update($data);
        if($res){
            return redirect('/admin/article/index')->with('success','修改成功!');
        }else{
            return back()->with('error','修改失败!');
        }
    }

    //删除文章 admin/article/del
    public function getDel($id){
        $res=DB::table('articles')->where('id',$id)->first();
        //dd($res);
        if(!empty($res->pic)){
             $path='.'.$res->pic;
            if(file_exists($path)){
                //echo $path;exit;
                unlink($path);
        }
        }
       
        $content=$res->content;
        preg_match_all('/src=[\'\"]?([^\'\"]*)[\'\"]?/', $content, $tem);
        // dd($tem);
        if(!empty($tem)){
            foreach ($tem[1] as $v) {
            $pathname='.'.$v;
            if(file_exists($pathname)){
                unlink($pathname);
                // echo 123;
                }
            }
        }
        $res=DB::table('articles')->where('id',$id)->delete();
        if($res){
            return redirect('/admin/article/index')->with('success','删除成功!');
        }else{
            return back()->with('error','删除失败!');
        }
    }
}
