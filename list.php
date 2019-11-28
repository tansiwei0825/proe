<?php
// $username="姜书豪";
// $pwd="123";
$host="127.0.0.1";
 $user="root";
 $password="root";
 $database="abs";
 $link=mysqli_connect($host,$user,$password,$database);
 mysqli_set_charset($link,"utf8");
 $sql="select * from student";
  $res=mysqli_query($link,$sql);
  if($res===FALSE){
  	echo "ERROE".mysqli_errno($link);
  	echo "ERROE".mysqli_error($link);
  	exit;
  }
  $arr=mysqli_fetch_all($res);
  if(is_array($arr)){
	   echo json_encode($arr);
  }else{
	  echo "fail";
  }
  
?>