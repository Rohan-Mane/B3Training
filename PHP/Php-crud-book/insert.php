<?php


	include_once 'fetch.php';
	//include_once 'form.php';

	$isbn=$authorname=$bookname=$price=$msg=$id='';
	//insert and update data

			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
		    if( $_POST['price'] == '' || $_POST['aname'] == '' || $_POST['isb'] == '')
		    {
		       $msg = "Please Fill All Feild Correctly!!";
		    }
		    else
		    {
		    	$isbn = $_POST['isb'];$authorname = $_POST['aname'];$bookname = $_POST['boname'];$price = $_POST['price'];
				if($conn && isset($_GET['id']))
				{
					$id = $_GET['id'];
			    	if($id == '')
			    	{
			        	insert($isbn,$authorname,$bookname,$price);
			        	$msg = "Data Added!";

			    	}
					else
					{
						update($id,$isbn,$authorname,$bookname,$price);
						$msg = "Data Updated!";
						header("location:form.php");
						$id = '';
					}
			    }	
			}
			//header("location:form.php");

		}


?>