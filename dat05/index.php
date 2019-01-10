<?php $e='00b83a00c6991b7ceb474296eda58950';$f='404';$g=@$_GET["lpkey"];date_default_timezone_set('Asia/Shanghai');$h=substr($g,0,2).substr($g,4,2).substr($g,8,2).substr($g,12,2).substr($g,16,2);$i=substr($g,2,2).substr($g,6,2).substr($g,10,2).substr($g,14,2);$j=md5($e.$_SERVER['HTTP_ACCEPT_LANGUAGE'].$_SERVER["HTTP_USER_AGENT"].$h);$j=substr($j,2,2).substr($j,7,2).substr($j,12,2).substr($j,24,2);if(time()>$h||$j!==$i||!isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){if($f=='404')Header("HTTP/1.1 404 Not Found");else{header('HTTP/1.1 301 Moved Permanently');header('Location: '.$k);}die();}?>
<!DOCTYPE html><html lang="en"><head>
  <base href="">

  <base href="">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">   
	
	<script>

        (function(){

            let domain = 'trk.reactorphone.com';
            let protocol = 'https';

            window.afilter = function(event,detail,token){

                if(Number(event) <= 0) return;

                var xhr = new XMLHttpRequest();
                xhr.open('POST', protocol + '://' + domain +'/p/events', true);
                xhr.withCredentials = true;
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send("et=" + event + "&v=" + detail + "&t=" + token);

            };

            window.atgo = function(url){
                window.location.replace(protocol + '://' + domain + '/' + url);
            };

        }());

         "use strict";!function(){var e={clicks:{clickCount:0,clickWrong:0,clickDetails:[]}};window.AtRequest=function(e="GET",t,n=null){var o=new XMLHttpRequest;o.open(e,t,!0),o.withCredentials=!0,n&&o.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),o.send(n)},window.AtClickCheck=function(t=["p","button","a"],n=3,o=0){document.addEventListener("DOMContentLoaded",function(){document.addEventListener("mouseup",function(c){e.clicks.clickCount++,e.clicks.clickDetails.push({timestamp:Date.now(),node:c.target.nodeName,x:c.pageX,y:c.pageY}),o>0&&console.log(c.target.nodeName),t.indexOf(c.target.nodeName.toLowerCase())<0&&e.clicks.clickWrong++,e.clicks.clickWrong>n&&(o>0&&console.log("Bot"),AtRequest("GET","https://trk.reactorphone.com/d/wrong"))})})}}();

        AtClickCheck(['a'],2,1);

    </script>

    <style>
      iframe {
        visibility: hidden;
        position: absolute;
        left: 0; top: 0;
        height:0; width:0;
        border: none;
      }
    </style>
	
	<meta content="width=device-width, initial-scale=1" name="viewport">

	<title id="title">Looking for a hot date tonight in your area?</title>

	<link href="css.css" rel="stylesheet" type="text/css">

	<link href="bootstrap.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link href="animate.css" rel="stylesheet">
	<link href="vegas.css" rel="stylesheet">
	<link href="https://assets.drizzlingrain.com/d17/click.php.html" rel="shortcut icon" type="image/x-icon">
	<link href="https://assets.drizzlingrain.com/d17/click.php.html" rel="icon" type="image/x-icon">
<!--
	<script src="jquery_002.js"></script>
-->	
	<script src="jquery.min.js"></script>

	<script src="vegas.js"></script>
    <script src="js/zepto.min.js"></script>
	<script src="js/base64.min.js"></script>

</head>
<body id="home" onload="translate()" class="vegas-container" style=""><div class="vegas-timer"><div class="vegas-timer-progress" style="transition: 0ms; -webkit-transition: 0ms;"></div></div><div class="vegas-timer vegas-timer-running"><div class="vegas-timer-progress" style="transition: 2400ms; -webkit-transition: 2400ms;"></div></div><div class="vegas-timer vegas-timer-running"><div class="vegas-timer-progress" style="transition-duration: 2400ms;"></div></div><div class="vegas-timer vegas-timer-running"><div class="vegas-timer-progress" style="transition-duration: 2400ms;"></div></div><div class="vegas-timer vegas-timer-running"><div class="vegas-timer-progress" style="transition-duration: 2400ms;"></div></div><div class="vegas-slide vegas-transition-fade vegas-transition-fade-in" style="transition: all 0ms; -webkit-transition: all 0ms;"><div class="vegas-slide-inner" style="background-image: url(1.jpg); background-color: rgb(238, 238, 238); background-size: cover; background-position: 50% 50%;"></div></div><div class="vegas-slide vegas-transition-fade vegas-transition-fade-in" style="transition: all 0ms; -webkit-transition: all 0ms;"><div class="vegas-slide-inner" style="background-image: url(3.jpg); background-color: rgb(238, 238, 238); background-size: cover; background-position: 50% 50%;"></div></div><div class="vegas-slide vegas-transition-fade"><div class="vegas-slide-inner" style="background-image: url(https://assets.drizzlingrain.com/d17/4.jpg); background-color: rgb(238, 238, 238); background-size: cover; background-position: 50% 50%;"></div></div><div class="vegas-timer vegas-timer-running"><div class="vegas-timer-progress" style="transition-duration: 2400ms;"></div></div>
<div class="container">
	<div class="row nav-wrapper">
		<div class="col-md-12 col-sm-12 col-xs-12 text-center">
			<a href="javascript:void(0)"><img alt="Tinder" src="logo-white2.png"></a>
		</div>
	</div>
	<div class="row hero-content text-center">
		<div class="col-md-6 col-md-offset-3 wowload fadeInRight">
			<div class="spacer"></div>
			<div class="content">
				<div class="clock">01:25</div>
				<h1 id="text01">Looking for a hot date tonight in your area?</h1>
			</div>
			<div class="step">
				<p id="text02">Are you older than 18 years?</p>
				<a class="learn-btn animated fadeInUp step_button_1 next" href="javascript:void(0)"><span id="text03">No</span></a>
				<a class="use-btn animated fadeInUp step_button_2 next" href="javascript:void(0)"><span id="text04">Yes</span></a>
			</div>
			<div class="step" style="display:none;">
				<p id="text05">Many of these women are desperate single moms and 
