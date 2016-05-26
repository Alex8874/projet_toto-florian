<?php



//Je me connecte a la base de donnees
//en faisant le lien vers le ficher connection DB
//voir dossier INC db.php
require 'inc/db.php';
//----------------------------------------------//
//Faire une requete(demande)
$sql = '   
	SELECT ses_opening, ses_ending, ses_id
	FROM session
	';

$pdoStatement = $pdo->query($sql);
//si erreur
	if ($pdoStatement === false) {
	print_r($pdo->errorInfo());
	}
//sinon 
else{   //je recupere toutes les donnees
	$sessionList= $pdoStatement->fetchAll();
	//print_r($sessionList);
	}
?>

<?php
$mysql ='
SELECT COUNT(*) AS nb, city.cit_name
FROM student
INNER JOIN City ON student.cit_id = city.cit_id
GROUP BY cit_name
';

$mypdoStatement = $pdo->query($mysql);
//si erreur
if ($mypdoStatement === false) {
print_r($pdo->errorInfo());
}

//sinon 
else{   //je recupere toutes les donnees
$mysessionList= $mypdoStatement->fetchAll();
//print_r($mysessionList);
}

// Jaffiche ma page
require '/inc/header.php';
require 'inc/index_view.php';
require '/inc/footer.php';

