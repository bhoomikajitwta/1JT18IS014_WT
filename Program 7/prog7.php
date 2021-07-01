<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="refresh" content="1" />
<style>
p {
color: white;
font-size: 60px;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}
body {
background-color: green;
}
</style>
<body>
<p> 
<?php 
echo "The server time is ". date(" h: i : s A"). "<br>";
echo "Today is ". date("Y/m/d"). "<br>" ;
echo "Today is ". date("Y.m.d"). "<br>" ;
echo "Today is ". date("Y-m-d"). "<br>" ;
echo "Today is ". date("1") ;
?> </p>
</head>
</html>