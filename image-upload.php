<?php
include 'database.php';
if(isset($_POST['submit']))
{
	 $imgname=$_FILES['image']['name'];
	echo '<br>';
	$extension = pathinfo($imgname,PATHINFO_EXTENSION);

	$randomno=rand(0,100000);
	$rename='Upload'.date('Y-m-d').$randomno;

	 $newname=$rename.'.'.$extension;

    $filename=$_FILES['image']['tmp_name'];

	if(move_uploaded_file($filename, 'upload/'.$imgname))
	{
//        header ("location: index.php");
        
		echo "uploaded";
		$insertqry="INSERT INTO `image_upload`( `image_name`) VALUES ('$newname')";
		$insertes=mysqli_query($con,$insertqry);
	}
	else
	{
		echo "not uploaded";
	}
}
?>