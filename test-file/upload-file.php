<?php

//If isset file
if (isset($_FILES)) {

    $saved = false;
    $index = 0;
    $ImageFile = "image";
    $message = '';


    if (isset($_FILES[$ImageFile])) {
        $uploadDir = $_POST['dir']; // 'images/';
        $uploadFile = $uploadDir . '/' . basename($_FILES[$ImageFile]['name']);

        if (move_uploaded_file($_FILES[$ImageFile]['tmp_name'], $uploadFile)) {
            $message = 'File ' . basename($_FILES[$ImageFile]['name']) . ' uploaded successfully.';
        } else {
            $message = 'Failed to upload ' . basename($_FILES[$ImageFile]['name']);
        }
    } else {
        $message = 'Error uploading file.';
    }



    echo json_encode(array('info' => $uploadFile . $message));


    // $saved = [];
    // $index = 0;
    // $ImageFile = "filename";

    // foreach($_FILES[$ImageFile]["tmp_name"] as $key=>$tmp_name) {
    //     $ImageName = str_replace(' ','-',strtolower($_FILES[$ImageFile]['name'][$key]));

    //     $fileType = $_FILES[$ImageFile]['type'][$key];

    //     $fileType = substr($fileType, strrpos($fileType, '/') +1);

    //     $fileName = "images/". basename($ImageName); //.$fileType;

    //     $saved[$index++] = move_uploaded_file($_FILES[$ImageFile]['tmp_name'][$key], $fileName);


    // }

    // echo json_encode(array('info' => $saved));

}


