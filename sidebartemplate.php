<?php
require 'connect.inc.php';
?>
<section>
<div class="container">
    <div class="row">
      <div class="col-sm-3 col-md-3">
        <div class="left-sidebar">
          <h2>Category</h2>
          <hr/>
          <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <!--   <div class="panel panel-default">
           <div class="panel-heading">
                <h4 class="panel-title">!-->

                  <?php
                  $query="SELECT DISTINCT `category` FROM `books`";
                  $query_run=mysqli_query($link,$query);
                  $rows=mysqli_affected_rows($link);
                  while($result=mysqli_fetch_assoc($query_run)){
                    ?>
                 <div class="panel panel-default">
                 <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordian" href="#<?php echo $result['category'];?>">
                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                   <?php echo $result['category'];?>
                  </a>
                </h4>
              </div>
              <div id="<?php echo $result['category'];?>" class="panel-collapse collapse">
                <div class="panel-body">
                  <ul>
                  <?php
                  $category_name=$result['category'];
                $query1="SELECT DISTINCT `sub_category` FROM `books` WHERE `category`='$category_name'";
                 $query_run1=mysqli_query($link,$query1);
                 while($result1=mysqli_fetch_assoc($query_run1)){
                  ?>
                   <li><a href="#<?php echo $result1['sub_category'];?>"><?php echo $result1['sub_category'];?></a></li>
                  <?php
                }
                 ?>
                  </ul>
                </div>
              </div>
            </div>
            <?php
          }
           ?>
          </div>

          <h2>Search By</h2>
          <hr/>
          <div class="panel-group" id="accordian"><!--category-productsr-->
            <!--   <div class="panel panel-default">
           <div class="panel-heading">
                <h4 class="panel-title">!-->
                <div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">AUTHOR</a></h4>
								</div>
							</div>
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">PUBLICATION</a></h4>
								</div>
							</div>
        </div>

      </div>
    </div>
  </div>
</div>
</section>
