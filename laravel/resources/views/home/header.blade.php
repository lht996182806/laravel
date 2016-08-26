<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a rel="nofollow" href="//www.mi.com/index.html" >小米网</a><span class="sep">|</span><a rel="nofollow" href="http://www.miui.com/" target="_blank">MIUI</a><span class="sep">|</span><a rel="nofollow" href="http://www.miliao.com/" target="_blank">米聊</a><span class="sep">|</span><a rel="nofollow" href="http://game.xiaomi.com/" target="_blank">游戏</a><span class="sep">|</span><a rel="nofollow" href="http://www.duokan.com/" target="_blank">多看阅读</a><span class="sep">|</span><a rel="nofollow" href="https://i.mi.com/" target="_blank">云服务</a><span class="sep">|</span><a rel="nofollow" href="//www.mi.com/c/appdownload/" target="_blank">小米网移动版</a><span class="sep">|</span><a rel="nofollow" href="//static.mi.com/feedback/" target="_blank">问题反馈</a><span class="sep">|</span><a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal">Select Region</a>
        </div>
        <div class="topbar-cart" id="J_miniCartTrigger">
            <a rel="nofollow" class="cart-mini" id="J_miniCartBtn" href="//static.mi.com/cart/"><i class="iconfont">&#xe60c;</i>购物车<span class="cart-mini-num J_cartNum"></span></a>
            <div class="cart-menu" id="J_miniCartMenu">
                <div class="loading"><div class="loader"></div></div>
            </div>
        </div>
        <div class="topbar-info" id="J_userInfo">
            @if(session('user'))
                <div id="J_userInfo" class="topbar-info">
                    <span class="user">
                        <a target="_blank" href="//my.mi.com/portal" class="user-name" rel="nofollow" data-stat-id="de9e238ee20c2ea1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-de9e238ee20c2ea1', '//my.mi.com/portal', 'pcpid']);">
                        <span class="name" id="usermenu">{{session('user')}}</span>
                        <i class="iconfont"></i>
                        </a>
                            <ul class="user-menu" style="display: none;" id="menu">
                            <li><a target="_blank" href="//my.mi.com/portal" rel="nofollow" data-stat-id="e0b9e1d1fa8052a2" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-e0b9e1d1fa8052a2', '//my.mi.com/portal', 'pcpid']);">个人中心</a>
                            </li>
                            <li><a target="_blank" href="//order.mi.com/user/comment" rel="nofollow" data-stat-id="6d05445058873c2c" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-6d05445058873c2c', '//order.mi.com/user/comment', 'pcpid']);">评价晒单</a>
                            </li>
                            <li><a target="_blank" href="//order.mi.com/user/favorite" rel="nofollow" data-stat-id="32e2967e9a749d3d" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-32e2967e9a749d3d', '//order.mi.com/user/favorite', 'pcpid']);">我的喜欢</a>
                            </li>
                            <li><a target="_blank" href="http://account.xiaomi.com/" rel="nofollow" data-stat-id="6c2aba14bc7f649a" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-6c2aba14bc7f649a', 'http://account.xiaomi.com/', 'pcpid']);">小米账户</a>
                            </li>
                            <li><a href="//order.mi.com/site/logout" rel="nofollow" data-stat-id="770a31519c713b11" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-770a31519c713b11', '//order.mi.com/site/logout', 'pcpid']);">退出登录</a>
                            </li>
                            </ul>
                    </span>
                    <span class="sep">|</span>
                        <a target="_blank" href="//static.mi.com/order/" class="link link-order" rel="nofollow" data-stat-id="a9e9205e73f0742c" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-a9e9205e73f0742c', '//static.mi.com/order/', 'pcpid']);">我的订单</a>
                </div> 
            @else
                <a  rel="nofollow" class="link" href="{{url('/login')}}" data-needlogin="true">登录</a><span class="sep">|</span><a  rel="nofollow" class="link" href="{{url('/register')}}" >注册</a>  
            @endif
                  
        </div>
    </div>
</div>