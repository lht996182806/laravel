<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
    #success{
        margin: 0 auto;
        margin-top:100px;
        background:#FF6700;
        float:left;
        margin-left:400px;
        /*margin-top:500px;*/
        width:500px;
        height:340px;
        border-radius:8px;
    }
    #title{
        margin-left:180px;
        margin-top:100px;
        font-size:30px;
        color:#DFDFDF;
    }

    #content{
        margin-left:280px;
        margin-top:140px;
        font-size:20px;
        color:#DFDFDF;

    }
    #re a{
        margin-left:340px;
        margin-top:10px;
        font-size:16px;
        color:#DFDFDF;
        text-decoration:none;
    }
    </style>
</head>
<body> 
    
        <div id="success">
        
            <div id="title">
                
                <b>@if(session('success'))
                    {{session('success')}}
                   @elseif(session('error'))
                    {{session('error')}}
                   @endif
                </b>

            </div>
            <div id="content">@if(session('success'))
                                --支付总金额: {{session('total')}}元
                              @endif
            </div>
            <div id="re"><a href="/center">返回个人中心 >></a></div>    
        
        </div>
    
    
</body>
</html>
