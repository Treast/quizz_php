<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Jeoparino</title>
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php

	require 'db.php';
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	?>
	<div class="lightbox"></div>
	<div class="container">
		<div class="questions">
		<?php
			$sql = 'SELECT * FROM questions, users WHERE questions.user_id = users.id ORDER BY RAND()';
			$res = $pdo->query($sql);

			$nbre = 1;

			while ($req = $res->fetch()){
			echo '<div class="question">';
				echo '<div class="box" box-id="'. $nbre .'">'. $nbre .'</div>';
				echo '<div class="answer answer-'. $nbre .'">';
					echo '<div class="color" color="'. $req['color'] .'"></div>';
					echo '<div class="player">', $req['username'] .'</div>';
					echo '<div class="close">X</div>';
					echo '<div class="clearfix"></div>';
					echo '<div class="number">Question '. $nbre .'</div>';
					echo '<div class="clearfix"></div>';
					echo '<div class="question">'. $req['question'] .'</div>';
					echo '<div class="clearfix"></div>';
					echo '<div class="response">'. $req['answer'] .'</div>';
					echo '<a class="get_answer">Réponse</a>';
					echo '<div class="countdown"></div>';
				echo '</div>';
				
			echo '</div>';
			$nbre++;
				}
			?>
			<div class="clearfix"></div>
			<a class="get_colors">Tableau avec les couleurs</a>
		</div>
<audio>
		<source src="leeroy.mp3"></source>
</audio>
<div class="players">
	<div class="joueur">
		<div class="nom" color="#2ecc71">Nallan</div>
		<img src="1.jpg">
		<div class="points"><span>0</span> Point(s)</div>
		<div class="down">-1</div>
		<div class="up">+1</div>
	</div>
	<div class="joueur">
		<div class="nom" color="#9b59b6">Laufeust</div>
		<img src="2.jpg">
		<div class="points"><span>0</span> Point(s)</div>
		<div class="down">-1</div>
		<div class="up">+1</div>
	</div>
	<div class="joueur">
		<div class="nom" color="#e67e22">Darkounet</div>
		<img src="3.jpg">
		<div class="points"><span>0</span> Point(s)</div>
		<div class="down">-1</div>
		<div class="up">+1</div>
	</div>

</div>
	</div>
	<div class="copyright">Created by Treast - http://www.twitter.fr/Treast74</div>

	<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>