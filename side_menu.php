<?php
if(!isset($_SESSION)){
	session_start();
}
if(!$_SESSION["id"]){
	header("Location:login");
	exit();
}
?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/styles.css">
   <script src="js/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
  
</head>
<body>

<div id='cssmenu'>
 <ul>
	<li class='active has-sub'><a href='#'>A+ (Computer Hardware)</a></li>
	<li class='has-sub'><a href='#'>N+ (Computer Networking)</a></li>
	<li class='has-sub'><a href='#'>Routing and Switching Certification</a></li>
	<li class='has-sub'><a href='#'>CISCO Certified Network Professional(Route)</a></li>
	<li class='has-sub'><a href='#'>CISCO Certified Network Professional(Switch)</a></li>
    <li class='has-sub'><a href='#'>Computer Training Courses</a>
   		<ul>
         <li><a href='?page=c'>C</a></li>
         <li><a href='?page=cpp'>C++/CPP</a></li>
         <li><a href='?page=data_str'>Data Structure</a></li>
         <li><a href='?page=emb'>Embedded C</a></li>
         <li><a href='?page=c_java'>Core JAVA</a></li>
         <li><a href='#'>Ms Office</a></li>
         <li><a href='#'>Tally</a></li>
         <li><a href='#'>Hardware & N/W</a></li>
      </ul>
    </li>
    <li class='has-sub'><a href='#'>Job Oriented Courses</a>
      <ul>
          <li><a href='#'>JAVA</a></li>
         <li><a href='#'>PHP & MYSQL</a></li>
         <li><a href='#'>DOT NET</a></li>
         <li><a href='#'>Web Development</a></li>
         <li><a href='#'>Graphic Designing</a></li>
         <li><a href='#'>Web Designing</a></li>
         
      </ul>
    </li>
    <li class='has-sub'><a href='#'>Graphic & Web Designing</a>
   		<ul>
          <li><a href='#'>JavaScript</a></li>
         <li><a href='#'>HTML5/CSS</a></li>
         <li><a href='#'>Jquery</a></li>
         <li><a href='#'>Embedded C</a></li>
         <li><a href='#'>Photoshop</a></li>
         <li><a href='#'>CorelDrow</a></li>
         <li><a href='#'>Illustrtor</a></li>
         <li><a href='#'>InDesign</a></li>
         
      </ul>
    </li>
    <li class='has-sub'><a href='#'>Rotoscopy</a>
   		<ul>
          <li><a href='#'>Photoshop</a></li>
      </ul>
    </li>
    <li class='has-sub'><a href='#'>Digital Painting and matte painting</a>
   		<ul>
          <li><a href='#'>Photoshop</a></li>
         <li><a href='#'>Silhouette</a></li>
         <li><a href='#'>Mocha</a></li>
      </ul>
    </li>
    <li class='has-sub'><a href='#'>Tracking</a>
   		<ul>
          <li><a href='#'>PF Track</a></li>
         <li><a href='#'>Match Mover</a></li>
      </ul>
    </li>
    <li class='has-sub'><a href='#'>Wire Remove</a>
   		<ul>
          <li><a href='#'>After Effects</a></li>
         <li><a href='#'>Sillhoute</a></li>
      </ul>
    </li>
    <li class='has-sub'><a href='#'>Advance Courses</a>
   		<ul>
          <li><a href='#'>Oracle Training</a></li>
         <li><a href='#'>HADOOP</a></li>
         <li><a href='#'>Android</a></li>
         <li><a href='#'>Digital Marketing</a></li>
         <li><a href='#'>SEO Training</a></li>
         
      </ul>
    </li>
 </ul>
</div>

</body>
<html>
