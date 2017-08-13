<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>
<body>
<?php

$flag=1;
	require 'connect.inc.php';
    session_start();

    // If form submitted, insert values into the database.
    if (isset($_POST['submit'])&&!empty($_POST['submit'])){

		$username = stripslashes($_POST['username']); // removes backslashes
		$username = mysqli_real_escape_string($link,$username); //escapes special characters in a string
		$password = stripslashes($_POST['password']);
		$password = mysqli_real_escape_string($link,$password);

	//Checking is user existing in the database or not
    $query = "SELECT COUNT(`id`) FROM `users` WHERE username='$username' and password='".md5($password)."'";
		//echo $query.'<br />';
		$query_run = mysqli_query($link,$query) or die(connection_status());
		//$rows = mysqli_num_rows($result);
		//echo $rows;

      if($query_run==true){
				//if(mysqli_affected_rows($link)===1){
        $_SESSION['username'] = $username;
					$flag=0;
			/*$_SESSION['username'] = $username;
			$sql="SELECT `user_id` from `users` WHERE username='$username' and password='".md5($password)."'" ;
			$sql1=mysqli_query($link,$sql);
			while($row=mysqli_fetch_assoc($sql1)){
				$_SESSION['id']=$row['user_id'];
			}
			*/

  header("Location:homepage.php"); // Redirect user to index.php
      }else{
				echo "Username/password is incorrect";
				$flag=1;
				}
    }
if($flag){
?>
<h1>Log In</h1>
<div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="login">
<input type="text" name="username" placeholder="Username" value="<?php if(!empty($_POST['username'])) echo $_POST['username']; ?>" required /><br /><br />
<input type="password" name="password" placeholder="Password" value="<?php if(!empty($_POST['password'])) echo $_POST['password']; ?>" required /><br /><br /><br />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='register.php'>Register Here</a></p>
<br /><br />
</div>
<?php
}
?>


</body>
</html>
