

<?php

$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('fk', $conn);

$edit_record = $_GET['edit'];

$query = "SELECT * FROM dcom WHERE sid='$edit_record'";

$run = mysql_query($query);

while ($row=mysql_fetch_array($run) )
{
	$sid 		 = $row['sid'];
	$roll_no 	 = $row['roll_no'];
	$student_name = $row['student_name'];
	$father_name = $row['father_name'];
	$Birth_Date  = $row['Birth_Date'];
	$Email		 = $row['Email'];
	$Address	 = $row['Address'];
	$City  		 = $row['City'];
	$State 		 = $row['State'];
	$cnic		 = $row['cnic'];
	$Matric_Course 			 = $row['Matric_Course'];
	$Matric_Board 			 = $row['Matric_Board'];
	$Matric_Percentage   	 = $row['Matric_Percentage'];
	$Matric_PassingOfYear 	 = $row['Matric_PassingOfYear'];
	
	
}

?>

<html>

	<head>
		<title>Dcom Student Update Form</title>
			<style>
.frm{  background:green; border-radius:30px;width:444px;padding:50px 50px ;margin:auto;font-family:rokkittbold}
.inpt{color:white;margin:22px 22px; padding:10px; border-radius:30px;font-family:rokkittbold}
.inpt input{ ; padding-left:22px;float:right;font-family:rokkittbold}
label{ float:left;}
#h22{ text-align:center; margin-top:0px;}
select{float:right;}



.bttn{ background:silver;padding:10px 22px ;border-radius:22px; width:122px;margin-left:144px; }
.bttn input{ border:none; background:none;color:blue;font-weight:bold;font-family:rokkittbold;font-size:16px;}
.bttn input:hover{ color:black;}
@media only screen and (max-width:993px){
.frm{ margin-left:0;background:blue;}
}
</style>

	</head>

<body>
<div class="frm">
<form method='post' action='dcomedit.php?edited_form=<?php echo $sid;?>'>
<h2 id="h22">Student Update Form</h2>
<div class="inpt">
		<label> Student Roll NO</label>
		<input type="text" name="roll_no1" value="<?php echo $roll_no;?>" required />
<br><hr>
		<label> Student Name </label>
		<input type="text" name="student_name1" value="<?php echo $student_name;?>" required />
<br><hr>
		<label> Father Name</label> 
		<input type="text" name="father_name1" value="<?php echo $father_name;?>" required />
<br><hr>
		<label> CNIC</label> 
		<input type="text" name="cnic1" value="<?php echo $cnic;?>" maxlength='15' required />
<br><hr>
		<label> roll no</label> 
		<input type="text" name="Email1" value="<?php echo $Email;?>" />
<br><hr>
<label> Date of Birth</label>
		 <input type="date" name="Birth_Date1"  value="<?php echo $Birth_Date?>" required/>
<br><hr>
<label>Gender</label><br>

Male<input  type="radio" name="Gender1" value="Male" checked="checked" />
<br>
Female<input  type="radio" name="Gender1" value="Female" />
<br> <hr>
		<label> Address</label><textarea name="Address1" rows="4" cols="50"  ><?php echo $Address;?></textarea>
<br><hr>
<label>City</label><input type="text" name="City1" maxlength="30" value="<?php echo $City;?>" required/>
<br><hr>
<label>State</label><input type="text" name="State1" maxlength="30" value="<?php echo $State;?>" required/>
<br><hr>
<label>Qualification</label>


 <br>
<label>1-Matric</label>

<input type="text" name="Matric_Course1"	value="<?php echo $Matric_Course;?>" maxlength="30" required /><br><br>
<input type="text" name="Matric_Board1" value="<?php echo $Matric_Board;?>" maxlength="30" required /><br><br>
<input type="text" name="Matric_Percentage1" value="<?php echo $Matric_Percentage;?>" maxlength="5" required/><br><br>
<input type="text" name="Matric_PassingOfYear1" value="<?php echo $Matric_PassingOfYear;?>" maxlength="10"  required />
<br><hr>
</div>
<br><br>

<div class="bttn"><input type="submit" value="Update" name="update"/>
<input  type="reset" value="Reset"/></div>



</div>
</form>

</body>
</html>


<?php
if(isset($_POST['update']))
{
	$edited_id 			= $_GET['edited_form'];
	$roll_no1			= $_POST['roll_no1'];
	$student_name1		= $_POST['student_name1'];
	$father_name1		= $_POST['father_name1'];
	$cnic1				= $_POST['cnic1'];
	$Birth_Date1		= $_POST['Birth_Date1'];
	$Email1				= $_POST['Email1'];
	$Gender1			= $_POST['Gender1'];
	$Address1			= $_POST['Address1'];
	$City1				= $_POST['City1'];
	$State1				= $_POST['State1'];
	$Matric_Course1		= $_POST['Matric_Course1'];
	$Matric_Board1		= $_POST['Matric_Board1'];
	$Matric_Percentage1		= $_POST['Matric_Percentage1'];
	$Matric_PassingOfYear1	= $_POST['Matric_PassingOfYear1'];



	$query1 = "UPDATE dcom SET roll_no='$roll_no1',
								student_name='$student_name1',
								father_name='$father_name1',
								cnic='$cnic1',
								Birth_Date='$Birth_Date1',
								Email='$Email1',
								Gender='$Gender1',
								Address='$Address1',
								City='$City1',
								State='$State1',
								Matric_Course='$Matric_Course1',
								
								Matric_Percentage='$Matric_Percentage1',
								Matric_PassingOfYear='$Matric_PassingOfYear1',
								Matric_Board='$Matric_Board1'

							WHERE sid=$edited_id ";
	if(mysql_query($query1))
	{
		echo "<script>window.open('dcomview.php?updated=Record Updated','_self')</script>";
	}
	
	}
	?>