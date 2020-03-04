<?php
    include_once("function.php");
    $file= $_FILES['files'];
    //echo"<pre>",print_r($file),"</pre>";
    $fileName= $file['name'];
    $fileType= $file['type'];
    $fileTmpname= $file['tmp_name'];
    $fileSize= $file['size'];
    $dir = "uploads//";

    foreach($fileName as $index => $name){
        if(Type($fileType[$index])){
        }else{
            echo "please check the file type";
        }
        if(Size($fileSize[$index])){
        }else{
            echo "Please check the file size";
        }
            $targetDir = $dir.basename($fileName[$index]);
        if(eFile($targetDir)){
        }else{
            echo "file already exist";
        }
        if(fDirectory($fileTmpname[$index],$targetDir)){
        }else{
            echo "Something wrong Happen";
        }
        
        echo "<img scr=\"$targetDir\"/>",$targetDir;
        }

    //scan "uploads" folder and display them accordingly
    $folder = "uploads";
    $results = scandir('uploads');
    foreach ($results as $result) {
        if ($result === '.' or $result === '..') continue;

        if (is_file($folder . '/' . $result)) {
            echo '
                <div class="col-md-3">
                    <img src="'.$folder . '/' . $result.'" alt="..." style="width:250px; height:auto;">
                </div>';
        }
    }

?>