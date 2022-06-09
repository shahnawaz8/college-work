<?php
$x=array("duccate","delhi","gzb",77767687668,);
echo"<h1>PHP Indexed Array</h1>";

echo"<pre>";
print_r($x);

echo"<br>";
echo $x[3];
$x[4]="hir";
echo $x[4];
print_r($x);

echo"<h1>PHP Associaded Array</h1>";
$y=array("Shahnawaz"=>"20 year","Amir"=>"21 year","Mohsin"=>"17 year");
echo"<pre>";
print_r($y);

//echo $y["mohsin"];

  $ax=array(12,45,448,47,45,78,88,98);
echo "<br/><pre>";
print_r($ax);
echo "<br/>".max($ax);                                   //for maximum value in the array
echo "<br/>".min($ax)."<br/>";                           //for minimum value in the array
sort($ax);                                               //sort array in ascending order
echo "<pre>";
print_r($ax);
rsort($ax);                                              //sort array in descending order

echo "<pre>";
print_r($ax);

array_reverse($ax);                                      //to reverse an array

echo "<pre>";
print_r($ax);

$mr=array_merge($x,$ax);                                //combine two or more array

echo "<pre>";
print_r($mr);

array_pop($mr);                                         //delete last element
 
echo "<pre>";
print_r($mr);


array_push($mr,786);                                    //add  element at last of an array
 
echo "<pre>";
print_r($mr);

array_shift($mr);                                       //delete 1st elelment 
   
echo "<pre>";
print_r($mr);

array_unshift($mr,"HIR","MUR");                         //add value at string

echo "<pre>";
print_r($mr);

array_rand($mr);                                        //randomly change the array value

echo "<pre>";
print_r($mr);

$m=array_sum($ax);                                      //sum of an array

echo "<pre>".$m;

?>