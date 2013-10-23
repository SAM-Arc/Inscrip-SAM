<?php
$mail="christophe.dupin.matmeca@gmail.com";

if(isset($_POST["valider"])){
	if($_GET["mail"]==1){
		if(($_POST["nom"]!="")&&($_POST["prenom"]!="")&&($_POST["club"]!="")&&($_POST["adresse"]!="")&&($_POST["categorie"]!="")){
		
		$nom=$_POST["nom"];
		$prenom=$_POST["prenom"];
		$club=$_POST["club"];
		$categorie=$_POST["categorie"];
		$depart=$_GET["dep"];
		$email=$_POST["adresse"];
		if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
			{
				$passage_ligne = "\r\n";
			}
			else
			{
				$passage_ligne = "\n";
		}
		
				//--------------------------
				//procédure d'envoi de mail
				//--------------------------
		
				//=====Déclaration des messages au format texte et au format HTML.
				$message_html = "<html><head></head><body>
				Inscription issue du site internet du club (concours du 7-8/12/2013). <br><br>
				Rappels des informations de l'inscription :<br>
				<table>
					<tr> 
						<td> nom : </td>
						<td> ".$nom."</td>
					</tr>
					<tr> 
						<td> prénom : </td>
						<td> ".$prenom."</td>
					</tr>
					<tr> 
						<td> club : </td>
						<td> ".$club."</td>
					</tr>
					<tr> 
						<td> catégorie : </td>
						<td> ".$categorie."</td>
					</tr>
					<tr> 
						<td> départ : </td>
						<td> ".$depart."</td>
					</tr>
					<tr> 
						<td> email : </td>
						<td> ".$email."</td>
					</tr>
				</table>
				<br>
				Bonne journée.
				</body></html>";
				
				//=====Création de la boundary
				$boundary = "-----=".md5(rand());
				//==========
				
				//=====Définition du sujet.
				$sujet = "Inscription concours salle du 7-8/12/2013";
				//=========

				//=====Création du header de l'e-mail.
				$header = "From: \"SAM_ARC\"<cgi-mailer@kundenserver.de>".$passage_ligne;
				$header.= "Reply-to: \"".$prenom." ".$nom."\"<".$email.">".$passage_ligne;
				$header.= "MIME-Version: 1.0".$passage_ligne;
				$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
				//==========
				 
				//=====Création du message.
				$message = $passage_ligne."--".$boundary.$passage_ligne;
				
				//=====Ajout du message au format HTML
				$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
				$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
				$message.= $passage_ligne.$message_html.$passage_ligne;
				//==========
				$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
				//==========
				  
				//=====Envoi de l'e-mail.
				mail($mail,$sujet,$message,$header);	
				
				//------------------------------
				//fin procédure d'envoi de mail
				//------------------------------
				
				echo "<script language='JavaScript'>alert('Un mail vous sera envoyé pour confirmer votre inscription dans les prochains jours. Merci d\'avoir utilisé cette application.')</script>";
		
				include("sam_inscription.php");
				}
				else{
				echo "<script language='JavaScript'>alert('Merci de renseigner tous les champs d\'inscription. Merci')</script>";
				include("sam_formulaire.php");
				}
	}
}
?>