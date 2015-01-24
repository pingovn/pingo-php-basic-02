<html>
    <style>
        label {
            font-weight: bold;
        }
    </style>
<?php
if (!isset($_POST['submit']) || empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['password'])) {
?>
    <form action="exercise7.php" method="POST">
	<label>Name: </label>
        <input type="text" name="fullname">
        <label>Email: </label>
        <input type="text" name="email">
        <label>Password: </label>
        <input type="password" name="password">
        <input type="submit" name="submit" value="Register">
    </form>
<?php
} else {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
?>
    <label>Welcome <a href="exercise3-info.php?name=<?php echo $name ?>&email=<?php echo $email ?>&password=<?php echo $password ?>"><?php echo $name?></a></label>
<?php
}
?>
</html>
