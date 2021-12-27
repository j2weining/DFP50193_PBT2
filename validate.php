<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin') {
    $myfile = fopen("pswd.txt", "r");
    $pswd = fread($myfile, filesize("pswd.txt"));
    if (password_verify($password, $pswd)) {
        header('location: homepage.php');
    } else {
?>
        <script>
            alert('Please enter correct password.');
            window.location = './';
        </script>
    <?php
    }
} else {
    ?>
    <script>
        alert('Please enter correct username.');
        window.location = './';
    </script>
<?php
}
