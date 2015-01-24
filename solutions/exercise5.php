<?php
  //Create associative array.
  $months=array(
    'January'=>31,
    'February'=>'28 days, if leap year 29',
    'March'=>31,
    'April'=>30,
    'May'=>31,
    'June'=>30,
    'July'=>31,
    'August'=>31,
    'September'=>30,
    'October'=>31,
    'November'=>30,
    'December'=>31
  );
 
  //This function creates the select options.
  function makeOptions($value){
     //The options need the key values, as in the original exercise.
     foreach($value as $k => $v){
        echo "<option value=\"$k\">" .ucfirst($k). "</option>\n";
      }
  }
 
  //This function calls the makeOptions function to create the select field.
  function makeSelect($name, $value){
     //Check to be sure $value is an array. 
     if (!is_array($value)){
        exit ("Error: value is not an array.");
        //This  could be written: die ("Error: value is not an array.");
     }
     //Begin the HTML for the select field.
     echo "<select name=\"$name\">\n";
     //Create options.
     makeOptions($value);
     echo "</select>" ;
	 echo "<br><br>";
	 echo "<label>Year:  </label><input type='text' name='year' size=4>";
  }
?>
 
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Functions</title>
</head>
 
<body>
<h2>Days in a Month<br /></h2>
 
<?php
//If form not submitted, display form.
  if(!isset($_POST['submit']) || empty($_POST['year']) || !is_numeric($_POST['year'])){
?>
   
<form method="post" action="exercise5.php">
<p>Please choose a month:</p>
 
<p />
<?php
 
makeSelect('month', $months);
 
?>
<p />
<input type="submit" name="submit" value="Go" />
 
</form>
 
<?php
  //If form submitted, process input.
  }else{
  //Nothing here has to change to accommodate the new functions.
  $month = $_POST['month'];
  $year = $_POST['year'];
   
  if ($month == 'February'){
	if(($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0)
		echo "In $year, the month of February has 29 days.";
	else
		echo "In $year, the month of February has 28 days.";
  }else{
    echo "In $year, the month of $month has $months[$month] days.";
  }
   
  }
?>
 
</body>
</html>