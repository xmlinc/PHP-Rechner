<?php require('functions.inc.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>php rechner</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
<body>
<div id="wrapper">
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		<div id="fieldset">
			<legend>php rechner</legend>
			<input type="text"   name="output" value="<?php echo $ausgabe; ?>" id="output" readonly="readonly">
			<input type="submit" name="cancel" value="C"   id="cancel">
			<input type="submit" name="zahl"   value="1"   id="button">
			<input type="submit" name="zahl"   value="2"   id="button">
			<input type="submit" name="zahl"   value="3"   id="button">
			<input type="submit" name="op"     value="+"   id="button">
			<input type="submit" name="zahl"   value="4"   id="button">
			<input type="submit" name="zahl"   value="5"   id="button">
			<input type="submit" name="zahl"   value="6"   id="button">
			<input type="submit" name="op"     value="-"   id="button">
			<input type="submit" name="zahl"   value="7"   id="button">
			<input type="submit" name="zahl"   value="8"   id="button">
			<input type="submit" name="zahl"   value="9"   id="button">
			<input type="submit" name="op"     value="×"   id="button">
			<input type="submit" name="neg"    value="+/-" id="button">
			<input type="submit" name="zahl"   value="0"   id="button">
			<input type="submit" name="punkt"  value="."   id="button">
			<input type="submit" name="op"     value="÷"   id="button">
			<input type="submit" name="sum"    value="="   id="sum">
		</div>
		<div id="history">
			<label>Duales Zahlensystem:</label>
			<input type="text" name="dual"   id="out"   value="<?php echo decbin($ausgabe); ?>">
			<label>Dezimales Zahlensystem:</label>
			<input type="text" name="dual"   id="out"   value="<?php echo $ausgabe; ?>">
			<label>Hexadezimales Zahlensystem:</label>
			<input type="text" name="dual"   id="out"   value="<?php echo dechex($ausgabe); ?>">
			<hr />
			<input type="text" name="zahl1"  id="out"   value="<?php echo $zahl1; ?>">
			<input type="text" name="ope"    id="out"   value="<?php echo $op; ?>">
			<input type="text" name="zahl2"  id="out"   value="<?php echo $zahl2; ?>">
			<input type="text" name="sumop"  id="out"   value="<?php echo $sumop; ?>">
			<input type="text" name="erg"    id="out"   value="<?php echo $ergebnis; ?>">
		</div>
	</form>
</div>
</body>
</html>
