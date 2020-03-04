<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>FILEUPLOAD</title>
</head>

<body>
<div class="container-fluid">
    <h1 class="text-center">UPLOAD YOUR FILES HERE</h1>
    <div class="row">
        <div class="col-md-4"></div>

        <div class="col-md-4 " style="background-color: lightblue;">    
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                select image to upload:
                <input  type="file" name="files[]" multiple> <br>
                <button class="btn btn-primary" type="submit" name="submit">
                <i class="fa fa-upload" aria-hidden="true"></i> upload</button>
            </form>
        </div>
        


            </div>
        <div class="col-md-4"></div>
    </div>
       
        