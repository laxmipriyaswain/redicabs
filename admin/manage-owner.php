<?php
 include "includes/config.php";
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Car Rental Portal |Admin Manage Owner Details   </title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Manage Owner</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Owner Details</div>
							<div class="panel-body">
							
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="border:2px solid #1886bb;">
									<thead>
										<tr>
										<th>Sl.No.</th>
											<th>Owner Name</th>
											<th>Mobile</th>
											<th>Email Id</th>
											<th>Vehicle Number</th>
											<th>Vehicle RC Number</th>
											<th>Vehicle Brand</th>
											<th>Vehicle Name</th>
											<th>Vehicle Color</th>
											<th>Assign Driver</th>
											<th>Front Image</th>
											<th>Back Image</th>
											<th>Side Image</th>
											<th colspan="2">Action</th>
										</tr>
									</thead>

	<?php
         $retrive_qyr="SELECT * FROM add_owner";
         $retrive_fn_query=mysqli_query($conn,$retrive_qyr);
         $count=0;
         while($row=mysqli_fetch_array($retrive_fn_query)){
           $count++;
     ?>

									<tbody>
										<tr>
											<td><?php echo $count;?></td>
											<td><?php echo $row['owner_name'];?></td>
											<td><?php echo $row['owner_mobile'];?></td>
											<td><?php echo $row['owner_email'];?></td>
											<td><?php echo $row['owner_vehicle_no'];?></td>
											<td><?php echo $row['owner_vehicle_rc_no'];?></td>
											<td><?php echo $row['owner_vehicle_brand'];?></td>
											<td><?php echo $row['owner_vehicle_name'];?></td>
											<td><?php echo $row['owner_vehicle_color'];?></td>
											<td><?php echo $row['driver_id'];?></td>

											<td><img src="image/<?php echo $row['front_image'];?>" width="30" height="30"  alt=""></td>

											<td><img src="image/<?php echo $row['back_image'];?>" width="30" height="30"  alt=""></td>
										
											<td><img src="image/<?php echo $row['side_image'];?>" width="30" height="30"  alt=""></td>
											
											<td><a href="owner_update.php?u_up_id=<?php echo $row['id'];?>"><i class="fa fa-edit"></i></a></td>

											<td><a href="owner_delete.php?owner_details_delete=<?php echo $row['id'];?>"><i class="fa fa-close"></i></a></td>

										</tr>

										
									</tbody>
	<?php
       }
     ?>
								</table>

						

							</div>
						</div>

					

					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>

