<style>
<?php include '../css/style.css'; ?>
</style>
<?php 
  $ip_address = $_SERVER['REMOTE_ADDR']; 
	$browser = $_SERVER['HTTP_USER_AGENT'];
	$date = date('d-m-Y');
	$sum = preg_replace('/\s+/','', $_POST['sum']);;
	$form_data = array($sum,$ip_address,$date,$browser);
	$file_open  =fopen('sum.csv','a');
	$no_rows = count(file("sum.csv"));
	
	if($no_rows > 1)
	{
	$no_rows = ($no_rows - 1) + 1;
	}

 if(fputcsv($file_open,$form_data ))
	{

	$rows = array();

    if (($handle = fopen('sum.csv', "r")) !== FALSE) {

        while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
						array_push($rows, $data);
        }
        fclose($handle);
    }
		
	$array_data = array_reverse($rows);
	$output = '';
	$output .= '<table>
	             <thead>
                <tr>
						      <th>DATA</th>
                  <th>IP</th>
						      <th>DATE</th>
					       	<th>BROWSER</th>
								</tr>
							</thead>
						<tbody>'; 
	foreach ($array_data as $ar ){
			$output .= '<tr>
						<td>'.$ar[0].'</td>
						<td>'.$ar[1].'</td>
						<td>'.$ar[2].'</td>
						<td>'.$ar[3].'</td> </tr>';
			}
	echo $output;
	}else {
		echo "error, Please close the file";
	}
?>
    
