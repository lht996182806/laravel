<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Mail;
use Redirect;
use App\Http\Requests;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\IndexLoginRequest;
use App\Models\Goods;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLogin;
use Gregwar\Captcha\CaptchaBuilder;
class LoginController extends Controller
{
    /**
    *   后台登录页面
    *   /admin/login/login
    */
    public function getLogin(){
        return view('login.index');
    }

    /**
    *   登录验证
    *   /check
    */
    public function postCheck(AdminLogin $request){
        
        $user=DB::table('users')->where('username',$request->input('username'))->first();
        //dd($user);
        //echo Hash::make('123');exit;
        //dd(Hash::check($user->password,$request->input('password')));
        if($user){
            if(Hash::check($request->input('password'),$user->password)){
                session(['username'=>$user->username,'uid'=>$user->id]);
               
                return redirect('/admin/index')->with('success','登录成功');
            }else{
               
                return back()->with('error','账户名或密码错误,请重试');
            }
        }else{
               
                return redirect('admin/login/login')->with('error','账户名或密码错误,请重试');
            }
       
        
    }


    /**
    *   后台退出账户
    *   /admin/logout
    */
    public function getLogout(){
        session()->forget(['username','uid']);
        return redirect('admin/login/login');
    }


    /**
    *   前台登录
    *   /login
    */
    public function login(){
        return view('login.login');
    }
    /**
    *   退出登录
    *   /logout
    */
    public function logout(){
        session()->forget(['user']);
        return redirect('hindex');

    }
    /**
    *  判断登录数据 
    *   doLogin
    */
    public function doLogin(IndexLoginRequest $request){
        // dd($request->all());
        // dd(session());
        
        $res=DB::table('users')->where('email',$request->input('email'))->first();
        if($res){
            if(Hash::check($request->input('password'),$res->password)){
                session(['user'=>$res->email,'id'=>$res->id]);
                // dd(session());
                if(!empty(session('url'))){
                    // return Redirect::intended('/');
                    session()->forget(['url']);
                    return redirect('/shopcar');
                }
                return redirect('/hindex');
            }else{
                return back()->with('error','密码错误,请重试');
            }
        }else{
            return back()->with('error','账户名不存在');
        }
        
        
    }


    /**
    *   前台注册页面
    *   /register
    */
    public function register(){
        return view('login.register');
    }

    public function vcode(){
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        //Session::flash('milkcaptcha', $phrase);
        session(['vcode'=>$phrase]);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }

    /**
    *   验证注册信息
    *   doregister
    */
    public function doregister(RegisterRequest $request){
        //echo session('vcode');
        //dd($request->all());
        if(session('vcode')!=$request->input('vcode')){
              return back()->with('error','验证码不一致');
        }
        
        //处理数据
        $data=$request->only(['email','password']);
        $data['password']=Hash::make($data['password']);
        $data['token']=str_random(50);
        $data['status']=1;
        // dd($data);
        if($id=DB::table('users')->insertGetId($data)){
            //注册成功 发送邮件执行激活操作
            $this->sendMail($id,$data['token'],$data['email']);
        }else{
            return back()->with('error','注册失败联系管理员');
        }

    }

    /**
    *   发送激活邮件
    *   /send
    */
    private function sendMail($id,$token,$email){
        Mail::send('email.jihuo',['id'=>$id,'token'=>$token],function($message) use($email){
            $message->to($email)->subject('提醒邮件');


        });
    }

    /**
    *   激活账户
    *   /jihuo
    */
    public function jihuo(Request $request){
        //修改status
        $id=$request->input('id');
        $data=DB::table('users')->where('id',$id)->first();
        if($data->token==$request->input('token')){
            if(DB::table('users')->where('id',$id)->update(['status'=>2])){
                // echo '激活成功';
                return redirect('/login')->with('success','激活成功,请登录您的账户');
            }else{
                echo '激活失败';
                // return back();
            }
        }else{
            return redirect('/')->with('error','非法请求');
        }
    }

    /**
    *   加载找回密码表单
    *   /forget
    */
    public function forget(){
        return view('login.forget');
    }

