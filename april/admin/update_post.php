<h2>Update Post</h2>
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
        <td width="60%"><?php echo $post_res['post_msg'];?></td>
    	<td width="10%"><?php echo $post_res['post_tag'];?></td>
        <td width="10%"><a href="?post_id=<?php echo $post_res['id']?>&action=update">Update</a></td>
    </tr>
    
    <?php
	
}
?>
</table>
</center>