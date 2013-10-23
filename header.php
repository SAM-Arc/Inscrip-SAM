    <?php
	$serverDateJsYear=date("Y");
    $serverDateJsMonth=date("n")-1; //de 0 à 11 en javascript
    $serverDateJsDay=date("j");
    $serverDateJsHour=date("G");
    $serverDateJsMinutes=date("i");
    $serverDateJsSeconds=date("s");

    $dateFinJsYear="2013";
    $dateFinJsMonth=12-1; //de 0 à 11 en javascript
    $dateFinJsDay="7";
    $dateFinJsHour="5";
    $dateFinJsMinutes="00";
    $dateFinJsSeconds="00";
	?>
	
	<script type="text/JavaScript">
    function Rebour() {
       var sec=((date2 - date1)/1000)-temps;
       var n=24*3600;
       if (sec>0) {
          j=Math.floor(sec/n);
          h=Math.floor((sec-(j*n))/3600)+"";
          mn=Math.floor((sec-((j*n+h*3600)))/60)+"";
          sec=Math.floor(sec-((j*n+h*3600+mn*60)))+"";
          
          if(h.length==1) h="0"+h;
          if(mn.length==1) mn="0"+mn;
          if(sec.length==1) sec="0"+sec;
          
          Affiche.innerHTML=""+j+" j "+h+":"+mn+":<span style=\"color:#ff0000;\">"+sec+"</span>";
          temps++;

          tRebour=setTimeout("Rebour();",1000);
       }
       else Affiche.innerHTML="<span style=\"color:#ff0000;\">Terminée</span>";
    }
    </script>
	
	<div id="titre_principal">
        <img src="images/logoSAM.png" alt="Logo du SAM_arc" id="logo" />
        <h1>Sam'arc</h1>
        <h2>Inscription au concours salle en ligne</h2>
    </div>
	
	<div id="deadline"> Début du concours dans :</div>
	
	<div id="compte"></div>

<script type="text/JavaScript">
   var Affiche=document.getElementById("compte");
   var temps=0;
   <?php
   echo 'var date1 = new Date('.$serverDateJsYear.','.$serverDateJsMonth.','.$serverDateJsDay.','.$serverDateJsHour.','.$serverDateJsMinutes.','.$serverDateJsSeconds.');';
   echo 'var date2 = new Date ('.$dateFinJsYear.','.$dateFinJsMonth.','.$dateFinJsDay.','.$dateFinJsHour.','.$dateFinJsMinutes.','.$dateFinJsSeconds.');';
   ?>
   Rebour();
</script>
