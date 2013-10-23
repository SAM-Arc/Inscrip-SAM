<ul>
	<br>
<?php
$CheminFichiermandat = "/Inscription_web/pdf/mandat.pdf";
$CheminFichierliste = "/Inscription_web/pdf/liste_participants.pdf";
$CheminFichierresultats = "/Inscription_web/pdf/resultats.pdf";
//$CheminFichiermandat = "http://www.samarc.christophedupin.fr/pdf/mandat.pdf";
//$CheminFichierliste = "http://www.samarc.christophedupin.fr/pdf/liste_participants.pdf";
//$CheminFichierresultats = "http://www.samarc.christophedupin.fr/pdf/resultats.pdf";
?>
	<li><a href="<?php echo $CheminFichiermandat ?>" target="blank">mandat</a></li>
	<br>
    <li><a href="sam_inscription.php">inscription</a></li>
    <br>
	<li><a href="sam_programme.php">programme</a></li>
    <br>
	<li><a href="sam_contacter.php">Nous contacter</a></li>
    <br>
	<li><a href="<?php echo $CheminFichierliste ?>" target="blank">Liste des participants</a></li>
    <br>
	<li><a href="<?php echo $CheminFichierresultats ?>" target="blank">résultats</a></li>
</ul>