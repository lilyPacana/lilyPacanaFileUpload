<?php
    function Type($file){
        $allowed = array('jpeg', 'jpg', 'png');
        $fileExt = explode("/",$file);
        return in_array(end($fileExt),$allowed) ? true : false;
    }


    function Size($file){
        return ($file <= 10000000) ? true : false;
    }

    function eFile($file){
        return (!file_exists($file)) ? true : false;
    }

    function fDirectory($file,$target){
        return move_uploaded_file($file,$target);
    }
   
?>