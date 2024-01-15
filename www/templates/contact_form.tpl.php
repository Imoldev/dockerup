<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/add_contact.php" method="post" enctype="multipart/form-data">
        
        <input type="text" name="user_name" placeholder="name">
        <br>
        <input type="text" name="email" placeholder="email">
        <br>
        <input type="text" name="phone" placeholder="phone">
        <br>
        <input type="file" name="photo">
        <br>
        <button type="submit">Send</button>
    </form>
    
</body>
</html>