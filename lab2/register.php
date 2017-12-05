<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="static/register.css">
</head>
<body>
<H1 align='center'>Sign Up or go away, please</H1>
<form autocomplete="on" method="POST" action="reaction.php">
    <input type="text" name="name" title="Please, enter your name" placeholder="Your name"> Please, enter your name <br>
    <input type="text" name="surname" title="Please, enter your surname" placeholder="Your surname" required> Please, enter your surname <br>
    <input list="months" name="month_of_birth" title="Please, choose your month of birth from the list"> Please, choose your month of birth from the list <br>
    <datalist id="months">
        <option value="January"></option>
        <option value="February"></option>
        <option value="March"></option>
        <option value="April"></option>
        <option value="May"></option>
        <option value="June"></option>
        <option value="July"></option>
        <option value="August"></option>
        <option value="September"></option>
        <option value="October"></option>
        <option value="November"></option>
        <option value="December"></option>
    </datalist>
    <input type="email" name="email" title="Please, enter your email" placeholder="email@example.com" required> Please, enter your email <br>
    <input type="tel" name="tel" pattern="^\+48\(?\d{3}\)?\d{3}\-?\d{3}" title="Please, enter your phone number" autofocus> Please, enter your phone number <br>
    <input type="submit" name="submit">
</form>
<p>After submitting, please, check out <a href="info.html">this</a> page and provide some more info about you :)</p>

</body>
</html>
