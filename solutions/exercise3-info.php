<html>
<?php
echo "Full name: ";
if (isset($_GET['name'])) {
    echo $_GET['name'];
}
echo "<br>";
echo "Email: ";
if (isset($_GET['email'])) {
    echo $_GET['email'];
}
echo "<br>";
echo "Password: ";
if (isset($_GET['password'])) {
    echo $_GET['password'];
}
echo "<br>";
?>
</html>
