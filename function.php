<?php
// class DBController
// {
// 	private $host = "localhost";
// 	private $user = "root";
// 	private $password = "";
// 	private $database = "tblprodut";
// 	private $conn;

// 	function __construct()
// 	{
// 		$this->conn = $this->connectDB();
// 	}

// 	function connectDB()
// 	{
// 		$conn = mysqli_connect("localhost", "root", "", "tblproduct");
// 		return $conn;
// 	}

// 	function runQuery($query)
// 	{
// 		$result = mysqli_query($this->conn, $query);
// 		while ($row = mysqli_fetch_assoc($result)) {
// 			$resultset[] = $row;
// 		}
// 		if (!empty($resultset))
// 			return $resultset;
// 	}

// 	function numRows($query)
// 	{
// 		$result  = mysqli_query($this->conn, $query);
// 		$rowcount = mysqli_num_rows($result);
// 		return $rowcount;
// 	}
// }
$conn = mysqli_connect("localhost", "root", "", "tblproduct");

//Mengambil data dari database
function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$datas = [];
	while ($data = mysqli_fetch_assoc($result)) {
		$datas[] = $data;
	}
	return $datas;
}

?>