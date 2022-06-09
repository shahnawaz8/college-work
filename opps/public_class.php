<?php
class A{var $Name= "Shahnawaz";
    public //in case of public class function and variable are used by wich class extends this class,it self and any user 
                     // variable
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