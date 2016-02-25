<!DOCTYPE html>
<html lang="en">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<link href="agencyform.css" rel="stylesheet" />
	<link rel="shortcut icon" type="image/x-icon" href="HuskyHelpersLogoFinal.png" />
	<title>Husky Helpers: Agency Sign Up Form</title>
	<!--[if 1t IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->
	<meta content="width=device-width, initial-scale=1" name="viewport" />
</head>
<body>
<header>
<img src="HuskyHelpersLogoFinal.png">
</header>



<nav>
<ul>
	<li><h3><a href="index.html">Home</a></h3></li>
	<li><h3><a href="services.html">Student</a></h3></li>
	<li><h3><a href="askvet.html">Agency</a></h3></li>
	<li><h3><a href="contact.html">Admin</a></h3></li>
</ul>
</nav>
<main>
<h2>Agency Event Submission Form</h2>

<?php

$id = intval($_GET['id']);
echo"<p>$id</p>";

?>
<form action="insert_database.php" method="POST">
<ul>
<li>

<div class="half">
<br>
	<div class="right"><label for="eventName">*Event Name: </label> <input id="eventName" name="eventName" required="" type="text" /></div>
	<div class="right"><label for="agencyName">*Agency Name: </label> <input id="agencyName" name="agencyName" required="" type="text" /></div>
	<div class="right"><label for="contactName">*Contact First Name: </label> <input id="contactFName" name="contactFName" required="" type="text" /></div>
	<div class="right"><label for="myStreet">*Street Address: </label> <input id="myStreet" name="myStreet" required="" type="text" /></div>
	<div class="right"><label for="myCity">*City: </label> <input id="myCity" name="myCity" required="" type="text" /></div>
	<div class="right"><label for="contactName">*Contact Last Name: </label> <input id="contactLName" name="contactLName" required="" type="text" /></div>
	<div class="right"><label for="state">*State: </label> <select name="state"><option value="Michigan">MI</option><option value="Wisconsin">WI</option> </select></div>
	<div class="right"><label for="zipCode">*Zip: </label> <input id="zipCode" name="zipCode" required="" type="text" /></div>
	<div class="right"><label for="contactPhone">*Contact Phone: </label> <input id="contactPhone" name="contactPhone" required="" type="text" /></div>
	<div class="right"><label for="volunteersNeeded">*Volunteers Needed: </label> <input id="volunteersNeeded" name="volunteersNeeded" required="" type="text" /></div>
	<div class="right"><label for="timesNeeded">*Length of Service (hours): </label> <input id="timesNeeded" name="timesNeeded" required="" type="hours" /></div>
	<div class="right"><label for="contactEmail">*Contact E-mail Address: </label> <input id="contactEmail" name="contactEmail" required="" type="email" /></div>
	<div class="right"><label for="startDate">*Start Date: </label> <input id="startDate" name="startDate" required="" type="date" /></div>
	<div class="right"><label for="endDate">*End Date: </label> <input id="endDate" name="endDate" required="" type="date" /></div>
	<div class="right"><label for="eventDescription">*Description of Event: </label><textarea id="eventDescription" name="eventDescription" required=""></textarea></div>
	
<div class="categories">	
<fieldset>
	<legend> *Event Category: </legend>
	<input name="Annual Events" type="checkbox" class="categories" value="Annual Events"><label for="annualEvents">Annual Events</label> 
	<input name="Animals" type="checkbox" class="categories" value="Animals"><label for="animals">Animals</label> 		   
	<input name="Family Services" type="checkbox" class="categories" value="Family Services" /><label for="familyServices">Family Services</label>
	<input name="Healthcare" type="checkbox" class="categories" value="Healthcare" /> <label for="healthcare">Healthcare</label>
	<input name="Mentoring" type="checkbox" class="categories" value="Mentoring" /><label for="mentoring">Mentoring</label>
	<input name="Senior Citizens" type="checkbox" class="categories" value="Senior Citizens" /><label for="seniorCitizens">Senior Citizens</label>
	<input name="Youth" type="checkbox" class="categories" value="Youth" /><label for="youth">Youth</label>
	<input name="Environment" type="checkbox" class="categories" value="Environment" /><label for="environment">Environment</label>
	<input name="Other" type="checkbox" class="categories" value="Other" /><label for="other">Other</label>
  </fieldset>
</div>
</div>
</li>
	
</ul> 		

<button type="submit" value="Submit">Submit</button>
	</form>
</main>
	
	
<!--<div class="right">
	<label for="other"> If Other, Please Specify: </label>
	<input type="textArea" name="other" id="other"><br>
	</div> --><!--<button type="cancel" value="Cancel">Cancel</button>-->

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>


<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>





</body>
</html>