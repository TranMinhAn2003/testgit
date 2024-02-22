<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    if (isset($_POST['user'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        if ($username == 'an' && $pass = '123') {
            header("Location:admin.php");
        } else {
            header("Location:.php?error=dasai");
        }
    }
    }
    if(isset ($_GET['error'])){
        echo"<p style='color: red'> {$_GET('error')}</p>";
}
?>