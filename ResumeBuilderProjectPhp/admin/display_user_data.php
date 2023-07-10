<?php
include('db_connect.php');

// If delete button is clicked
if (isset($_POST['deleteUser'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM user_info WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "User with ID $id has been deleted successfully.";
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
}

// Fetch user data from the database
$sql = "SELECT * FROM user_info";
$result = mysqli_query($conn, $sql);
?>
// Display user data in a table
<table>
<tr>
<th>ID</th><th>Name</th><th>Email</th><th>Action</th>
</tr>
<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $row['ID']; ?></td>
<td><a href='display_usr.php?user_id=<?php echo $row['ID']; ?>'><?php echo $row['Name']; ?></a></td>
<td><?php echo $row['Email']; ?></td>
<td>
<form method='POST'>
<input type='hidden' name='id' value='<?php echo $row['ID']; ?>'>
<input type='submit' name='deleteUser' value='Delete'>
</form>
</td>
</tr>
<?php } ?>
</table>
<?php
mysqli_close($conn);

?>
