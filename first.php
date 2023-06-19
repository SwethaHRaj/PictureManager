<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="first.css">
</head>

<body>
    <div class="container">
        <span>
            <h1>Welcome to Image Manager</h1>
        </span>
        <div class="formContainer">
            <form method="post" action="upload.php" enctype="multipart/form-data">
                <p>Select image to upload</p>
                <input type="file" name="image" id="image" required />
                <input type="text" placeholder="Rename image" name="rename" required />
                <input type="text" placeholder="tag name1(optional)" name="tagname1" class="tagName" />
                <input type="text" placeholder="tag name2(optional)" name="tagname2" class="tagName" />
                <input type="text" placeholder="tag name3(optional)" name="tagname3" class="tagName" />
                <input type="text" placeholder="tag name4(optional)" name="tagname4" class="tagName" />
                <input type="text" placeholder="tag name5(optional)" name="tagname5" class="tagName" />
                <input type="submit" name="submit" class="button"/>
            </form>
        </div>
        <div class="formContainer">
            <form method="get" action="view.php" enctype="multipart/form-data">
                <p>Search image</p>
                <input type="search" name="search" placeholder="image name or tag name" required />
                <input type="submit" name="searchBtn" class="button" />
            </form>
        </div>
    </div>
</body>

</html>