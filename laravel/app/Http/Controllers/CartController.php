<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use DB;
use App\Models\Shopcar;
use App\Models\Addresses;
use App\Http\Requests;
use App\Http\Requests\GoodsDetailsRequest;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    /**
    *   未登录添加session 登录直接执行添加数据库
    *   /cart/insert
    */
    public function insert(Request $request){
        $a = $request->all(); 
        $goods = session('cart');
        if(!empty(session('id'))){
            $arr = $a;
            $c['size'] = $arr['size'];
            $c['color'] = $arr['color'];
            $c['number'] = $arr['num'];
            $c['user_id'] = session('id');
            $c['goods_id']=$arr['id'];
            $c['status']=1;
            $c['goods_name']=$arr['name'];
            // dd($c);
            $res = DB::table('shopcars')->where('user_id','=',$c['user_id'])->where('goods_id','=',$c['goods_id'])->where('size','=',$c['size'])->where('color','=',$c['color'])->where('status',1)->first();
            
            if($res){
                $res->number=$res->number + $a['num'];
                DB::table('shopcars')->where('id','=',$res->id)->update(['number'=>$res->number]);
            }else{
            // dd($c);
             DB::table('shopcars')->insert($c);

         }
          
        }else{
            $data=$request->except('_token');
             // dd($data);
             if(!$this->check($data['id'])){
                 $request->session()->push('cart',$data);
             }else{
                $goods=session('cart');
                // dd(session('cart'));
                foreach ($goods as $k => $v) {
                    if($v['id']==$data['id'] && $v['color']==$data['color'] && $v['size']==$data['size']){
                        $goods[$k]['num']=$v['num']+$data['num'];
                        session()->forget('cart');
                        session(['cart'=>$goods]);
                    }else{
                        session()->push('cart',$data);
                    }
                }
               
             }
        }

       return view('cart.success',['data'=>$a]);
    }


    /**
    *   加入购物车时检测是否添加过
    *   /check
    */
    public function check($id){
        $goods=session('cart');
        if(empty($goods)){
            return false;
        }
        // dd($goods);
        foreach ($goods as $key => $value) {
            if($value['id']==$id){
                return true;
            }else{
                return false;
            }
        }
    }

    
    /**
    *   添加购物车成功后加载提示页面
    *   /cart/success
    */
    public function success(){
        return view('cart.success');
    }

    /**
    *   购物车主页
    *   /cart/index
    */
    public function index(Request $request){
        // $this->clear($request);
        // dd(session('cart'));
        if(session('user')){
            return redirect('/shopcar');
        }
        // dd(session('cart'));
        return view('cart.index');
    }
    /**
    *   测试清除购物车缓存
    *   /clear
    */
    public function clear(Request $request){
        $request->session()->flush();
    }
    /**
    *   删除购物车商品
    *   /cart/delete
    */
    public function delete(Request $request){
        $id = $request->input('id');
        $data=session('cart');
        foreach ($data as $k => $v) {
            if($v['id']==$id){
                unset($data[$k]);
            }
        }
        //将处理后的购物车数据重新放入购物车
        session(['cart'=>$data]);
    }

    /**
    *   更改购物车数量重新载入缓存
    *   /cart/num
    */
    public function num(Request $request){
        if(session('cart')){
            $data=session('cart');
            // dd($data);
            // echo $request->input('id').'---'.$request->input('flag');
            foreach ($data as $key => $value) {
                if($value['id']==$request->input('id')){
                    if($request->input('flag')=='plus'){
                        $data[$key]['num']++;
                        echo $value['num'];
                    }
                    if($request->input('flag')=='minus'){
                        $data[$key]['num']--;
                    }
                }
            }
            // dd($data);
            $request->session()->forget('cart');
            session(['cart'=>$data]);
        }else{
                $user=DB::table('users')->where('email',session('user'))->first();
                $id=$user->id;
                $shopcar=new Shopcar;
                $data=$shopcar->where('user_id',$id)->join('goods','goods_id','=','goods.id')->get();
                foreach ($data as $key => $value) {

                    if($value['goods_id']==$request->input('id')){
                        // echo $request->input('id');
                        if($request->input('flag')=='plus'){
                            // echo $value['number'];

                            $v=$value['number']+1;
                            // echo $value['number'];
                            // echo 123;
                        }
                        if($request->input('flag')=='minus'){
                            $v=$value['number']-1;
                            // echo $value['number'];
                            // echo 321;
                       }
                    }
            }
            echo $v;
            $shopcar->where('goods_id',$request->input('id'))->where('user_id',$id)->where('status',1)->update(['number'=>$v]);
        }
        
    }
    /**
    *   执行结算订单
    *   /cart/jiesuan
    */
    public function jiesuan(Request $request){
        // dd($request->all());
        // 如果没有登录跳转登录页面
        if(!session('user')){
            return Redirect::guest('/login');
        }
        //如果登录了写入购物车
        
        return redirect('/cart/order');
    }

    /**
    *   选择收货地址
    *   /cart/order
    */
    public function order(){
        $user=DB::table('users')->where('email',session('user'))->first();
        $id=$user->id;
        $shopcar=Shopcar::join('goods','shopcars.goods_id','=','goods.id')->select('shopcars.number','shopcars.color','shopcars.size','goods.price','goods.title','goods.id','shopcars.id as shopcars_id')->where('shopcars.status',1)->where('shopcars.user_id',$id)->get();
        // dd($shopcar);
        $address=Addresses::all();
        return view('/cart.order',['address'=>$address,'goods'=>$shopcar]);
    }

    /**
    *   登录添加购物车
    *   /shopcar
    */
    public function shopcar(Request $request){
        // dd(session('id'));
            if(!empty(session('cart'))){
                $goods=session('cart');
                // dd(session('cart'));
                // dd($goods);
                $user=DB::table('users')->where('email',session('user'))->first();
                $id=$user->id;
                
                foreach ($goods as $k => $v) {
                    $shopcar=new Shopcar;
                    $shopcar->goods_id=$goods[$k]['id'];
                    $shopcar->user_id=$id;
                    $shopcar->number=$goods[$k]['num'];
                    $shopcar->color=$goods[$k]['color'];
                    $shopcar->size=$goods[$k]['size'];
                    $res=$shopcar->save();
                }
                if($res){
                    session()->forget('cart');
                    // dd(session('user'));
                   
                    $data=$shopcar->where('user_id',$id)->get();
                    // dd($data);
                    return redirect('/shopcar');
                }
            }elseif(!empty(session('user'))){
                $shopcar=new Shopcar;
                $user=DB::table('users')->where('email',session('user'))->first();
                $id=$user->id;
                $data=$shopcar
                     ->where('user_id',$id)
                     ->join('goods','goods_id','=','goods.id')
                     ->select('goods.pic','goods.title','goods.price','shopcars.size','shopcars.color','shopcars.number','goods.id')
                     ->where('shopcars.status',1)->get();
                $sum=0;
                foreach ($data as $key => $value) {
                    $sum+=$value['number'];
                }
                // dd($data);
                return view('cart.loginindex',['data'=>$data,'count'=>$sum]);

            }else{

            }       
        
    }

    /**
    *   删除数据库中购物车数据
    *   /cart/del
    */
    public function del(Request $request){
        $key = $request->input('k');
        //dd($key);die;
        //echo $key;
        $data = DB::table('shopcars')->get();
        foreach($data as $k=>$v){
            if($k == $key){
                $id = $v->id;
                //dd($id);
            DB::table('shopcars')->where('id','=',$id)->delete();
            }
        }
   }

}
