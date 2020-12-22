<?php

    $table = "message";
try {
     $db = new PDO("mysql:dbname=database;host=localhost", "root", "" );
     $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );//Error Handling
     $sql ="CREATE table $table(
     ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
      first_name VARCHAR(50) NOT NULL,
      last_name VARCHAR(50) NOT NULL,
      mail VARCHAR(50) NOT NULL,
      telephone VARCHAR(50) NOT NULL,
      sujet VARCHAR(50) NOT NULL,
      message TEXT NOT NULL;";
     $db->exec($sql);
     print("Created $table Table.\n");
     if (preg_match('/^[\S]{1,50}$/', $firstName) &&
      preg_match('/^[\S]{1,50}$/', $lastName) &&
      preg_match('/^[\S]{1,50}$/', $mail) &&
      //preg_match('/^(?:http||https||ftp):\/\/[\S]{1,92}$/', $url) &&
      preg_match('/^[\S]{1,50}$/', $telephone) &&
      //preg_match('/^[\S]{1,50}$/', $age) &&
      preg_match('/^[\S]{1,50}$/', $sujet) &&
      $message != '') {
    $statement = $pdo->prepare(
      'INSERT INTO $table (first_name, last_name, mail, url, telephone, age, sujet, message) VALUES (:first_name, :last_name, :mail, :url, :telephone, :age, :sujet, :message)'
    );
    $statement -> bindValue('first_name', $firstName, PDO :: PARAM_STR);
    $statement -> bindValue('last_name', $lastName, PDO :: PARAM_STR);
    $statement -> bindValue('mail', $mail, PDO :: PARAM_STR);
   // $statement -> bindValue('url', $url, PDO :: PARAM_STR);
    $statement -> bindValue('telephone', $telephone, PDO :: PARAM_STR);
    //$statement -> bindValue('age', $age, PDO :: PARAM_STR); #INT à la place de STR pour les int
    $statement -> bindValue('sujet', $sujet, PDO :: PARAM_STR);
    $statement -> bindValue('message', $message, PDO :: PARAM_STR);

  }   
}  catch(PDOException $e) {
    echo $e->getMessage();//Remove or change message in production code
}
 /* $pdo -> query(
    'CREATE TABLE IF NOT EXISTS message (
      id INTEGER PRIMARY KEY AUTOINCREMENT,
      first_name VARCHAR(50) NOT NULL,
      last_name VARCHAR(50) NOT NULL,
      mail VARCHAR(50) NOT NULL,
      url VARCHAR(50) NOT NULL,var_dump($exception);
}

?>
      telephone VARCHAR(50) NOT NULL,
      age VARCHAR(50) NOT NULL,
      sujet VARCHAR(50) NOT NULL,
      message TEXT NOT NULL,
    )'
  );*/
			/*
		try {
			$pdo = new PDO(dsn:'sqlite:' . dirname(path:_FILE_). '/database.db');
			//$dirPath = dirname(pack(format))
			$pdo ->setAttribute(attribute: PDO::ATTR_DEFAULT_FETCH_MODE, value: PDO::FETCH_ASSOC);
			$pdo ->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);*/

			/*$pdo->query
					statement: 'CREATE TABLE IF NOT EXISTS message (
						id INTEGER PRIMARY KEY AUTOINCREMENT,
						first_name VARCHAR(50) NOT NULL,
						last_name VARCHAR(50) NOT NULL
			)'
	);*/
	

/*	$statement->pdo->prepare(
			statement: 'INSERT INTO message (first_name, last_name, message) VALUES (:first_name, :last_name, :message)'
	);
	$statement->bindValue( parameter:'first_name', $firstName, data_type: PDO::PARAM_STR);
	$statement->bindValue( parameter:'last_name', $lastName, data_type: PDO::PARAM_STR);
	$statement->bindValue( parameter:'message', $message, data_type: PDO::PARAM_STR);
	$statement->execute(); // l'exécution de la requette préparée
    }catch (PDOException $exception) {
    	var_dump($exception);
    }

}*/



/*
 if (preg_match('/^[\S]{1,50}$/', $firstName) &&
      preg_match('/^[\S]{1,50}$/', $lastName) &&
      preg_match('/^[\S]{1,50}$/', $mail) &&
      preg_match('/^(?:http||https||ftp):\/\/[\S]{1,92}$/', $url) &&
      preg_match('/^[\S]{1,50}$/', $telephone) &&
      preg_match('/^[\S]{1,50}$/', $age) &&
      preg_match('/^[\S]{1,50}$/', $sujet) &&
      $message != '') {
    $statement = $pdo->prepare(
      'INSERT INTO message (first_name, last_name, mail, url, telephone, age, sujet, message) VALUES (:first_name, :last_name, :mail, :url, :telephone, :age, :sujet, :message)'
    );
    $statement -> bindValue('first_name', $firstName, PDO :: PARAM_STR);
    $statement -> bindValue('last_name', $lastName, PDO :: PARAM_STR);
    $statement -> bindValue('mail', $mail, PDO :: PARAM_STR);
    $statement -> bindValue('url', $url, PDO :: PARAM_STR);
    $statement -> bindValue('telephone', $telephone, PDO :: PARAM_STR);
    $statement -> bindValue('age', $age, PDO :: PARAM_STR); #INT à la place de STR pour les int
    $statement -> bindValue('sujet', $sujet, PDO :: PARAM_STR);
    $statement -> bindValue('message', $message, PDO :: PARAM_STR);
    $statement -> execute();
  }
} catch(PDOExeption $exception){
  var_dump($exception);
}
*/
?>