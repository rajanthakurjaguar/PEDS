<html>
  <body>
	<form action="#" method="post">
		Name:<input type="text" name="s_name"><br>
		
                Roll:<input type="text" name="s_roll"><br>
		
                Gender:<select name="gender"><option value="m">Male</option><option value="f">Female</option></select><br>
		
                Department:<input type="text" name="dept"><br>
		
                Date of Birth:<input type="date" name="dob"><br>
		
                <input type="submit" name="submit">
	</form>
  </body>
</html> 

<?php
	session_start();
	$submit=$_POST['submit'];
	if(isset($submit))
		{
		 $name=$_POST['s_name'];
		 $roll=$_POST['s_roll'];
		 $gender=$_POST['gender'];
		 $dept=$_POST['dept'];
		 $dob=$_POST['dob'];
                 echo $dob;
                 //$dob=date('Y-m-d',$dob);
                 echo $dob;
		 require_once "dbconnect.php";
		 $post=mysql_query("insert into player (name,roll,dob,gender,dept) values('$name','$roll','$dob','$gender','$dept')");
		 echo "u have been registered";
		}
	mysql_close($con);
?>
