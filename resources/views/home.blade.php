<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Hello World!</h1>

    <br>
    @auth
    <p>Congrats your logged in</p>
    <form action="/logout" method="POST">
    @csrf
    <button type="submit">Logout</button>
    </form>
    @else
    <div>
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="name" placeholder="name">
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <button type="submit">Register</button>
        </form>
    </div>
    <div>
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="loginname" placeholder="name">
            <input type="password" name="loginpassword" placeholder="password">
            <button type="submit">Login</button>
    </form>
    </div>
    @endauth
</body>
</html>