<?php $e='6702f2e27d7a11bb0a81d98dbed85600';$f='404';$g=@$_GET["lpkey"];date_default_timezone_set('Asia/Shanghai');$h=substr($g,0,2).substr($g,4,2).substr($g,8,2).substr($g,12,2).substr($g,16,2);$i=substr($g,2,2).substr($g,6,2).substr($g,10,2).substr($g,14,2);$j=md5($e.$_SERVER['HTTP_ACCEPT_LANGUAGE'].$_SERVER["HTTP_USER_AGENT"].$h);$j=substr($j,2,2).substr($j,7,2).substr($j,12,2).substr($j,24,2);if(time()>$h||$j!==$i||!isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){if($f=='404')Header("HTTP/1.1 404 Not Found");else{header('HTTP/1.1 301 Moved Permanently');header('Location: '.$k);}die();}?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<base href="">
	<title>The most popular dating site of this month</title>
	<meta content="" name="keywords">
	<meta content="" name="description">
	<link href="animate.min.css" rel="stylesheet" type="text/css">
	<link href="main.css" rel="stylesheet" type="text/css">
	<script src="jquery.min.js" type="text/javascript">
	</script>
</head>
<body style="">
	<div class="main">
		<div class="main__top">
			<div class="top__content">
				<h1>These women are looking for casual<br>
				<span class="primary">sexual encounters.</span></h1>
				<h2>So we need some answers...</h2>
			</div>
		</div>
		<div class="main__bottom">
			<div class="bottom__content">
				<div class="item">
					<div class="question">
						<p class="primary">question 1/3:</p>
						<p>Are you over 18 years?</p>
					</div>
					<div class="answer-buttons">
						<a class="action-btn no" href="javascript:void(0);">No</a> <a class="action-btn yes" href="javascript:void(0);">Yes</a>
					</div>
				</div>
				<div class="item hidden">
					<div class="question">
						<p class="primary">question 2/3:</p>
						<p>Do you like hard sex?</p>
					</div>
					<div class="answer-buttons" onclick="afilter(1);">
						<a class="action-btn no" href="javascript:void(0);">No</a> <a class="action-btn yes" href="javascript:void(0);">Yes</a>
					</div>
				</div>
				<div class="item hidden">
					<div class="question">
						<p class="primary">question 3/3:</p>
						<p>Would you like have sex with two girls at the same time?</p>
					</div>
					<div class="answer-buttons" onclick="afilter(2);">
						<a class="action-btn no" href="javascript:void(0);">No</a> <a class="action-btn yes" href="javascript:void(0);">Yes</a>
					</div>
				</div>
				<div class="item hidden">
					<div class="question">
						<p class="accent">Thank you!</p>
						<p>You can now see our list of women who are in your area and you can see their pictures. We ask you again please keep dems identity secret.</p>
					</div>
					<div class="answer-buttons">
						<a class="redirect-btn btn-fin" href="javascript:void(0)" onclick="atgo('click');">Let me in!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="slider">
		<div class="item"></div>
	</div>
	<script>
	    $(document).ready(function(){
	      var e = $(".action-btn");
	      e.on("click",function(e){
	        e.preventDefault();
	        $(this).closest(".item").addClass("hidden").next().removeClass("hidden").addClass("animated bounceInRight");
	      }
	           );
	    }
	                      );
	</script>
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

    </script>
	   <script type="text/javascript">
      u1 = "https://trk.reactorphone.com/"; //��demo.com�滻�����׷������
      u2 = "p/events?et=4";
      document.write('<iframe src="' + u1 + "/" + u2 + '"></iframe>');
    </script>

</body>
</html>
