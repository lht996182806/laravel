<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminOrderController extends Controller
{
    /*
    *   加载订单列表
    *   /admin/order/index
    **/
    public function getIndex(Request $request){
        //获取分类的数据
        $num = $request->input('num',10);
        $res = DB::table('orders')->where('orders.status',0)
        ->join('addresses','addresses.id','=','orders.address_id')
        ->join('users','users.id','=','orders.user_id')
        ->select('orders.id','orders.order_num','users.username as uid','addresses.sheng','addresses.shi','addresses.xian','addresses.jiedao','orders.total','orders.status','orders.created_at')
        ->where(function ($query) use ($request){
            if($request->input('keywords')){
                $query->where('orders.order_num','like','%'.$request->input('keywords').'%');
            }
        })
        ->paginate($num);
        return view('adminorder.index',['list'=>$res,'request'=>$request->all()]);
    }

    /**
    *   修改订单状态发货
    *   /admin/order/set
    */
    public function getSet($id){
        $res = $id;
        // dd($res);
        DB::table('orders')->where('id','=',$res)->update(['status'=>1]);
        return redirect('admin/order/index');

    }

    /**
    *   加载已发货订单列表
    *   /admin/order/fahuo
    */
     public function getFahuo(Request $request){
        //获取分类的数据
        $num = $request->input('num',10);
        $res = DB::table('orders')->where('orders.status',1)
        ->join('addresses','addresses.id','=','orders.address_id')
        ->join('users','users.id','=','orders.user_id')
        ->select('orders.id','orders.order_num','users.username as uid','addresses.sheng','addresses.shi','addresses.xian','addresses.jiedao','orders.total','orders.status','orders.created_at')
        ->where(function ($query) use ($request){
            if($request->input('keywords')){
                $query->where('orders.order_num','like','%'.$request->input('keywords').'%');
            }
        })
        ->paginate($num);
        // dd($res);
        return view('adminorder.fahuo',['list'=>$res,'request'=>$request->all()]);
    }

    /**
    *   加载已收货订单列表
    *   /admin/order/yishou
    */
     public function getYishou(Request $request){
        //获取分类的数据
        $num = $request->input('num',10);
        $res = DB::table('orders')->where('orders.status',2)
        ->join('addresses','addresses.id','=','orders.address_id')
        ->join('users','users.id','=','orders.user_id')
        ->select('orders.id','orders.order_num','users.username as uid','addresses.sheng','addresses.shi','addresses.xian','addresses.jiedao','orders.total','orders.status','orders.created_at')
        ->where(function ($query) use ($request){
            if($request->input('keywords')){
                $query->where('orders.order_num','like','%'.$request->input('keywords').'%');
            }
        })
        ->paginate($num);
        return view('adminorder.yishou',['list'=>$res,'request'=>$request->all()]);
    }


    /**
    *   加载订单详情显示列表
    *   /admin/order/xq
    */
    public function getXq($id){
        $list = DB::table('order_goods')->where('order_goods.order_id','=',$id)
        ->join('goods','id','=','order_goods.goods_id')
        ->select('goods.id','goods.pic','goods.title','goods.content','goods.price')->get();
        //dd($list);die;
        $res = DB::table('orders')->where('orders.id','=',$id)
        ->join('shopcars','shopcars.order_num','=','orders.order_num')
        ->select('shopcars.color','shopcars.size')->get();
        // dd($res);die;
        return view('adminorder.xq',['list'=>$list],['res'=>$res]);
    }
}
