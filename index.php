<!DOCTYPE html>
<html lang="zh-CN">
<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>iOS UDID在线获取工具</title>

    <meta name = "description" content="iOS UDID 在线获取 工具"/>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="grid.css" rel="stylesheet">
</head>
<body>

<!-- 微信 -->
<div class="container-fluid" id="wx-popup" style="display:none;background-color: #515556;">
    <div class="row" style="height:100px">
        <div class="col-xs-2">
        </div>
        <div class="col-xs-8" style="padding: 23px 0px 0px;">
            <div style="text-align: left;color:#E6E6E6" class="pull-right">
                <p>点击右上角菜单</p>

                <p>选择在Safari中打开</p>
            </div>
        </div>
        <div class="col-xs-2 " style="text-align: right;padding: 10px 12px 0px 0px">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJIAAACfCAYAAAFl4rDGAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MDZFNENGRkRERDAyMTFFNUIxRDRCQzQxM0Q5MEZBREQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MDZFNENGRkVERDAyMTFFNUIxRDRCQzQxM0Q5MEZBREQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDowNkU0Q0ZGQkREMDIxMUU1QjFENEJDNDEzRDkwRkFERCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDowNkU0Q0ZGQ0REMDIxMUU1QjFENEJDNDEzRDkwRkFERCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhaNVnYAAAfsSURBVHja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"
                 width="44" height="48">
        </div>
    </div>
</div>

<div class="container">
    <div class="row udid-bg" >
        <div class="col-sm-10 col-xs-10" > <h4>iOS UDID查询工具</h4></div>
        <div class="col-sm-2 col-xs-2"><h5 id="second-title">by lify</h5></div>
    </div>
    <div class="row">
        <div class="col-xs-2 col-sm-2 udid-bg udid-bg-not-right">
            <span class="lead">UDID:</span>
        </div>
        <div class="col-xs-10 col-sm-10 udid-bg udid-bg-not-left">
           <span id="udid-value" class="lead breadcrumb autobreakline" style="display: block;">

           </span>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 udid-bg">
            <a href="http://udid.onlywish.me/pubgetudid.php"
               class="btn btn-lg center-block btn-block btn-primary">
                查询UDID
            </a>

        </div>
    </div>

    <div class="row visible-xs udid-bg">
    </div>
</div>


<!-显示二维码->

