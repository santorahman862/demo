<?php 

$link= mysqli_connect("localhost","root","","newproject");
if ($link) {
	echo "yes";

}
else {
	echo "no";
}
 ?>