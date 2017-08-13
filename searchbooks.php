
<?php
require 'connect.inc.php';
if(isset($_POST['name'])){
  if(!empty($_POST['name']))
{
  $output='';
  $search_term=$_POST['name'];
  $search_term=mysqli_real_escape_string($link,htmlentities($_POST['name']));
  $query="SELECT * FROM `books` WHERE `name` LIKE '%$search_term%' ORDER BY RAND()";
  $query_run=mysqli_query($link,$query);
  $row=mysqli_num_rows($query_run);
  ?>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/init.js"></script>
  <?php
  while($result=mysqli_fetch_array($query_run)){
     $output .='
           <div class="col-sm-4">
							<div class="product-image-wrapper">
              <div class="panel panel-warning">
               <div class="panel-heading"><i>Category : <b>'.$result['category'].'</b></i></div>
								<div class="single-products">
									<div class="productinfo text-center">
										<img src='.$result['image'].' class="img responsive" />
										<h2>'.$result['borrowal price'].'</h2><h4><del>'.$result['price'].'</del></h4>
										<p><h2>'.$result['name'].'<span class="badge">'.$result['quantity'].'</span></h2>by ' .$result['author'].'</p>
										<button type="button" id='.$result['id'].' class="btn btn-warning add_to_cart"><i class="fa fa-shopping-cart"></i> Add to cart</button>
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
          </div>';
?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/init.js"></script>

<?php
  echo $output;
//  echo $result['name'].'---'.$result['author'].'<br/>';
}
}}
?>
