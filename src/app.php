<h1>TobiNetScanner</h1>
<form action="" method="post">
  <p>TCP type of scan checks top 1000 ports but it takes longer. Stealthy is just like TCP but has measures to keep you stealthy. Ping is much faster but doesnt check top 1000 ports</p>
  <select name="TypesOfScan">
      <option value="" disabled selected>For Network scans</option>
      <option value="sT" >TCP</option>
      <option value="sS" >Stealthy</option>
      <option value="sn" >Ping</option>
  </select>
  target subnet:<textarea id="attackingsubnet" name="subnet" rows="1" cols="15"></textarea>
  <input type="submit" name="submitTypeOfScan" value="Select type of scan"> 
  <input type="hidden" name="isSubmitted" value="1">
</form>

<form action="" method="post">
  <p>OS detection just detectes OS Version, Aggressive detects OS Version, services, ports, tracerouts and so on.</p>
  <select name="TypesOfScanIn">
      <option value="" disabled selected>For Individual targets</option>
      <option value="O">OS Detection</option>
      <option value="A">Aggressive Mode</option>
  </select>
  ports(default 80,443):<textarea id="ports" name="ports" rows="2" cols="25">80,443</textarea>
  ip:<textarea id="ip" name="ip" rows="1" cols="15"></textarea>
  <input type="submit" name="submitIndividualScan" value="Select Individual type of scan">
  <input type="hidden" name="isSubmittedIn" value="1">
</form>

<?php
echo "1";
//network scan
$isSelected = $_POST['isSubmitted'];
$typeofscan = $_POST['TypesOfScan'];
$subnet = $_POST['subnet'];
if($isSelected == 1){
     //echo 'selected type: ' . $typeofscan;
     //echo 'subnet: ' . $subnet;
	$exec="nmap -".$typeofscan." ".$subnet;
	echo "<br/>exec command: ".$exec;
	exec($exec, $output);
	echo "<br/>";
	//var_dump($output);

	foreach($output as $red){
		echo "<br/>".$red;
	}
}
//individual scan
$isSelected = $_POST['isSubmittedIn'];
$typeofscan = $_POST['TypesOfScanIn'];
$ip = $_POST['ip'];
$ports = $_POST['ports'];
if($isSelected == 1){
     //echo 'selected type: ' . $typeofscan;
     //echo 'subnet: ' . $subnet;
        $exec="nmap -".$typeofscan." ".$ip." -p ".$ports;
	echo "</br> exec command: ".$exec;
	exec($exec, $output);
        foreach($output as $red){
                echo "<br/>".$red;
        }
}
?>
