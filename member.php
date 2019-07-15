// ligt im Haubtferzeichnes
// Nachflgenden Cod ab zeile 2952 einfügen

//Aword Ausgabe
	$uid = $memprofile['uid'];
	$query = $db->query("SELECT * FROM ".TABLE_PREFIX."trophies WHERE uid = '$uid' ORDER BY timestamp DESC");
	while($trophy = $db->fetch_array($query)) {
		if($trophy["TID"]=="0"){$ausgabe_1="<li><img src='-BildURL-' title='-Titel und/oder Beschreibung-'></li>";}
		if($trophy["TID"]=="1"){$ausgabe_2="<li><img src='-BildURL-' title='-Titel und/oder Beschreibung-'></li>";}
		if($trophy["TID"]=="2"){$ausgabe_3="<li><img src='-BildURL-' title='-Titel und/oder Beschreibung-'></li>";}
		if($trophy["TID"]=="3"){$ausgabe_4="<li><img src='-BildURL-' title='-Titel und/oder Beschreibung-'></li>";}
		if($trophy["TID"]=="4"){$ausgabe_5="<li><img src='-BildURL-' title='-Titel und/oder Beschreibung-'></li>";}
	} 
