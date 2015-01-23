<?php
include("incl/config.php"); 
$title = "Redovisning av kursmoment"; 
$pageId = "report";
include("incl/header.php"); 
?>

<div id="content">
<article class="report">
	<h1>Redovisning av kursmoment</h1>
	<h2>Kmom01: Kom igång med JavaScript</h2>
	<h3>Vilken utvecklingsmiljö använder du?</h3>
	<p>Använder mig av XAMPP, FileZilla och Sublime (efter lite stök lyckades jag få till så även less-filer färgkodas). Till största del arbetar jag på min laptop som kör Ubuntu 14.04. Synkar med hjälp av Github och kan därför arbeta vidare på min stationära windowsburk när jag är hemma. Också där använder jag mig av kombinationen XAMPP, Sublime, FileZilla och Github. </p>
	<h3>Hur väl känner du till JavaScript?</h3>
	<p>Har aldrig använt mig av JavaScript mer än att nån enstaka gång kopiera in färdig kod. Min uppfattning av JavaScript innan kursen startade var att det gör webben “mer levande” och interaktiv samtidigt som jag hört en hel del negativt om att det medför säkerhetsrisker. </p>	
	<h3>Vilken uppfattning har du av JavaScript så här långt?</h3>
	<p>Tycker inte jag har hunnit få nån jättekoll på JavaScript än. Känner mig fortfarande väldigt osäker. Har kopierat en stor del av koden och har i de flesta fall nöjt mig med att gå igenom den och försöka föstå den. Lite här och där har jag gjort små förändringar men direkt när jag ska göra något större har det stakat sig rejält och tagit bra med tid. Ser fram emot att få bättre koll på språket för jag inser att det finns stor potential i det. Med bra känsla tror jag JavaScript kan ge en webbplats det lilla extra på samma sätt som en irriterande javafunktion kan förstöra upplevelsen.</p>	
	<h3>Berätta vilka exempelprogram du gjorde och länka till dem.</h3>
	<p>Mina exempelprogram går att nås <a href="http://www.student.bth.se/~vikj14/javascript/report.php">här</a>. Jag valde att börja med två varianter av Hello World. Känns trots allt rätt när man går in på ett nytt språk. Jag gjorde också resize-element och animeringen med hjälp av setTimeout.</p>	
	<p>Sen gjorde jag de två exempelprogrammen med baddies, de som använder sig av CSS och JS för att ändra utseende och förflytta baddien. Här kopierade koden och fokuserade på att försöka förstå den för att sedan göra extrauppgiften och lägga till funktionalitet för en dubbel salto. Lite pickligt men väldigt roligt.</p>
	<h3>Beskriv hur du gjort din baddie och vilka konster den kan.</h3>
	<p>Eftersom jag arbetar i linux gjorde jag min baddie efter Tux. Hittade en höger-profil av Tux på <a href="https://openclipart.org/tags/baddie">https://openclipart.org/tags/baddie</a> och använde Inkscape för att skapa en svg-fil lik mickey-mos. När Tux väl var på plats lärde jag honom att göra dubbla saltos som sker när Tux är vänd till höger eller vänster och man trycker på s. Då tar Tux ett rejält skutt framåt och gör en dubbel salto på vägen. För att få det här att se någorlunda bra ut använde jag mig av setTimeout med olika fördröjningar och JS för förflyttning uppåt/sidled/nedåt och fördröjning och CSS för rotering 720 grader.</p>
	</article>
	
</div>

<?php include("incl/footer.php"); ?>