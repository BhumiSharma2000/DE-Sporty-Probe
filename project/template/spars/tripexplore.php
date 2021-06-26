<?php
require "../lib/loginvalidation.php";
 require "header.php"; 
error_reporting(~E_NOTICE);
?>
	<script type="text/javascript">
		function getState(val){
			/*alert("Hi"); */
			$.ajax({
				type: "POST",
				url: "../Admin/get_state.php",
				data: {'cntryid' :val},
				success: function(data){
					$("#state-list").html(data);
				}
			});
		}
		function getCity(val){
			/* alert("Hi"); */
			$.ajax({
				url: "../Admin/get_city.php",
				type: "POST",
				data: {'stateid': val},
				success: function(data){
					$("#city-list").html(data);
				}
			});

		}
	</script>
<section class="overview-block-ptb text-left iq-font-white" style="background-color:black;
background-position: center center; background-repeat: no-repeat; background-size: cover;">
<div class="container">
	<div class="row align-items-center">
		<div class="col-lg-8">
			<div class="iq-mb-0">
				<h2 class="iq-font-white iq-tw-6" style="margin-top: 50px;">Explore Trips</h2>
			</div>
		</div>
	</div>
</div>
</section>
<div style="background-color: #212529;">
	<center>
		<form action="tripexplore.php" method="post" enctype="multipart/form-data">
			<h3 class="iq-font-black">Select Location</h3></center>
			<table class="table table-dark" style="width: 70%; margin-left: 15%;">
				<tr><td><select class="form-control" required name="cntryid" onchange="getState(this.value);"  style="border-color: white; font-size: 20px;">
					<option value="0">Select Country</option>
					<?php   
					$i=0;
					$str3="select * from country_master";
					$data3=mysqli_query($conn,$str3);
					while ($result3 = mysqli_fetch_array($data3)) { $i++; ?>
						<option value="<?php echo $result3['country_id']; ?>"><?php echo $result3['country_name']; ?></option>
					<?php } ?>
				</select></td>
				<td><select class="form-control" id="state-list" name="stateid" onchange="getCity(this.value);" style="border-color: white; font-size: 20px;"><option value="-1">Select State</option></select></td>
				<td><select class="form-control" id="city-list" name="cityid"  style="border-color: white; font-size: 20px;"><option value="-1">Select City</option></select></td>
			</tr>
			<!-- <tr> -->
				<!-- <td colspan=3  style="border: 1px solid #efefef; height: 50px"><center><button style="height:50px; width: 100%" class="btn-success" name="btn" style="font-size: 20px;">Find Hotels</button></center></td> -->

			<!-- </tr> -->
		</table>
		<center><button style="height:30%; width: 70%;font-size: 20px;" class="button iq-mr-0" value="1" name="btn" style="font-size: 20px;"><b>Find Trips</b></button></center>
	</form>
	<br>
	<?php extract($_POST);
if (isset($btn)) {
	if ($cntryid == 0) {
		$source = "";
	}
	else {
	$source = $cntryid;
	if ($sstateid == "" || $sstateid == "Select State"){}
	else{$source = "$source" .','. "$sstateid";}
	if ($scityid == "Select City" || $scityid == "") {}
	else {$source = "$source" .",". "$scityid";} 
$source = "like"." '$source%'";
}
}
?>
</div>	
<?php 
$rowsPerPage = 5;
if(isset($_GET['page']))
{
$pageNum= $_GET['page'];
}else{$pageNum= 1;} 
$previousRows = ($pageNum - 1) * $rowsPerPage;
$str = "select * from trip_master where tr_dest $source limit $previousRows, $rowsPerPage";
$result = mysqli_query($conn,$str);
?>
<div class="container" style="height: 100%;width: 100%;">

	<?php while ($data = mysqli_fetch_array($result)) { ?>
	    
	<div class="card" style="height: 30%;margin-top: 50px;">
		<div class="card-header">
			<h5 class="mb-0">
				<a href="tripview.php?id=<?= $data['tr_id'] ?>"><?= $data['tr_title'] ?></a>	
			</h5>
			<?php $source = explode(',',$data['tr_dest']);
		$cnid = $source[0];
		if (isset($source[1])) {
			$sid = $source[1];
		}else {$sid = -1;}
		if (isset($source[2])) {
			$cid = $source[2];
		}else {$cid = -1;}
		$str2 = "SELECT country_name FROM country_master where country_id = '$cnid' UNION SELECT state_name FROM state_master WHERE state_id = '$sid' UNION SELECT city_name FROM city_master WHERE city_id = '$cid'";
		$result2 = mysqli_query($conn,$str2);$i = 0;
		while ($data2 = mysqli_fetch_array($result2)) {
		    $arr[$i] = $data2[0];$i++;
		}
		$arr = array_reverse($arr);
		$source = implode(',', $arr);

			 ?>
			<div class="card-body" style="height: 100%;">
				<span class="dark-bg iq-pall-10 iq-font-white iq-mr-10 iq-mtb-10"><i class="fa fa-clock-o mr-10"></i>&nbsp;<?= $data['tr_from'] ?> TO <?= $data['tr_to'] ?></span>
				<br><p style="margin-top: 10px;"><Strong>Destination:&nbsp;<?= $source ?></Strong></p>
				<p style="margin-top: 20px;"><?= $data['tr_desc'] ?></p>
				<div class="avtar iq-mr-20 iq-mt-20">
				<h5><bold>Creator Information</bold></h5>
					<div class="row">
						<div class="col-md-8">
							<?php $uid = $data['u_id'];
							 $str2 = "select u_pic,u_name from user_master where u_id=$uid";
							 $result2 = mysqli_query($conn,$str2);$data2=mysqli_fetch_array($result2);?>
							<img alt="" class="img-fluid center-block iq-mr-20" src="../profilepics/<?= $data2['u_pic'] ?>" style="height: 150px;width: 150px;">
							<i class="fa fa-user-circle lead" style="font-size: 20px;"></i>
							<a href="userview.php?id=<?= $data['u_id'] ?>" style="font-size: 20px;"><?= $data2['u_name'] ?></a>
						</div>
						<div class="col-md-4">
							<center>
								<a href="" class="button" style="margin-top:10%;">Request to Join</a>
							</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<?php
	$query = "SELECT COUNT(tr_id) AS numrows FROM trip_master";
	$result2 = mysqli_query($conn,$query);
	$row = mysqli_fetch_assoc($result2);
	 $numrows = $row['numrows'];
	 $lastPage = ceil($numrows/$rowsPerPage); 
	 $phpself = $_SERVER['PHP_SELF'];
	 ?>
		<nav style="margin-top: 30px;margin-bottom: 100px; ">
			<ul class="pagination justify-content-center pagination-box">
				<?php if ($pageNum > 1): ?>
				<?php $page = $pageNum - 1; ?>
				<li class="page-item">
					<a class="page-link" href="<?= "$phpself?page=$page" ?>" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Previous</span>
					</a>
				</li>
				<?php endif ?>
				<?php if ($pageNum < $lastPage): ?>
					<?php $page = $pageNum + 1; ?>
				<li class="page-item">
					<a class="page-link" href="<?= "$phpself?page=$page" ?>" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						<span class="sr-only">Next</span>
					</a>
				</li>
			<?php endif ?>
			</ul>
		</nav>
	</div>
