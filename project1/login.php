<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    if (isset($_POST['user'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        if($_FILES['myfile']['size']<10000){
            if(move_uploaded_file($_FILES['myfile']['tmp_name'],'documents/'.$_FILES['myfile']['name'])){
                echo"succesfull";
            }else{
                echo"error";
            }
        }
        /*if ($username == 'an' && $pass = '123') {
            header("Location:admin.php");
        } else {
            header("Location:login.php?error=dasai");
        }*/
    }
}
/*if(isset ($_GET['error'])){
    echo"<p style='color: red'> {$_GET('error')}</p>";
}*/
?>
<form action="login.php" method="post">
    Username:<input type="text" name="user" id="">
    Pass:<input type="password" name="pass" id="">
    File:<input type="file" name ="myfile" id="">
    <button type="submit">login</button>

</form>
