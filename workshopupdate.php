<?PHP
$glid = $_SERVER['HTTP_UFSHIB_GLID'];
$id = $_GET['id'];
$id1=$_POST['id1'];
$date_auto1=date("Y-m-d");
if ((!preg_match("/^[0-9]{1,5}$/", $id)) AND (!preg_match("/^[0-9]{1,5}$/", $id1))) die("<h3>Bad workshop ID, please re-enter.</h3>
<p>We're sending you back to the <a href=\"/workshops/admin/index.php\">workshop list page</a>.</p>
<meta http-equiv=\"refresh\" content=\"5; url=/workshops/admin/index.php\">");
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>AAC Workshop Update | University of Florida</title>
		<meta name="description" content="The Academic Advising Center is the advising office for the University of Florida College of Liberal Arts and Sciences (CLAS). We provide advising services for CLAS students, exploratory students, Pre-Health and Pre-Law students, and other students interested in CLAS majors." />
		<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" media="print" href="/css/print.css" />
		<link rel="icon" type="image/jpg" href="/images/favicon.jpg" />
		<link rel="stylesheet" href="timepicker.css" type="text/css">

<style type="text/css" media="screen" title="Default">
	@import "/convocation/convo.css";
	#content{width:760px;}
	#content textarea{margin-left:0px;}
	.leftcol {width:33%;}
	table.query{width:100%}
	table.query tr{width:100%}
	table.query td{width:100%;padding-left:2px;padding-right:2px;}
	table.query th{width:100%;padding-left:2px;padding-right:2px;background-color:#DEDEDE;}
</style>

<script type="text/javascript">
<!--
function validate_form ( )
{
	valid = true;
		
        if ( document.update.team1.value == "" )
        {
                alert ( "Select the Team." );
                valid = false;
        }

        if ( document.update.title1.value == "" )
        {
                alert ( "Enter a title" );
                valid = false;
        }

		if ( document.update.description1.value == "" )
        {
                alert ( "Enter a description" );
                valid = false;
        }

		if ( document.update.location1.value == "" )
        {
                alert ( "Enter a location" );
                valid = false;
        }
		
		if ( document.update.date1.value == "" )
        {
                alert ( "Enter a workshop date" );
                valid = false;
        }

		if ( document.update.timestart1.value == "" )
        {
                alert ( "Enter a start time" );
                valid = false;
        }

		if ( document.update.timeend1.value == "" )
        {
                alert ( "Enter an end time" );
                valid = false;
        }

		if ( document.update.instructor1.value == "" )
        {
                alert ( "Enter an instructor" );
                valid = false;
        }

		if ( document.update.capacity1.value == "" )
        {
                alert ( "Enter the venue capacity" );
                valid = false;
        }

		
		if ( document.update.timeend1.value <= document.update.timestart1.value )
        {
                alert ( "Enter an end time that is AFTER the start time" );
                valid = false;
        }		
	
		
		if ( document.update.date1.value <  document.update.date_auto1.value )
        {
                alert ( "Enter a workshop date that is AFTER today" );
                valid = false;
        }		
        return valid;
}
//-->
</script>
	<script LANGUAGE="JavaScript" src="/java/calendarpu.js"></script>
	<script LANGUAGE="JavaScript">
	var cal = new CalendarPopup();
	</script>
	<script src="jquery.min.js" type="text/javascript"></script>
	<script src="timepicker.js" type="text/javascript"></script>
	
	<script>
	$(document).ready(function(){
    $('input.timepicker').timepicker({
        timeFormat: 'HH:mm:ss',
        // year, month, day and seconds are not important
        minTime: new Date(0, 0, 0, 7, 0, 0),
        maxTime: new Date(0, 0, 0, 22, 0, 0),
        // time entries start being generated at 7AM but the plugin
        // shows only those within the [minTime, maxTime] interval
        startHour: 4,
        // the value of the first item in the dropdown, when the input
        // field is empty. This overrides the startHour and startMinute
        // options
        startTime: new Date(0, 0, 0, 7, 0, 0),
        // items in the dropdown are separated by at interval minutes
        interval: 15
    });
});
</script>



<script language="javascript">
function textCounter(field,cntfield,maxlimit) {
if (field.value.length > maxlimit) // if too long...trim it!
field.value = field.value.substring(0, maxlimit);
// otherwise, update 'characters left' counter
else
cntfield.value = maxlimit - field.value.length;
}
</script>

</head>

<body>
<div id="header">
	<h1 id="dept"><a href="http://www.clas.ufl.edu/"><img src="/images/unitHeader.gif" alt="College of Liberal Arts and Sciences" border="0" height="50" width="285" /><span></span></a><a name="top" id="top"></a></h1>
	<h2 id="aac"><a href="/"><span></span></a></h2>
</div>
<div id="mainContainer">
<div id="content">

<center><h3>

<?php
if (isset($_POST['submit'])) {
require ("/h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/newlogin.cgi");

$id1=mysqli_real_escape_string($mysqli,$_POST['id1']);
$team1=mysqli_real_escape_string($mysqli,$_POST['team1']);
$title1=mysqli_real_escape_string($mysqli,$_POST['title1']);
//$title2=stripslashes($_POST['title1']);
$description1=mysqli_real_escape_string($mysqli,$_POST['description1']);
$location1=mysqli_real_escape_string($mysqli,$_POST['location1']);
$zoom1=mysqli_real_escape_string($mysqli,$_POST['zoom1']);
$date1=mysqli_real_escape_string($mysqli,$_POST['date1']);
$timestart1=mysqli_real_escape_string($mysqli,$_POST['timestart1']);
$timeend1=mysqli_real_escape_string($mysqli,$_POST['timeend1']);
$instructor1=mysqli_real_escape_string($mysqli,$_POST['instructor1']);
$capacity1=mysqli_real_escape_string($mysqli,$_POST['capacity1']);


$sql="UPDATE acadvise.wkshp SET team='$team1', title='$title1', description='$description1', location='$location1', zoom='$zoom1', date='$date1', timestart='$timestart1', timeend='$timeend1', instructor='$instructor1', capacity='$capacity1' where ID='$id1';";
$result = mysqli_query($mysqli,$sql);
print "<center><h3>The workshop details are now updated.<br /><br />If you have NOT emailed registrants of the changes you made then do so immediately.</h3></center>
<p><a href='index.php'>Please return to the main page.</a></p><meta http-equiv=\"refresh\" content=\"5; url=index.php\">";
mysqli_close($mysqli);
// end updating the database with the updates

// select date info from db
require ("/h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/newlogin.cgi");
$sql="SELECT DATE_FORMAT(wkshp.date, '%Y%m%d') as calyear, DATE_FORMAT(wkshp.timestart, '%H%i%s') as calstart, DATE_FORMAT(wkshp.timeend, '%H%i%s') as calend FROM acadvise.wkshp where ID='$id1';";
$result1 = mysqli_query($mysqli,$sql);
$num_rows1 = mysqli_num_rows($result1);
if (! $num_rows1){
echo "<p>There is nothing to retrieve and something is wrong.</p";
}
while ($row1=mysqli_fetch_row($result1)) { 
		$calyear=$row1[0];
		$calstart=$row1[1];
		$calend = $row1[2];
// format date info for ical file
$calstart1 = $calyear."T".$calstart;
$calend1 = $calyear."T".$calend;
mysqli_close($mysqli);

//open existing ical file
$myFile = "../ical/{$id1}.ics";
$fh = fopen($myFile, 'w+') or die("can't open file $id1");

//replace existing ical data with updated info
$stringData = "BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:".date('Ymd')."T".date('His')."-".rand().$id2."
DTSTART:$calstart1
DTEND:$calend1
LOCATION:$location1
ZOOM: $zoom1
DESCRIPTION:$description1
SUMMARY:$title1
PRIORITY:1
BEGIN:VALARM
TRIGGER:-PT1440M
ACTION:DISPLAY
DESCRIPTION:Reminder
END:VALARM
END:VEVENT
END:VCALENDAR";
fwrite($fh, $stringData);
fclose($fh);
chmod($myFile, 0755);
//end updating ical file
}

// begin the email notification
$to = 'AACCommunications@advising.ufl.edu';
$subject = "AAC Workshop EDIT";
$body = "
Team: ".$team1."\n\n
Title: ".$title1."\n\n
Date: ".$date1."\n\n
Start: ".$timestart1."\n\n
End: ".$timeend1."\n\n
Location: ".$location1."\n\n
Zoom: ".$zoom1."\n\n
Description: ".$description1."\n\n
Submitted by: ".$glid."\n\n";
$headers = 'From: '.'noreply@ufl.edu'."\r\n".
   'Reply-To: '.'noreply@ufl.edu'."\r\n" .
   'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $body, $headers, "-f please-do-not-reply@ufl.edu"); 
//END email notification	
}

else {
echo "

<form onsubmit='return validate_form ( ); onSubmit=stamp()' id='sm-form' method='post' action='workshopupdate.php' name='update'>";
$i=0;

// select date info from db
require ("/h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/newlogin.cgi");
$sql3="SELECT wkshp.title FROM acadvise.wkshp where ID='$id';";
$result3 = mysqli_query($mysqli,$sql3);
$num_rows3 = mysqli_num_rows($result3);
if (! $num_rows3){
echo "<p>There is no title to retrieve.</p";
}
while ($row3=mysqli_fetch_row($result3)) { 
		$title3=$row3[0];}
mysqli_close($mysqli);
// end select date info from table

echo "<h3>Update the Workshop<br />&quot;$title3&quot;</h3>
</center>

<p>You may update the details of the workshop you selected. Please keep in mind:</p>
<ul>
	<li><strong>Notify any registered students of the change(s).</strong></li>	
	<li>No fields may be left blank.</li>
</ul>
<br />
";
  
//connect to the workshop table to see workshops for which the user is registered
require ("/h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/newlogin.cgi");

$sql="SELECT wkshp.team, wkshp.title, wkshp.description, wkshp.location, wkshp.zoom, wkshp.date, wkshp.timestart, wkshp.timeend, wkshp.instructor, wkshp.capacity FROM acadvise.wkshp WHERE wkshp.ID='$id';";
$result = mysqli_query($mysqli,$sql);
mysqli_close($mysqli);
$num_rows = mysqli_num_rows($result);
if (! $num_rows)
$data.= "<tr><td colspan=\"4\" ALIGN=\"center\"><strong><br />Must be something wrong. There's nothing to select</strong><br /><br /></td></tr>";
else
{
    while(list($team, $title, $description, $location, $zoom, $date, $timestart, $timeend, $instructor, $capacity) = mysqli_fetch_row($result))

    {
	$data.="

	<p>Team (select one of these specific teams)<br />
	
	
	<select name='team1' tabindex='1' title='Click here and scroll to select.' >
	<option value='".$team."'>".$team."</option>
	<option value='AAC'>AAC</option>
	<option value='AIM'>AIM</option>
	<option value='B120'>Beyond120</option>
	<option value='Exploratory'>Exploratory</option>
	<option value='Pre-Health'>Pre-Health</option>
	<option value='Pre-Law'>Pre-Law</option>
	</select>
	</p>
	
	<br />
	
	<p>Title<br /><input type=\"text\" size=\"50\" name=\"title1\" value=\"".$title."\" />
	<br />
	
<div>
	<p>Description: please keep to 1000 characters.</p><p><font size=-2>You have <input readonly=\"readonly\" type=\"text\" name=\"remLen1\" size=\"5\" maxlength=\"3\" value=\"1000\" />characters left.</font><br />
	<textarea ROWS=\"4\" COLS=\"60\" WRAP=\"virtual\" name=\"description1\" onFocus=\"clearFieldFirstTime(this);\" onKeyDown=\"textCounter(document.update.description1,document.update.remLen1,1000)\" onKeyUp=\"textCounter(document.update.description1,document.update.remLen1,1000)\">".$description."</textarea>
</div>
	
	<p>Location<br /><input type=\"text\" size=\"50\" name=\"location1\" value=\"".$location."\" /></p>

	<br />

	<p>Zoom<br /><input type=\"text\" size=\"50\" name=\"zoom1\" value=\"".$zoom."\" /></p>

	<br />

	
	<p>Date (You must click the calendar icon to change the date)<br />
	<input name=\"date1\" type='text' title='Click the calendar icon to choose a date.' value='$date' readonly='readonly' /><a href=\"#\" onClick=\"cal.select(document.forms['update'].date1,'anchor1','yyyy-MM-dd'); return false;\"
   name=\"anchor1\" id=\"anchor1\"><img src=\"/images/calendar.gif\">&nbsp;(Choose a date)</a></p>
   
   <br />

	<p>Start Time (click in the box to change)<br />
	<input class='timepicker' name=\"timestart1\" type='time' title='Click the box to enter the START time of the workshop.' value='$timestart' readonly='readonly' /></p>
	
	<br />
		
	
	<p>End Time (click in the box to change)<br />
	<input class='timepicker' name=\"timeend1\" type='time' title='Click the box to enter the END time of the workshop.' value='$timeend' readonly='readonly' /></p>
	
	<br />

	<p>Instructor<br /><input type=\"text\" size=\"50\" maxlength=\"50\" name=\"instructor1\" value=\"".$instructor."\" /></p>

	<br />

	<p>Capacity<br /><input type=\"text\" size=\"10\" maxlength=\"3\" name=\"capacity1\" value=\"".$capacity."\" /></p>

	<br />

	<p><input type=\"hidden\" name=\"id1\" value=$id readonly='readonly' />
	<p><input type=\"hidden\" name=\"date_auto1\" value=$date_auto1 readonly='readonly' />
	
	<p><input type=\"submit\" onsubmit=\"return validate_form ( );\" name=\"submit\" value=\"Submit\"></p>
	";
  }
  	$row++;
  }
	$data.= "";
	echo $data;
}
?>

<p><a href="/workshops/admin">Return to the workshop list.</a></p>
</div>
<?php
include ("/h/cnswww-www.advising/www.advising.ufl.edu/htdocs/includes/footer.html");
include ("/h/cnswww-www.advising/www.advising.ufl.edu/htdocs/includes/analytics.html"); 
?>
</div>

</body>
</html>