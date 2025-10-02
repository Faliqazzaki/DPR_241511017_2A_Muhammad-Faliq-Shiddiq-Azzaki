<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Page</h1>
    <form action="/login/auth" method="post">  
        <label for="User_id">User ID:</label>  
        <input type="text" id="User_id" name="User_id" required>  
        <br><br>  
        <label for="Password">Password:</label>  
        <input type="password" id="Password" name="Password" required>  
        <br><br>  
        <input type="submit" value="Login" name="submit">
</body>
</html>