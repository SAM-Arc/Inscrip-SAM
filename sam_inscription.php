<!DOCTYPE html>
<html
<?php
	//$depart1=48;
	//$depart2=48;
	//$depart3=48;
	//$depart4=48;
	?>

    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
        <title>SAM'arc - Inscription en ligne</title>
    </head>
 
    <body>
        <div id="bloc_page">
		
            <header>
				<?php include('header.php') ?>
            </header>

            <nav>
                <?php include('nav.php') ?>
            </nav>
			
            <section>
				<h1> Inscription des archers au concours salle 2x18m du 7 au 8 Décembre 2013</h1>
				<h2> Choix du départ : </h2>
                <div id="depart1">
                    <h3> Départ 1 :</h3>
					<p> horaire : Samedi matin </p>
				<!-- 	<p> Place dispo : <?php echo $depart1 ?>/48</p>-->
					<p style="text-align:center"><button type="button" alt="depart1" title="depart 1" onclick="location.href='sam_formulaire.php?dep=1';">Cliquez ici</button></p>
				</div>
				<div id="depart2">
                    <h3> Départ 2 :</h3>
					<p> horaire : Samedi soir </p>
				<!--	<p> Place dispo : <?php echo $depart2 ?>/48</p>-->
					<p style="text-align:center"><button type="button" alt="depart2" title="depart 2" onclick="location.href='sam_formulaire.php?dep=2';">Cliquez ici</button></p>
				</div>
				<div id="depart3">
                    <h3> Départ 3 :</h3>
					<p> horaire : Dimanche matin </p>
				<!--	<p> Place dispo : <?php echo $depart3 ?>/48</p>-->
					<p style="text-align:center"><button type="button" alt="depart3" title="depart 3" onclick="location.href='sam_formulaire.php?dep=3';">Cliquez ici</button></p>
				</div>
				<div id="depart4">
                    <h3> Départ 4 :</h3>
					<p> horaire : Dimanche soir </p>
				<!--	<p> Place dispo : <?php echo $depart4 ?>/48</p>-->
					<p style="text-align:center"><button type="button" alt="depart4" title="depart 4" onclick="location.href='sam_formulaire.php?dep=4';">Cliquez ici</button></p>
				</div>
            </section>
            
			<footer>
				<?php include("footer.php"); ?>
            </footer>
        </div>
    </body>
</html>