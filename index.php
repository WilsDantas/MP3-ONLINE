<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>MP3 Online</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <?php 
                include_once('helpers.php');
                if (isset($_GET['page'])){
                    if(file_Exists("pages/{$_GET['page']}.php")){
                        include_once "pages/{$_GET['page']}.php";
                    }else{
                        include_once "pages/error404.php";
                    }
                } else{
                    include_once 'pages/albums.php';
                }
            ?>
        </div>
    </body>
</html>