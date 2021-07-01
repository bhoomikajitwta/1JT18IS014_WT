<style>
h2{
    text-align : center;
    font-family : cursive;
}
body{
    background-color : lightblue;
}
</style>
<?php
$user = "Bhoomika BV";
?>
<!DOCTYPE html>
<html>
<head> <title> program 6 </title></head>
<body>
<h2> <?php echo $user; ?>,Welcome to Sample PHP Script </h2>
<h3> This page displays the numbedr of page visits </h3>
<?php
print "<h3> REFRESH PAGE </h3>";
$name="counter.txt";
$file = fopen($name,"r");
$hits = fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file = fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);
print "Total number of views: ".$hits[0];
?>
</body>
</html>