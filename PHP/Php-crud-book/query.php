<?php


	// insert data query
	function insert($isbn,$author,$book,$price)
	{
		$sql =<<<EOF
				insert into books(isbn,authorname,bookname,price) values($isbn,'$author','$book',$price);
		EOF;
		$exe = pg_query($sql);
		if($exe)
		{
			echo "Data added";
		}else echo "error";

	}

	

	// insert data query
	function update($id,$isbn,$author,$book,$price)
	{
		$sql =<<<EOF
				update books set isbn=$isbn,authorname='$author',bookname='$book',price=$price where id=$id;
		EOF;
		$exe = pg_query($sql);
		if($exe)
		{
			echo "Data updated";
		}else echo "error";

	}




	// fetch data query
	function fetch($id = '')
	{
		if($id == '')
		{
		$sql =<<<EOF
						select * from books;
			EOF;
			$ret = pg_query($sql);
		}
		else
		{
			$sql =<<<EOF
						select * from books where id= $id;
			EOF;
			$ret = pg_query($sql);
		}
			return $ret;
	}


	//delete data query
	function delete($a)
	{
		$sql =<<<EOF
					delete from books where id = $a;
		EOF;
		$ret = pg_query($sql);
	}


	//sort
	function sortbyI()
	{
		$sql =<<<EOF
					select * from books order by isbn;
		EOF;
		$ret = pg_query($sql);
		return $ret;
	}
	//sort
	function sortbyA()
	{
		$sql =<<<EOF
					select * from books order by authorname;
		EOF;
		$ret = pg_query($sql);
		return $ret;
	}

?>