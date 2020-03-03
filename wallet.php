<?
//Simple config
// Please don't touch =)
	$db_driver = "sqlite3";
	$db_name = 'blockchain.dat';
	
	if (!file_exists($db_name)) {
		$bc= new SQLite3($db_name);

		$bc->exec("CREATE TABLE blocks(id INTEGER PRIMARY KEY, hash TEXT, prevhash TEXT, data TEXT, time INT, finder VARCHAR)");
		
		$db->exec("CREATE TABLE tx(id INTEGER PRIMARY KEY, block TEXT, hash TEXT, txid TEXT)");
	}
	
	

	print "ok<br>";
	

    $db = new SQLite3($db_name);
    $tablesquery = $db->query("SELECT name FROM sqlite_master WHERE type='table';");
    $tables = $tablesquery->fetchArray(SQLITE3_ASSOC);

    foreach($tables as $name){
       echo $name.'<br />';
    }

?>