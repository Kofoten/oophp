---
...
Redovisning
=========================



Kmom01
-------------------------

Jag har programmerat väldigt mycket i C# som är väldigt objektorienterat. Jag har också lekt i Java och c++. Objekt och klasser fungerade likt de tre språk jag räknat upp så det kändes bra. När det gäller uppgiften med Gissa numret så var jag lite osäker på varför det skulle göras med get då allt blir synligt då, tillslut gjorde jag det bara och det funkade. Jag måste tyvärr säga att jag inte är et fan av Anax så kommer troligtvis att röra me-sidan så lite som möjligt.

[http://www.student.bth.se/~rasb14/dbwebb-kurser/oophp/me](http://www.student.bth.se/~rasb14/dbwebb-kurser/oophp/me)

Kmom02
-------------------------

Att flytta gissningsspelet var inte jättesvårt om man tog hjälp av videoserien som fanns med i uppgiften. Det var dock väldigt måna ställen att ändra på. Jag fattade först inte vilken src mapp som klasserna skulle flyttas till. Efter att ha kollat på videoserien så var allt glasklart. Tummen upp till dem. När jag började på tärningsspelet skrev jag ihop lite testkod, såg till att den funkade och fixade sedan alla buggar och lade till vinstfunktion och ai. Jag hade en plan för vad jag skulle göra redan från början och genomförde den ganska väl. Jag fick lägga till en player klass och implementera lite för mycket kod i routefilen. Detta för att jag inte ville hålla på med sessions och grejer i mina klasser, det blev nog så bra som det kunde bli.

UML diagram och phpDocumentor är kanske bra verktyg att använda om man jobbar i grupp eller samarbetar med någon annan. Det gäller som sagt också in enkel persons projek om man har en stor eller komplex klasstruktur. Jag tror nog nyttan ändå är som allra störst i grupp.

Jag skriver nog heller kod utanför ramverket och portar in den sedan. Jag tycker det är enklare att debugga utanför ramverket. Det gick att debugga även i ramverket men det var många steg för att få en utskrift, jag försökte sedan använda Xdebug och PHP Debug för att se vad som blev fel. Det gick sådär men jag hittade felet.


[http://www.student.bth.se/~rasb14/dbwebb-kurser/oophp/me](http://www.student.bth.se/~rasb14/dbwebb-kurser/oophp/me)

Kmom03
-------------------------

Jag har aldrig tidigare skrivit någon kod som testar annan kod. Jag har däremot skrivit kod som testat ett web API för att se om olika endpoints returnerar på ett konsekvent och konsistent vis. Enhetstestning kan man som beskrivet i texterna se på olika sätt men det är (speciellt som automatiserat) ett riktigt snabbt och enkelt sätt att se var som genererar fel och vilken del av koden det är. Först måste man dock sätta upp testprotokoll och så vidare och det kan vara knepigt nog. Att genomföra uppgifterna var smärtfritt efter att ha läst läsanvisningarna och kollat på videoserien som det länkades till. Jag använde exempelklasserna för att genomföra uppgiften.

White Box testning, När man har hela källkoden och kan gå in och se exakt vilken rad som felar. Här får man troligtvis fixa till koden själv men kan få tydligare pekning på vad exakt som är fel.

Black Box testning, Nar du bara har tillgång till funktionerna och inte kan se vad som faktiskt händer i bakgrunden. Här ser du bara vilken funktion som felar, det kan vara fel i din kod eller det som finns i svarta lådan men när du vet kan du antingen fixa din kod eller peta på den som skrivit den svarta lådan och säga att här är det nog något som är fel.

Grey Box testning, Man har inte direkt access till koden men man har någon form av dokumentation som beskriver funktioner och algoritmer i den kod som fortfarande är en svart låda. Det är som black box testning fast med en användar manual.

[http://www.student.bth.se/~rasb14/dbwebb-kurser/oophp/me](http://www.student.bth.se/~rasb14/dbwebb-kurser/oophp/me)

Kmom04
-------------------------

Interface verkar fungera exakt lika som motsvarigheten i C#, inga konstigheter här alltså. Trait däremot har jag dålig koll på vad man kan jämföra med men det verkar vara ett sätt att skapa statiska funktioner som fler klasser kan ta del av. Inget av tillvägagångssätten kändes konstigt, det kändes mer som att jag saknade dessa funktioner tidigare.

AI:n vart väl sådär den blir lite stressad när den ligger för mycket under och slår på som bara den (resulterar oftast i att den förlorar sina poäng). Hur ”smart” resten av algoritmen kan väl diskuteras men tanken är att den ska slå vidare om 1 / antal tärningssidor är mindre än antalet ettor / antalet inte ettor. Det funkar när man använder få tärningar (upp till 3 – 4 stycken).

Tyckte det var skönt med lagren av post , session och så vidare. Kändes innan lite fulhackigt att använda php globaler i ett ramverk.

Att enhetstesta i ramverket var skönt nästa lika som utanför. Hade problem med att det var någon undefined app men det löstes genom att excluda src/route. Jag fick en kodtäckning på ca 50%.

[http://www.student.bth.se/~rasb14/dbwebb-kurser/oophp/me](http://www.student.bth.se/~rasb14/dbwebb-kurser/oophp/me)

Kmom05
-------------------------

Jag började med att läsa igenom ”Kom igång med PHP PDO och MySQL” samtidigt som jag skummade igenom exempelkoden. Jag skapade en databas och testade att exempelkoden fungerade. Jag började sedan med uppgiften att bygga CRUD för databasen. Jag måste säga att jag personligen tycker att koden jag skrev för ramverket genom att utgå ifrån exemplet blev mycket bättre än den i exemplet. Det kändes renar på något sätt och mer strukturerat. Att det kändes så beror nog på att jag använde de abstraktionslager som ramverket levererar. Jag tyckte även att det var enkelt att skriva om exempelkoden för ramverket och stötte inte på några större problem. Det mesta var helt vanliga slarvfel som tog max 4–5 minuter att lösa.

Jag implementerade bara basfunktionaliteten med undantag för att använda Cimage då det kändes som det enklaste och smidigaste sättet att lösa problemet med bildstorleken. Jag tycker att många av extrauppgifterna är saker som ett gränssnitt behöver när databasen växer men det tar helt enkelt för mycket tid för att jag ska hinna implementera dem.

[http://www.student.bth.se/~rasb14/dbwebb-kurser/oophp/me](http://www.student.bth.se/~rasb14/dbwebb-kurser/oophp/me)

Kmom06
-------------------------

Tyckte det gick ganska bra att genomföra uppgiften när jag väl kom igång. Jag hade lite svårt att veta vart jag skulle börja. Bestämde mig för att börja med textfiltreringen och se till att den funkade med textfiltersidan på redovisa-sidan. Det var inte jätte knepigt att få det på plats speciellt inte om man hade läst igenom lästipsen för kursmomentet. Hade lite problem med bbcode men visade sig att jag hade skrivit fel i källtexten så det var inget fel på koden.

Jag skapade bara en klass för textfiltreringen resten var bara vyer och det kan ha hamnat mycket kod i routefilen för dbcontent. Är inte helt nöjd med det, koden bara växte allt eftersom jag implementerade kraven. Jag ser definitivt potential att refactora koden. Kan tänka mig att vyerna själva skulle kunna ta hand om mer logik men det känns lite konstigt att låta dem ta hand om logik. Jag tycker inte att det känns som deras uppgift därav blev det väldigt mycket kod i routefilen. Jag tycker ändå att koden har hamnat på rätt ställen även om det kanske skulle gå att dela upp den mera så att allt inte låg i routefilen.

När jag försökte skapa snygga länkar till mina sidor och bloggposter stötta jag på en sak som jag störde mig lite på. Något jag skulle tycka var bra var om det gick att ha dynamiska länkar likt ”page/blah” istället för: page?route=blah. Här skulle man önska att blah gick att hantera i routen likt page/:page och då få blah som en textsträng att använda i sin route för att veta vilken sida som skall laddas. Detta går säkert men har inte orkat ta reda på hur och har inte sett något om detta i något kursmoment.

[http://www.student.bth.se/~rasb14/dbwebb-kurser/oophp/me](http://www.student.bth.se/~rasb14/dbwebb-kurser/oophp/me)

Kmom07-10
-------------------------

Jag har implementerat kraven 1-3 då jag helt enkelt inte har haft tid till mer.

###Krav 1

Vid implementationen av detta krav så kopierade jag i princip min redovisa sida rakt av och modifierade den så att det skulle passa med produktspecen. Det tog lite tid att ändra om allt och det var inte det roligaste jag gjort. Jag vet inte om jag missat något viktigt men koden i route filerana blev inte särskilt dry. Jag skrev samma sak flera gånger, det känns som att detta ramvek saknar en del basicfunktioner som bör finnas i routing delen. Jag kan ha missat någon liten detalj då jag gjorde detta kmom under relativt stressade omständigheter men tyckte ändå att jag letade igenom den dokumentation jag hittade ganska noga. Det jag saknade mest var något sätt att få dunamiska routes utan att använda querysträngen. Detta går självklart att lösa med en rewrite i webservern men det kändes inte helt rätt.

###Krav 2

Detta krav var väldigt straight forward. Skapa tabeller i en databas är långt ifrån klurigt. Jag valde dock lite annorlunda jämfört med tidigare kmom och la pages och posts i olika tabeller. Efter att det var klart så genererade jag en png och fixade så att make test och make doc fungerade. Min code coverage är inte jättehög då jag hade ont om tid. Men fixade några procent i min TextFilter klass. Jag var nöjd med 10% på den 
klassen. Någon form av unit test blev det i alla fall.

###Krav 3

Här valde jag att lägga till knappar på de olika sidor som redan fanns istället för att skapa ett helt eget gränssnitt för detta. Och använder sessions för att hålla användaren inloggad och support för icke-admins finns. I databasen beskrivs rollen av en byte där de olika bitarna kan användas som behörighetsnivåer. Är man inloggad och admin så kan man då ändra och uppdatera alla poster och produkter.

###Genomförande och tankar kring kursen

Jag skulle verkligen inte säga att det var svårt. Mitt största problem är att det är otroligt hektiskt på jobbet och därav har mycket tid gått dit. Jag slägde som sagt ihop det mesta på den tid som blev över och mycket gick att kopiera från tidigare kursmoment. Några fulhack finns tyvärr också på grund av tidigare nämnd tidsbrist. Jag vet inte hur mycket faktiskt objektorientering som ingick här. Det känns lite som att fokuset på det tappades lite under kursens gång. Jag personligen spenderade mer tid på att få ramverket att göra som jag vill än att faktiskt fokusera på det som var objektorienterat.

[http://www.student.bth.se/~rasb14/dbwebb-kurser/oophp/me](http://www.student.bth.se/~rasb14/dbwebb-kurser/oophp/me)
