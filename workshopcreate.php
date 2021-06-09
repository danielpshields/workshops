<?php
$glid=$_SERVER['HTTP_UFSHIB_GLID'];
$date_auto = date("Y-m-d H:i:s");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Academic Advising Center Workshop Information | University of Florida</title>
<link rel="stylesheet" type="text/css" media="screen" href="basic.css" />
<link rel="stylesheet" type="text/css" media="print" href="print.css" />
<link rel="icon" type="image/jpg" href="/images/favicon.jpg" />
<link rel="stylesheet" href="/css/style.css" type="text/css">
<link rel="stylesheet" href="timepicker.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>

<!--text counter for text boxes-->
<script language="javascript">
function textCounter(field,cntfield,maxlimit) {
if (field.value.length > maxlimit) // if too long...trim it!
field.value = field.value.substring(0, maxlimit);
// otherwise, update 'characters left' counter
else
cntfield.value = maxlimit - field.value.length;
}
//  End -->
</script>
<script language="javascript">
function trim(str) {
  return str.replace(/^\s+|\s+$/g, '');
}
function isEmpty(str) {
  str = trim(str);
  return ((str == null) || (str.length == 0))
}
function isDigit(c) {
  return ((c >= "0") && (c <= "9"))
}
function isInteger(str) {  
  var i;
  for (i = 0; i < str.length; i++) {
	var c = str.charAt(i);
	if (!isDigit(c)) return false;
  }
  return true;
}
function initForm(oForm, element_name, init_txt) {

	frmElement = oForm.elements[element_name];
	frmElement.value = init_txt;
}
function clearFieldFirstTime(element) {
  if (element.counter==undefined) {
	element.counter = 1;
  }

  else {
	element.counter++;
  }

  if (element.counter == 1) {
	element.value = '';
  }
}
function showFormData(oForm) {
   var msg = "The data that you entered for the form : \n";
   
   for (i = 0; i < oForm.length, oForm.elements[i].getAttribute("type") !== 'button'; i++) {
	   msg += oForm.elements[i].tagName + " with 'name' attribute='" + oForm.elements[i].name + "' and data: ";
	   if(oForm.elements[i].value == null || oForm.elements[i].value == '') {
		msg += "NOT SET \n";
	   } else {
		   msg += oForm.elements[i].value + "\n";
	   }
   }

   alert(msg);
}
</script>
<!--end text counter for text boxes-->


<style type="text/css" media="screen">
	@import "/convocation/convo.css";
	#content{width:760px;}
	#content textarea {margin-left:0px;}
</style>

<script type="text/javascript">
<!--
function validate_form ( )
{
	valid = true;
		
        if ( document.workshop.team.value == "" )
        {
                alert ( "Select the Team." );
                valid = false;
        }

        else if ( document.workshop.title.value == "" )
        {
                alert ( "Enter a title" );
                valid = false;
        }

		else if ( document.workshop.description.value == "" )
        {
                alert ( "Enter a description" );
                valid = false;
        }

		else if ( document.workshop.location.value == "" )
        {
                alert ( "Enter a location" );
                valid = false;
        }
		
		else if ( document.workshop.w_date.value == "" )
        {
                alert ( "Enter a workshop date" );
                valid = false;
        }

		else if ( document.workshop.timestart.value == "" )
        {
                alert ( "Enter a start time" );
                valid = false;
        }

		else if ( document.workshop.timeend.value == "" )
        {
                alert ( "Enter an end time" );
                valid = false;
        }

		else if ( document.workshop.instructor.value == "" )
        {
                alert ( "Enter an instructor" );
                valid = false;
        }

		else if ( document.workshop.capacity.value == "" )
        {
                alert ( "Enter the venue capacity" );
                valid = false;
        }

		
		else if ( document.workshop.timeend.value <= document.workshop.timestart.value )
        {
                alert ( "Enter an end time that is AFTER the start time" );
                valid = false;
        }		

		
		
		else if ( document.workshop.w_date.value <=  document.workshop.date_auto.value )
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
        maxTime: new Date(0, 0, 0, 20, 0, 0),
        // time entries start being generated at 6AM but the plugin
        // shows only those within the [minTime, maxTime] interval
        startHour: 4,
        // the value of the first item in the dropdown, when the input
        // field is empty. This overrides the startHour and startMinute
        // options
        startTime: new Date(0, 0, 0, 7, 0, 0),
        // items in the dropdown are separated by at interval minutes
        interval: 5
    });
});
</script>
</head>

<?php
include ("/h/cnswww-www.advising/www.advising.ufl.edu/htdocs/includes/header.html");
?>	
	
