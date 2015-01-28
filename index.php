<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>form1</title>
</head>

<body>
<?php
//create a php variable that contains my html form.
$form1 =
'<form name="form1" method="post" action="index.php">
Name:<br>
<input type="text" name="name" value="">
<br>
Password:<br>
<input type="password" name="password" value="">
<br><br>
<input type="submit" value="Submit">
</form>';

$form2= '<form name="form2" method="get" action="index.php">
Name:<br>
<input type="text" name="name" value="">
<br>
Email:<br>
<input type="email" name="email" value="">
<br><br>
<select name="value">
  <option value="public">Public</option>
  <option value="private">Private</option>
</select>
<br><br>
<input type="submit" value="Submit">
</form>';

if(isset($_POST["password"])){
       if($_POST["password"]=="pass123"){
           echo $form2;
       }else{
           echo "password is incorrect, please enter another password.";
           echo $form1;
       }
}else{
      echo $form1;
}
if(isset($_GET["value"])){
    echo $_GET["value"];
    if($_GET["value"]=="public"){
        echo "<br>". $_GET["name"]."<br>";
        echo "<br>".$_GET["email"]."<br>";
        echo "<br>".$_GET["value"]."<br>";
    }else{
        echo "Sorry this user's information is private and cannot be displayed.";
    }

}






 ?>

</body>
</html>
