<?php

    $upload_dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
    $uploading_file = $upload_dir.basename($_FILES['userfile']['name']);

    if(!file_exists($upload_dir)){
        mkdir($upload_dir);
    }

    if (move_uploaded_file($_FILES['userfile']['tmp_name'],$uploading_file)){
        echo 'File successfully uploaded!';
    }
        else{
        echo 'Error!';
    }

    //is_uploaded_file();