<?php
class A{var $Name="Shahnawaz";
    private //in case of private class function and variable are used by use it self only no permition allowed to access private class
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