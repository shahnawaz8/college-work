<html>
<head></head>
<body>
    <center>
    <form method="get">
        <table border="0" style="background-color:lightgray;">
        <tr>
   <td> Enter The No. of rows:</td>
        <td> <input type="number" name="r"/></td><tr></tr>
        <tr><td> Enter The NO. of cols:</td>
            <td><input type="number" name="c"/></td>
            </tr>
        <tr><td colspan="2"> <input type="submit" name="submit" style="margin-left:100px; margin-top:10px;" value="Craete Table"> </td>
            </tr></table>
    
    
    </form>
    </center>
    
    </body>


</html>
<?php
if(isset($_GET['submit']))
{
    $rows=$_GET['r'];
    $cols=$_GET['c'];
    echo "<center>";
    echo "<table  style='border:1px solid red;border-collapse: collapse; width:100%;'>";
    for($i=0;$i<$rows;$i++)
    {
        echo"<tr style='border:1px solid red;border-collapse: collapse';>";
        for($j=0;$j<$cols;$j++)
        {
           echo "<th style='border:1px solid red;border-collapse: collapse';>"."rows".$i."Cols".$j."</th>"; 
        }
    echo"</tr>";
    }
echo"</table>";
    echo"</center>";
}
?>