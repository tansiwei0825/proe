<?php
 header("content-type:text/html;charset=utf-8");
$username=$_POST["username"];
$pwd=$_POST["pwd"];
// $username="曾华";
// $pwd="123";
 $host="127.0.0.1";
 $user="root";
 $password="root";
 $database="abs";
 $link=mysqli_connect($host,$user,$password,$database);
 if($link===FALSE){
 	exit("连接数据库失败，请检查参数是否正确");
 }
 mysqli_set_charset($link,"utf8");
 $sql="select * from student where Sname='$username' and Spwd='$pwd'";
  $res=mysqli_query($link,$sql);
 if($res===FALSE){
 	echo "ERROE".mysqli_errno($link);
 	echo "ERROE".mysqli_error($link);
 	exit;
 }
 $arr=mysqli_fetch_row($res);
 if(is_array($arr)){
 	$str="abehyfuieriefuiefe34543543riufer";
 	$strN=str_shuffle($str);
 	$token=substr($strN,0,12);
 	array_push($arr,$token);
 	echo json_encode($arr);
 }else{
 	echo "fail";
 }
?>