<?php

require_once 'vendor/autoload.php';

$base = $_REQUEST['image'];
$filename = $_REQUEST['filename'];
$imei = $_REQUEST['imei'];
$email = $_REQUEST['email'];

$binary = base64_decode($base);
header('Content-Type: bitmap; charset=utf-8');

$file = fopen('images/' . $filename, 'wb');
fwrite($file, $binary);
fclose($file);

$tesseract = new TesseractOCR('images/' . $filename);

$text = $tesseract->recognize();

echo "Image uploaded successfully [$text]";