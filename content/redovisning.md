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

Här är redovisningstexten



Kmom06
-------------------------

Här är redovisningstexten



Kmom07-10
-------------------------

Här är redovisningstexten
