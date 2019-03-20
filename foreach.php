<!DOCTYPE>
<html>
<head>
<title> </title>
</head>
<body>
<form action="foreach.php" method="post">

<select name="tgl">
<?php for ($tgl=1; $tgl <=31; $tgl++) { ?>

<option value="<?php echo $tgl; ?>"><?php echo $tgl; ?></option>

<?php }?>

</select>

<?php
$variable_bulan = array ("January",
                        "February",
                        "March",
                        "April",
                        "May",
                        "June",
                        "July",
                        "August",
                        "September",
                        "October",
                        "November",
                        "December");
?>

<select>
<?php foreach ($variable_bulan as $month){?>
<option value="<?php echo $month; ?>"><?php echo $month; ?> </option>
<?php } ?>
</select>

<select name="thn">
<?php for ($thn=1980; $thn <=2019 ; $thn++) { ?>
<option value="<?php echo $thn; ?>"><?php echo $thn; ?> </option>
<?php }?>
</select>




<input type="submit" name="submit" value="submit">

</form>

<?php

if(!empty($_POST['submit'])){

$thn = $_POST['thn'];
$tgl = $_POST['tgl'];

echo $thn;
echo "<br>";
echo $tgl;
}
?>


</body>
</html>