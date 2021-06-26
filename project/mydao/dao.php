<?php
include_once 'dbconnect.php';
include_once 'interface1.php';


class dao implements interface1
{
	private $conn;
	function __construct()
	{
		$db=new dbconnect();
		$this->conn=$db->connect();

	}
	function insert($table,$value)
	{
		$field="";
		$val = "";
		$i =0;
                                           
		foreach ($value as $k => $v) {
			$v = str_replace("'", "", $v);
			if($i==0)
			{
				$field.=$k;
				$val.="'" .$v. "'";
			}
			else
			{
				$field.=",".$k;
				$val.=",'".$v."'";

			}
			$i++;
			}
			return mysqli_query($this->conn,"INSERT INTO $table($field) VALUES($val)") or die(mysqli_error($this->conn));
		}
	

function select($table,$where='',$other='')
{
	if($where !='')
	{
		$where='where '.$where;
	}
	$select = mysqli_query($this->conn,"SELECT * FROM  $table $where $other") or die(mysqli_error($this->conn));
	return $select;
}
function update($table ,$value, $where)
{
	if($where != '')
	{
		$where= 'where ' .$where;
	}
	$val="";
	$i=0;
	foreach ($value as $k => $v) {
			$v = str_replace("'", "", $v);
			if($i==0)
			{
				/*$field.=$k;*/
				$val.="'" .$v. "'";
			}
			else
			{
				/*$field.=",".$k;*/
				$val.=",'".$v."'";

			}
			$i++;
			}
			return mysqli_query($this->conn,"UPDATE $table SET $val $where ") or die(mysqli_error($this->conn));
		}

			function delete($table , $where='')
			{
				if($where != '')
				{
					$where= 'where ' .$where;
				}

				return mysqli_query($this->conn,"delete FROM $table $where") or die(mysqli_error($this->conn));

			}
}
?>
    