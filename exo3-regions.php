<?php
require_once("regions.php");
const PAGE_SIZE = 5;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regions par 5</title>
</head>
<body>
    <h1>Liste des régions par 5</h1>
    <?php 
            if(isset($_GET["page"])){
                $pageNumber = $_GET['page'];        
            }else{
                $pageNumber = 0;
            }
            print_r($_GET);
            
        ?>
   <ul>
      <?php  foreach (array_slice($regions, ($pageNumber * 4),PAGE_SIZE) as $nom_region => $departements) { ?>
    <li>
        <?php echo($nom_region); }?>
    </li>
     <br>

        <a href=" <?php echo "http://localhost:8888/exo3-regions.php?page=".$pageNumber + 1 ?>">Page Suivante</a>
    
    <br>
    <?php if ($$_GET["page"] >= 1) { ?>
        <a href=" <?php echo "http://localhost:8888/exo3-regions.php?page=".$pageNumber - 1 ?>">Page Précedente</a>
     <?php } ?>
            
      
   </ul>
</body>
</html>