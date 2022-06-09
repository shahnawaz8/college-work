<form action="" method="post" name="form1" id="form1">
<table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
    <tr><td width="215" style="background-color:lightgray;">Validation Code:</td>
        <td width="162">
        <?php $arr=array_merge(range(0,9),range("A","Z"),range("a","z"),range("@","#"));
              //echo"<pre>";
             // print_r($arr);
        for($i=1;$i<5;$i++)
        {
            $ch=$arr[array_rand($arr)];
            @$captcha=$captcha.$ch;
            @$fc=$fc.$ch.",";
        }
            
            //echo$fc."<br>";
            $nar=explode(",",$fc);
            
        for($i=0;$i<5;$i++)
        {
            echo $nar[$i];
            //echo "<img src='$nar[$i].GIF'/>";
        }
        
        if(isset($_POST['match']))
        {
        if($_POST['img']==$_POST['hid'])
            {
              echo "<br/><font color='blue'>Security code matched</font>";    
            }
            else 
                 { 
                   echo "<br/><font color='red'>try again </font>"; 
                 }
        }
            
            ?>
            
        
        
        </td></tr>
    <tr><td style="background-color:lightgray;">ENTER THE ABOVE CODE HARE:</td>
        <td style="background-color:lightgray;"><input type="text" name="img"/> </td>
    </tr>
    <tr><td colspan="2" align="center"><input type="submit" name="match" value="Submit Security Code"/>  </td></tr>
    
    
    </table>
<input type="hidden" value="<?php  echo $captcha;?>" name="hid"/>





</form>
