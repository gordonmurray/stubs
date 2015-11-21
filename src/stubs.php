<?php

namespace Murrion;

class stubs
{

    /**
     * Collect the data posted in
     *
     * @return array
     */
    public function receivePostedData()
    {
        $postedData = array(
            'imageContent' => (isset($_POST['image'])) ? $_POST['image'] : '',
            'filename' => (isset($_POST['filename'])) ? $_POST['filename'] : '',
            'imei' => (isset($_POST['imei'])) ? $_POST['imei'] : '',
            'email' => (isset($_POST['filename'])) ? $_POST['filename'] : '',
        );

        return $postedData;
    }

    /**
     * Save received data to a local file
     *
     * @param $filename
     * @param $binary
     */
    public function saveLocalFile($filename, $binary)
    {
        @mkdir('images');
        $file = fopen('images/' . $filename, 'wb');
        fwrite($file, $binary);
        fclose($file);
    }
}