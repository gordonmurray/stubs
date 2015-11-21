<?php

require_once('bootstrap.php');

$postedData = $stubs->receivePostedData();

$binary = base64_decode($postedData['imageContent']);
header('Content-Type: bitmap; charset=utf-8');

$stubs->saveLocalFile($postedData['filename'], $binary);

//$tesseract = new TesseractOCR('images/' . $filename);
//$tesseract->setLanguage('eng');
//$text = $tesseract->recognize();

echo "Image uploaded successfully";