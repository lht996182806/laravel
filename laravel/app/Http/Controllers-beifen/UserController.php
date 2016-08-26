<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    //加载用户列表主页
    public function getIndex(Request $request){
        $num=$request->input('num',10);
        $list=DB::table('users')->where(function($query) use($request){ //use在闭包函数中使用函数外变量
            if($request->input('keywords')){
                $query->where('username','like','%'.$request->input('keywords').'%');
            }
        })->orderby('id','desc')->paginate($num);
        $data=$request->all();
        //$data['num']=$request->$num;
        return view('user.index',['list'=>$list,'request'=>$data]);
    }

    //加载添加用户表单
    public function getAdd(){
        return view('user.add');
    }

    //执行添加用户数据操作
    public function postInsert(Request $request){
        $data=$request->except('_token','repassword');
        $data['password']=Hash::make($request->input('password'));
        $data['token']=str_random(50);
        $data['status']=1;
        //dd($data);
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
            'repassword'=>'required|same:password',
            'email'=>'required'
        ],[
            'username.required'=>'用户名不能为空',
            'password.required'=>'密码不能为空',
            'repassword.required'=>'重复密码不能为空',
            'repassword.same'=>'两次密码必须一致',
            'email.required'=>'邮箱不能为空',

        ]);
        $res=DB::table('users')->insert($data);
        if($res){
            return redirect('/admin/user/index')->with('success','添加成功!');
        }else{
            return back()->with('error','添加失败!');
        }
    }

    //删除用户操作
    public function getDel($id){
        $res=DB::table('users')->where('id',$id)->delete();
        if($res){
            return redirect('/admin/user/index')->with('success','删除成功!');
        }else{
            return back()->with('error','删除失败!');
        }
    }

    //修改用户信息操作
    public function getEdit($id){
        $res=DB::table('users')->where('id',$id)->first();
        //dd($res);
        return view('user.edit',['list'=>$res]);
    }


    //执行修改数据
    public function postUpdate(Request $request){
        //dd($request->all());
        $data=$request->only('username','email');
        //echo $request->input('id');exit;
        $res=DB::table('users')->where('id',$request->input('id'))->update($data);
        if($res){
            return redirect('/admin/user/index')->with('success','修改成功!');
        }else{
            return back()->with('error','修改失败!');
        }
    }

}
