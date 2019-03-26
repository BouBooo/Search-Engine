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
    <form  action="result.php" method="POST">
        <input class="form-control" type="text" name="user_query" placeholder="Insert your research here"/>
        <input class="btn btn-dark" type="submit" value="Search Now" name="search"/>
    </form>
</div>

</body>

</html>