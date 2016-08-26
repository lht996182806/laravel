<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\Models\Addresses;
use App\Models\Orders;
use App\Models\Shopcar;
use App\Models\Contents;

use App\Models\OrderGoods;
use App\Http\Requests;
use App\Http\Requests\OrderRequest;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
    *   添加地址操作   
    *   /address/add
    */
    public function add(){
        return view('order.address');
    }


    /**
    *   处理地址添加数据
    *   /insert
    */
    public function insert(Request $request){
        // dd($request->all());
        $address=new Addresses;
        $id=DB::table('users')->where('email',session('user'))->first();
        // dd($id->id);
        $address->sheng=$request->input('sheng');
        $address->shi=$request->input('shi');
        $address->xian=$request->input('xian');
        $address->jiedao=$request->input('jiedao');
        $address->phone=$request->input('phone');
        $address->name=$request->input('name');
        $address->user_id=$id->id;

        if($address->save()){
            // return redirect('cart/order');
            echo '<script>window.top.location.href="/cart/order"</script>';
        }
    }

    /**
    *   加载个人中心添加地址表单
    *   /caddress
    */
    public function caddress(){
        return view('order.caddress');
    }
    public function cinsert(Request $request){
        // dd($request->all());
        $address=new Addresses;
        $id=DB::table('users')->where('email',session('user'))->first();
        // dd($id->id);
        $address->sheng=$request->input('sheng');
        $address->shi=$request->input('shi');
        $address->xian=$request->input('xian');
        $address->jiedao=$request->input('jiedao');
        $address->phone=$request->input('phone');
        $address->name=$request->input('name');
        $address->user_id=$id->id;

        if($address->save()){
            // return redirect('/center');
            echo '<script>window.top.location.href="/center"</script>';
        }
    }

    /**
    *   支付订单
    *   /order/pay
    */
    public function pay(OrderRequest $request){
        // dd($request->all());
        $user=DB::table('users')->where('email',session('user'))->first();
        $id=$user->id;
        // $data=$request->except('_token');
        $orders=new Orders;
        $num=$this->getNumber();
        $orders->order_num=$num;
        $orders->user_id=$id;
        $orders->address_id=$request->input('address_id');
        $orders->total=$request->input('total');
        $orders->status=0;  //0 已支付
        if($orders->save()){
            $goods_id=$request->input('goods_id');
            // dd($str);
            
            foreach ($goods_id as $k => $v) {
                $order_goods=new OrderGoods;
                $order_goods->order_id=$orders->id;
                $order_goods->goods_id=$v;
                $order_goods->num=$request->input($v);
                $order_goods->save();
                // var_dump($request->input($v));
                $shopcar=new Shopcar;
                $gs=$shopcar->where('user_id',$id)->where('status',1)->first();
                $gs->status=2;// 2为已支付
                $gs->order_num=$num;  
                $gs->save();
            }

            if($order_goods){
               
                return redirect('/order/success')->with('success','支付成功')->with('total',$orders->total);
            }else{
                return  redirect('/order/success')->with('error','支付失败,稍后重试');

            }
        }else{
            return back();
        }
        

    }

    /**
    *   修改商品数量
    *   /getNumber
    */
    public function getNumber(){
        return date('YmdHis',time()).rand(100000,999999);

    }
    /**
    *   加载添加成功表单
    *   /success
    */
    public function success(){
        return view('order.success');
    }

    /**
    *   修改订单状态
    *   /order/status
    */
    public function status(Request $request){
        $num=$request->input('number');
        echo $num;
        $orders=new Orders;
        $orders->where('order_num',$num)->update(['status'=>2]);
        

    }

    /**
    *  评价表单 
    *  /content
    */
    public function content(Request $request){
        $id=$request->input('goodsid');
        $num=$request->input('num');
        return view('order.content',['id'=>$id,'num'=>$num]);
    }

    /**
    *   处理评价信息 写入数据库
    *   /content/insert
    */
    public function pingjia(Request $request){
        // dd($request->all());
        $user=DB::table('users')->where('email',session('user'))->first();
        $id=$user->id;
        $data=$request->except('_token');
        
        $data['user_id']=$id;
        // dd($data);
        $contents=new Contents;
        $contents->user_id=$data['user_id'];
        $contents->goods_id=$data['goods_id'];
        $contents->order_num=$data['order_num'];
        $contents->contents=$data['contents'];
        $res=$contents->save();
        if($res){
            $num=$request->input('order_num');
            // dd($num);
            $d=DB::table('orders')->where('order_num',$num)->update(['status'=>3]);
            if($d){
              
              echo '<script>window.top.location.href="http://www.lht.com/center"</script>';

            }
        }else{
            return back();
        }
    }
}
