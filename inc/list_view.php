<!DOCTYPE html>
<html>
<body>
<form>
	<!-- pour continuer à fournir ses_id dans l'URL -->
	<input type="hidden" name="ses_id" value="<?=$sessionID?>">
	<select name="nbPerPage">
		<option value="1">1 par page</option>
		<option value="2">2 par page</option>
		<option value="3">3 par page</option>
		<option value="4">4 par page</option>
		<option value="5">5 par page</option>
		<option value="6">6 par page</option>
	</select>
	<input type="submit" value="OK">
</form>
</body>
</html>
<br/>
<?php if (isset($etudiantListe) && sizeof($etudiantListe) > 0) : ?>
	<br/>
	<table border="1">
		<thead>
			<tr>
				<td>Nom</td>
				<td>Prénom</td>
				<td>Email</td>
				<td>Ville</td>
				<td>Nationalité</td>
				<td>Statut marital</td>
				<td>Date de naissance</td>
			</tr>
		</thead>
		<tbody>
<?php foreach ($etudiantListe as $currentEtudiant) : ?>
			<tr>
				<td><a href="list.php?stu_name<?=value['stu_name']?>"><?= $currentEtudiant['stu_name'] ?></td>
				<td><a href="list.php?stu_firstname<?=value['stu_firstname']?>"><?= $currentEtudiant['stu_firstname'] ?></td>
				<td><?= $currentEtudiant['stu_email'] ?></td>
				<td><?= $currentEtudiant['cit_name'] ?></td>
				<td><?= $currentEtudiant['cou_name'] ?></td>
				<td><?= $currentEtudiant['mar_name'] ?></td>
				<td><?= $currentEtudiant['stu_birthdate'] ?></td>
			</tr>
<?php endforeach; ?>
		</tbody>
	</table>
	<br>
		<button type=""><a href="list.php?ses_id=<?= $sessionID ?>&offset=<?= ($currentOffset-$nbPerPage) ?>">PRECEDENT</a>
	 	</button>
		<button type=""><a href="list.php?ses_id=<?= $sessionID ?>&offset=<?= ($currentOffset+$nbPerPage) ?>">SUIVANT</a><br /></button>
	<br/>
	<br/>
		<button type=""><a href="index_view.php">Return to home</a>
		</button>
<?php else :?>
	aucun étudiant
<?php endif; ?>
