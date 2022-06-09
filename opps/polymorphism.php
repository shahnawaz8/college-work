<?php
class A{
       var $Name= "Shahnawaz";              // variable
          function show($m)
            {
             $this->Name=$m;
              echo $this->Name;
            }
       function display()
       {
           echo "abs";
       }
    }
class B extends A {
     function showb()
    {
        echo "This is from class B";
    }
   
} 

$obj= new B;                 //object for class A
$obj->show(12);                //function call

?>