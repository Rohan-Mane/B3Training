<div class="text-center bg-info" style="height:150px;">
	<div class="card-text" style="margin-top:100px; padding-top:10px;">
		<p>Are you sure you want to delete this post?.</p>
	</div>
	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" style="padding-top: 3%">
		<input type="hidden" name="id" value="<?php echo $viewmodel; ?>">
		<!--<?php// print_r($viewmodel);?><br>-->
		<input type="submit" name="submit" class="btn btn-danger" value="Yes" />
		<a class="btn btn-info" href="<?php echo ROOT_PATH; ?>">No</a>
	</form>
</div>