<html>
<head>
</head>
<body>
<?php  

$width = isset($_GET['width']) && !empty($_GET['width'])  ? ' --width '.$_GET['width'] : '' ;
$height = isset($_GET['height']) && !empty($_GET['height']) ? ' --height '.$_GET['height'] : '' ; 
$quality = isset($_GET['quality']) && !empty($_GET['quality']) ? ' --quality '.$_GET['quality'] : '' ;
$verbose = isset($_GET['verbose']) ? ' --verbose ' : '' ;
$timeout = isset($_GET['timeout']) && !empty($_GET['timeout']) ? ' --timeout '.$_GET['timeout'] : '' ;
$encoding = isset($_GET['encoding']) && !empty($_GET['encoding']) ? ' --encoding '.$_GET['encoding'] : '' ;
$timelapse = isset($_GET['timelapse']) && !empty($_GET['timelapse']) ? ' --timelapse '.$_GET['timelapse'] : '' ;
$sharpness = isset($_GET['sharpness']) && !empty($_GET['sharpness']) ? ' --sharpness '.$_GET['sharpness'] : '' ;
$contrast = isset($_GET['contrast']) && !empty($_GET['contrast']) ? ' --contrast '.$_GET['contrast'] : '' ;
$saturation = isset($_GET['saturation']) && !empty($_GET['saturation']) ? ' --saturation '.$_GET['saturation'] : '' ;
$ISO = isset($_GET['ISO']) && !empty($_GET['ISO']) ? ' --ISO '.$_GET['ISO'] : '' ;
$vstab = isset($_GET['vstab']) ? ' --vstab ' : '' ;
$ev = isset($_GET['ev']) && !empty($_GET['ev']) ? ' --ev ' : '' ;
$exposure = isset($_GET['exposure']) && !empty($_GET['exposure']) ? ' --exposure '.$_GET['exposure'] : '' ;
$awb = isset($_GET['awb']) && !empty($_GET['awb']) ? ' --awb '.$_GET['awb'] : '' ;
$imxfx = isset($_GET['imxfx']) && !empty($_GET['imxfx']) ? ' --imxfx '.$_GET['imxfx'] : '' ;
$colfx = isset($_GET['colfx']) && !empty($_GET['colfx']) ? ' --colfx '.$_GET['colfx'] : '' ;
$metering = isset($_GET['metering']) && !empty($_GET['metering']) ? ' --metering '.$_GET['metering'] : '' ;
$rotation = isset($_GET['rotation']) && !empty($_GET['rotation']) ? ' --rotation '.$_GET['rotation'] : '' ;
$hflip = isset($_GET['hflip']) ? ' --hflip ' : '' ;
$vflip = isset($_GET['vflip']) ? ' --vflip ' : '' ;



$command = 'raspistill  --nopreview -o /opt/temp/test01.jpg '.$quality.$width.$height.$verbose.$timeout.$encoding.$timelapse.$sharpness.$contrast.$saturation.$ISO.$vstab.$ev.$exposure.$awb.$imxfx.$colfx.$metering.$rotation.$hflip.$vflip.'  2>&1  '  ;

$escaped_command = escapeshellcmd($command);
 
exec($escaped_command, $test, $retval);
#echo '<p>'.$command.'</p>';
echo '<p>'.implode ( '</p><p>' , $test ).'</p>';
echo "<img src='image.jpg'/>";
?>
</body>
</html>
