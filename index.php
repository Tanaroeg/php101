<?php
    require "dbconnect.php";
    $sql = "SELECT * FROM `user_tb`";
    $query = $conn->query($sql);
?>
    <table border="1">
        <tr>
            <td>UserId</td>
            <td>Username</td>
            <td>Password</td>
            <td>Name</td>
            <td>Telephone</td>
            <td></td>
            <td></td>
        </tr>
<?php
    while($row = $query->fetch_assoc()){
?>
        <tr>
            <td><?php echo $row["UserID"]; ?></td>
            <td><?php echo $row["Username"]; ?></td>
            <td><?php echo $row["Password"]; ?></td>
            <td><?php echo $row["Name"]; ?></td>
            <td><?php echo $row["Tel"]; ?></td>
            <td><a href="edit.php?userid=<?php echo $row["UserID"]; ?>">Edit</a></td>
            <td><a href="delete.php?userid=<?php echo $row["UserID"]; ?>">Delete</a></td>
        </tr>
<?php
    }
?>
    </table>
    <a href="create.php">Create</a>