<div id="mainContainer">
 <div id="content">

<center><h3>AAC Workshop Administration</h3></center>

<?php
if (isset($_POST['submit'])) {
require ("/h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/newlogin.cgi");

$date_auto=$_POST['date_auto'];
$team=mysqli_real_escape_string($mysqli, $_POST['team']);
$title=mysqli_real_escape_string($mysqli, $_POST['title']);
$description=mysqli_real_escape_string($mysqli, $_POST['description']);
$location=mysqli_real_escape_string($mysqli, $_POST['location']);
$zoom=mysqli_real_escape_string($mysqli, $_POST['zoom']);
$w_date=mysqli_real_escape_string($mysqli, $_POST['w_date']);
$timestart=mysqli_real_escape_string($mysqli, $_POST['timestart']);
$timeend=mysqli_real_escape_string($mysqli, $_POST['timeend']);
$instructor=mysqli_real_escape_string($mysqli, $_POST['instructor']);
$capacity=mysqli_real_escape_string($mysqli, $_POST['capacity']);
$glid2=mysqli_real_escape_string($mysqli, $_POST['glid2']);

if ($team=="AAC"){
$sendteam="advisor@advising.ufl.edu";
}
if ($team=="AIM"){
$sendteam="advisor@advising.ufl.edu";
}
if ($team=="Exploratory"){
$sendteam="advisor@advising.ufl.edu";
}
if ($team=="Pre-Health"){
$sendteam="prehealth@advising.ufl.edu";
}
if ($team=="Pre-Law"){
$sendteam="prelaw@advising.ufl.edu";
}
if ($team=="Transfer"){
$sendteam="CLASTransfer@advising.ufl.edu";
}


// begin insertion of workshop info
if (!$mysqli -> query("insert into wkshp (date_auto, team, title, description, location, zoom, date, timestart, timeend, instructor, capacity, glid) values ('$date_auto', '$team', '$title', '$description', '$location', '$zoom', '$w_date', '$timestart', '$timeend', '$instructor', '$capacity', '$glid2');")) {
  echo("Error description: " . $mysqli -> error);
}
print '<br><p>Workshop created.<br>';
// end insertion of workshop info


// begin the email notification
$to = 'AACCommunications@advising.ufl.edu';
$subject = "AAC Workshop";
$body = "
Team: ".$team."\n\n
Title: ".$title."\n\n
Date: ".$w_date."\n\n
Start: ".$timestart."\n\n
End: ".$timeend."\n\n
Location: ".$location."\n\n
Zoom: ".$zoom."\n\n
Description: ".$description."\n\n
Submitted by: ".$glid."\n\n";
$headers = 'From: '.'noreply@ufl.edu'."\r\n".
   'Reply-To: '.'noreply@ufl.edu'."\r\n" .
   'X-Mailer: PHP/' . phpversion();
if(mail($to, $subject, $body, $headers, "-f please-do-not-reply@ufl.edu"))
{print 'Email sent to AACCommunications.';}	
//END email notification	
	

	


// section for creating ical file
require ("/h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/newnewlogin.cgi");
$result1 = "SELECT  wkshp.ID as id,  wkshp.title as title,  wkshp.location as location,  wkshp.zoom as zoom, wkshp.description,  DATE_FORMAT(wkshp.date, '%Y%m%d') as calyear,  DATE_FORMAT(wkshp.timestart, '%H%i%s') as calstart,  DATE_FORMAT(wkshp.timeend, '%H%i%s') as calend,  wkshp.location as location,  wkshp.instructor as instructor FROM acadvise.wkshp where title='$title' and location='$location' and instructor='$instructor' and date='$w_date';";
if ($result3=mysqli_query($mysqli,$result1)){
while ($row1 = mysqli_fetch_row($result3)) {
		$id2=$row1[0];
		$title2=$row1[1];
		$location2 = $row1[2];
		$zoom2 = $row1[3];
		$description2 = $row1[4];
		$calyear = $row1[5];
		$calstart = $row1[6];
		$calend = $row1[7];		
		$location=$row1[8];
		$instructor=$row1[9];
		
//Begin ical creation
$calstart = $calyear."T".$calstart;
$calend = $calyear."T".$calend;
$myFile = "../ical/{$id2}.ics";


	header("Content-Type: text/Calendar; charset=utf-8");
	header("Content-Disposition: attachment; filename='$myFile'");
	readfile('$myFile');
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:".date('Ymd')."T".date('His')."-".rand().$id2."
DTSTART:$calstart
DTEND:$calend
LOCATION:$location2
DESCRIPTION:$description2
SUMMARY:$title2
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
}
//end ical creation
// end section for creating ical file

print '<center><p>ical created.</p></center>';
}

print '<center><p>Return to <a href="https://www.advising.ufl.edu/workshops/admin/workshopcreate.php" Workshop Admin</a>.</p></center>';
}




