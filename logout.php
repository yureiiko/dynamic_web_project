<?php
if (isset($_POST["usrtype"])) {
    switch ($_POST["usrtype"]) {
        case 'admin':
            if (isset($_COOKIE["admin"])) {
                setcookie("admin", "", time()-3600);
                unset($_COOKIE["admin"]);
                header("Location: login.php");
            }
            break;
        case 'seller':
            if (isset($_COOKIE["seller"])) {
                setcookie("seller", "", time()-3600);
                unset($_COOKIE["seller"]);
                header("Location: login.php");
            }
            break;
        case 'buyer':
            if (isset($_COOKIE["buyer"])) {
                setcookie("buyer", "", time()-3600);
                unset($_COOKIE["buyer"]);
                header("Location: login.php");
            }
            break;
        default:
            header("Location: login.php");
            break;
    }
}
?>