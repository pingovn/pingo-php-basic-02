<html>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	    <label style="font-weight:bold">Email: </label>
        <input type="text" name="email" value="<?php if (isset($_POST['year'])) echo $_POST['year'] ?>">
        <input type="submit" name="submit" value="Kiem tra"><br>		
    </form>
<?php
// check email
$regex = '/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9_-]+(.[a-zA-Z0-9_-]){0,1}.[a-zA-Z0-9_-]+$/'; 
if (empty($_POST['email']) || !preg_match($regex, $_POST['email'])) {
	if (isset($_POST['submit']))
		echo '<label style="color:red">Email cua ban khong hop le</label>';
}
else
{    
    echo '<label style="color:blue">Email cua ban hop le</label>';
}
?>
</html>