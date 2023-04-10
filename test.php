<?php
//$qrCodePath = 'qr/kl 02 al 0011.png';
?>

<?php
// Include Zxing library
include 'Zxing/QrReader.php';

// Path to QR code image file
$qrCodePath = 'qr/kl 02 al 0011.png';

// Read QR code image and decode it
$qrReader = new QrReader($qrCodePath);
$qrCodeData = $qrReader->text();

// Display decoded data
echo $qrCodeData;
?>
