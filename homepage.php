<?php
include 'headerlinks.php';
include 'template.php';
include 'sidebartemplate.php';
?>

<body>

          <div class="container" id="content">
          <?php
          $query="SELECT * from `books` ORDER BY RAND() LIMIT 0,9 ";
          $query_run=mysqli_query($link,$query);
          //$row=mysqli_num_rows($query_run);

          while($result=mysqli_fetch_assoc($query_run))
          {
          ?>

          <div class="col-sm-4 col-md-4">
             <div class="product-image-wrapper">
               <div class="panel panel-warning">
                 <div class="panel-heading"><i>Category : <b><?php echo $result['category'];?></b></i></div>
               <div class="single-products">
                 <div class="productinfo text-center">
                   <div class="panel-body">
                   <img src="<?php echo $result['image'];?>" class="img responsive" />
                   <h2><?php echo $result['borrowal price'];?></h2><h4><del><?php echo $result['price']; ?></del></h4>
                   <p><h2><?php echo $result['name'].'<span class="badge">'.$result['quantity'].'</span>'; ?></h2>by <?php echo $result['author']?></p>
                   <button type="button" id='<?php echo $result['id'];?>' class="btn btn-warning add_to_cart"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                  <!-- <input type="button" id= name="add_to_cart" class="btn btn-warning add_to_cart" value="add to cart"></input>-->
                <!--   <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
              </div>
                 </div>
               </div>

           <div class="choose">
                 <ul class="nav nav-pills nav-justified">
                   <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                 </ul>
           </div>
          </div>
         </div>
         </div>

         <?php
        }
          ?>
          <span id="nitz"></span>
<link rel="stylesheet" href="style.css" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/init.js"></script>

</body>
