<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>LOGIN</h1>
    <form method="POST" action="validate.php">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" id="username" name="username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" id="password" name="password"></td>
            </tr>
        </table>
        <button type="submit">Login</button>
    </form>

</body>

</html>