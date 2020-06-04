<?php 

	$ip_address = $_SERVER['REMOTE_ADDR']; 
	$browser = $_SERVER['HTTP_USER_AGENT'];
	$date = date('d-m-Y');
	$sum = $_POST['sum'];
	$form_data = array($sum,$ip_address, $date,$browser );
	$file_open  =fopen('file.csv','a');
	$no_rows = count(file("file.csv"));
	if($no_rows > 1)
	{
	$no_rows = ($no_rows - 1) + 1;
	}

fputcsv($file_open, $form_data);
?>
    
