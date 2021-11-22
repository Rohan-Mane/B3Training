<?php
include_once 'query.php';
  	
  	$host = "host = localhost";
	$user = "user = postgres";
	$port = "port = 5432";
	$password = "password = 8963";
	$db = "dbname = crud";


		// Connection
		$conn = pg_connect("$host $port $db $user $password");


		function fetchData($id = '')
		{
			global $conn;
			if($conn)
			{
				$dis = fetch($id);
			}
			return $dis;
		}


		// fetch all data
		function findData($id)
		{
			global $conn;
			if($conn)
			{
				$find = fetch($id);
			}
			return $find;
		}


		// sort by isbn
		function sortIsbn()
		{
			global $conn;
			if($conn)
			{
				$sort1 = sortbyI();
			}
			return $sort1;
		}
		// sort by Authorname
		function sortAuthor()
		{
			global $conn;
			if($conn)
			{
				$sort2 = sortbyA();
			}
			return $sort2;
		}





    

?>