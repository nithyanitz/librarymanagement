<?php
include 'headerlinks.php';
session_start();
?>

<style>
.navbar{
  margin-bottom: 0;
}
</style>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">

            <!-- Logo -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>


                <a href="" class="navbar-brand"><i>LIBRARY AT DOOR STEPS</i></a>
            </div>

            <!-- Menu Items -->
            <div class="collapse navbar-collapse" id="navbar-collapse">

                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#"><i class="fa fa-phone "></i> Contact</a></li>

                    <!-- drop down menu -->
                </ul>
                <ul class="nav navbar-nav navbar-right ">

                    <li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i> Cart<span class="badge">0</span></a>
                    <div class="dropdown-menu" style="width:400px;">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <div class="row">
                            <div class="col-md-3">Sl.no</div>
                            <div class="col-md-3">Book Image</div>
                            <div class="col-md-3">Author</div>
                            <div class="col-md-3">Borrowal-Price</div>
                          </div></div>
                          <div  class="panel-body">
                            <div id="content1"></div>
                            </div>
                          </div>
                          <div class="panel-footer"></div>
                        </div>
                    </li>


                    <li><a href=""><i class="fa fa-user"></i> Account</a></li>
    								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
    								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                    <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> My Profile <span class="caret"></span></a>
                         <ul class="dropdown-menu">
                             <li><a href="#">Friends</a></li>
                             <li><a href="#">Photos</a></li>
                             <li><a href="#"><i class="fa fa-cog fa-spin"  ></i>  Settings</a></li>
                             <li><a href="#">Logout</a></li>
                         </ul>
                     </li>
                    <li><a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown"><i class="fa-fa-user"></i>Login</a>
                    <ul class="dropdown-menu">
                      <div style="width:352px;">
                      <div class="panel panel-primary">
                        <div  class="panel-heading"><b><i>Login</i></b></div>
                          <div class="panel-heading">
                            <label for="email"/>Email
                            <input type="text" class="form-control" id="email" required/>
                            <label for="password"/>Password
                            <input type="password" class="form-control" id="password" required/><br />
                            <input name="submit" class="btn btn-primary" id="login" type="submit" value="Login"/><br />
                            <p><h6>Not registered yet?<a href='register.php'>Register Here</a></h6></p>
                            </div>

                          </div>
                        </div>
                      </ul>
                    </li>
                </ul>

                <!--right align -->
                <!--<ul class="nav navbar-nav navbar-right ">-->


            </div>

        </div>
    </nav>
    <div class="jumbotron">
      <p class="text-primary"><h3>hie <span><?php echo $_SESSION['username']; ?></span></h3></p>
      <div class="container text-center">
        <i><h1>Library At Door Steps</h1><small><mark>online library</mark></small></i>
        <p> place to cherish your knowledge </p>

      <div class="btn-group">
        <a href="frequent.php" class="btn btn-lg btn-warning">Popular books</a>

          <a href="frequent.php" class="btn btn-lg btn-default">Books for Sale</a>
            <a href="frequent.php" class="btn btn-lg btn-warning">Books</a>

      </div>
      </div>
    </div>

  <!--  <div class="container">
    <div class="row">
        <div class="col-sm-11 col-md-11 col-xs-11">
                  <div class="input-group"  style="padding-left:120px;">
          <input type="text" id="search" class="form-control"/>
          <span class="input-group-addon">
              <i class="fa fa-search"></i>
          </span>
      </div>
             </div>
            </div>
            <div id="content"></div>
          </div>-->
          <script type="text/javascript" src="js/jquery.js"></script>
          <script type="text/javascript" src="js/init.js"></script>

</body>
</html>
