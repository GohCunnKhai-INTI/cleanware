<?php 

?>

<!DOCTYPE html>
<head>
<title>Form submission</title>
  <script src=
"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
  </script>
</head>
<body>

<form action="https://formsubmit.co/gcunnkhai@gmail.com" onsubmit="return confirm('Are you sure you want to submit this form?')" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="hidden" name="_next" value="http://admin-cleanware.great-site.net/cleanware/test.php">
<input type="submit" name="submit" value="Submit">
</form>

</body>


</html>