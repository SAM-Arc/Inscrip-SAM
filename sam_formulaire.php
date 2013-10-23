<!DOCTYPE html>
<html>
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
				
				<p style="font-size: 1.1em"> Vous avez choisi le <b id="depart">Départ n°<?php echo $_GET["dep"];?></b>. Pour vous inscrire, veuillez renseigner les informations ci-dessous : </p>
				<br>
				
				<form method="post" action="traitement.php?dep=<?php echo $_GET['dep'];?>&mail=1">
				<table id="table_form">
					<tr>
						<td style=text-align:right> Nom de l'archer : </td>
						<td> <input id="input_box" type="text" name="nom" value=""> </td>
					</tr>
					<tr> <td style=padding:10px> </td> </tr>
					<tr>
						<td style=text-align:right> Prénom de l'archer : </td>
						<td> <input id="input_box" type="text" name="prenom" value=""> </td>
					</tr>
					<tr> <td style=padding:10px> </td> </tr>
					<tr>
						<td style=text-align:right> Club : </td>
						<td> <input id="input_box" type="text" name="club" value=""> </td>
					</tr>
					<tr> <td style=padding:10px> </td> </tr>
					<tr>
						<td style=text-align:right> Catégorie : </td>
						<td> 
						<select id="input_box" name="categorie">
							<option value="">Sélectionnez votre catégorie</option>
							<optgroup label="Arc Classique">
								<option value="BFCL">Benjamin Femme Classique</option>
								<option value="BHCL">Benjamin Homme Classique</option>
								<option value="MFCL">Minime Femme Classique</option>
								<option value="MHCL">Minime Homme Classique</option>
								<option value="CFCL">Cadet Femme Classique</option>
								<option value="CHCL">Cadet Homme Classique</option>
								<option value="JFCL">Junior Femme Classique</option>
								<option value="JHCL">Junior Homme Classique</option>
								<option value="SFCL">Sénior Femme Classique</option>
								<option value="SHCL">Sénior Homme Classique</option>
								<option value="VFCL">Vétéran Femme Classique</option>
								<option value="VHCL">Vétéran Homme Classique</option>
								<option value="SVFCL">Super Vétéran Femme Classique</option>
								<option value="SVHCL">Super Vétéran Homme Classique</option>
							</optgroup>
							<optgroup label="Arc à poulie">
								<option value="BFCO">Benjamin Femme Poulie</option>
								<option value="BHCO">Benjamin Homme Poulie</option>
								<option value="MFCO">Minime Femme Poulie</option>
								<option value="MHCO">Minime Homme Poulie</option>
								<option value="CFCO">Cadet Femme Poulie</option>
								<option value="CHCO">Cadet Homme Poulie</option>
								<option value="JFCO">Junior Femme Poulie</option>
								<option value="JHCO">Junior Homme Poulie</option>
								<option value="SFCO">Sénior Femme Poulie</option>
								<option value="SHCO">Sénior Homme Poulie</option>
								<option value="VFCO">Vétéran Femme Poulie</option>
								<option value="VHCO">Vétéran Homme Poulie</option>
								<option value="SVFCO">Super Vétéran Femme Poulie</option>
								<option value="SVHCO">Super Vétéran Homme Poulie</option>
							</optgroup>
							<optgroup label="Barebow">
								<option value="SFAN">Scratch Femme Arc Nu</option>
								<option value="SHAN">Scratch Homme Arc Nu</option>								
							</optgroup>
						</select>
						</td>
					</tr>
					<tr> <td style=padding:10px> </td> </tr>
					<tr>
						<td style=text-align:right> Adresse mail : </td>
						<td> <input id="input_box" type="text" name="adresse" value=""> </td>
					</tr>
				</table>
				
				<input type="submit" name="valider" class="btn btn-primary" title="Valider" value="Valider inscription">
				
				</form>
				
				<p><button type="button" class="btn btn-danger" alt="retour" title="retour" onclick="location.href='sam_inscription.php';">Retour</button></p>
				
            </section>
            
			<footer>
				<?php include("footer.php"); ?>
            </footer>
        </div>
    </body>
</html>