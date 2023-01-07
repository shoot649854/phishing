<?php
    $ua=$_SERVER['HTTP_USER_AGENT'];
    if( (strpos($ua,'iPhone')!==false) || (strpos($ua,'iPod')!==false) || (strpos($ua,'Android')!==false)) 
    {
        header("Location:/mobile/index.php");
        exit();
    }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>

</head>

<body>
<?php
$yo = date("Y/m/d H:i:s");
$who = $_SERVER['REMOTE_ADDR'];
$where = $_SERVER["HTTP_REFERER"];
$where = rawurldecode($where);
mb_convert_encoding($where, "UTF-8", "EUC-JP");
$r_add = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
$browser = $_SERVER["HTTP_USER_AGENT"];

$fp = fopen("data_index/index_data.txt","a");
flock($fp,2);
fputs($fp,"日時：".$yo);
fputs($fp,",");
fputs($fp,"鯖：".$who);
fputs($fp,",");
fputs($fp,"鯖アド：".$r_add);
fputs($fp,",");
fputs($fp,"どこから：".$where);
fputs($fp,",");
fputs($fp,"ブラウザ：".$browser);
fputs($fp,"\n");
flock($fp,3);
fclose($fp); 
?>
</body>
</html>