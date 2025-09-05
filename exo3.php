<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 </title>
</head>
<body>
    <pre>
        <?php 
            print_r($_GET);
            if(isset($_GET["ville"])){
                if($_GET["ville"] === "lannion"){
                    echo("C'est tutu");
                }
            }else{
                echo("Existe pas");
            }
            
        ?>
    </pre>
</body>
</html>