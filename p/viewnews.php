
<?php
session_start();

 require_once "dbconnect.php";
 $row=mysql_query("select * from news ");
 echo "<div id='viewnews'>";
 while($news=mysql_fetch_array($row))
 {
  $blurb=$news['blurb'];
  $date=$news['post_date'];
  $id=$news['news_id'];
  $tag=$news['upcoming_sport_flag'];
  $_SESSION['event_type']=$event_type=$news['event_type'];
  //$_SESSION['abc']=$news['news_id'];
  $_SESSION['event_date']=$event_date=$news['event_date'];
  echo "<u >".'<a id="news_link" href="shownews.php?id='.$id.'">'.$blurb."</a></u><br>";
  echo $blurb."<br>";
  echo "Posted on:".$date."<br>";
  if($tag=="game")
   
   echo "<a href='register.php?event_type=".$event_type."&&event_date=".$event_date." '>"."register"."</a><br>";
  //echo "<a href='player_regis.php?event_type=".$event_type."&&event_date=".$event_date." '>"."register"."</a><br>";
 }
 echo "</div>";

  mysql_close($con);
//}
 //require($DOCUMENT_ROOT . "template2.php");
?>