    /**
    *   处理找回密码数据
    *   /doForget
    */
    public function doForget(Request $request){
        //dd($request->all());
        $user=DB::table('users')->where('email',$request->input('email'))->first();
        if(!count($user)){
            return redirect('/')->with('邮箱不合法');
        }
        //$this->sendzhaoMail($user->id,$user->email,$user->token);
        $str=explode('@',$request->input('email'));
        //dd($str);
        echo '邮件已发送...<a href="http://mail.'.$str[1].'">点击登录邮箱</a>';
    }
    /**
    *   发送找回密码邮件
    *   /sendzhaoMail
    */
    public function sendzhaoMail($id,$email,$token){
         Mail::send('email.zhao',['id'=>$id,'token'=>$token],function($message) use($email){
            $message->to($email)->subject('提醒邮件');


        });
    }

    /**
    *   填写重置密码的用户表单
    *   reset
    */
    public function reset(Request $request){
        $user=DB::table('users')->where('id',$request->input('id'))->first();
        return view('login.reset',['user'=>$user]);
    }


    /**
    *   操作处理重置数据
    *   doReset
    */
    public function doReset(Request $request){
        
        $user=DB::table('users')->where('id',$request->input('id'))->first();

        if($user->token==$request->input('token')){
            
            $data['password']=Hash::make($request->input('password'));
            if(DB::table('users')->where('id',$user->id)->update($data)){
                
                return redirect('/login')->with('success','重置密码成功,请重新登录');
            }else{
                echo '重置失败';
                
            }
        }else{
            return redirect('/')->with('error','非法请求');
        }
    }


    
    /**
    *   发送邮件
    *   /sendMessage
    */
    public function sendMessage(){
        $curl=new \Curl\Curl();
        $code=rand(10000,99999);
        $to=18500269930;
        $url='http://www.xiaohigh.com/sendMessage/index.php?to={$to}&code={$code}&web=小米商城&class=117';
        $curl->get($url);
        $str=$curl->response;
        $res=json_decode($str,true);

        if($res['rep'][$respCode]=='000000'){
            session(['mcode'=>$code]);
        }else{
            
        }
    }

    /**
    *   前台首页
    *   /hindex
    */
    public function index(){
        $cates=DB::table('cates')->where('status',1)->get();
        $list=CateController::getCatesByPidArr($cates,0);
        $categoods=DB::table('goods')
        ->join('cates','cates.id','=','goods.cate_id')
        ->select('goods.*','cates.name')
        ->get();
        // dd($categoods);
        foreach($list as $k=>$v){
            foreach($categoods as $m=>$n){
                if($v->id==$n->cate_id){
                     // dd($n);
                    $v->sub[$n->id]=$n->title;
                    // $v->gid=$n->id;
                    $v->pic[$n->id]=$n->pic;
                
                
                }
               
            }
            
            
        }
        $goods=Goods::where('id','>',1)->where('cate_id',21)->get();
        $goods1=Goods::where('id','>',8)->get();
        $goods2=Goods::where('id','>',5)->get();
        $goods3=Goods::where('id','>',7)->get();
        $goods4=Goods::where('id','>',4)->get();
        $goods5=Goods::where('id','>',6)->get();
        $goodsname=Goods::where('title','like','%手机%')->get();
        $user=DB::table('users')->where('email',session('user'))->first();
        // dd($list);
        return view('home.index',['list'=>$list,'user'=>$user,'goods'=>$goods,'goods1'=>$goods1,'goods2'=>$goods2,'goods3'=>$goods3,'goods4'=>$goods4,'goods5'=>$goods5,'goodsname'=>$goodsname]);
    }

    /**
    *   前台商品
    *   /details/{id}
    */
    public function details($id){
        // dd(session('user'));
        $res=Goods::find($id);
        // dd($res);
        $res['size']=explode(',',$res['size']);
        $res['color']=explode(',',$res['color']);
        
        $comments = DB::table('contents')
            ->join('users','contents.user_id','=','users.id')
            ->join('goods','contents.goods_id','=','goods.id')
            ->select('contents.*','users.username','goods.title','users.userpic')
            ->where('goods.id',$id)
            ->get(); 
        
        return view('home.detail',['res'=>$res,'comments'=>$comments]);
    }

    /**
    *   前台商品列表
    *   /lister
    */
    public function lister(Request $request){
        $goods=Goods::where(function($query) use($request){
            if($request->input('keywords')){
                $query->where('title','like','%'.$request->input('keywords').'%');
            }
        })->where('status',1)->paginate(20);
        $data=$request->all();

        $user=DB::table('users')->where('email',session('user'))->first();
        return view('home.list',['user'=>$user,'goods'=>$goods,'request'=>$data]);
    }

}
