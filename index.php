<?php
    require 'method.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
<?php
    foreach($chien as $key =>$value){
        ?>
    <li> 
    Nom : <?= $value-> nom ?>, 
    Race : <?= $value-> type ?>
    </li>
        <?php
    }
?>
</ul>


<form action="" method="post">  

    <label for="nom" >Nom: </label>
    <input type = "text" name="nom" id="nom">

    <label for="race" >Race: </label>
    <input type = "text" name="race" id="race">  

    <input type = "submit" value="submit">
</form>
</body>
</html>