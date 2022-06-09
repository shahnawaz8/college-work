<?php
class A{
       var $x= "Shahnawaz";              // variable
          function show()
            {
             echo "class A";
            }
       
        }

$obj= new A;                 //object for class A
$obj->show();                //function call
echo "<br>".$obj-> x;        //acceses variable 


?>