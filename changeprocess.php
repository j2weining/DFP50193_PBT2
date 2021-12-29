<?php
$password = $_POST['password'];
$newpassword = $_POST['newpassword'];
$confirmpass = $_POST['confirmpass'];

if ($password != '') {
    if ($newpassword != '') {
        if ($newpassword != $password) {
            if ($confirmpass != '') {
                if ($newpassword == $confirmpass) {
                    $myfile = fopen('pswd.txt', 'r');
                    $pswd = fread($myfile, filesize("pswd.txt"));
                    if (password_verify($password, $pswd)) {
                        $kata = password_hash($newpassword, PASSWORD_BCRYPT);
                        $myfile = fopen('pswd.txt', 'w');
                        fwrite($myfile, $kata);
                        fclose($myfile);
?>
                        <script>
                            alert('Password changed.');
                            window.location = 'index.php';
                        </script>
                    <?php
                    } else {
                    ?>
                        <script>
                            alert('Please enter correct password.');
                            window.location = 'changepassword.php';
                        </script>
                    <?php
                    }
                } else {
                    ?>
                    <script>
                        alert('New password and confirm password does not match.');
                        window.location = 'changepassword.php';
                    </script>
                <?php
                }
            } else {
                ?>
                <script>
                    alert('Please enter a password for confirm password.');
                    window.location = 'changepassword.php';
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert('Please enter a different password for new password.');
                window.location = 'changepassword.php';
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert('Please enter a new password.');
            window.location = 'changepassword.php';
        </script>
    <?php
    }
} else {
    ?>
    <script>
        alert('Please enter a password.');
        window.location = 'changepassword.php';
    </script>
<?php
}
