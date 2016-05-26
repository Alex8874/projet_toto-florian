<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Donnees etudiant(e)</h1>
</body>
</html>


<ul>
	<?php foreach($etudiantListe as $key=>$value):?>

	<li>
	<a href="list.php?ses_id=1<?= $value['stu_id'] ?>">
	</a>
	</li>

<?php endforeach; ?>
</ul>

<ul>
	<?php foreach($etudiantListe as $key=>$value):?>

	<li>
	<a href="list.php?ses_id=2<?= $value['stu_id'] ?>">
	</a>
	</li>
<?php endforeach; ?>
</ul>


<ul>
	<?php foreach($etudiantListe as $key=>$value):?>

	<li>
	<a href="list.php?ses_id=3<?= $value['stu_id'] ?>">
	</a>
	</li>


<?php endforeach; ?>
</ul>




<?php
require 'zodiac.php';

