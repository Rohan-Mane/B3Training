
<?php $sort = array('isbnAsc', 'isbnDesc', 'booknameAsc', 'booknameDesc', 'authorAsc', 'authorDesc', 'publicationAsc','publicationDesc','priceAsc', 'priceDesc' );?>

<div class="col-lg" style="padding-top: 5%">
        <div>
           <a class="btn btn-primary" href="<?php echo ROOT_PATH; ?>store/add/"
">Add Book</a>
           <ul class="nav navbar-nav navbar-right ">
                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?> " >
                <div style="float:left">
                <input type="search" name="search_data" class="form-control">
                </div>
                <div style="float:right">
                <input type="submit" name="search" class="btn btn-success" value="Search" >
                </div>
                
                </form>
            </ul>
        </div><br>
        <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="bg-dark text-white text-center">
                    <th class='text-center'>Sr. No.</th>
                    <th class='text-center'> ISBN
                        <a class="text-right" href="<?php echo ROOT_PATH;?>home/index/<?php echo $sort[0];?>">↑</a>
                        <a class="text-right" href="<?php echo ROOT_PATH;?>home/index/<?php echo $sort[1];?>">↓</a>
                    </th >
                    <th class='text-center'>Book Name
                        <a class="text-right" href="<?php echo ROOT_PATH;?>home/index/<?php echo $sort[2];?>">↑</a>
                        <a class="text-right" href="<?php echo ROOT_PATH;?>home/index/<?php echo $sort[3];?>">↓</a>
                    </th>
                    <th class='text-center'>Author Name
                        <a class="text-right" href="<?php echo ROOT_PATH;?>home/index/<?php echo $sort[4];?>">↑</a>
                        <a class="text-right" href="<?php echo ROOT_PATH;?>home/index/<?php echo $sort[5];?>">↓</a>
                    </th>
                    <th class='text-center'>Publication
                        <a class="text-right" href="<?php echo ROOT_PATH;?>home/index/<?php echo $sort[6];?>">↑</a>
                        <a class="text-right" href="<?php echo ROOT_PATH;?>home/index/<?php echo $sort[7];?>">↓</a>
                    </th>
                    <th class='text-center'>Price
                        <a class="text-right" href="<?php echo ROOT_PATH;?>home/index/<?php echo $sort[8];?>">↑</a>
                        <a class="text-right" href="<?php echo ROOT_PATH;?>home/index/<?php echo $sort[9];?>">↓</a>
                    </th>
                    <th class='text-center'>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $srno = 1;?>
                <?php foreach ($viewmodel as $value) : ?>
                    
                <tr class="text-center">
                    <td><?php echo $srno; ?></td>
                    <td><?php echo $value['isbn']; ?></td>
                    <td><?php echo $value['bookname']; ?></td>
                    <td><?php echo $value['authorname']; ?></td>
                    <td><?php echo $value['bpublication']; ?></td>
                    <td><?php echo $value['price']; ?></td>
                    <td>
                        <a class="btn btn-info" href="<?php echo ROOT_URL;?>store/add/<?php echo $value['id'];?>">Edit</a>
                         <a class="btn btn-danger" href="<?php echo ROOT_URL;?>store/delete/<?php echo $value['id'];?>">Delete</a>
                    </td>
                </tr>
                <?php $srno++;?>
                <?php endforeach; ?>

             
            </tbody>
        </table>
    </div>
</div>