<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href="first.css">

</head>

<body>
    <div class="Container">
        <div class="viewPage">
            <div class="backToHome"><a href="first.php">Go to Home Page</a></div>
            <div class="imageContainer">
                <?php
                include "dbConnection.php";
                $imageName = htmlspecialchars($_REQUEST['search']);

                $displayQuery = "SELECT IMG_PATH FROM firstimages where IMG_NAME LIKE '$imageName' or IMG_TAGNAME1 LIKE '$imageName' or IMG_TAGNAME2 LIKE '$imageName' 
                        or IMG_TAGNAME3 LIKE '$imageName' or IMG_TAGNAME4 LIKE '$imageName' or IMG_TAGNAME5 LIKE '$imageName'";
                $result = $conn->query($displayQuery);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $displayImage = $row['IMG_PATH'];
                        echo "<div class='imageBox'><img src='" . $displayImage . "' width='600px' height='400px' /></div>";
                    }
                } else {
                    echo "<h3>Sorry!...no mathching images. Please try with different search names</h3>";
                }
                $conn->close();
                ?>
            </div>
        </div>

    </div>
</body>

</html>


<!-- echo "<br>" .$row['IMG_NAME']. "->" .$row['IMG_DETAILS']. "->" .$row['IMG_DATA'];

if ($result->num_rows > 0) 
while($row = $result->fetch_assoc())  -->

<!-- &#8592; -->