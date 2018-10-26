<?php
$var1=$_POST['re'];
$var2=$_POST['rey'];
$relasi=$_POST['rel'];
if($var1==""){
	echo "Nilai Operand kiri kosong";
}
else if($var2==""){
	echo "Nilai Operand kanan kosong";
}

if($relasi=="=="){
	echo $var1==$var2;
	}
	else if($relasi=="<"){
	echo $var1<$var2;
	}
	else if($relasi==">"){
		echo $var1>$var2;
	}
	else if($relasi=="<="){
		echo $var1<=$var2;
	}
	else if($relasi==">="){
		echo $var1>=$var2;
	}
	elseif ($relasi=="!=") {
		echo $var1!=$var2;
	}

?>