3<?php
$t = "true";
$f = "false";
$var1=$_POST['re'];
$var2=$_POST['rey'];
$operator=$_POST['op'];

if ($var1=="true"&&$operator=="and"&&$var2=="true"){
	// echo 1 && 1;
	echo "true && true = $t";
}
else if ($var1=="true"&&$operator=="and"&&$var2=="false"){
	// echo 1 && 0;
	echo "true && false = $f";
}
else if ($var1=="false"&&$operator=="and"&&$var2=="true"){
	// echo 0 && 1;
	echo "false && true = $f";
}
else if($var1=="false"&&$operator=="and"&&$var2=="false"){
	// echo 0 && 0;
	echo "false && false = $f";
}

if ($var1=="true"&&$operator=="or"&&$var2=="true"){
	// echo 1 || 1;
	echo "true || true = $t";
}
else if ($var1=="true"&$operator=="or"&$var2=="false"){
	// echo 1 || 0;
	echo "true || false = $t";
}
else if ($var1=="false"&&$operator=="or"&&$var2=="true"){
	// echo 0 || 1;
	echo "false || true = $t";
}
else if($var1=="false"&&$operator=="or"&&$var2=="false"){
	// echo 0 || 0;
	echo "false || false = $t";
}

if ($var1=="true"&&$operator=="xor"&&$var2=="true"){
	// echo 1 Xor 1;
	echo "true Xor true = $f";
}
else if ($var1=="true"&&$operator=="xor"&&$var2=="false"){
	// echo 1 Xor 0;
	echo "true Xor false = $t";
}
else if ($var1=="false"&&$operator=="xor"&&$var2=="true"){
	// echo 0 Xor 1;
	echo "false && true = $t";
}
else if($var1=="false"&&$operator=="xor"&&$var2=="false"){
	// echo 0 Xor 0;
	echo "false && false = $f";
}

if ($operator=="!"&&$var2=="true"){
	// echo !1;
	echo "! true = $f";
}
else if ($operator=="!"&&$var2=="false"){
	// echo !0;
	echo "! false = $t";
}
 
?>