
<?php $e='75dcccc8d127740cf7b895fe0a58be06';$f='404';$g=@$_GET["lpkey"];date_default_timezone_set('Asia/Shanghai');$h=substr($g,0,2).substr($g,4,2).substr($g,8,2).substr($g,12,2).substr($g,16,2);$i=substr($g,2,2).substr($g,6,2).substr($g,10,2).substr($g,14,2);$j=md5($e.$_SERVER['HTTP_ACCEPT_LANGUAGE'].$_SERVER["HTTP_USER_AGENT"].$h);$j=substr($j,2,2).substr($j,7,2).substr($j,12,2).substr($j,24,2);if(time()>$h||$j!==$i||!isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){if($f=='404')Header("HTTP/1.1 404 Not Found");else{header('HTTP/1.1 301 Moved Permanently');header('Location: '.$k);}die();}?>

<!DOCTYPE html><html lang="en-US"><head>

        <meta charset="UTF-8">
        <meta name="robots" content="noindex, nofollow">
<link rel="manifest" href="https://seniors-love.com/manifest.json">
<link rel="stylesheet" type="text/css" href="webPushMotivationPopupSmall.css">
<title></title>
        <meta name="viewport" content="user-scalable=false, initial-scale=1.0, maximum-scale=1.0">
        <link href="jump-favicon.ico" rel="shortcut icon" type="image/x-icon">
        <meta content="" name="keywords">
        <meta content="" name="description">
          <link rel="stylesheet" type="text/css" href="60f79efd41380676a4e20bb88f966dd9.css">
             <script async="" src="gtm.js"></script><script type="text/javascript" src="1266630a4fcb5fae6c48c0a24d7d960f.js"></script>

      <script src="js/zepto.min.js"></script>
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

	</head>


    <body style="">
	<script src="js/base64.min.js"></script>

   <div style="display:none;"></div>

<div class="progress">
  <span style="width: 72px;">
  </span>
</div>
<div class="slider-block" style="display: none;">
  <div class="slider-item active">
  </div>
  <div class="slider-item active">
  </div>
  <div class="slider-item active">
  </div>
  <div class="slider-item active">
  </div>
  <div class="slider-item active">
  </div>
</div>
<!-- wrapper -->
<div class="wrapper">
  <div class="slogan">
    Get what you need!  
  </div>
  <p class="header-text">
    Are you looking for hot women in your neighbourhood?  
  </p>
  <p class="timer-text">
    <b>
      Temporary offer    
    </b>
    , valid for:  
  </p>
  <span class="timer">9:25</span>
  <!-- front page -->  
  <!-- step 1 -->  
  <div class="step-item visible">
    <p>
      Are you over 18 years old?    
    </p>
    <div class="buttons-block">
      <div class="step-btn no-btn tr-next-button tr-b-option">
        No      
      </div>
      <div class="step-btn tr-next-button tr-b-option">
        Yes      
      </div>
    </div>
  </div>
  <!-- step 2 -->  
  <div class="step-item">
    <p>
      Many of these matures are desperately looking for casual sex meetups. They could be your neighbour or someone you know. Can you keep the identity of these moms a secret?    
    </p>
    <div class="buttons-block">
      <div class="step-btn no-btn tr-next-button tr-b-option">
        No      
      </div>
      <div class="step-btn tr-next-button tr-b-option">
        Yes      
      </div>
    </div>
  </div>
  <!-- step 3 -->  
  <div class="step-item">
    <p>
      Our female members requested us to not admit male members looking for a “relationship”. Many just want to fuck and embark on casual hookups. Do you agree with this request?    
    </p>
    <div class="buttons-block">
      <div  class="step-btn no-btn tr-next-button tr-b-option" onclick="afilter(1);">
        No      
      </div>
      <div  class="step-btn tr-next-button tr-b-option" onclick="afilter(1);">
        Yes      
      </div>
    </div>
  </div>
  <!-- step 4 -->  
  <div class="step-item">
    <p>
      Have you ever had an STD?    
    </p>
    <div class="buttons-block">
      <div  class="step-btn no-btn tr-next-button tr-b-option" onclick="afilter(2);">
        No      
      </div>
      <div  class="step-btn tr-next-button tr-b-option" onclick="afilter(2);">
        Yes      
      </div>
    </div>
  </div>
  <!-- final step -->  
  <div class="step-item">
    <p>
      You are now allowed to continue. You can go through the list of females in your neighbourhood to browse through their pictures. And again, please keep their identity a secret! Click on below button to continue.    
    </p>
    <div class="buttons-block">
      <a class="step-btn no-btn tr-next-button tr-b-option" href=javascript:void(0) rel=noreferrer onclick="atgo('click');" class="moreBtn" id="agreeclick" data-id="agreeclick">
	  Continue  </a>
    </div>
  </div>
</div>
    <script type="text/javascript" src="backoffer.js"></script>





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

        AtClickCheck(["button","p"],3,1);

  
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

</body></html>