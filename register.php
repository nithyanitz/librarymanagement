
<!DOCTYPE html>
<head>
  <title> REGISTRATION PAGE </title>
  <meta charset="utf-8">
</head>
<body>
<?php
require 'connect.inc.php';
session_start();
$flag=1;
$_SESSION['message']='';
if(isset($_POST['register'])){
  if(!empty($_POST['register'])){
  if($_POST['password']==$_POST['confirmpassword']){
  $username=mysqli_real_escape_string($link,stripslashes($_POST['username']));
  $email=mysqli_real_escape_string($link,stripslashes($_POST['email']));
  $password=md5($_POST['password']);
  $time=md5(time());
  $avatar_path=mysqli_real_escape_string($link,stripslashes('images/'.$_FILES['avatar']['name'].$time));
  if(preg_match("!image!",$_FILES['avatar']['type']))
  move_uploaded_file($_FILES['avatar']['tmp_name'],$avatar_path);
  else
  $_SESSION['message'] = 'upload only jpeg,png or gif files';
    $sql="INSERT into `users`(`username`,`email`,`password`,`image`) VALUES ('$username','$email','$password','$avatar_path')";

    echo $sql;
    $result=mysqli_query($link,$sql);
    if($result===true){
      $_SESSION['username']=$username;
      $_SESSION['message']='registration successful';
      header("location: login.php");
    }
    else{
      $_SESSION['message']='registration failed';
    }
  }
else{
  echo 'two passwords dont match';
}
}
else{
  $_SESSION['message']='fill out all fields';
}
}
if($flag){
?>

<div>
    <h1>Create an account</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" autocomplete="off">
      <div><?php echo $_SESSION['message']; ?></div><br />
      USERNAME           :<input type="text" placeholder="User Name" name="username" value="<?php if(!empty($_POST['username'])) echo $_POST['username']; ?>" required /><br /><br />
      EMAIL_ID           :<input type="email" placeholder="Email" name="email" value="<?php if(!empty($_POST['email'])) echo $_POST['email']; ?>" required /><br /><br />
      PASSWORD           :<input type="password" placeholder="Password" name="password" autocomplete="new-password" value="<?php if(!empty($_POST['password'])) echo $_POST['password']; ?>"  required /><br /><br />
      CONFIRM PASSWORD   :<input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" value="<?php if(!empty($_POST['confirmpassword'])) echo $_POST['confirmpassword']; ?>" required /><br /><br />
      Select your avatar : <input type="file" name="avatar" accept="image/*" value="<?php if(!empty($_FILES['avatar']['name'])) echo $_FILES['avatar']['name']; ?>" required /></div><br /><br /><br />
      <input type="submit" value="Register" name="register" />


    </form>
  </div>
<?php
}
?>
</body>
</html>
