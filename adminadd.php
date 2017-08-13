
<!DOCTYPE html>
<head>
   <title>add books</title>
   <meta charset="utf-8">
</head>
<body>
<?php
$flag=1;
if(isset($_POST['submit'])){
  if(!empty($_POST['submit'])){
require 'connect.inc.php';
  //$link=mysqli_connect('localhost','root','','library') or die("connection error");
  /*if($link)
  {
  echo 'connection established';
}*/

  // $var = (!empty($_POST['book_name']) && !empty($_POST['author_name'])
  // && !empty($_POST['publication_name']) && !empty($_POST['price'])
  // && !empty($_POST['borrowal_price']) && !empty($_POST['qty'])
  // && !empty($_FILES['image']) && !empty($_POST['category']) && !empty($_POST['textarea']));
  // echo $var;
  //
  //   if($var){
$book_name=mysqli_real_escape_string($link,$_POST['book_name']);
$author_name=mysqli_real_escape_string($link,$_POST['author_name']);
$publication_name=mysqli_real_escape_string($link,$_POST['publication_name']);
$price=$_POST['price'];
$borrowal_price=$_POST['borrowal_price'];
$qty=$_POST['qty'];
$image=mysqli_real_escape_string($link,'images/'.$_FILES['image']['name']);;
$category=$_POST['category'];
$sub_category=$_POST['sub_category'];
$description=htmlentities(mysqli_real_escape_string($link,$_POST['textarea']));
$flag=1;
if(preg_match('!image!',$_FILES['image']['type']))
{
  move_uploaded_file($_FILES['image']['tmp_name'],$image);
}
else{
  echo 'upload only jpeg or png or gif images';
}


$query="INSERT INTO `books` (`name`,`author`,`publication`,`price`,`borrowal price`,`quantity`,`image`,`category`,`sub_category`,`description`) VALUES ('$book_name','$author_name','$publication_name','$price','$borrowal_price','$qty','$image','$category','$sub_category','$description')";
$result=mysqli_query($link,$query);
if($result===true){
?>
<div class="alert alert-success" role="alert">Registered Successfully</div>
<?php
}
else{
$flag=1;
echo 'books cant be added';
}
}
else {
     echo 'fill out all the fields';
     $flag=1;
 }
}
if($flag)
{
?>

  <form action="#" method="POST" enctype="multipart/form-data">
    <div>
      BOOK NAME        : <input type="text" name="book_name" id="book_name" placeholder="book name"  value="<?php if(isset($_POST['book_name'])) echo $_POST['book_name'];?>" required ><br /><br />
      AUTHOR NAME      : <input type="text" name="author_name" id="author_name" placeholder="author name" value="<?php if(isset($_POST['author_name'])) echo $_POST['author_name'];?>" required /><br /><br />
      PUBLICATION NAME : <input type="text" name="publication_name" id="publication_name" placeholder="publication name" value="<?php if(isset($_POST['publication_name'])) echo $_POST['publication_name'];?>"  required /><br /><br />
      BOOK PRICE       : <input type="number" name="price" id="price" placeholder="price" value="<?php if(isset($_POST['price'])) echo $_POST['price']; ?>" required /><br /><br />
      BORROWAL PRICE   : <input type="number" name="borrowal_price" id="borrowal_price" placeholder="borrowal price" value="<?php if(isset($_POST['borrowal_price'])) echo $_POST['borrowal_price'];?>"   required /><br /><br />
      QUANTITY         : <input type="number" name="qty" id="qty" placeholder="enter quantity" value="<?php if(isset($_POST['qty'])) echo $_POST['qty'];?>" required /><br /><br />
      BOOK IMAGE       : <input type="file" name="image" id="image" required value="<?php if(isset($_POST['image'])) echo $_POST['image'];?>"  /><br /><br />
      CATEGORY         : <select id="category" name="category" required value="<?php if(isset($_POST['category'])) echo $_POST['category'];?>"  />
        <option value="Frontend Languages">Frontend Languages</option>
        <option value="Backend Languages">Backend Languages</option>
        <option value="Programming Languages">Programming Languages</option>
        <option value="Machine Learning">Machine Learning</option>
        <option value="Artificial Intelligence">Artificial Intelligence</option>
        <option value="Big Data">Big Data</option>
        <option value="Databases">Databases</option>
        <option value="Operating System">Operating System</option>
        <option value="DataStructures">DataStructures</option>
        <option value="Networks">Networks</option>
                       </select>
      <br /><br />
     SUB_CATEGORY        : <input type="text" name="sub_category" id="sub_category" placeholder="sub_category book belongs to"  value="<?php if(isset($_POST['sub_category'])) echo $_POST['sub_category'];?>" required ><br /><br />
     DESCRIPTION       : <textarea id="textarea" name="textarea" rows="10" cols="20" required/><?php if(isset($_POST['textarea'])) echo $_POST['textarea'];?></textarea><br /><br />
    </div>
    <br /><br />
     <input type="submit" value="ADD BOOK" id="submit" name="submit" />
   </form>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/init.js"></script>

<?php
}
?>
</body>
</html>
