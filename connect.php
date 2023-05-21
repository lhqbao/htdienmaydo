<?php
	$Connect = mysqli_connect("en1ehf30yom7txe7.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","so5hw6hozabe8nvx","t1kwhbx7sn2e8i5a","dqy88q9ae4ngx369") or die("Lỗi".mysqli_error($Connect));
	//$Connect = mysqli_connect("mysql://so5hw6hozabe8nvx:t1kwhbx7sn2e8i5a@en1ehf30yom7txe7.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/dqy88q9ae4ngx369");
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);
?>