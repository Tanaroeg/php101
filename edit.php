<?php
    require "dbconnect.php";
    
    $getuid = $_GET["userid"];

    $sql = "SELECT * FROM `user_tb` WHERE UserId = '$getuid'";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="txtUserID" value="<?php echo $getuid; ?>">
        <input type="text" name="txtUsername" placeholder="Username" value="<?php echo $row["Username"]; ?>" required><br><br>
        <input type="text" name="txtPassword" placeholder="Password" value="<?php echo $row["Password"]; ?>" required><br><br>
        <input type="text" name="txtName" placeholder="Name" value="<?php echo $row["Name"]; ?>" required><br><br>
        <input type="text" name="txtTel" placeholder="Telephone" value="<?php echo $row["Tel"]; ?>" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
