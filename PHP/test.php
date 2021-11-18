<?php

    $cn = pg_connect("host=localhost port=5432 dbname=movie_data user=postgres password=8963");
   
    $result = pg_query($cn, "select * from movies");
    while($row = pg_fetch_object($result))
    {
        echo "\n". $row->movie_id;
    }
    pg_close($cn);
?>
