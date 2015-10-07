<?php
/*
Facebook SDK Part 3
สอนการใช้งาร Facebook PHP SDK ตอนที่ 3  การ Login Facebook ด้วย Facebook API
by http://facebook-sdk.blogspot.com/  
  
 */
session_start();
//ทำการเรียก Sesion_start(); เพื่อให้ Sesion ต่างๆทำงาน
  
require_once __DIR__ . '/src/Facebook/autoload.php';
//ทำการสร้างการดึงไฟล์ต่างๆ
//ของ facebook sdk ด้วยคำสั่ง  require_once  __DIR__ .'ตามด้วย ที่เก็บ file autoload.php '
 
$fb = new Facebook\Facebook([
  'app_id' => '740357906069989',
  'app_secret' => '85be710ace9ac4e630fdcff56e51bdbd', 
  'default_graph_version' => 'v2.4',
  ]);
//เป็นการสร้างคำสั่ง เพื่อ เก็บค่า app_id ,app_secret และ เวิอชั่นเริมต้นของ  Graph API 
 
$helper = $fb->getRedirectLoginHelper();
//เป็นการ นำค่าของ app_id ,app_secret, Graph API  ที่เก็บไว้ในตัวแปล $fb ไปตรวจสอบ ผ่านgetRedirectLoginHelper()
 
$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/facebook-adk-Manually/fb-callback.php', $permissions);
//เมื่อ ผ่าน จะส่งค่าที่ได้ไปยัง fb-callback.php  เพื่อที่จะได้ใช้งานต่อ
echo '<a href="' . htmlspecialchars($loginUrl) . '"><img src="img/loginfacebook.gif"></a>'; htmlspecialchars($loginUrl) . '"><img src="img/loginfacebook.gif"></a>';

