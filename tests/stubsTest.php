<?php
require __DIR__ . '/../vendor/autoload.php';

class stubsTest extends PHPUnit_Framework_TestCase
{

    public function testReceivePostedDataStructure()
    {
        $stubs = new Murrion\stubs();

        $postedData = $stubs->receivePostedData();

        $this->assertArrayHasKey('imageContent', $postedData);
        $this->assertArrayHasKey('filename', $postedData);
        $this->assertArrayHasKey('imei', $postedData);
        $this->assertArrayHasKey('email', $postedData);

    }

    public function testSaveLocalFile()
    {
        $stubs = new Murrion\stubs();

        @unlink('./images/text.txt');

        $stubs->saveLocalFile('text.txt', 'content');

        $this->assertFileExists('./images/text.txt');


    }


}