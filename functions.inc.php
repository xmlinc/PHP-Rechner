<?php

	$home = './';
//	$home = $_SERVER['PHP_SELF'];
	$ausgabe = "";
	$memory = "";	
	$ergebnis = "";
	$zahl1 = "";
	$zahl2 = "";
	$sumop = "";
	$operator = "";
	$op = "";

//############    Ergebnis ausrechnen   ############//

	function berechne($zahl1,$zahl2,$op)
	{
		$ergebnis="";
		
		switch ($op)
		{
		case "+" : $ergebnis = $zahl1 + $zahl2;
				break;
		case "-" : $ergebnis = $zahl1 - $zahl2;
				break;		
		case "*" : $ergebnis = $zahl1 * $zahl2;
				break;
		case "/" : $ergebnis = $zahl1 / $zahl2;
				break;
	}
	return $ergebnis;
}

//############    Ergebnis ausrechnen   ############//
 	
	if(isset($_POST['sum']))
	{
		$zahl1 = $_POST['zahl1'];
		$zahl2 = $_POST['output'];
		$op    = $_POST['oper'];
		$ausgabe = berechne($zahl1,$zahl2,$op);
		$sumop = "=";
	}

//############   Display Ausgabe   ############//

	function ausgabe()
	{	
		global $zahl1,$zahl2,$op,$ausgabe;
		
		if(isset($_POST['op']))
		{
			$zahl1 = $_POST['output'];
 		}
 		else if(isset($_POST['zahl']))
		{
			if (($_POST['output'] == "" )&&($_POST['zahl'] == "0"))
			{
				$ausgabe = "";
			}
			else
			{
//				$ausgabe = "";
				$ausgabe .= $_POST['output'];
				$ausgabe .= $_POST['zahl'];
			}
		}
		else if(isset($_POST['sum']))
		{
			$ausgabe = berechne($zahl1,$zahl2,$op);
		}
		else if(isset($_POST['neg']))
		{
			$ausgabe = $_POST['output'];
			if($ausgabe > 0) // auf das vorhanden eines minus zeichensin der kette prüfen, wenn ja, entfernen			{
			{
			$ausgabe = "-";
				$ausgabe .= $_POST['output'];
			}
			else if($ausgabe < 0)
			{
//				$ausgabe = $_POST['output'];
//				$ausgabe = strlen($ausgabe)-1;
//				$ausgabe = substr($string,1,$laenge);		
				$ausgabe = str_replace('-', '', $ausgabe);
			}
		}
		
	echo $ausgabe;
	}

//############    Operator ausführen   ############//

	if((isset($_POST['sumop']))&&(($_POST['sumop']) != ""))
	{
		$zahl1 = $_POST['output'];
		$zahl2 = "";
//	$sumop = "";
		$operator = "";
//		$sumop = '=';
//		$operator = $_POST['op'];
 	}

//############    Operator ausführen   ############//

	if(isset($_POST['op']))
	{
		$zahl1 = $_POST['output'];
		$operator = $_POST['op'];
 	}

//############    Operator merken   ############//
 			
	if((isset($_POST['oper']))&&(($_POST['oper'])!="")&&(($_POST['zahl1']) != ""))
	{
		$operator = $_POST['oper'];
		$memory = "";
//		$sumop = "";
 	}

//############   Erste Zahl merken   ############//
 		
 	if((isset($_POST['zahl1']))&&(($_POST['zahl1'])!=""))
	{
		$zahl1 = $_POST['zahl1'];
 	}

//############   Zweite Zahl merken   ############//
 		
 	if((isset($_POST['zahl2']))&&(($_POST['zahl2'])!=""))
	{
		$zahl2 = $_POST['zahl2'];
 	}
 		
//############   Rechner Reset ( Taste C )   ############//

 	if(isset($_POST['cancel']))
	{
		$operator = "";
		$ergebnis = "";
		$zahl1 = "";
		$zahl2 = "";
		$sumop = "";
		$memory = "";
 	}
 	
 //############    Memory   ############//
	
// 	if((isset($_POST['mem']))&&(!isset($_POST['cancel']))&&(!isset($_POST['op']))&&(!isset($_POST['sum']))&&(!isset($_POST['cancel'])))
//	{
//		$memory .= $_POST['mem'];
//		$memory .= $_POST['zahl'];
//	}
	
?>	