<?php
$a=$_POST['re'];
$b=$_POST['rey'];
$p=$_POST['matik'];
if($a==""){
		    echo "Nilai Operand kiri kosong";
		  }
else if ($b==""){
				 echo "Nilai Operand kanan kosong";
				}
else if ($p=='+'){
				echo $a+$b;
			   }
else if ($p=='-'){
				echo $a-$b;
			   }
else if ($p=='*'){
				echo $a*$b;
			   }
else if ($p=='/'){
				echo $a/$b;
			   }
else if ($p=='%'){
				echo $a%$b;
			   }
?>