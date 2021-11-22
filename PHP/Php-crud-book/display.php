<link rel="stylesheet" href="style.css">

<div class="card mt-3" id="card2" >
        <table class="table">
            <thead>
                <tr >
                    <th>Sr. No.</th>
                    <th><a href="?sort=isbn">^</a> ISBN.</th>
                    <th><a href="?sort=authorname">^</a>Author Name</th>
                    <th>Book Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                     $order = '';$sql ='';

                     if(isset($_GET['sort']))
                     {
                        $order = $_GET['sort'];
                        
                        if($order == 'isbn')
                        {
                         $s = sortIsbn();  
                        }
                        if($order == 'authorname')
                        {
                            $s = sortAuthor();
                        }
                     }
                     if(isset($_GET['search']))
                     {
                        $order = $_GET['search'];
                        if($order == '')
                        {
                              $s = fetchData();
                        }
                        else{
                            $sql = "select * from books where isbn= ".$order;
                            $s = pg_query($sql);
                        }
                     }
                     else
                     {
                            $s = fetchData();
                    }
                            
                    while ($show = pg_fetch_array($s)) {
                      
                     
                ?>
                    <tr class="text-center">
                    <td><?php echo $show['id']; ?></td>
                    <td><?php echo $show['isbn']; ?></td>
                    <td><?php echo $show['authorname']; ?></td>
                    <td><?php echo $show['bookname']; ?></td>
                    <td><?php echo $show['price']; ?></td>
                    <td>
                        <button class="btn-info btn " name="edit"><a href="form.php?id=<?php echo $show['id'];?>" class="text-light">Edit</a></button>
                        
                        <button class="btn-danger btn"><a href="delete.php?id=<?php echo $show['id'];?>" class="text-light">Delete</a></button>
                        
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
        </div>