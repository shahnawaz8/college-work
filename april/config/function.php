<?php
function head($title,$css="css/style.css",$title_base="CMS Project")
{
	echo "<!doctype html>";
	echo "<html>";
	echo "<head>";
	echo "<meta charset='utf-8'>";
	echo "<title>$title</title>";
	echo "<link href='$css' rel='stylesheet'>";
	echo "</head>";
	echo "<body>";
	echo "<div class='head'>";
	echo "<a href='index.php'><h1>$title_base</h1></a>";
	echo "</div>";

}
function footer()
{
	//
}








?>