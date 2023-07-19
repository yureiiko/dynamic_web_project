<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style/myaccount.css">
    <title></title>
</head>
<body>
    <div class="banner">
        <?php
        include('../include/NavigationP.php');
        ?>
    </div>
  <main>
    <?php
    if (!isset($_COOKIE["buyer"])) {
        header("Location: ../login.php");
    }
    $usr = "root";
    $password = "";
    $database = "dynamic_web_project";
    $conn = new mysqli("localhost", $usr, $password, $database);
    $query = "select * from buyer where id_buyer=".$_COOKIE["buyer"];
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($res);
    ?>
        <section class="my-account">
            <div class="personal-info">
                <h2>User Information</h2>
                <div class="profile-picture">
                    <img src="../style/img/default-profile.png" alt="Profile Picture">
                    <input type="file" id="profile-picture-upload" accept="image/*">
                </div>
                <p>Name: <?php echo $row["username"] ?></p>
                <p>ID: <?php echo $row["id_buyer"] ?></p>
                <!---<p>Email: johndoe@example.com</p>--->
                <p>IBAN: <?php echo $row["iban"] ?></p>
                <!---<p>Phone: +1 123-456-7890</p>--->
                <!---<p>Joined: January 1, 2023</p>--->
            </div>
            <div class="vertical-line"></div>
            <div class="other-sections">
                <div class="order-history">
                    <h2>Order History</h2>
                    <ul>
                        <?php
                        $query = "select * from sales where id_buyer=".$_COOKIE["buyer"];
                        $res = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($res)) {
                            echo "
                            <div class='order-info'>
                                <span>Date: ".$row["sale_date"]."</span>
                                <span>Product : ".$row["id_prod"]."</span>
                            </div>";
                        }
                        ?>
                        <!---<li>
                            <div class="order-info">
                                <span>Order #1234</span>
                                <span>Date: January 15, 2023</span>
                                <span>Total: $50.00</span>
                            </div>
                            <div class="order-items">
                                <ul>
                                    <li>Product 1</li>
                                    <li>Product 2</li>
                                    <li>Product 3</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="order-info">
                                <span>Order #5678</span>
                                <span>Date: January 10, 2023</span>
                                <span>Total: $80.00</span>
                            </div>
                            <div class="order-items">
                                <ul>
                                    <li>Product 4</li>
                                    <li>Product 5</li>
                                </ul>
                            </div>
                        </li>--->
                    </ul>
                </div>

                <div class="account-settings">
                    <h2>Account Settings</h2>
                    <ul>
                        <!--<li><a href="link_bs.php">Profile</a></li>
                        <li><a href="passwordchange.php">Change Password</a></li>-->
                        <form action="../logout.php" method="POST">
                            <input type="hidden" name="usrtype" value="buyer">
                            <input type="submit" value="Log out">
                        </form>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <?php
    include('../include/Footer.php');
?>
</body>
</html>


  


