<div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title">Add Car Details</h1>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>ISBN.:</label>&nbsp;&nbsp;<span style="color: red;">*</span>
    		<input type="number" name="isbn" class="form-control" value="<?php echo $viewmodel['isbn'];?>">
    	</div>
    	<div class="form-group">
    		<label>Book Name:</label>&nbsp;&nbsp;<span style="color: red;">*</span>
    		<input type="text" name="bookname" class="form-control" value="<?php echo $viewmodel['bookname'];?>">
    	</div>
    	<div class="form-group">
    		<label>Author Name:</label>
    		<input type="text" name="authorname" class="form-control" value="<?php echo $viewmodel['authorname'];?>">
    	</div>
    	<div class="form-group">
    		<label>Publication:</label>&nbsp;&nbsp;<span style="color: red;">*</span>
    		<input type="text" name="bpublication" class="form-control" value="<?php echo $viewmodel['bpublication'];?>">
    	</div>
    	<div class="form-group">
    		<label>Price:</label>
    		<input type="number" name="price" class="form-control" value="<?php echo $viewmodel['price'];?>">
    	</div>

    	<input type="submit" name="submit" class="btn btn-primary" value="submit">
    	<a class="btn btn-danger" href='<?php echo ROOT_PATH; ?>'>Cancel</a>
    </form>
  </div>
</div>