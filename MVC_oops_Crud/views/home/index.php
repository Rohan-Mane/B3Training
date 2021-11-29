<div class="col-lg" style="padding-top: 5%">
        <div>
           <a class="btn btn-primary" href="<?php echo ROOT_PATH; ?>store/add/"
">Add Book</a>
           <ul class="nav navbar-nav navbar-right ">
                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <input type="search" name="search_data">
                <input type="submit" name="search" class="btn btn-info" value="Search">
                </form>
            </ul>
        </div>
        <div>
        <table class="table table-striped table-bordered">
            <thead>
            <tr class="bg-dark text-white text-center">
                    <th>Sr. No.</th>
                    <th> ISBN
                        <a class="text-right" href="<?php echo ROOT_PATH;?>home/index/<?php echo $sort[0];?>">^</a>
                        <a class="text-right" href="<?php echo ROOT_PATH;?>home/index/<?php echo $sort[1];?>">^</a>
                    </th>
                    <th>Book Name
                        <a class="text-right" href="<?php echo ROOT_PATH;?>home/index/<?php echo $sort[2];?>">^</a>
                        <a class="text-right" href="<?php echo ROOT_PATH;?>home/index/<?php echo $sort[3];?>">^</a>
                    </th>
                    <th>Author Name</th>
                    <th>Publication</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $sr = 1;?>
                <?php foreach ($viewmodel as $value) : ?>
                    
                <tr class="text-center">
                    <td><?php echo $sr; ?></td>
                    <td><?php echo $value['isbn']; ?></td>
                    <td><?php echo $value['bookname']; ?></td>
                    <td><?php echo $value['authorname']; ?></td>
                    <td><?php echo $value['bpublication']; ?></td>
                    <td><?php echo $value['price']; ?></td>
                    <td>
                        <a class="btn btn-info" href="<?php echo ROOT_URL;?>store/add/<?php echo $value['id'];?>">🖊</a>
                         <a class="btn btn-danger" href="<?php echo ROOT_URL;?>store/delete/<?php echo $value['id'];?>">🗑</a>
                    </td>
                </tr>
                <?php $sr++;?>
                <?php endforeach; ?>

             
            </tbody>
        </table>
    </div>
</div>