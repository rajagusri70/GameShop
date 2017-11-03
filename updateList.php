<?php
	$db = new PDO ('mysql:host=localhost;dbname=gameshop','root','');

	$url = 'http://api.steampowered.com/ISteamApps/GetAppList/v0001/';
	$jsondata = file_get_contents($url);
	$data = json_decode($jsondata, true);

	// $stmt = $db->prepare("INSERT INTO game_list(appid,name) VALUES(?,?)");

	// //foreach ($data as $row) {
	
	var as = $jsondata.filter(function (i,n){
		return ['applist']['apps']['app'].n.['name']==='dead'
	});
	// 	$stmt->bindParam(1, $data['applist']['apps']['app'][$a]['appid']);
	// 	$stmt->bindParam(2, $data['applist']['apps']['app'][$a]['name']);
	// 	$stmt->execute();

	for (var i = 0; i<as.length;i++){
		print as.['applist']['apps']['app'].i.['name']"</br>";
	}
	
?>