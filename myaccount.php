<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/myaccount.css">
    <title></title>
</head>
<body>
    <div class="banner">
        <?php
        include('./include/Navigation.php');
        ?>
    </div>
  <main>
        <section class="my-account">
            <div class="personal-info">
                <h2>User Information</h2>
                <div class="profile-picture">
                    <img src="style/img/default-profile.png" alt="Profile Picture">
                    <input type="file" id="profile-picture-upload" accept="image/*">
                </div>
                <p>Name: John Doe</p>
                <p>Email: johndoe@example.com</p>
                <p>Address: 123 Main St, City, Country</p>
                <p>Phone: +1 123-456-7890</p>
                <p>Joined: January 1, 2023</p>
            </div>
            <div class="vertical-line"></div>
            <div class="other-sections">
                <div class="order-history">
                    <h2>Order History</h2>
                    <ul>
                        <li>
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
                        </li>
                    </ul>
                </div>

                <div class="account-settings">
                    <h2>Account Settings</h2>
                    <ul>
                        <li><a href="link_bs.php">Profile</a></li>
                        <li><a href="address.html">Address Book</a></li>
                        <li><a href="change-password.html">Change Password</a></li>
                        <li><a href="logout.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <?php
    include('./include/Footer.php');
?>
</body>
</html>


  


