 
<?php
session_start();
$_SESSION['event_type']=$event_type=$_GET['event_type'];
$event_date=$_GET['event_date'];
$today=date("Y-m-d");
//echo $today;
//echo $event_date;
if($today>$event_date)
echo "Registration is over";
else 
{
echo "welcome to registration";
echo "<html>";
//echo "<script type=\'text/javascript\' src=\'/var/www/PEDS/myjavascript.js\'></script>";
 echo "<script>
alert('hi');

function hide(){
	div1=document.getElementById('team_regis');
	div1.style.display='none';
	div1=document.getElementById('indi_regis');
	div1.style.display='none';


	div1=document.getElementById('player_name_field1');
	div1.style.display='none';
	div1=document.getElementById('player_name_field2');
	div1.style.display='none';
	div1=document.getElementById('player_name_field3');
	div1.style.display='none';
	div1=document.getElementById('player_name_field4');
	div1.style.display='none';
	div1=document.getElementById('player_name_field5');
	div1.style.display='none';
	div1=document.getElementById('player_name_field6');
	div1.style.display='none';
	div1=document.getElementById('player_name_field7');
	div1.style.display='none';
	div1=document.getElementById('player_name_field8');
	div1.style.display='none';
	div1=document.getElementById('player_name_field9');
	div1.style.display='none';
	div1=document.getElementById('player_name_field10');
	div1.style.display='none';
	div1=document.getElementById('player_name_field11');
	div1.style.display='none';
	div1=document.getElementById('player_name_field12');
	div1.style.display='none';
	div1=document.getElementById('player_name_field13');
	div1.style.display='none';
	div1=document.getElementById('player_name_field14');
	div1.style.display='none';
	div1=document.getElementById('player_name_field15');
	div1.style.display='none';
	div1=document.getElementById('player_name_field16');
	div1.style.display='none';

        div1=document.getElementById('add1');
	div1.style.display='none';

        div1=document.getElementById('add2');
	div1.style.display='none';

}
function fun(){
	div1=document.getElementById('indi_regis');
	div1.style.display='block';
	div1=document.getElementById('player_name_field16');
	div1.style.display='block';


	div1=document.getElementById('team_regis');
	div1.style.display='none';
     
}
function gun(){
	div1=document.getElementById('team_regis');
	div1.style.display='block';
 
        div1=document.getElementById('add1');
	div1.style.display='block';


	div1=document.getElementById('player_name_field1');
	div1.style.display='block';
	div1=document.getElementById('player_name_field2');
	div1.style.display='block';
	div1=document.getElementById('player_name_field3');
	div1.style.display='block';
	div1=document.getElementById('player_name_field4');
	div1.style.display='block';
	div1=document.getElementById('player_name_field5');
	div1.style.display='block';
	div1=document.getElementById('player_name_field6');
	div1.style.display='block';
	div1=document.getElementById('player_name_field7');
	div1.style.display='block';
	div1=document.getElementById('player_name_field8');
	div1.style.display='block';
	div1=document.getElementById('player_name_field9');
	div1.style.display='block';
	div1=document.getElementById('player_name_field10');
	div1.style.display='block';
	div1=document.getElementById('player_name_field11');
	div1.style.display='block';
	div1=document.getElementById('player_name_field12');
	div1.style.display='block';
	div1=document.getElementById('player_name_field13');
	div1.style.display='block';
	div1=document.getElementById('player_name_field14');
	div1.style.display='block';
	div1=document.getElementById('player_name_field15');
	div1.style.display='block';

	div1=document.getElementById('player_name_field16');
	div1.style.display='none';

	div1=document.getElementById('indi_regis');
	div1.style.display='none';
      
        div1=document.getElementById('add2');
	div1.style.display='none';


}

</script>"; 
echo "<body onload='hide()'>";
   echo "<form method='post' action='post_regis.php'>";
         if($event_type=="Both")
          {
           echo "<select name='sel' onClick><option value='individual' onClick='fun()'>"."Individual event"."</option><option value='team'onClick='gun()' >Team</option></select>";
           echo "<div id='team_regis'>
             <p id='add1'>ADD PLAYERS Roll nos</p>
             <input type='text' name='name_game' id='game_name_field'>
             <input type='text' name='name1' id='player_name_field1'>
             <input type='text' name='name2' id='player_name_field2'>
             <input type='text' name='name3' id='player_name_field3'>
             <input type='text' name='name4' id='player_name_field4'>
             <input type='text' name='name5' id='player_name_field5'>
             <input type='text' name='name6' id='player_name_field6'>
             <input type='text' name='name7' id='player_name_field7'>
             <input type='text' name='name8' id='player_name_field8'>
             <input type='text' name='name9' id='player_name_field9'>
             <input type='text' name='name10' id='player_name_field10'>
             <input type='text' name='name11' id='player_name_field11'>
             <input type='text' name='name12' id='player_name_field12'>
             <input type='text' name='name13' id='player_name_field13'>
             <input type='text' name='name14' id='player_name_field14'>
             <input type='text' name='name15' id='player_name_field15'>
             'Enter captain's roll:'
             <input type='text' name='name_cap' id='cap_name_field'>
             <input type='text' name='contact_cap' id='cap_contact_field'>
             </div>";
            echo "<div id='indi_regis'>
             <p id='add2'>ADD PLAYERS</p>
             
             <input type='text' name='name16' id='player_name_field16'>
            </div>";
          }
         else if($event_type=="individual")
          {
             echo"<p id='add2'>ADD PLAYERS</p>
             
             <input type='text' name='name16' >";
          }
         else
          {
             echo "
             <input type='text' name='name1' >
             <input type='text' name='name2' >
             <input type='text' name='name3' >
             <input type='text' name='name4' >
             <input type='text' name='name5' >
             <input type='text' name='name6' >
             <input type='text' name='name7' >
             <input type='text' name='name8' >
             <input type='text' name='name9' >
             <input type='text' name='name10' >
             <input type='text' name='name11' >
             <input type='text' name='name12' >
             <input type='text' name='name13' >
             <input type='text' name='name14' >
             <input type='text' name='name15' >";
          }
          


                
   echo "<input type='submit' value='register'>";
echo "</form>";
echo "</body>";
echo "</html>";
}

?>
