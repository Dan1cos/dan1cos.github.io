<?php

echo phpinfo();
/*if(isset($_GET))
{
	$db = new SQLite3('db.db.txt');
	$sum = $_GET['AMOUNT'];
	$num = $_GET['MERCHANT_ORDER_ID'];
	$statement = $db->prepare('SELECT user_id FROM donate WHERE payment_id = :id;');
	$statement->bindValue(':id', $num);
	$result = $statement->execute();
	$statement1 = $db->prepare('SELECT realdonate FROM users WHERE user_id = :id;');
	$statement1->bindValue(':id', $result);
	$result1 = $statemen1t->execute();
	$all = $sum+$result1;
	echo all;
}

*/
?>