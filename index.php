<?php
header("Content-type: text/html;charset=UTF-8");
$a = $_GET['k'];
if ($a == "") {
	header('Location: 2048.htm');
	return;
}

$k = base64_decode($a);
$j = json_decode($k, true);
if ($j['grid']['size'] != 4) {
	header('Location: 2048.htm');
	return;
}

echo "<script>
localStorage.setItem('gameState', '" . $k . "'); 
localStorage.setItem('scount', '0'); 
localStorage.setItem('step', ''); 
parent.location.href='2048.htm';
</script>";
return;