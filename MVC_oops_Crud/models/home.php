<?php

class HomeModel extends Model{
	public function Index(){

		$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
		$get = filter_input_array(INPUT_GET,FILTER_SANITIZE_STRING);

		if($get['id']){
			$sort = $get['id'];
			$row = $this->sortIsbn($sort);
			return $row;
		}

		if(isset($post['search']))
		{
			if($post['search_data'] == '')
			{
				$row = $this->allData();
				return $row;
			}
			$this->query('SELECT * FROM books WHERE isbn = :isbn');
			$this->bind(':isbn', $post['search_data']);
			$row = $this->resultSet();
			//print_r($row);die();
			return $row;
		}else{
			 $row = $this->allData();
			 //print_r($row);
				return $row;
			
		}

		
	}


	public function allData(){
			$this->query("select * from books");
			$rows = $this->resultSet();
			return $rows;
	}

	public function sortIsbn($sort){
		if($sort == 'isbnAsc'){
			$this->query("select * from books order by isbn");
		}
		if($sort == 'isbnDesc'){
			$this->query("select * from books order by isbn desc");
		}
		if($sort == 'booknameAsc'){
			$this->query("select * from books order by bookname");
		}
		if($sort == 'booknameDesc'){
			$this->query("select * from books order by bookname desc");
		}
		

		$rows = $this->resultSet();
		return $rows;
	}


	

}

?>