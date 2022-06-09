<?php
class A{var $Name="Shahnawaz";
    protected //in case of public class function and variable are used by wich class extends this class,it self and any user 
                     // variable
          function show($m)
            {
             $this->Name=$m;
              
            }
       function display()
       {
           echo $this->Name;
       }
    }
class B extends A {
     function showb()
    {
       echo $this->display();
         //echo "This is from class B";
    }
   
} 

$obj= new B;                 //object for class A
$obj->showb();                //function call

?>