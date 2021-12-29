<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>

<body>
    <h1>Change Password</h1>
    <form action="changeprocess.php" method="POST">
        <table>
            <tr>
                <td>Current Password: </td>
                <td><input type="password" id="password" name="password"></td>
            </tr>
            <tr>
                <td>New Password: </td>
                <td><input type="password" id="newpassword" name="newpassword"></td>
            </tr>
            <tr>
                <td>Confirm New Password: </td>
                <td><input type="password" id="confirmpass" name="confirmpass"></td>
            </tr>
        </table>
        <button type="submit">Change</button>
        <a href="homepage.php">Back to home page</a>
    </form>
</body>

</html>