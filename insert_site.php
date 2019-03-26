<!DOCTYPE html>
<html>
<head>
    <title>Search Engine</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<style>
    body {
        background: white;
        margin-top: 2%;
    }

    input {
        margin-top: 2%;
    }


</style>

<body>
    <div class="container">
    <img src="img/search_logo.gif"/>
    <form  action="" method="POST" enctype="multipart/form-date">
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
                <td><input class="btn btn-light" type="submit" value="Insert"/></td>
            </tr>
        </table>
    </form>
</div>

</body>

</html>