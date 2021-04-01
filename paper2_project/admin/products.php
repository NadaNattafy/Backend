<?php 
	
	include 'includes/header.php';
	include 'includes/sidebar.php';
 ?>
	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Products</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Products</h1>
			</div>
		</div><!--/.row-->
		
		<!-- design -->

		<?php 

		if(!isset($_GET['action'])){
			include "design/products/proTable.php";
		}elseif($_GET['action'] == 'add'){
			include 'design/products/addPro.php';
		} 

		 ?>
		<!-- end  design -->
	
	</div>	<!--/.main-->
	
<?php include "includes/footer.php" ?>