<style>
<?php include 'style.css'; ?>
</style>
<?php 
  $ip_address = $_SERVER['REMOTE_ADDR']; 
	$browser = $_SERVER['HTTP_USER_AGENT'];
	$date = date('d-m-Y');
	$sum = $_POST['sum'];
	$form_data = array($sum,$ip_address,$date,$browser);
	$file_open  =fopen('sum.csv','a');
	$no_rows = count(file("sum.csv"));
	
	if($no_rows > 1)
	{
	$no_rows = ($no_rows - 1) + 1;
	}

fputcsv($file_open, $form_data);

if (($handle= fopen("sum.csv", "r")) !== FALSE) 
{
  echo '<table>';
  echo '<tr>';
  echo '<th>Expression</th>';
  echo '<th>IP</th>';
  echo '<th>Date</th>';
  echo '<th>Browser</th>';
  echo '</tr>';
  
  while (($data = fgetcsv($handle,0, ",")) !== FALSE) 
  {	
    echo '<tr>';
    echo '<th>'.$data[0].'</th>';
    echo '<th>'.$data[1].'</th>';
    echo '<th>'.$data[2].'</th>';
    echo '<th>'.$data[3].'</th>';
    echo '</tr>';
  }
  echo '</table>';

  // Close the file
	fclose($handle);
}
?>
    
