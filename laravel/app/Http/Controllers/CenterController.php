<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Shopcar;
use App\Models\Addresses;
use DB;

use Hash;
use Config;
use App\Http\Requests;
use App\Http\Requests\ChangeIndexPassRequest;
use App\Http\Controllers\Controller;

class CenterController extends Controller
{

    /**
    *   加载个人中心
    *   /center/center
    */
    public function center(){
        $user=DB::table('users')->where('email',session('user'))->first();
        $id=$user->id;

        $orders=Orders::where('status',0)->where('user_id',$id)->get();  //status=0为已支付 待发货
        $fahuo=count($orders);

        $conment=Orders::where('status',1)->where('user_id',$id)->get();  //status=1已发货 待收货
        $shouhuo=count($conment);

        $conment2=Orders::where('status',2)->where('user_id',$id)->get();  //status=2已收货 待评价
        $pingjia=count($conment2);

        //收藏表
        $favorite = DB::table('favorites')->where('user_id','=',$id)->get();
        // dd($favorite);
        $cates=DB::table('cates')->get();
        $list=CateController::getCatesByPidArr($cates,0);//获取所有分类
        // 
        $all=DB::table('shopcars')
        ->join('orders','orders.order_num','=','shopcars.order_num')    //关联订单表
        ->join('goods','goods.id','=','shopcars.goods_id')              //关联商品表
        ->join('addresses','addresses.id','=','orders.address_id')      //关联地址表
        ->select('goods.title','goods.price','shopcars.goods_id','goods.pic','shopcars.color','shopcars.size','shopcars.number as num','shopcars.order_num','orders.created_at','orders.total','orders.status','addresses.sheng','addresses.shi','addresses.xian','addresses.jiedao','addresses.phone','addresses.name')
        ->where('shopcars.status','=',2)
        ->where('shopcars.user_id',$id)
        ->get();
        //获取所有地址
        $address=Addresses::where('user_id',$id)->get();

        //获取用户评价
        $comments = DB::table('contents')
            ->join('goods','goods.id','=','contents.goods_id')
            ->join('orders','orders.order_num','=','contents.order_num')
            ->select('contents.*','goods.title','goods.pic','goods.price','orders.total')
            ->where('contents.user_id',$id)
            ->get();
        // dd($comments);
        return view('center.center',['fahuo'=>$fahuo,'shouhuo'=>$shouhuo,'pingjia'=>$pingjia,'user'=>$user,'favorite'=>$favorite,'all'=>$all,'address'=>$address,'list'=>$list,'comments'=>$comments]);
    }

   
    /**
    *   账号安全
    *   /center/pcenter
    */
    public function pcenter(){
        $list=DB::table('users')->where('email',session('user'))->first();
        return view('center.pcenter',['list'=>$list]);
    }

    /**
    *   修改信息弹窗
    *   /center/edit
    */
    public function edit(){
        return view('center.info');
    }

    /**
    *   修改密码弹窗
    *   /center/modify
    */
    public function modify(){
        return view('center.modifypass');
    }



    /**
    *   修改密码处理数据
    *   /center/editpsw
    */
    public function editpsw(ChangeIndexPassRequest $request){
        //dd($request->all());
        
        $res=DB::table('users')->where('email',session('user'))->first();
        if(Hash::check($request->password,$res->password)){
            if($request->newpassword==$request->renewpassword){
                DB::table('users')->where('email',session('user'))->update(['password'=>Hash::make($request->newpassword)]);
                echo '<script>
                    alert("修改密码成功，请重新登录");
                    window.top.location.href="/logout";
                </script>';
            }
        }
    }

    /**
    *   个人信息页面
    *   /center/pmessage
    */
    public function pmessage(){
        $list=DB::table('users')->where('email',session('user'))->first();
        //dd($list);
        return view('center.pmessage',['list'=>$list]);
    }
    /**
    *  修改信息处理数据 
    *   /center/editMessage
    */
    public function editMessage(Request $request){
        //dd($request->all());
        $res=DB::table('users')->where('email',session('user'))->first();
        $sql=DB::table('users')->where('email',session('user'))->update(['username'=>$request->username,'birthday'=>$request->year.'-'.$request->month.'-'.$request->day,'sex'=>$request->sex]);
        if($sql){
            echo '<script>
                    alert("修改信息成功");
                    window.top.location.href="/pcenter";
                </script>';
        }
    }
    /**
    *   绑定授权页面
    *   /center/pbang
    */
    public function pbang(){
         $list=DB::table('users')->where('email',session('user'))->first();
        return view('center.pbang',['list'=>$list]);
    }

    /**
    *   小米服务页面
    *   /center/pfuwu
    */
    public function pfuwu(){
        $list=DB::table('users')->where('email',session('user'))->first();
        return view('center.pfuwu',['list'=>$list]);
    }
    

    /**
    *   设置头像弹框
    *   /center/editpic
    */
    public function editpic(){
        return view('center.userpic');
    }

    /**
    *   处理上传图片
    *   /center/doEditPic
    */
    public function doEditPic(Request $request){
        //echo 'aaa';
        //dd($request->all());
        $data=$request->except('_token');
        if($request->File('userpic')){
            $suffix=$request->file('userpic')->getClientOriginalExtension();
            //dd($suffix);
            $pathname=time('Ymd').rand(1111,9999).'.'.$suffix;
            $request->file('userpic')->move(Config::get('app.upload_user'),$pathname);
            $data['pic']=trim(Config::get('app.upload_user').$pathname,'.');
            $res=DB::table('users')->where('email',session('user'))->update(['userpic'=>$data['pic']]);
        } 

        echo '<script>
            alert("设置成功");
            window.top.location.href="/pmessage";
        </script>';   
    }


    /**
    *   添加收藏操作
    *   /center/addFavorite
    */
     public function addFavorite(Request $request){
        //检测是否登陆
        $id = $request->input('goodsid');
        if(!empty(session('user'))){
            $info = DB::table('goods')->where('id','=',$id)->first();
            // dd($info);
            $data =[];
            $data['title'] = $info->title;
            $data['user_id'] = session('id');
            $data['good_id'] = $info->id;
            $data['pic'] = $info->pic;
            $data['price'] = $info->price;
            //dd($data);
            //执行插入
            $res=DB::table('favorites')->insert($data);
            
        }else{
            return redirect('/login')->with('error','您还没有登陆 请登录');
        }
    }  

    /**
    *   删除收藏
    *   /center/deleteFavorite
    */
    public function deleteFavorite(Request $request){
        $id = $request->input('id');
        $res = DB::table('favorites')->where('id','=',$id)->delete();
        if($res){
            return 'true';
        }else{
            return 'false';
        }
    }


    /**
    *   删除评价
    *   /deleteComment/{id}
    */
    public function deleteComment(Request $request){
        $id = $request->input('id');
        $res = DB::table('contents')->where('id','=',$id)->delete();
        if($res){
            return 'true';
        }else{
            return 'false';
        }
    }

}