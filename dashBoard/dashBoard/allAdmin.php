<?php
// session_start();
     include 'includes/sidebar.php';
      include 'includes/header.php';
     ?>



<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Admin</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

   	<!-- design -->

		<?php 

if(!isset($_GET['action'])){
    include "adminPages/adminTable.php";
}
 elseif($_GET['action'] == 'add'){
    include 'adminPages/userAddForm.php';
} 
elseif($_GET['action'] == 'edit'){
    include "adminPages/adminEdit.php";
}

 ?>
<!-- end  design -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
     include 'includes/footer.php';
     
     ?>