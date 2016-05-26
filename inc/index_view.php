<h1>Projet Toto</h1>
<h3>Sessions à Esch Belval</h3>
<ul>
	<?php foreach($sessionList as $key=>$value):?>
	<li>
		<a href="list.php?ses_id=<?= $value['ses_id'] ?>">
		 du <?= $value['ses_opening']?>
		 au <?= $value['ses_ending']?>
		</a>
	</li>
	<?php endforeach; ?>
</ul>
<ul>
	<?php foreach($mysessionList as $key=>$value):?>
	<li>		
		Il y a <?=$value['nb'].' '?>étudiant(s) à<?.' '?> <?=$value['cit_name']?>. 
	</li>
	<?php endforeach; ?>
</ul>
