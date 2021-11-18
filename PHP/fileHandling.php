<?php
//echo readfile("webdictionary.txt");
//$myfile = fopen("webdictionary.txt", "r");
//echo fread($myfile,filesize("webdictionary.txt"));
// echo "<br>";
// echo fgets($myfile);
// echo "<br>";
// // Output one line until end-of-file
// while(!feof($myfile)) {
//     echo fgets($myfile) . "<br>";
//   }


  // Output one character until end-of-file
// while(!feof($myfile)) {
//     echo fgetc($myfile);
//     echo "<br>";
//   }


$myfile = fopen("textfile.txt", "w");
fwrite($myfile, "I'm learning php file handling");
echo fgets($myfile);
fclose($myfile);
?>