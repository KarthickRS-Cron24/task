<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="user" method="post">
    @csrf
        <label for="username">Username</label>
        <input type="text" name="username" id="username"><br>
        <span style='color : red'>@error('username'){{$message}}@enderror</span><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>
        <span style='color : red'>@error('password'){{$message}}@enderror</span><br>
<br>
        <input type="submit" value="Login">
    </form>
</body>
</html>