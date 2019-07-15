//ist unter inc/datahandlers/post.php anzufinden
// nachfolgenden Cod ab zeile 845 einfügen

//----

//Arworts Cidt lets go!
		//wiefile Post sin feröffelichet Funuction
		
			
				
		//Confi
		//scheifen ende
		$fo_end="4";
		//0 = Word 1
		$ArwordIMG[0]		=""; //Bild URL oder Pfad Angeben
		$ArwordNAME[0]		=""; //Name
		$ArwordBeschr[0]	=""; //beschreibung
		$ArwordTreiger[0]	=""; //nach was sol gesucht werden.
    //1 = Word 2
		$ArwordIMG[1]		=""; //Bild URL oder Pfad Angeben
		$ArwordNAME[1]		=""; //Name
		$ArwordBeschr[1]	=""; //beschreibung
		$ArwordTreiger[1]	=""; //nach was sol gesucht werden.
    //2 = Word 3
		$ArwordIMG[2]		=""; //Bild URL oder Pfad Angeben
		$ArwordNAME[2]		=""; //Name
		$ArwordBeschr[2]	=""; //beschreibung
		$ArwordTreiger[2]	=""; //nach was sol gesucht werden.
    //3 = Word 4
		$ArwordIMG[3]		=""; //Bild URL oder Pfad Angeben
		$ArwordNAME[3]		=""; //Name
		$ArwordBeschr[3]	=""; //beschreibung
		$ArwordTreiger[3]	=""; //nach was sol gesucht werden.
    //4 = Word 5
		$ArwordIMG[4]		=""; //Bild URL oder Pfad Angeben
		$ArwordNAME[4]		=""; //Name
		$ArwordBeschr[4]	=""; //beschreibung
		$ArwordTreiger[4]	=""; //nach was sol gesucht werden.
		
		
		
		for ($i=0; $i<=$fo_end; $i++)
		{
			//1. Durchlauf für nomales Inplay Forum.
			$parentlist = $db->fetch_field($db->query("SELECT parentlist FROM mybb_forums WHERE mybb_forums.fid = '$post[fid]'"), "parentlist");
			if(preg_match("/42,/i", $parentlist)) {
				if(preg_match("/".$ArwordTreiger[$i]."/i", $post['message'])) {
					$new_record = array(
						"uid" => $post['uid'],
						"image" => $db->escape_string($ArwordIMG[$i]),
						"name" => $db->escape_string($ArwordNAME[$i]),
						"description" => $db->escape_string($ArwordBeschr[$i]),
						"timestamp" => TIME_NOW,
						"TID" => $i
					);
					$db->insert_query("trophies", $new_record);
				} 
			}
			//2. Durchlauf für nomales archif Forum.
			$parentlist = $db->fetch_field($db->query("SELECT parentlist FROM mybb_forums WHERE mybb_forums.fid = '$post[fid]'"), "parentlist");
			if(preg_match("/12,/i", $parentlist)) {
				if(preg_match("/".$ArwordTreiger[$i]."/i", $post['message'])) {
					$new_record = array(
						"uid" => $post['uid'],
						"image" => $db->escape_string($ArwordIMG[$i]),
						"name" => $db->escape_string($ArwordNAME[$i]),
						"description" => $db->escape_string($ArwordBeschr[$i]),
						"timestamp" => TIME_NOW,
						"TID" => $i
					);
					$db->insert_query("trophies", $new_record);
				} 
			}
		}

		//Aword ende
