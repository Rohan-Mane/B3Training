<?php
    //include_once 'crud.php';
    include_once 'insert.php';

         
        if(isset($_GET['id']))
        {
         $id = $_GET['id'];
           $s = fetchData($id);
        $show = pg_fetch_array($s);
            $isbn = $show['isbn'];
            $author = $show['authorname'];
            $book = $show['bookname'];
            $price = $show['price'];
        }
        if($id == '')
        {   
             $isbn = '';
                $author = '';
                $book = '';
                $price = '';
        }
       
      
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Info</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    

<nav class="navbar navbar-dark bg-dark" >
      <a class="navbar-brand" href="#">My Book Shelf</a>
      <div class="card mt-4">
        <div class="form-group-search" >
        <form action="form.php" action="post">
        <input type="text" id="search" class="form-control" 
        placeholder="search Book here..." name="search" />
        <input type="submit" name="find" value="Search" id="searchBtn">
        </form>
        
        </div>
    </div>  
    </nav>

    <div class="container">
        <div class="card mt-3" id="card1">
            <div class="card-body">
                <form action="form.php?id=<?php echo $id;?>" id="myform" method="post">

                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <span style="color: red;" id = "isbv">*</span>
                    <input onchange="formValidation(this.id)" type="number" id="isb" name="isb" autocomplete="off" class="form-control" value="<?php echo $isbn;?>" />
                </div>
                <div class="form-group">
                    <label for="authorName">Author</label>
                    <span style="color: red;" id = "anamev">*</span>
                    <input onchange="formValidation(this.id)" type="text" id="aname" name="aname" autocomplete="off" class="form-control" value="<?php echo $author;?>" />
                </div>
                <div class="form-group">
                    <label for="bookName">Book</label>
                    <input  type="text" id="boname" name="boname" autocomplete="off" class="form-control"  value="<?php echo $book?>" />
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <span style="color: red;" id = "pricev">*</span>
                    <input onchange="formValidation(this.id)" type="number" id="price" name="price" autocomplete="off" class="form-control" value="<?php echo $price;?>" />
                </div>
                    <div class="form-group text-right">
                    <input type="submit" value="Submit" class="btn btn-success" name="send" />
                </div>

                </form>
                <span class="text-danger"><?php echo $msg;?></span>
            </div>
        </div>
    </div>

        


       <!-- 
                <?php
                    if(!isset($_POST['sort']))
                    {
                         $s = fetchData();
                    }
                    else if(isset($_POST['sort']))
                    {
                       $s = "select * from books order by id";
                    }
                   
                    
                    while ($show = pg_fetch_array($s)) {
                     
                ?>
                    <tr class="text-center">
                    <td><?php echo $show['id']; ?></td>
                    <td><?php echo $show['isbn']; ?></td>
                    <td><?php echo $show['authorname']; ?></td>
                    <td><?php echo $show['bookname']; ?></td>
                    <td><?php echo $show['price']; ?></td>
                    <td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $show['id'];?>">Delete</a></button>
                        <button class="btn-info btn" name="edit"><a href="form.php?id=<?php echo $show['id'];?>">Edit</a></button>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
        </div>-->
        <?php  include_once 'display.php'; ?>
    </row>


<script src="script.js"></script>
</body>
</html>