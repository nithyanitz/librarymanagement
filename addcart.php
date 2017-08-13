<?php
session_start();
require 'connect.inc.php';
if(isset($_POST['prodid'])){
  if(!empty($_POST['prodid'])){
    $product_id=$_POST['prodid'];
    $username=$_SESSION['username'];
    $query="SELECT * FROM `books` where `id`='$product_id'";
    $query_run=mysqli_query($link,$query);
    while($row=mysqli_fetch_assoc($query_run)){
      $productname=$row['name'];
      $productid=$row['id'];
      $productauthor=$row['author'];
      $productpublication=$row['publication'];
      $productcategory=$row['category'];
      $productsubcategory=$row['sub_category'];
      $productborrowalprice=$row['borrowal price'];
      $productimage=$row['image'];
      $query1="INSERT into `library`.`cart`(`user_name`,`p_id`,`p_name`,`p_author`,`p_publication`,`p_category`,`p_subcategory`,`qty`)VALUES('$username',$productid,'$productname','$productauthor','$productpublication','$productcategory','$productsubcategory',0)";
      $result=mysqli_query($link,$query1);
      if($result){
        echo 'successful';
      }
      else {
      die(mysqli_error($link));
    }
    }
  }
  }
  ?>


    
