<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Php tutorial</title>
</head>
<body>

	<?php  //declare(strict_types=1); 
		/*echo "Hello World";

		$a = 20;
		$b = 30;
		var_dump(($a));
		echo $a+$b;*/

		//Arrays
		// $fruits = array("Apple", "Banana", "Graps");
		// var_dump($fruits);

		// $var1 = null;

		// $str1 = "My name is Rohan";
		// //echo strlen($str1);
		// //echo str_word_count($str1);
		// echo strpos($str1, "Rohan");

		// $arr = array(4,1,3,2,8,5);
		// sort($arr);

		// $leng = count($arr);

		// for ($i=0; $i < $leng; $i++) { 
		// 	echo $arr[$i];
		// 	echo "<br>";
		// }

		//A1 - Variables
		$txt = "Hello world!";				
		$x = 5;
		$y = 10.5;
		echo $txt;
		echo $x;
		echo $y;
		echo "<br>";

		//A2 - echo/print
		echo "<h2>PHP is Fun!</h2>";
		echo "Hello world!<br>";
		echo "I'm about to learn PHP!<br>";
		echo "This ", "string ", "was ", "made ", "with multiple parameters.";
		print "<h2>PHP is Fun!</h2>";
		print "Hello world!<br>";
		print "I'm about to learn PHP!";

		//A3- Data types
		$x = "Hello world!"; 
		$y = 123;
		$z = 10.315;
		$a = true;

		var_dump($x);
		var_dump($y);
		var_dump($z);
		var_dump($a); 	//typy of variable

		$cars = array("Volvo", 'BMW', "Toyota");
		var_dump($cars);
		echo("<br>");

		//A4 - String functions
		echo strlen("Hello world!"); 	//gives length of string 
		echo("<br>");
		echo strrev("Rohan"); 		//reverse the string
		echo("<br>");

		echo strpos("I am Rohan", "am"); 	//givs index of second word in first string // 2
		echo("<br>");

		echo str_replace("World", "Rohan", "Hello World"); 		//replcaes world in hello world by ROhan // Hello Rohan
		echo("<br>");

		//A5 - Number
		$x = 5985;
		var_dump(is_int($x));

		echo PHP_INT_MAX;
		echo PHP_INT_MIN;
		//ECHO PHP_INT_SIZE(14);
		echo "<br>";

		$x = 10.365;
		var_dump(is_float($x));
		echo "<br>";
		$x = 1.9e411;
		
		var_dump($x);

		echo '<br>';

		$x = acos(8);
		var_dump($x);

		//is_numeric
		echo '<br>';
		$x = 5985;
		var_dump(is_numeric($x));//true

		$x = "5985";
		var_dump(is_numeric($x));//true

		$x = "59.85" + 100;
		var_dump(is_numeric($x));//true

		$x = "Hello";
		var_dump(is_numeric($x));//bool

		
		echo '<br>';

		//type casting
		$x = 23465.768;
		$castInt = (int)$x;
		echo $castInt;
		echo '<br>';

		$x = "23465.768";
		$int_cast = (int)$x;
		echo $int_cast;
		echo '<br>';


		//A6 -Number
		echo(pi());
		echo '<br>';

		echo(min(0, 150, 30, 20, -8, -200));  // returns -200
		echo '<br>';

		echo(max(0, 150, 30, 20, -8, -200));  // returns 150
		echo '<br>';
		echo(abs(-6.7));  // returns 6.7

		echo '<br>';
		echo(sqrt(64));  // returns 8
		echo '<br>';

		echo(round(0.60));  // returns 1
		echo '<br>';
		echo(round(0.49));  // returns 0
		echo '<br>';

		echo(rand());
		echo '<br>';

		echo(rand(10, 100));

		echo '<br>';
		define("GREETING", "Welcome to Benchmark");
		echo GREETING;
		echo '<br>';

		define("GREETING", "Welcome to W3Schools.com!", true);    // case sensitivity
		//echo greeting;

		echo '<br>';
		$colors = array("red", "green", "blue", "yellow");
		foreach ($colors as $value) {
  			echo "$value <br>";
		}

		// foreach($colors as $value){
		// 	echo "$value <br>"
		// }		
		echo '<br>';
		echo '<br>';


		$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

		foreach($age as $x => $val) {
 			 echo "$x = $val<br>";
		}
		echo '<br>';
		echo '<br>';

		//Function 
		function familyName($fname) {
			echo "$fname Refsnes.<br>";
		  }
		  
		  familyName("Jani");
		  familyName("Hege");
		  familyName("Stale");
		  familyName("Kai Jim");
		  familyName("Borge");
		  

		  echo '<br>';
//Strict mode
		  function addNumbers(int $a, int $b) {
			return $a + $b;
		  }
		  echo addNumbers(5, "5");
		
		  echo '<br>';

		 
		//   function addNumbers(int $a, int $b) {
		// 	return $a + $b;
		//   }
		//   echo addNumbers(5, "5");
		echo '<br>';
		function add_five(&$value) {			//pass by reference
			$value += 5;
		}

		$num = 2;
		add_five($num);
		echo $num;

		echo '<br>';
		//A8-Array
		$cars = array("Mercedes", "BMW", "Tata");			//indexed array
		echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

		//array functions
		echo '<br>';

		echo count($cars);
		echo '<br>';

		$carLength = count($cars);

		for($x=0;$x<$carLength;$x++){
			echo $cars[$x];
			echo "<br>";
		}
		echo "<br>";
		echo "<br>";

		$age = array("Rohan"=>22, "Chandler"=>55, "Joe"=>60);			//associative array
		echo "Chandler is ". $age["Chandler"] . " years old";
		echo "<br>";
		echo "<br>";

		//looping
		foreach($age as $x=>$value){
			echo "Key : ". $x . ", Value: ".$value;
			echo "<br>";
		}

		$cars = array (									//multidimentional array
			array("Volvo",22,18),
			array("BMW",15,13),
			array("Saab",5,2),
			array("Land Rover",17,15)
		  );

		  echo "<br>";

		  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
		  echo "<br>";


		  for ($row = 0; $row < 4; $row++) {
			echo "<p><b>Row number $row</b></p>";
			echo "<ul>";
			for ($col = 0; $col < 3; $col++) {
			  echo "<li>".$cars[$row][$col]."</li>";
			}
			echo "</ul>";
		  }
		  echo "<br>";
		  echo "<br>";


		  //sorting array
		  $numbers = array(4, 6, 2, 22, 11);
		  //sort($numbers);
		  rsort($numbers);

		  $arrlength = count($numbers);
		for($x = 0; $x < $arrlength; $x++) {
  			echo $numbers[$x];
  			echo "<br>";
		}
		echo "<br>";


		//SuperGlobals
		  // 1 - $GLOBAlS
		$x = 75;
		$y = 25;
 
		function addition() {
  			$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
		}
 
		addition();
		echo $z;

		echo "<br>";

		  //  2 - $_SERVER
		 echo $_SERVER['PHP_SELF'];

	?>
</body>
</html>