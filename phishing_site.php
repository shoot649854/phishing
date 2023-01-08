<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Phising site</title>
</head>
<body>

<?php

echo 'Your browser: ';
echo $_SERVER["HTTP_USER_AGENT"];
echo '<BR>';

$x = $_SERVER['HTTP_REFERER'];
if (isset($x)) 
{
    $x = htmlspecialchars($x);
    echo "You coming from link,  $x";
} 
else 
{
    echo "You came here directory";
}
  
echo '<BR>';
echo '<BR>';
echo 'Your language: ';
$p = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
echo $p;


echo '<BR>';
echo 'IP address: ';
echo $_SERVER['REMOTE_ADDR'];

echo $_SERVER['HTTP_USER_AGENT'] 
echo '<BR>';

echo $_SERVER['PHP_SELF']
echo '<BR>';

echo $_SERVER['GATEWAY_INTERFACE']
echo '<BR>';

echo $_SERVER['SERVER_ADDR']

echo $_SERVER['SERVER_NAME']

echo '<BR>';

echo '<BR>';
echo 'Time: ';
echo date("Y  m  d  H  i  s ") ;

echo '<BR>';




$fp = fopen("data.txt","a+");
flock($fp,2);
fputs($fp,date("Y/m/d H:i:s"));
fputs($fp,",");
fputs($fp,$_SERVER['REMOTE_ADDR']);
fputs($fp,"\n");
flock($fp,3);
fclose($fp);

?>
</body>
</html>