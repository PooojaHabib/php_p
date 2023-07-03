<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>

<body>
<form method="POST" action="" enctype="multipart/form-data">
    <label> choose file</label>
    <input type="file" name="image" required="">
    <input type="submit" name="submit" value="Upload">
</form>


<?php
if(isset($_FILES['image']))
{
    $error=array();
    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size']; 
    $file_tmp=$_FILES['image']['tmp_name'];
     $file_type=$_FILES['image']['type'];
     $tmp=explode('.',$file_name);
    $file_ext=strtolower(end($tmp));
    $extensions=array("jpg","jpeg","gif","png");

    if(in_array($file_ext,$extensions)==false)
    {
        $error[]="invalid file format";

    }
    if($file_size>204800)
    {
        $error[]="file size must be less than 2 mb";
    }
    if (empty($error)==true)
    {
        move_uploaded_file($file_tmp,'img/'.$file_name);
        echo "Success";
    }
    else{
        echo"<ul>";
        foreach($error as $err)
        {
            echo "<li>".$err."</li>";
        } 
        echo "</ul>";
    }
}
?>
</body>
</html>