<?php
session_start();
require 'connect.inc.php';
if(isset($_POST['cart_items'])){
  $username=$_SESSION['username'];
  $query="SELECT * FROM `cart` WHERE `user_name`='$username'";
  $query_run=mysqli_query($link,$query);
  $count=mysqli_num_rows($query_run);
  if($count<0){
  echo 'no items in your cart';
}
  ?>
