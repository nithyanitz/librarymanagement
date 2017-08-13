<?php
include 'template.php';
?>
<body>
<div class="container">
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
<!--<div id="search_box"></div>-->
      </div>
<div class="container">
  <div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Cart</li>
				</ol>
			</div>
    </div>
    <div class="container">
			<div class="table-responsive">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<!--<td class="total">Total</td>-->
							<td></td>
						</tr>
					</thead>
        <tbody>
          <div id="cartbooks"></div>
        </tbody>
      </table>
</div>
</div>


<!--  <div class="container" id="content"></div>-->


  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/init.js"></script>
</body>
