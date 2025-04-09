<?php

session_start();
if(isset($_SESSION['login']) && $_SESSION['login'] == "true" ){
    $_SESSION['login'] = "true";
    // echo "Loged in: ".$_SESSION['login'];
    // echo "<br>user id: ".$_SESSION['id'];
    $sql = "SELECT * from signup where id = {$_SESSION['id']}";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        // echo "<br>username: " . $row['username'];
        $_SESSION['username'] = $row['username'];
    }else{
        $_SESSION['username'] = "";
    }
} else{
    $_SESSION['login'] = "false";
    $_SESSION['id'] = "";
    $_SESSION['role'] = '';
    $_SESSION['username'] = "";
}
// echo "<br>role: ".$_SESSION['role'];

?>