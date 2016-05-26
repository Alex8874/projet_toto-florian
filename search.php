<?php
require 'inc/db.php';

//mettre le code pour la recherche

// Afficher le resultat de la recherche en tableau 
	$etudiantListe  = array(); 

if (!empty($_GET['search'])) {
	$searchID = ($_GET['search']);
	echo $searchID;
var_dump($searchID);

$sql = '
		SELECT stu_id, stu_name, stu_firstname, cou_name, cit_name, mar_name, stu_email, stu_birthdate, stu_birthdate AS birthdate
		FROM student
		LEFT OUTER JOIN country ON country.cou_id = student.cou_id
		LEFT OUTER JOIN city ON city.cit_id = student.cit_id
		LEFT OUTER JOIN marital_status ON marital_status.mar_id = student.mar_id
		WHERE stu_name LIKE :d
		OR stu_firstname LIKE :d
		OR cou_name LIKE :d
		OR mar_name LIKE :d
		OR stu_email LIKE :d
	';
	//1er etape
		$pdoStatement = $pdo->prepare($sql);
	// je donne la valeur au paramètre de requete
		$pdoStatement->bindValue("d", $searchID);
	//2ieme etape
		// Je teste Si erreur
			if ($pdoStatement->execute() === false) {
			
	}
			else{
			$etudiantListe  = $pdoStatement->fetchAll();

	}
}

print_r($pdo->errorInfo());
print_r($etudiantListe);

require '/inc/header.php';
require 'inc/list_view.php';
require '/inc/footer.php';
?>