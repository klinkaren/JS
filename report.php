<?php
include("incl/config.php"); 
$title = "Redovisning av kursmoment"; 
$pageId = "report";
include("incl/header.php"); 
?>

<div id="content">
	<article class="report">
		<h1>Redovisning av kursmoment</h1>
			<h2>Kmom02: Programmera med JavaScript</h2>
				<h3>Vilka funktioner har du lagt till i din variant av mos.js?</h3>
					<p>Hade först lite problem med var jag skulle lägga min egen variant (kjellb.js) och hur jag skulle inkludera den. Blev till slut på samma sätt som mos.js i footern till mina test så att den inkluderas i alla testsidor. </p>
					<p>När jag höll på med tärningsövningen kände jag att en random-funktion kan vara praktiskt att ha i bakfickan så kastade in den i kjellb.js.</p>
				<h3>Gjorde du något extra arbete på spelplanen med Boulder Dash, eller gjorde du kanske en egen spelvariant? </h3>
					<p>Försökte använda mig av min baddie som jag gjorde i kmom01 (halverad storlek för att passa Boulder Dash). Blev mycket knåpande och irritation innan jag kollade på mos' källkod och implementerade stora delar av den. Har dock kvar en del kod från baddieövningen i kmom01. Så här i efterhand tänker jag att jag kanske skulle haft några funktioner för min baddie i kjellb.js. </p>
					<p>Annars gjorde jag inga större utsvängningar. Byggde om spelplanen lite och ändrade min hoppfunktion (space) så att Tux inser att han inte kan hoppa ifall han har något precis ovanför huvudet. Inledningsvis bestod ett hopp av två moves, ett upp och ett ner, vilket resulterade i att upphoppet inte blev av men att landningen tog Tux ett steg nedåt.  </p>		

				<h3>Gjorde du något extra på Roulettespelet?</h3>
					<p>Byggde ut så att bets inte kan läggas när hjulet redan snurrar (med hjälp av helt enkelt sätta variabeln spinning till true när hjulet startar,  false när det stannar, och sedan köra en if-sats när användaren klickar på roll). På liknande sätt (med en if-sats vid klick på roll) testar jag att användaren verkligen har den summa som man försöker satsa innan hjulet sätts igång.</p>
					<p>Eftersom det är Martingale-system som ska testas tog jag bort möjligheten att satsa på grönt. Jag la också till färgkodning för ifall kulan hamnade på svart, rött eller grönt. En annan ändring var att jag disablade input-fältet bankroll, för att användaren inte ska kunna klicka i rutan och ändra hur mycket pengar som finns att tillgå.</p>

				<h3>Övrigt</h3>
					<p>Använde mig mycket av Firebug för att felsöka med hjälp av möjligheten att stega sig igenom javascript. Väldigt användbart och bra för att förstå hur koden exekveras. </p>

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