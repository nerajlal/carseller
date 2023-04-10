<?php
// Include the QR code library
      include('a_header.php');
      include('db_connect.php');

require_once 'phpqrcode/qrlib.php';

// Data to be encoded in the QR code
$id=$_GET['id'];
$data = "$id";
?>
<br><br><br>
<?php
// File name for the QR code image  
$file_name = "qr/$id.png";
//echo $file_name;
// Error correction level

$error_correction_level = "L";//

// QR code image size
$size = 10;

// Generate the QR code image
QRcode::png($data, $file_name, $error_correction_level, $size);

$qr="update cars set status=4 where registration_no='$id'";
                    mysql_query($qr);

// Display the QR code image
                    ?>
                    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                    <?php
echo '<img src="'.$file_name.'" />';

$img=$id+'.png';
file_put_contents($img, file_get_contents($file_name));
?><br><br>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
<a href="generateQRcode1.php"<form><input type='button' value="Back" style="background: green;color: white"></input></form></a>