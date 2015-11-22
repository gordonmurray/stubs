<?php

require_once('bootstrap.php');

$postedData = $stubs->receivePostedData();

if ($postedData['imageContent'] != '') {

    $binary = base64_decode($postedData['imageContent']);
    
    $stubs->saveLocalFile($postedData['filename'], $binary);

//$tesseract = new TesseractOCR('images/' . $filename);
//$tesseract->setLanguage('eng');
//$text = $tesseract->recognize();

    echo "Image uploaded successfully";
} else {
    echo "Nothing to do";
}