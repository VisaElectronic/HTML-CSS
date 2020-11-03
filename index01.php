<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="checkbox-form.php" method="post">
    Which buildings do you want access to?<br />
    <input type="checkbox" name="formDoor[]" value="A" />Acorn Building<br />
    <input type="checkbox" name="formDoor[]" value="B" />Brown Hall<br />
    <input type="checkbox" name="formDoor[]" value="C" />Carnegie Complex<br />
    <input type="checkbox" name="formDoor[]" value="D" />Drake Commons<br />
    <input type="checkbox" name="formDoor[]" value="E" />Elliot House

    <input type="submit" name="formSubmit" value="Submit" />
</form>


        
</body>
</html>