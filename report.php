<?php
include("incl/config.php"); 
$title = "Redovisning av kursmoment"; 
$pageId = "report";
include("incl/header.php"); 
?>

<div id="content">
	<article class="report">
		<h2>Kmom06: HTML5 och Websockets</h2>
			<p>Intressant kursmoment med helt nya tekniker för mig. Gillar verkligen möjligheterna med websockets och kommunikationen mellan server och klient. Tänker att det här kan användas till så mycket mer än en enkel chat.</p>
			<p>Node.js var helt nytt för mig. Sitter med Ubuntu och strulade en hel del innan jag lyckades få det att fungera lokalt. När det väl fungerade hade jag inga större problem med det. </p>
			<p>Följde till stor del guiden och skapade en gemensam echo och broadcast-server. När jag sedan byggde chatten använde jag mig helt enkelt av den samma server. I chatten måste man ange ett namn för att kunna ansluta. Man får meddelande när någon ansluter eller kopplar från samt om någon skickar ett meddelande. </p>
			<p>Har en NAS som står och brummar i garderoben hemma – skulle ju va fantastiskt att kunna använda den som server för sånt här. Öppnar i så fall en hel del möjligheter för mig med HTML5 Websockets. Skulle ju va roligt att kunna skapa multiplayer-spel som hanteras av min egen server. Just nu är jag på resande fot men ser fram emot att testa direkt när jag kommer hem igen.</p>

		<h2>Kmom05: HTML5 och Canvas</h2>
				<p>Tycker det här var en svår uppgift. Inledningsvis var det väldigt frustrerande men efter ett par dagars irritation kom jag över nån form av tröskel och det vände och blev fantastiskt utmanande och roligt.</p>
			<h3>Vilka möjligheter ser du med HTML5 Canvas? </h3>
				<p>Även om det är roligt att kunna göra spel och lätt att stirra sig blind på det just nu öppnar HTML5 Canvas upp för en hel uppsjö med andra möjligheter också. Man borde ju kunna minska laddtider med smartare grafik. Jag bygger exempelvis min bakgrund med hjälp av gradient och en array som placerar ut stjärnor, istället för att ha en bild. Jag testade också att göra ett par flaggor (<a href="http://www.student.bth.se/~vikj14/javascript/incl/test/flag/">http://www.student.bth.se/~vikj14/javascript/incl/test/flag/</a>), vilket i och för sig kunnat lösa med några divs. Hittade sedan en klocka (<a href="http://www.student.bth.se/~vikj14/javascript/incl/test/clock/">http://www.student.bth.se/~vikj14/javascript/incl/test/clock/</a>) som jag kopierade in och ändrade lite. Här började jag förstå vilka möjligheter som finns med HTML5 canvas.</p>
			<h3>Hur avancerat gjorde du din spelfysik?</h3>
				<p>Eftersom jag utgift ifrån övningen (<a href="http://dbwebb.se/kunskap/ett-spel-i-html5-canvas-med-javascript-och-prototypbaserad-programmering">http://dbwebb.se/kunskap/ett-spel-i-html5-canvas-med-javascript-och-prototypbaserad-programmering</a>) fick jag ju med en hel del spelfysik (bl a hastighet, gravitation, drag etc). Ändrade lite i fysikens lagar så att mitt skepp inte kan lämna universum på ena sidan av canvasen och komma ut igen på andra sidan (orättvist nog får asteroiderna göra det). Kanske kan man kalla kollissionshanteringen för fysik? Att skeppet exploderar vid krock med asteroid och att planeten gör detsamma om en asteroid när den?</p>
			<h3>Beskriv och berätta om ditt spel. Förklara hur du använder objekt och prototyper.</h3>
				<p>Har nog fortfarande inte greppat det här med prototyper helt. Har byggt player, asteroid och missile som prototyper. När ett asteroid-objekt skapas så görs det utifrån Asteroid-prototypen och läggs i en array som fylls på med asteroid-objekt. Samma sak gäller missile som läggs till när man skjuter och tas bort vid träff eller när de lämnar canvasen. Av player skapas bara ett objekt (ship), men i och med att det är en prototyp som äger en array av missiles och en variabel för score finns det potential att växa spelet till multiplayer genom att lägga till fler objekt av player.</p>
			<h3>Gjorde du något på extrauppgiften?</h3>
				<p>När jag väl började bli klar tyckte jag att det var så roligt att jag hade svårt att sluta. Eftersom jag läser 150% och jobbar lite parallellt fick jag dock besinna mig. La hur som helst till ljud för att öka upplevelsen lite :) </p>
				<p>Pröva gärna mitt spel. Jag kommer till lever 9. <i>Hur långt kommer du?</i></p>
				<p><a href="http://www.student.bth.se/~vikj14/javascript/incl/test/asteroids/">Spela!</a></p>

		<h2>Kmom04: AJAX och JSON med jQuery</h2>
			<h3>Vad tycker du om Ajax, hur känns det att jobba med?</h3>
				<p>Tycker Ajax känns krånligt. Har svårt att sätta mig in i tänket. Samtidigt förstår jag fördelarna med det och är glad över att ha fått en inblick i tekniken. Säker på att jag i framtiden kommer fördjupa mig mer i tekniken och sätta mig in mer i DOM-trädet. </p>
			<h3>Vilka är dina erfarenheter av Ajax inför detta kursmoment?</h3>
				<p>Någonstans i bakhuvudet fanns det en tanke om att Ajax är en teknik som används för realtidssökning så att man kan leverera förslag till användaren medan användaren skriver in sin sökning. Måste dock erkänna att den tanken låg på tredjeplats i mitt medvetande, efter det holländska fotbollslaget (som Zlatan spelade för ett par år) och regöringsmedlet.</p>
			<h3>Berätta om din webbshop på din me-sida, hur gjorde du?</h3>
				<p>Tyckte det här kurmomontet var rätt krångligt så jag försökte hålla det så enkelt som möjligt. Inledningsvis följde jag guiderna så långt det kunde ta mig. Sen byggde jag på med betalningsformuläret. Där valde jag att validera informationen med hjälp av html5. </p>
				<p>Inledningsvis försökte jag bryta ut all data om böcker (titel, pris, bild) och lägga i en egen fil för att sedan hämta in det. På så vis tänkte jag att man skulle slippa manuell handpåläggning på flera ställen när man uppdaterar utbudet. Tyvärr strulade det här rätt mycket och det slutade med att jag gav upp och följde guiden istället med standardlösningen.</p>
				<p>Kanske borde man spara alla transaktioner (tillägg/borttagningar i shoppingvagnen) i databasen? Intressant att kunna se statistik på vilka varor som läggs till men sedan tas bort och inte köps i slutändan.</p>
			<h3>Lyckades du göra extra-uppgiften och paketera din kod?</h3>
				<p>Inleningsvis hade jag en tanke att göra extrauppgiften men valde som sagt att till slut köra på enklaste möjliga lösning när jag körde fast och tiden började rinna iväg. Eftersom jag studerar på 150% och samtidigt jobbar deltid måste jag tvinga mig själv att försöka vara effektiv. </p>
		<h2>Kmom03: Grunderna i jQuery</h2>
			<h3>Vilka är dina erfarenheter av jQuery inför detta kursmoment?</h3>
				<p>Även om jQuery-filen har funnits med i en del projekt (HTMLPHP, OOPHP, ANAX) så har jag egentligen inte aktivt använt mig så mycket av den. Min kunskapsnivå inför den här kursen var ungefär att jag visste att jQuery hade med javascript att göra. Även om vi använt oss av jQuery i tidigare kursmoment (.ready) i den här kursen måste jag nog erkänna att jag inte hade blivit så jättemycket visare på området innan det här kursmomentet.</p>
			<h3>Vad tycker du om jQuery, hur känns det?</h3>
				<p>Inledningsvis kändes det rätt krångligt men efter ett par övningar kände jag att jag började förstå syntaxen. Väldigt smidigt att med små medel kunna visa eller gömma delar med en schysst animation. Samtidigt känns det som att man får akta sig så att inte webbplatsen ser ut som en 90-tals sida med blinkande under construction text. Men fade-in och fade-out funkar ju alltid.</p>
				<p>Gillar verkligen att använda jQuery. Även om jag kanske inte kommer skriva så många plugins från grunden känns det bra att kunna förstå hur de fungerar och eventuellt modda dem lite. </p>
			<h3>Berätta om din plugin</h3>
				<p>Jag har precis blivit klar med kursen OOPHP (som jag för övrigt rekommenderar starkt för er som inte läst den). I det avslutande projektet byggde jag viktorplay, en webbsida om film. När man “hovrar” över en film visas plotten, dvs med hjälp av attributet title. Egentligen ville jag att en ruta skulle visas med information om filmer men visste inte hur jag skulle göra det, även om jag anade att det behövdes javascript... Med det här som bakgrund valde jag att nu skapa en plugin som löser det här. </p>
				<p>Det jag har gjort är alltså en tooltip-plugin som visar en div om man håller musen över ett objekt, och tar bort den när man för musen av objektet. För att inte strula till designen för besökare som inte har javascript har jag valt att skapa alla objekt med jquery (dvs den div som används skapas och hanteras helt i jquery). Även css-stylen hanteras via jquery.</p>
				<p>För att använda pluginen behövs såklart jquery och pluginfilen. Sedan använder man sig av classen showTooltip för att visa tooltip. Pluginen hämtar då informationen från title och alt för att visa som rubrik och löptext. </p>
				<p>Genom att ha koll på sidbredden och jämföra den med (muspekarens position + bredden av tooltip) bestäms om tooltip ska visas till höger eller vänster. På så sätt minskar risken för att tooltip hamnar utanför sidan.</p>
				
		<h1>Redovisning av kursmoment</h1>
			<h2>Kmom02: Programmera med JavaScript</h2>
				<p>Tyckte det här kursmomentet var klurigt. Blev väldigt få utsvävningar från min sida då jag var tvungen att lägga stor tonvikt vid att förstå koden och komma in i syntaxen. Använde mig väldigt mycket av Firebug för att felsöka med hjälp av möjligheten att stega sig igenom javascript. Väldigt användbart och bra för att förstå hur koden exekveras.</p>
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