else echo "<p>This page is for creation of new workshop dates.</p>

<p><strong>Each field is required.</strong></p>

<p>When you've completed the form click the \"Submit\" button.</p>

<form onsubmit='return validate_form ( ); onSubmit=stamp()' id='sm-form' method='post' action='workshopcreate.php' name='workshop'>

	<h3>Workshop Information</h3>

	<p>
	<label for='team'>AAC Team (select one of these specific teams)</label><br />
	<select name='team' tabindex='1' title='Click here and scroll to select.' >
	<option value=''>(scroll to select)</option>
	<option value='AAC'>AAC</option>
	<!--<option value='AIM'>AIM</option>-->
	<option value='B120'>Beyond120</option>
	<option value='Exploratory'>Exploratory</option>
	<option value='Pre-Health'>Pre-Health</option>
	<option value='Pre-Law'>Pre-Law</option>
	<option value='Transfer'>Transfer</option>
	</select>
	</p>

	<br />	
	
	<p>
	<label for='title'>Workshop Title</label><br />
	<input name='title' type='text' title='Enter the workshop title.' size='50' maxlength='125' tabindex='2' />
	</p>
	

	<p>
	<label for='description'>Workshop Description You have <input readonly=readonly type=\"text\" name=\"remLen1\" size=\"3\" maxlength=\"3\" value=\"1000\" />characters left.<br><textarea name=\"description\" id=\"description\" wrap=\"physical\" cols=\"80\" rows=\"6\" tabindex=\"1\" title='Enter a description of the workshop.' onKeyDown=\"textCounter(document.workshop.description,document.workshop.remLen1,1000)\"
onKeyUp=\"textCounter(document.workshop.description,document.workshop.remLen1,1000)\"></textarea></p>
	
	
	
	<br />
	
	<p>
	<label for='location'>Workshop Location (Example: \"Farrior 119\")</label><br />
	<strong>You MUST first confirm with staff room scheduler any AAC venue!</strong><br />
	<input name='location' type='text' title='Where will the workshop be held?' size='10' maxlength='30' tabindex='6' />
	</p>
	
	<br />

	<p>
	<label for='zoom'>Zoom link (if applicable)</label><br />
	<input name='zoom' type='text' title='Zoom link' size='10' maxlength='30' tabindex='6' />
	</p>
	
	<br />


	<p>
	<label for='w_date'>Workshop Date</label><br />
	<input name='w_date' type='text' title='Click the calendar icon to choose a date.' tabindex='7' readonly='readonly' /><a href=\"#\" onClick=\"cal.select(document.forms['workshop'].w_date,'anchor1','yyyy-MM-dd'); return false;\"
   name=\"anchor1\" id=\"anchor1\"><img src=\"/images/calendar.gif\">&nbsp;(click the calendar icon to choose a date)</a></p>
	
	<br />
	
	<p>
	<label for='timestart'>Start Time (click in the box to select a time)</label><br />
<input class='timepicker' name='timestart' type='time' title='Click to enter the start time of the workshop.' tabindex='8' readonly='readonly' />
	</p>

	<br />
	

	<p>
	<label for='timeend'>End Time (click in the box to select a time)</label><br />
	<input class='timepicker' name='timeend' type='time' title='Click to enter the end time of the workshop.' tabindex='9' readonly='readonly' /> 
	</p>
	
	<br />

	
	<p>
	<label for='instructor'>Instructor</label><br />
	<input name='instructor' type='text' title='Who is the instructor?' size='50' maxlength='50' tabindex='10' />
	</p>	
	
	<p>
	<label for='capacity'>Room Capacity: enter a numeral greater than zero (1-999).</label><br />
	<input name='capacity' type='text' title='What is the room capacity?' size='3' maxlength='3' tabindex='11' />
	</p>	
	
<input type='hidden' name='glid' value='$glid' readonly='readonly' />
<input type='hidden' name='date_auto' value='$date_auto' readonly='readonly' />

<p><input type='submit' onsubmit='return validate_form ( );' value='Submit' name='submit' /></p>
</form>";
?>
<center><p><a href="index.php">Return to the workshop list.</a></p></center>
</div>
 
<?php
include ("/h/cnswww-www.advising/www.advising.ufl.edu/htdocs/includes/footer.html");
include ("/h/cnswww-www.advising/www.advising.ufl.edu/htdocs/includes/analytics.html"); 
?>
</div>

</body>
</html>