<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//++++++++++++++++++++++++++++++++++++++++++++++++后台页面++++++++++++++++++++++++++++++++++++++++++++++
//后台登录页面                                                                                         +
Route::controller('/admin/login','LoginController');                                                  
//后台管理路由组                                                                                       +
Route::group(['middleware'=>'adminlogin'],function(){                                                 
    //后台主页                                                                                         +
    Route::get('/admin/index',function(){                                                             
        return view('login.info');  //                                                                 +
    });                                                                                                
    //后台用户管理页面                                                                                 +
    Route::controller('admin/user','UserController');                                                      
    //后台无线分类管理页面                                                                             +
    Route::controller('admin/cate','CateController');                                                 
    //后台文章管理页面                                                                                 +    
    Route::controller('admin/article','ArticleController');
    //后台商品管理页面                                                                                 +
    Route::controller('admin/good','GoodController');
    //后台订单管理页面                                                                                 +
    Route::controller('/admin/order','AdminOrderController');
});//                                                                                                  +
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++






//++++++++++++++++++++++++++++++++++++++++++++++++++前台登录注册++++++++++++++++++++++++++++++++++++++++++++

//前台登录页面
Route::get('/login','LoginController@login');
Route::post('/dologin','LoginController@doLogin');
//退出登录
Route::get('/logout','LoginController@logout');

//前台注册页面
Route::get('/register','LoginController@register');

//获取验证码
Route::get('/vcode','LoginController@vcode');

//获取注册数据
Route::post('/register','LoginController@doregister');

//测试邮件发送
Route::get('/send','LoginController@send');

//前台激活账户
Route::get('/jihuo','LoginController@jihuo');

//前台找回密码
Route::get('/forget','LoginController@forget');
Route::post('forget','LoginController@doforget');

//前台重置密码
Route::get('/reset','LoginController@reset');
Route::post('/reset','LoginController@doreset');




//++++++++++++++++++++++++++++++++++++++++++++++++++前台主页+++++++++++++++++++++++++++++++++++++++++++++++++
Route::get('/hindex','LoginController@index');

//前台商品详情
Route::get('/details/{id}','LoginController@details');


//商品列表页
Route::get('/lister','LoginController@lister');
//商品添加购物车
// Route::get('/buy/{id}','CartController@buy');

//处理添加数据
Route::post('/buy/cart','CartController@insert');
//加载添加成功
//
Route::post('/buy','CartController@insert');
//
Route::get('/success','CartController@success');
//购物车主页
Route::get('/cart','CartController@index');  
//删除购物车商品
Route::get('/cart/delete','CartController@delete');//session
// Route::get('/cart/del','CartController@del');//数据库中数据
//更改购物车数量存入
Route::get('/cart/num','CartController@num');
//结算购物车
Route::post('/cart/jiesuan','CartController@jiesuan');
Route::get('cart/jiesuan','CartController@index');
//选择地址
Route::get('/cart/order','CartController@order');

//登录存储购物车
Route::get('/shopcar','CartController@shopcar');

 




//+++++++++++++++++++++++++++++++++++++++++++++++++++++++个人中心+++++++++++++++++++++++++++++++++++++++++++

//创建个人中心路由组
Route::group(['middleware'=>'center'],function(){
    //进入个人中心
    Route::get('center','CenterController@center');
    //修改个人信息
    Route::get('pmessage','CenterController@pmessage');
    //(账户安全)个人信息
    Route::get('/pcenter','CenterController@pcenter');
    //修改密码弹窗
    Route::get('/modifypass','CenterController@modify');
    //绑定授权页面
    Route::get('/pbang','CenterController@pbang');
    //小米服务
    Route::get('/pfuwu','CenterController@pfuwu');
    //添加收藏商品
    Route::get('addFavorite','CenterController@addFavorite');
    //查询收藏商品
    Route::get('selectFavorite','CenterController@selectFavorite');
    //删除收藏商品
    Route::get('deleteFavorite','CenterController@deleteFavorite');
    //修改头像弹窗
    Route::get('/center/editpic','CenterController@editpic');
    //执行上传头像
    Route::post('/center/doEditPic','CenterController@doEditPic');
    //删除评价
    Route::get('deleteComment','CenterController@deleteComment');
    //修改个人信息弹窗
    Route::get('/center/edit','CenterController@edit');

    //修改密码弹窗
    Route::get('/center/modifypass','CenterController@modify');

    //修改订单确认收货
    Route::get('/order/status','OrderController@status');
    //评价表单
    Route::get('/content','OrderController@content');
    //写入数据
    Route::post('/content/insert','OrderController@pingjia');

    //执行修改密码
    Route::post('/editpsw','CenterController@editpsw');

    //执行修改个人信息
    Route::post('/editmessage','CenterController@editMessage');

    //订单页面
    Route::get('/order','CartController@order');

    Route::get('/cart/set','CartController@set');
    Route::get('/cart/del','CartController@del');


    //添加收货地址
    Route::get('/address','OrderController@add');

    //处理添加地址数据
    Route::post('/address/insert','OrderController@insert');

    Route::post('/order/pay','OrderController@pay');
    Route::get('/order/success','OrderController@success');

    Route::get('/caddress','OrderController@caddress');
    Route::post('/address/cinsert','OrderController@cinsert');
});

    //查看收藏商品详情(可与商品详情页共用)
    // Route::get('details/{id}','GoodController@details');
    //删除收藏商品
    // Route::get('deleteFavorite','CenterController@deleteFavorite');

