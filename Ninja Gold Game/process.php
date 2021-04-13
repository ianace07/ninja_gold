<?php
session_start();

if(isset($_POST['building']) && $_POST['building'] == "farm")
{
	$number = rand(10,20);
	$_SESSION['sum'] += $number;
	$_SESSION['msg'] = "<li class='green'>You entered a farm and earned " . $number ." gold. (" .date("Y-m-d h:i:sa"). ")</li>";
}

if(isset($_POST["building"]) && $_POST["building"] == "cave")
{
	$number = rand(5,10);
	$_SESSION["number"] = $number;
	$_SESSION["sum"] += $_SESSION["number"];
	$_SESSION["msg"] = "<li class='green'>You entered a cave and earned " . $number ." gold. (" .date("Y-m-d h:i:sa"). ")</li>";
}

if(isset($_POST["building"]) && $_POST["building"] == "house")
{
	$number = rand(2,5);
	$_SESSION["sum"] += $number;
	$_SESSION["msg"] = "<li class='green'>You entered a house and earned " . $number ." gold. (" .date("Y-m-d h:i:sa"). ")</li>";
}

if(isset($_POST["building"]) && $_POST["building"] == "casino")
{
	$number = rand(-50,50);
	$_SESSION["number"] = $number;
	$_SESSION["sum"] += $_SESSION["number"];
	if($_SESSION["number"]<0)
	{
	$_SESSION["msg"] = "<li class='red'>You entered a casino and lost " . $number ." gold. (" .date("Y-m-d h:i:sa"). ")</li>";
	}
	else
	{
	$_SESSION["msg"] = "<li class='green'>You entered a casino and earn " . $number ." gold. (" .date("Y-m-d h:i:sa"). ")</li>";
	}
}

if(isset($_POST["restart"]))
{
	session_destroy();
}
header("Location: index.php");
?>