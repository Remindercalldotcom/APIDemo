<!DOCTYPE HTML>
<html>
<body>
<!--
Author: Spencer Halmos 
Updated:6/29/2018
This example is the interface page to start using the Remindercall.com API.  Please note I have not added any error trapping here, so use at your own risk.
-->
<!-- Company Name -->
<title>API Demo v3.4.1</title>
<b>Request sample code by calling the office at 888-858-6673</b>

<!-- Retreiving your API key from ReminderCall.com -->
<h2>Get Your Key!</h2>
<form action="GetKey.php" method="post">
<!-- ReminderCall account username -->
<input type="text" name="name" placeholder="UserName" /><br>
<!-- ReminderCall account password -->
<input type="password" name="pwd" placeholder="PWD" /><br>
<!-- If you entered the information correctly, then you should receive a long series of 
numbers and letters as your key. -->
<input type="submit" value="Get That Key!">
</form>

<!-- Text Message Setup -->
<h2>Text Info</h2>
<form action="Text.php" method="post">
<!-- APT Key -->
<input type="text" name="key" placeholder="Key"/><br>
<!-- First Name -->
<input type="text" name="name2" placeholder="First and Last Name" />(Optional)<br>
<!-- Randomized ID -->
<input type="text" name="ID" placeholder="ID" /><br>
<!-- Date and Time you want text -->
<input type="text" name="date" placeholder="Delivery Date/Time" />Format:YYYY-MM-DD HH:MM"<br>
<!-- Phone Number -->
<input type="text" name="phone" placeholder="Phone Number (10 digits)" /><br>
<!-- Grouping -->
<input type="text" name="group" placeholder="Grouping" />(Optional)<br>
<!-- Message -->
<textarea name="message" placeholder="Message" rows="5" cols="40" /></textarea><br>
<!-- Submit Button -->
<input type="submit" value="Submit">
</form>

<!-- Phone Call Setup -->
<h2>Call Info</h2>
<form action="Call.php" method="post">
<!-- APT Key -->
<input type="text" name="key2" placeholder="Key"><br>
<!-- First Name -->
<input type="text" name="name3" placeholder="First and Last Name">(Optional)<br>
<!-- Randomized ID -->
<input type="text" name="ID2" placeholder="ID"><br>
<!-- Date and Time you want call -->
<input type="text" name="date2" placeholder="Delivery:YYYY-MM-DD HH:MM"><br>
<!-- Phone Number -->
<input type="text" name="phone2" placeholder="Phone Number (10 digits)"><br>
<!-- CallerID -->
<input type="text" name="callerid" placeholder="CallerID"><br>
<!-- Prioritiy 0-2 -->
<input type="text" name="Priority" placeholder="Priority">(Optional)<br>
<!-- Retries 0-3 -->
<input type="text" name ="retries" placeholder="Retries"><br>
<!-- Grouping -->
<input type="text" name="group2" placeholder="Grouping">(Optional)<br>
<!-- Preamble -->
<input type="text" name="preamble" placeholder="Preamble">(Optional)<br>
<!-- Protoscript -->
<input type="text" name="postscript" placeholder="Postscript">(Optional)<br>
<!-- Message -->
<textarea name="message2" placeholder="Message" rows="5" cols="40"></textarea><br>
<!-- Submit Button -->
<input type="submit" value="Submit">
</form>

<!-- Get the Status of a text message -->
<h2>Get The Text message Status</h2>
<form action="GetStatus.php" method="post">
<!-- APT Key -->
<input type="text" name="key" placeholder="Key"/><br>
<!-- UniqueID -->
<input type="text" name="UniqueID" placeholder="UniqueID" />Enter YOUR unique id for this message.<br>

<!-- If you entered the information correctly, then you should receive the message status on the next page. -->
<input type="submit" value="Get The Status">
</form>

</body>
</html>
