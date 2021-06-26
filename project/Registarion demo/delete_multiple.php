<?php
	require("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style type="text/css">
		table,tr,td{
			border: 1px solid black;
			border-collapse: collapse;
			text-align: center;
		}
		td{
			padding: 5px;
		}
	</style>
</head>
<body>
	<table>
			<thead>
				<tr>
					<td>#</td>
					<td>No.</td>
					<td>Name</td>
					<td>Email</td>
					<td>Phone</td>
					<td>Gender</td>
					<td>Address</td>
					<td>Country</td>
					<td>Hobby</td>
				</tr>
			</thead>
			<form action="" method="POST">
			<tbody>
				<?php
					$q = "SELECT * FROM register";
					$data = mysqli_query($con,$q);
					$i = 0;
					while($result = mysqli_fetch_array($data)){
						$i++;
					// print_r($data);
					// exit();
				?>
				<tr>
					<td align="center" bgcolor="#FFFFFF">
						<input name="chk[]" type="checkbox" id="chk[]" value="<?php echo $result['id']; ?>"></td>
					<td><?php echo $i;?></td>
					<td><?php echo $result['name'];?></td>
					<td><?php echo $result['email'];?></td>
					<td><?php echo $result['phone'];?></td>
					<td><?php echo $result['gender'];?></td>
					<td><?php echo $result['address'];?></td>
					<td><?php echo $result['country'];?></td>
					<td><?php echo $result['interest'];?></td>
				</tr>
				<?php
				}
				?>
				<tr>
					<td colspan="9"><input type="submit" name="add" id="delete1" value="Delete"></td>
				</tr>
				
				<!-- $count = mysqli_num_rows($result);
				if(isset($delete1)){
					for($j=0;$j<$count;$j++){
						$del_id = $checkbox[$j];
						$dq = "DELETE FROM register WHERE id='$del_id'";
						$r = mysqli_query($dq);
					}
					if($r){
						header("Location:delete_multiple.php");
					}
				} -->
			</tbody>
			</form>
			<?php
				if(isset($_POST['add'])){
					
					$cnt = array();
					$cnt = count($_POST['chk']);
					if($cnt > 0){
						for($i=0;$i<$cnt;$i++)
						{
	 						$row_no=$_POST['chk'][$i];
	 						
	 						$sql="DELETE FROM register WHERE id=".$row_no;
	 						mysqli_query($con,$sql);
	 						header("Location:delete_multiple.php");
						}
					}else
					{
						echo "There is no data for deletion.";
					}
				}
				?>
	</table>
</body>
</html>