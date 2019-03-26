<?php

// Includes
require_once('database.php');

// Vars
$insertError = "";

// POST processing
if(isset($_POST['site']))
{
    if(!empty($_POST['site_link']) && !empty($_POST['site_title']) && !empty($_POST['site_keywords']) && !empty($_POST['site_desc']) && !empty($_FILES['site_image']))
    {
        if (filter_var($_POST['site_link'], FILTER_VALIDATE_URL)) 
        {
            $site_title = $_POST['site_title'];
            $site_link = $_POST['site_link'];
            $site_keywords = $_POST['site_keywords'];
            $site_desc = $_POST['site_desc'];
            $site_image = $_FILES['site_image']['name'];
            $site_image_tmp = $_FILES['site_image']['tmp_name'];
            $pathImage = "img/".$site_image;

            // Database ready to be used
            $db = Database::connect();

            $query = $db->prepare('INSERT INTO sites (site_title, site_link, site_keywords, site_desc, site_image) 
                                    VALUES (?,?,?,?,?)');
            $query->execute(array($site_title, $site_link, $site_keywords, $site_desc, $site_image));

            move_uploaded_file($site_image_tmp, $pathImage);

            $db = Database::disconnect();

        }
        else
        {
            $insertError = '<span class="alert alert-danger">Invalid URL</span>';
        }
    }
    else
    {
        $insertError = '<span class="alert alert-danger">Please inquire all inputs</span>';
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Search Engine</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<style>
    input {
        margin-top: 2%;
    }


</style>

<body>
    <div class="container">
    <img src="img/search_logo.gif"/>
    <form  action="" method="POST" enctype="multipart/form-data">
        <table class="table table-dark">
            <tr>
                <td></td>
                <td>New Website</td>
            </tr>
            <tr>
                <td>Site Title</td>
                <td><input class="form-control" type="text" name="site_title"/></td>
            </tr>
            <tr>
                <td>Site Link</td>
                <td><input class="form-control" type="text" name="site_link"/></td>
            </tr>
            <tr>
                <td>Site Keywords</td>
                <td><input class="form-control" type="text" name="site_keywords"/></td>
            </tr>
            <tr>
                <td>Site Description</td>
                <td><input class="form-control" type="text" name="site_desc"/></td>
            </tr>
            <tr>
                <td>Site Image</td>
                <td><input type="file" name="site_image"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn btn-light" type="submit" value="Insert" name="site"/></td>
            </tr>
        </table>
    </form>

    <?= $insertError ?>

</div>

</body>

</html>