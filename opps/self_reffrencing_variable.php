<?php
class A{
       var $x= "Shahnawaz";              // variable
          function show()
            {
             echo $this->x;
            }
          function show2()
            {
            $this->show();  
            }
       
        }

$obj= new A;                 //object for class A
$obj->show2();                //function call
    
?>