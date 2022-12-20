
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action ="controllerCours/updateCours/<?php echo $data['id'];?>" method="post">
    <label for="Code">Codes des cours</label>
        <input type="text" name="Code" value="<?php echo $data['code']?>" ><br>
    <label for="Code">titre</label>
        <input type="text" name="titre" value="<?php echo $data['titre']?>" ><br>    
    <label for="Code">langage</label>
        <input type="text" name="langage" value="<?php echo $data['langage']?>" ><br>
        <input type="submit" value="ok">
</form>
<?php
require("footer.html")    
?>
</body>
</html>