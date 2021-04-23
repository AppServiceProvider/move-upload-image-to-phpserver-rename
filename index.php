<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Image Upload</h2>
        <form method="post" action="image-upload.php" enctype="multipart/form-data">
            <div>
                <input type="file" name="image" class="form-control">
            </div>
            <input class="mt-3" type="submit" name="submit" class="btn btn-primary"> 
        </form>
    </div>
</body>
</html>