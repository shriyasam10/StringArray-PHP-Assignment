<?php

  $obj = new main();
  $text = "my text";
  $obj->printthis($text);
  
  $array = array(1,2,3,4,5,6,7);
  $obj->printArray($array);

  $array1= array("Shriya","Pune","Bhakharwadi");
  $array2 = array(8,9);
  $obj->mergeArray($array,$array1);

  $array3 = array(11,21,31,41);
  $obj->countArray($array3);

  $array4 = array("FirSt" => 1, "sEconD" => 2);
  $obj->changeKeyCase($array4);

  $array5 = array("a" => "green", "red", "blue", "red");
  $array6 = array("b" => "green", "yellow", "red");
  $obj->arrayDifference($array5,$array6);
	
  $array7 = array(13,24);
  $obj->arrayProduct($array7);

  $array8 = array("mango","banana");
  $obj->arrayPush($array8);

  $array9 = array("lion","tiger","cheetah");
  $obj->arrayShift($array9);

  $array10 = array("a"=>"green","red" , "b"=>"green","blue","red");
  $obj->arrayUnique($array10);
  
  $array11  = array("php", 4.0, array("green", "red"));
  $obj->arrayReverse($array11);

 	class main {
 
	public function __construct() {

		echo '<h2> SHRIYA SAMAK </h2> </br> Week 3 :  Strings and Arrays';
	}

	public function printthis($text) {
		echo '<h1>print function demo </h1>';
		print($text);
		echo '<hr>';	
	}

        public function printArray($array)	{
		echo '<h1>array print function</h1>';							
		print_r($array);
                echo '<hr>';
       }
	
	public function mergeArray($array1,$array2)	{
		echo '<h1> Merge Array Function </h1>';
		$result = array_merge($array1,$array2);
		print_r($result);
		echo '<hr>';
	}

	public function countArray($array3) {
		echo '<h1> Count array function demo </h1>';
		print_r($array3);
		echo'</br>No of elements in the array are:';
		$result1 = count($array3);
		print_r($result1);
		echo '<hr>';
	}

	public function changeKeyCase($array4) {
		echo '<h1> Change array keys case function </h1>';
		echo '</br>Array before function use</br>';
		print_r($array4);
		echo '</br>Array after function use</br>';
		$result3 = array_change_key_case($array4);
		print_r($result3);
		echo '<hr>';
	}
	
	public function arrayDifference($array5,$array6) {
		echo '<h1> Array Difference function demo </h1>';
		echo '</br>First array</br>';
		print_r($array5);
		echo '</br>Second array</br>';
		print_r($array6);
		echo '</br>Difference between the two arrays</br>';
		$result4 = array_diff($array5,$array6);
		print_r($result);
		echo '<hr>';
	}

	
	public function arrayProduct($array7)	{
		echo '<h1> Array product function demo </h1>';
		echo "product(a) = " . array_product($array7) . "</br>";
		echo '<hr>';
	}
	
	public function arrayPush($array8)	{
		echo '<h1> Array push function demo </h1>';
		array_push($array8);
		print_r($array8);
		echo '<hr>';
	}
        
	public function arrayShift($array9) {
		echo '<h1> Array shift function demo </h1>';
		echo '</br>Array before shifting</br>';
		print_r($array9);
		echo '</br>Array after shifting</br>';
		$animal = array_shift($array9);
		print_r($array9);
		echo '</br>' ;
		print_r($animal);
		echo '<hr>';
	}
  	
	public function arrayUnique($array10) {
		echo '<h1> Array Unique elements function demo</h1> ';
		echo '</br>Initial array</br>';
		print_r($array10);
		$result5 = array_unique($array10);
		echo '</br>Result array</br>';
		print_r($result5);
		echo '<hr>';
	}

	public function arrayReverse($array11) {
		echo '<h1> Array Reverse function demo </h1> ';
		echo '</br>Initial array</br>';
		print_r($array11);
		$reversed = array_reverse($array11);
		echo '</br>Reversed array</br>';
		print_r($reversed);
		echo '<hr>';
	}
																	

        public function __destruct() {

		echo '</br> Thankyou';	
	}
   }
?>