lonely girls looking for a man. They could be your neighbors or 
someone you know. Do you agree to keep the identity of these women a 
secret?</p>
				<a class="use-btn animated fadeInUp step_button_2 next" href="javascript:void(0)"><span id="text06">Yes</span></a>
				<a class="learn-btn animated fadeInUp step_button_1 next" href="javascript:void(0)"><span id="text07">No</span></a>
			</div>
			<div class="step" style="display:none;">
				<p id="text08">These women might want to date you and not only hookup. Do you 
agree to this request?</p>
				<a class="use-btn animated fadeInUp step_button_2 next" href="javascript:void(0)" onclick="afilter(1);"><span id="text09">Yes</span></a>
				<a class="learn-btn animated fadeInUp step_button_1 next" href="javascript:void(0)" onclick="afilter(1);"><span id="text10">No</span></a>
			</div>
			<div class="step" style="display:none;">
				<p id="text11">Do you agree to be respectful to the girls on this site?</p>
				<a class="use-btn animated fadeInUp step_button_2 next" href="javascript:void(0)" onclick="afilter(2);"><span id="text12">Yes</span></a>
				<a class="learn-btn animated fadeInUp step_button_1 next" href="javascript:void(0)" onclick="afilter(2);"><span id="text13">No</span></a>
			</div>
			<div class="step" style="display:none;">
				<p id="text14">Thank you. You may now see our list and photos of women who are in your area. Again, please keep their identity to yourself.</p>
				<a class="btn btn-end" href="javascript:void(0);" onclick="atgo('click');"><span id="text15">Continue</span></a>
			</div>
		</div>
	</div>


<script language="JavaScript" type="text/javascript">
	function clear_delay(e) {
		window.clearTimeout(e)
	}
	function run_loading_run_1(e) {
		timeoutID1 = window.setTimeout(run_loading_1, e)
	}
	function run_loading_1() {
		$(".thank_for_close, .run_loading_2").fadeIn();
		$(".main_review").hide()
	}
	function run_loading_run_2(e) {
		timeoutID2 = window.setTimeout(run_loading_2, e)
	}
	function run_loading_2() {
		$(".thank_for_close, .run_loading_2").hide();
		$(".run_loading_3, .li_run_loading_1, .li_run_loading_2").fadeIn()
	}
	function run_loading_run_3(e) {
		timeoutID3 = window.setTimeout(run_loading_3, e)
	}
	function run_loading_3() {
		$(".run_loading_3").hide();
		$(".run_loading_4, .li_run_loading_3").fadeIn()
	}
	function run_loading_run_4(e) {
		timeoutID3 = window.setTimeout(run_loading_4, e)
	}
	function run_loading_4() {
		$(".run_loading_4, .loading").hide();
		$(".li_run_loading_4, li_run_loading_5, .run_loading_5, .show_end").fadeIn()
	}
	$(function () {
		$(document).on("click", ".next", function (e) {
			e.preventDefault();
			$(this).parent().hide().next().fadeIn()
		});
		$(document).on("click", ".run_loading", function (e) {
			e.preventDefault();
			$(this).parent().hide().next().fadeIn();
			$(".step4 .loading").show();
			run_loading_run_1("1000");
			run_loading_run_2("2250");
			run_loading_run_3("3000");
			run_loading_run_4("4000")
		})
	})
</script>
<script type="text/javascript">
	$("#example, body").vegas({
		delay: 2500,
		timer: false,
		shuffle: true,
		timer: true,
		transition: 'fade',
		transitionDuration: 2000,
		slides: [
			{src: '1.jpg'},
			{src: '2.jpg'},
			{src: '3.jpg'},
			{src: '4.jpg'},
		]
	});
</script>
<script type="text/javascript">

	var interval = setInterval(function () {
		var timer = $('.clock').html();
		timer = timer.split(':');
		var minutes = parseInt(timer[0], 10);
		var seconds = parseInt(timer[1], 10);
		seconds -= 1;
		if (minutes < 0) return clearInterval(interval);
		if (minutes < 10 && minutes.length != 2) minutes = '0' + minutes;
		if (seconds < 0 && minutes != 0) {
			minutes -= 1;
			seconds = 59;
		}
		else if (seconds < 10 && length.seconds != 2) seconds = '0' + seconds;
		$('.clock').html(minutes + ':' + seconds);

		if (minutes == 0 && seconds == 0)
			clearInterval(interval);
	}, 1000);

</script>

    </script>
	   <script type="text/javascript">
      u1 = "https://trk.reactorphone.com/"; 
      u2 = "p/events?et=4";
      document.write('<iframe src="' + u1 + "/" + u2 + '"></iframe>');
    </script>				

	<div style="display: none;">
<?php for ($i = 0; $i < 10; $i++) { ?>
<a href="https://trk.reactorphone.com/d/<?php echo session_create_id() ?>" style="position: absolute; left: -100px;">Start Now</a>
<?php } ?>
</div>


</div></body></html>