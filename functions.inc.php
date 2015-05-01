<?php

$zahl1 = "";
$zahl2 = "";
$op = "";
$sumop= "";
$ausgabe = "";
$ergebnis = "";

//############    Ergebnis ausrechnen   ############//

function berechne($zahl1,$zahl2,$op)
{
	$ergebnis = "";

	switch ($op)
	{
		case "+" : $ergebnis = $zahl1 + $zahl2;
			break;
		case "-" : $ergebnis = $zahl1 - $zahl2;
			break;
		case "×" : $ergebnis = $zahl1 * $zahl2;
			break;
		case "÷" : $ergebnis = $zahl1 / $zahl2;
			break;
	}
	return $ergebnis;
}

//############    Erste Zahl merken   ############//

	if(isset($_POST['zahl']))
	{
		if ($_POST['output'] == "0" )
//		if (($_POST['output'] == "0" )&&($_POST['zahl'] == "0"))
		{
//			$ausgabe = "0";
			$zahl1 = $_POST['zahl1'];
			$op = $_POST['ope'];
		}
		else if($zahl1 == "")
		{
			$ausgabe = "";
			$ausgabe .= $_POST['output'];
			$ausgabe .= $_POST['zahl'];
			$zahl1 = $_POST['zahl1'];
			$op = $_POST['ope'];
		}
		else
		{
			$ausgabe .= $_POST['output'];
			$ausgabe .= $_POST['zahl'];
		}
	}

//############    Operator ausführen   ############//

	if(isset($_POST['op']))
	{
			$zahl1 = $_POST['output'];
			$op = $_POST['op'];
	}

//############    Summe ausrechnen   ############//

	if(isset($_POST['sum']))
	{
		$zahl1 =$_POST['zahl1'];
		$op = $_POST['ope'];
		$zahl2 = $_POST['output'];
		$ausgabe = berechne($zahl1,$zahl2,$op);
		$ergebnis = $ausgabe;
		$sumop = "=";
	}

//############    Negative / Positive Zahl   ############//

	if (isset($_POST['neg']))
	{
		if($_POST['output']>0)
		{
			$ausgabe = "-";
			$ausgabe .= $_POST['output'];
		}
		else
		{
			$ausgabe = $_POST['output'];
			$ausgabe = str_replace('-','',$ausgabe);
		}

		$zahl1 = $_POST['zahl1'];
		$op = $_POST['ope'];
	}

//############    Komma-Eingabe behandeln   ############//

	if (isset($_POST['punkt']))
	{
		$ausgabe = $_POST['output'];
		$findMich   = '.';
		$ausgabe = strpos($ausgabe, $findMich);

		if ($ausgabe == false)
		{
			$ausgabe = $_POST['output'];
			$ausgabe .= ".";
		}
		else {
			$ausgabe = $_POST['output'];
		}

		$zahl1 =$_POST['zahl1'];
		$op = $_POST['ope'];
	}

//------   Ende PHP Programm   -----//
?>
