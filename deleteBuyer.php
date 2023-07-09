<?php
header("Content-Type: application/json");
if (isset($_POST["userid"])) {
    echo json_encode("success")
}
?>