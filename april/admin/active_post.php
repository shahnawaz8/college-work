<h2>Active and Deactive Post</h2>
<center>
<table width="90%" border="1" cellspacing="10px">
<?php
$query="SELECT * FROM `post`";
$post_data=mysqli_query($dbcon,$query);
while($post_res=mysqli_fetch_array($post_data))
{
	?>
    <tr valign="top">
    	<td width="20%"><?php echo $post_res['post_title'];?></td>
        <td width="70%"><?php echo $post_res['post_msg'];?></td>
    	<td width="10%"><?php echo $post_res['post_tag'];?></td>
    </tr>
    
    <?php
	
}
?>
</table>
</center>