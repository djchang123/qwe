<?php



//Retrieve form data. 
//GET - user submitted data using AJAX
//POST - in case user does not support javascript, we'll use POST instead
$name = ($_GET['name']) ? $_GET['name'] : $_POST['name'];
$email = ($_GET['email']) ?$_GET['email'] : $_POST['email'];
$subject = ($_GET['subject']) ?$_GET['subject'] : $_POST['subject'];
$comment = ($_GET['comment']) ?$_GET['comment'] : $_POST['message'];

header('Location: https://rest.nexmo.com/sms/json?api_key=8b1b03bf&api_secret=i6TOvaxHWxzo2s8m&to=+639273352937&from=NEXMO&text=From:'.$name.' Email:'.$email.' About:'.$subject.' Content:'.$comment.'');
$message = "Message sent!";
echo "<script type='text/javascript'>alert('$message');</script>";
?>
