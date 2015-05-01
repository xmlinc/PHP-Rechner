<?php

	$zahl1="";
	$zahl2="";
	$op="";
	$ausgabe="";
	$ergebnis="";
//------Funktion zur Addition----
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
//------Ende Funktion----------

//------Hauptprogramm----------

if(isset($_POST['zahl']))
{
//	if(empty($zahl1))
	if($zahl1 == "")
	{
		//echo $zahl1;
		$zahl1 = $_POST['zahl1'];
		$op = $_POST['ope'];
		$ausgabe .= $_POST['output'];
		$ausgabe .= $_POST['zahl'];		
	}
	else
	{
		$ausgabe .= $_POST['output'];
		$ausgabe .= $_POST['zahl'];		
	}
}
//##########################################//
if(isset($_POST['op']))
{
	$zahl1 =$_POST['output'];
	$op = $_POST['op'];
}
if(isset($_POST['sum']))
{
	$zahl1 =$_POST['zahl1'];
	$op = $_POST['ope'];
	$zahl2 =$_POST['output'];
	$ausgabe = berechne($zahl1,$zahl2,$op);
//	$zahl1 = $ausgabe;
	
	
	
}
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
}
//##################################

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
	else
	{
		$ausgabe = $_POST['output'];
//		$zahl2 =$_POST['output'];
	}
	$zahl1 =$_POST['zahl1'];
	$op = $_POST['ope'];
}

 //------Ende Hauptprogramm-----
?>
<!DOCTYPE html>
<html>
	<head>
		<title>rechner</title>
		<meta charset="utf-8">
		<style>
			form
			{
				width:190px;
			}
			input
			{
				width:35px;
			}
			#output{
				width:150px;
				margin:0px 0px 10px 0px;
				text-align:right;
			}
			#geteilt{
				margin:0px 0px 0px 0px;
			}
			#null{
				margin:0px 0px 0px 0px;
			}
			#löschen{
				width:152px;
				margin:0px 0px 5px 0px;
			}
			#gleich{
				width:152px;
				margin:5px 0px 0px 0px;
			}
		</style>
	</head>
	<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		<fieldset>
		<legend>rechner</legend>
		<input type="text" name="output" id="output" value="<?php echo $ausgabe; ?>" readonly="readonly">
		
	
		
		<input type="submit" name="zurück" id="löschen" value="C">
		<input type="submit" name="zahl"  value="1">
		<input type="submit" name="zahl"  value="2">
		<input type="submit" name="zahl"  value="3">
		<input type="submit" name="op"  value="+">
		<input type="submit" name="zahl"  value="4">
		<input type="submit" name="zahl"  value="5">
		<input type="submit" name="zahl"  value="6">
		<input type="submit" name="op"  value="-"><br>
		<input type="submit" name="zahl"  value="7">
		<input type="submit" name="zahl"  value="8">
		<input type="submit" name="zahl"  value="9">
		<input type="submit" name="op"  value="*"><br>
		<input type="submit" name="punkt" id="punkt" value=".">
		<input type="submit" name="zahl" id="null" value="0">
		<input type="submit" name="neg" id="vorzeichen" value="+/-">
		<input type="submit" name="op" id="geteilt" value="/">
			<input type="submit" name="sum" id="sum" value="=">
		
		<input type="text" name="zahl1" id="out" value="<?php echo $zahl1; ?>">
		<input type="text" name="ope" id="out" value="<?php echo $op; ?>">
		<input type="text" name="zahl2" id="out" value="<?php echo $zahl2; ?>">
		</fieldset>
	</form>
		
	</body>
</html>

