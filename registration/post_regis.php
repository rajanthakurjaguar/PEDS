<?php
session_start();
if(($_SESSION['event_type']=="individual")||($_SESSION['event_type']=="Both"&&$_POST['sel']=="individual"))
 $flag=0;
else
 $flag=1;
	$p1=$_POST['name1'];
	$p2=$_POST['name2'];
	$p3=$_POST['name3'];
	$p4=$_POST['name4'];
	$p5=$_POST['name5'];
	$p6=$_POST['name6'];
	$p7=$_POST['name7'];
	$p8=$_POST['name8'];
	$p9=$_POST['name9'];
	$p10=$_POST['name10'];
	$p11=$_POST['name11'];
	$p12=$_POST['name12'];
	$p13=$_POST['name13'];
	$p14=$_POST['name14'];
	$p15=$_POST['name15'];


	$p16=$_POST['name16'];
        
echo $flag;
echo $_POST['name1'];
echo $_POST['name16'];
require_once "db.php";
if($flag==0)
 	mysql_query("insert into team (p1) values('$p16')") or die(mysql_error());
else 
	$post=mysql_query("insert into team (name,team_captain_name,team_captain_contact,g_name,type,rank,points,
                  	p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15) 
                  	values('hi','ji','566','ki','mi','6','90.12','$p1','$p2','$p3',
                  	'$p4','$p5','$p6',
                  	'$p7','$p8','$p9','$p10','$p11',
                  	'$p12','$p13','$p14','$p15' )") or die(myql_error());
		//$post=mysql_query("insert into team(p1) values('$_POST['name1']')");
if($post)
 echo "registered";

mysql_close($con);
?>