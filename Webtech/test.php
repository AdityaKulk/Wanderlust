<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
            .a{
                color: whitesmoke;
                text-decoration-line: none;
                font-size: 1em;
            }
            .a:hover{
                color: gainsboro;
            }
           
            
	</style>
</head>
<body>

<?php

$str3=$_POST["search"];


$path = 'data.txt';
if (isset($str3)){
    $fh = fopen($path,"w+");
    fwrite($fh,$str3); // Write information to the file
    fclose($fh); // Close the file
 }

$result=exec("python set1.py");

$i;
$str1="";
$str2="";
for ($i=0; $i <strlen($result) ; $i++) { 
	if ($result[$i]=='[' || $result[$i]==']') {
		$str1=$str1.$result[$i];
		}
	else{
		$str2=$str2.$result[$i];
	}
}
$str3=str_replace(".html", "", $str2);
$res1=explode(",", $str2);
$res2=explode(",", $str3);
echo "<body style=background-image:login.jpg;></body>";
for ($i=0; $i <count($res2); $i++) { 
	echo "<a style=font-size:2em;color:red;text-decoration-line:none;position:relative;top:50px;left:40%; href=$res1[$i]>$res2[$i]</a>";
	echo "<br>";
}
?>

</body>
</html>