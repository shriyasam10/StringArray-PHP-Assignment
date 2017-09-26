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

        public function __destruct() {

		echo '</br> I\'m Done';	
	}
   }
?>
