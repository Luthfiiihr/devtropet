<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<title>Login SignUp</title>
	<link rel="stylesheet" type="text/css" href="asset_landingpage/loginStyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- It will redirect to the Home Page after submitting the form -->
  <script>
  $(document).ready(function(){
    $("form").submit(function(){
      alert("Great Job !");
    });
  });
  </script>
</head>
@yield('content')
<script type="text/javascript" src="asset_landingpage/script.js"></script>