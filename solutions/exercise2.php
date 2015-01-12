<html>
<?php
if (!isset($_POST['submit'])) {
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	    <label style="font-weight:bold">Nh&#7853;p vào n&#259;m d&#432;&#417;ng l&#7883;ch: </label>
        <input type="text" name="year">
        <input type="submit" name="submit" value="Ð&#7893;i sang âm l&#7883;ch">
    </form>
<?php
} else {
    // or display the selected year
    if (isset($_POST['year'])) {
	    $year = $_POST['year'];
        $chi = array( "Tý", "S&#7917;u", "D&#7847;n", "M&#7865;o", "Thìn", "T&#7925;", "Ng&#7885;", "Mùi", "Thân", "D&#7853;u", "Tu&#7845;t", "H&#7907;i" );
        $can = array("Canh", "Tân", "Nhâm", "Quý", "Giáp", "&#7844;t", "Bính", "Ðinh", "M&#7853;u", "K&#7927;");
        echo "Ðó là n&#259;m " . $can[$year % 10] . " " . $chi[($year % 12 + 8) % 12];
    } else {
        echo 'Nothing selected';
    }
}
?>
</html>