<div class="modal fade" id="qrcode-modal"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header clearfix">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">扫码打开本地址</h4>
            </div>

            <div class="modal-body clearfix" style="text-align: center;">

                <img alt="Scan me!"
                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARgAAAEYCAIAAAAI7H7bAAAFRklEQVR4nO3dwY4TMRAA0Q3i/395OXOxUFMxPeG9K9pkElLyoWX79f39/QX8nR//+gHgEwgJAkKCgJAgICQICAkCQoKAkCDw8/Bvr9fr2nPkDoPm2eeaTa4P75WPwmfvteQJ9zt/G1YkCAgJAkKCgJAgICQICAkCQoKAkCBwGsgeLNlXmw/48jHuwc2Hz/8qH+M+/RdlRYKAkCAgJAgICQJCgoCQICAkCAgJAsOB7MGSOWNu/5bbmZs7ZGce8YuyIkFASBAQEgSEBAEhQUBIEBASBIQEgX4gu9/NbbCP3nJ7sGRWu4cVCQJCgoCQICAkCAgJAkKCgJAgICQI/I8D2f2WXN56c+fv01mRICAkCAgJAkKCgJAgICQICAkCQoJAP5DdP4+bHdK7/69mlpycfLD/F/VlRYKEkCAgJAgICQJCgoCQICAkCAgJAsOB7M15HH9o//D34Om/KCsSBIQEASFBQEgQEBIEhAQBIUFASBA4DWQfsTNxuUcfPnww+1wf/IuyIkFASBAQEgSEBAEhQUBIEBASBIQEgf7I4puzv3x3583tokuGpAf5ltuZJYcqnx/DigQBIUFASBAQEgSEBAEhQUBIEBASBE4D2dlIa/9YMB8mPvpC1fwj7/963zFNtiJBQEgQEBIEhAQBIUFASBAQEgSEBIHhkcU3p3izF8wf4+Z4ev+Ed8mVr0v+v76sSJAQEgSEBAEhQUBIEBASBIQEASFB4OqRxfsPH15ySO/Mkm9+Zv//8pkVCQJCgoCQICAkCAgJAkKCgJAgICQIvJZcBrpkfnpzBJlbsq92ydfrDll4HiFBQEgQEBIEhAQBIUFASBAQEgSGA9n9g8tHP/zMko26MzcPH37HacZWJAgICQJCgoCQICAkCAgJAkKCgJAgcBrI9m+2fgvn7AVzS05OvnmM8NNZkSAgJAgICQJCgoCQICAkCAgJAkKCQH+H7MH+Ad+SqetM/vXO/mr/TcHveEErEgSEBAEhQUBIEBASBIQEASFBQEgQ6O+QvbmFc4klI8iDT92aevMnaiALbyckCAgJAkKCgJAgICQICAkCQoJAP5A9uLlpccnDHyz5XPwhA1l4OyFBQEgQEBIEhAQBIUFASBAQEgSGRxbf3N158wX33zy75GjfmSXf4TtYkSAgJAgICQJCgoCQICAkCAgJAkKCQH+H7P6h2+EJl+w/vbl59tFbifPHcGQx/EtCgoCQICAkCAgJAkKCgJAgICQI9APZg0ffmjqbhO655HRgyYR3ZvZFjb9DKxIEhAQBIUFASBAQEgSEBAEhQUBIEDjdIfupbk4M999ym+/GXTIXvnz6tBUJAkKCgJAgICQICAkCQoKAkCAgJAicBrJLtjrOLBk0L9neu38GvWT4O2ZFgoCQICAkCAgJAkKCgJAgICQICAkCwyOLlwzC8jljPvu7eeXrkiecvdfMzct27ZCFtxMSBIQEASFBQEgQEBIEhAQBIUGgv0P20VO82V8tGU/nbl6bm7s5q/2yIkFCSBAQEgSEBAEhQUBIEBASBIQEgX4g+6kefbbz5e2iA/m8+/LnsiJBQEgQEBIEhAQBIUFASBAQEgSEBAED2d/kc8abk9AlL3iw5IThd2x2tiJBQEgQEBIEhAQBIUFASBAQEgSEBIF+ILv//N6bU9fczZ2kj94UfJkVCQJCgoCQICAkCAgJAkKCgJAgICQIDAeynzqP239R7M3ze2ePseQ7vPwYViQICAkCQoKAkCAgJAgICQJCgoCQIPBaMmeER7MiQUBIEBASBIQEASFBQEgQEBIEhAQBIUHgF9wvBlqNE7opAAAAAElFTkSuQmCC"
                     class="center-block">

                <p style="margin-top: 2em">仅iOS设备可以获取UDID。您也可以将URL通过QQ、微信发送到手机端打开。</p>

            </div>

        </div>
    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>


<script type="text/javascript">

</script>


<script language="javascript">

    //判断访问终端
    var browser={
        versions:function(){
            var u = navigator.userAgent, app = navigator.appVersion;
            return {
                trident: u.indexOf('Trident') > -1, //IE内核
                presto: u.indexOf('Presto') > -1, //opera内核
                webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,//火狐内核
                mobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                iPhone: u.indexOf('iPhone') > -1 , //是否为iPhone或者QQHD浏览器
                iPad: u.indexOf('iPad') > -1, //是否iPad
                webApp: u.indexOf('Safari') == -1, //是否web应该程序，没有头部与底部
                weixin: u.indexOf('MicroMessenger') > -1, //是否微信 （2015-01-22新增）
                qq: u.indexOf('QQ') > -1 //是否QQ
            };
        }(),
        language:(navigator.browserLanguage || navigator.language).toLowerCase()
    }

    function GetQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)","i");
        var r = window.location.search.substr(1).match(reg);
        if (r!=null) return (r[2]); return null;
    }

    $(function () {

//        $('#qrcode-modal').modal('hidden');

        var udid = GetQueryString('UDID');
        if(udid == null)
            udid = '还未获取UDID,点示查询UDID获取。';
        $('#udid-value')[0].innerText = udid;
        function is_weixn() {
            var ua = navigator.userAgent.toLowerCase();
            if (ua.match(/MicroMessenger/i) == "micromessenger") {
                return true;
            } else {
                return false;
            }
        }


        $('a').click(function (e) {
//            var platform = "";
            var isiOS = browser.versions.ios;

            var isTencent = browser.versions.weixin || browser.versions.qq;

            if (isiOS) {
                if (isTencent) {
                    var html = $('#wx-popup');
                    html.prependTo('body').slideDown('slow');
                } else {
                    location.href = $(this).attr('href');
                }
            } else {  //pc or an
                $('#qrcode-modal').modal('show');
            }

            return false;
        });
    });
</script>
</body>
</html>
