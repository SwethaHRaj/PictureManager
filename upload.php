<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="first.css">
</head>

<body>
    <div class="container uplaodPage">
        <?php
        if (isset($_POST['submit'])) {
            include "dbConnection.php";

            $rename = htmlspecialchars($_REQUEST['rename']);
            $imageName = ($_FILES['image']['name']);
            $imageSize = ($_FILES['image']['size']);                    //validate
            $imageTmpName = $_FILES['image']['tmp_name'];
            $imageError = ($_FILES['image']['error']);
            $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);
            $imageExtension_lowerCase = strtolower($imageExtension);    //validate
            $allowedExtension = array("jpg", "jpeg", "png");
            $newName = ($rename . "." . $imageExtension);
            $newPath = "upload/" . $newName;


            // =====
            $tagname1 = htmlspecialchars($_REQUEST['tagname1']);
            $tagname2 = htmlspecialchars($_REQUEST['tagname2']);
            $tagname3 = htmlspecialchars($_REQUEST['tagname3']);
            $tagname4 = htmlspecialchars($_REQUEST['tagname4']);
            $tagname5 = htmlspecialchars($_REQUEST['tagname5']);


            // =====
            if (move_uploaded_file($imageTmpName, 'upload/' . $newName)) {
                $uploadQuery = "INSERT INTO firstimages (IMG_NAME, IMG_PATH, IMG_TAGNAME1, IMG_TAGNAME2, IMG_TAGNAME3, IMG_TAGNAME4, IMG_TAGNAME5) 
                VALUES ('$rename', '$newPath', '$tagname1', '$tagname2', '$tagname3', '$tagname4', '$tagname5')";
                try{
                    if ($conn->query($uploadQuery) === true)
                    echo "Uploaded Successfully";
                }
                catch(Exception $e){
                     echo "Image name already exists";
                }
            }
        }
        $conn->close();
        ?>
    </div>
    <div class="backToHome"><a href="first.php">Go to Home Page</a></div>
</body>

</html>


<!-- if (move_uploaded_file($imageTmpName, 'upload/' . $newName)) {
                $uploadQuery = "INSERT INTO images (IMG_NAME, IMG_PATH, IMG_TAGNAME1, IMG_TAGNAME2, IMG_TAGNAME3, IMG_TAGNAME4, IMG_TAGNAME5) 
                VALUES ('$rename', '$newPath', '$tagname1', '$tagname2', '$tagname3', '$tagname4', '$tagname5')";
                echo "<br>".$e=$php_errormsg['Uncaught mysqli_sql_exception'];
                if(!mysqli_query($conn, $uploadQuery)) 
                    echo "Image name already exists";
                // if ($conn->query($uploadQuery) === FALSE)
                //     echo "Image name already exists";
                else
                    echo "Uploaded Successfully";
            } -->