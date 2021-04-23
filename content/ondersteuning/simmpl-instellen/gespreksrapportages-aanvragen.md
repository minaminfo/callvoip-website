---
title: Handleiding gespreksrapportages
weight: 
description: ''
images: []
pdf: https://files.callvoip.nl/downloads/Callvoip_handleiding_gespreksrapportages.pdf

---
De Simmpl telefooncentrale biedt een geavanceerde rapportage module waarmee je specificaties en gespreksrapportages kunt opvragen. Je hebt een basisfilter, een geavanceerd filter en je kunt de gespreksselectie downloaden om deze in excel verder te filteren.  
  
Naast de rapportageregels (Call Detail Records – CDR’s) heb je de bereikbaarheidsmonitor tot je beschikbaar. Voor meer informatie, zie:   
[https://www.callvoip.nl/ondersteuning/extra-features/bereikbaarheidsmonitor/](https://www.callvoip.nl/ondersteuning/extra-features/bereikbaarheidsmonitor/ "https://www.callvoip.nl/ondersteuning/extra-features/bereikbaarheidsmonitor/")

<h3>Gespreksregels</h3>

Log in op de Simmpl telefooncentrale en kies links in de menubalk optie \[**Rapporten**\].

![](https://res.cloudinary.com/callvoip/image/upload/v1564407625/gespreksrapportages-1.png)

Op de rapportenpagina vind je de gespreksdetailregels (call detail records of CDR’s): een overzicht van alle gespreksregels, met de meest recente bovenaan.  
Deze gespreksregels worden gepresenteerd in een aantal kolommen zodat je snel kunt zien of het gaat om een inkomend of uitgaand gesprek, wat de duur is, en op welke datum en tijd werd gebeld en het gesprek werd beëindigd.

Als een inkomend gesprek op een groep van bijvoorbeeld 5 toestellen overgaat, en door één van de 5 toestellen in de groep wordt aangenomen, dan zal dit gesprek er ook in 5 regels instaan waarvan er bij 4 regels staat dat het gesprek niet beantwoord werd, en bij één regel dat het gesprek wel is beantwoord.

Als je de muis op een waarde in één van de drie rechter kolommen houdt (alle drie met een datum) krijg je een relatieve tijdsindicatie te zien, bv. vandaag, gisteren, afgelopen vrijdag.

<h3>Basisfilter gespreksregels</h3>

Bovenaan de pagina zie je het totaal aantal gesprekken en het aantal aangenomen gesprekken. Hier kun je de gespreksregels filteren.

![](https://res.cloudinary.com/callvoip/image/upload/v1564407752/gespreksrapportages-2.png)

Hiertoe heb je drie dropdown-menu’s waar je de gewenste selecties kunt maken: wel/niet beantwoord, inkomend/uitgaand en een voorselectie van een aantal periodes:

![](https://res.cloudinary.com/callvoip/image/upload/v1564407875/gespreksrapportages-3.png)

Maak je selecties om snel en gericht een beeld te krijgen van de belverkeersstromen en verdeling daarvan in de gebruiksomgeving.

![](https://res.cloudinary.com/callvoip/image/upload/v1564407939/gespreksrapportages-4.png)<h3>Geavanceerd filter gespreksregels</h3>

Wil je de gesprekregels verder analyseren? Gebruik daarvoor de geavanceerde filterfunctie. Je activeert het geavanceerde filter met de gele button \[Advance filter\] rechtsbovenaan de pagina:

![](https://res.cloudinary.com/callvoip/image/upload/v1564408024/gespreksrapportages-5.png)

De geavanceerde filtermogelijkheden zijn een aanvulling op het basisfilter, dus de ingevulde waarden in het basisfilter blijven gehanteerd en met de geavanceerde filtermogelijkheden kunt je dit resultaat verder uitfilteren.

Let op: je kunt ingevulde waarden uit het filter wissen door deze weg te halen.

![](https://res.cloudinary.com/callvoip/image/upload/v1564408141/gespreksrapportages-6.png)

Het geavanceerde filter volgt de volgende opties toe:

* \[**From**\] Filter op een nummer of intern toestel dat heeft gebeld  
  LET OP: noteer het nummer in formaat 31xxx (bv: 050-8200000 is 31508200000)
* \[**To**\] Filter op een nummer of intern toestel dat werd gebeld  
  LET OP: noteer het nummer in formaat 31xxx (bv: 050-8200000 is 31508200000)
* \[**Gebeld op**\] Filter op een tijdsinterval waarin gesprekken plaatsvonden
* \[**Opgenomen op**\]: Filter op een tijdsinterval waarin gesprekken werden beantwoord
* \[**Opgehangen op**\] Filter op een tijdsinterval waarin gesprekken werden beëindigd

Opmerkingen bij datumfilters: als je bij de datum-filters alleen de linker kalenderdatum invult dan wordt de periode van dat moment tot nu gebruikt. Wilt je alleen de betreffende datum, vul dan in de rechter kalender ook die datum in.

![](https://res.cloudinary.com/callvoip/image/upload/v1564408418/gespreksrapportages-7.png)<h3>Gespreksregels downloaden</h3>

Als je de gewenste selectie heeft gemaakt dan kunt je deze downloaden naar een .csv bestand (= comma separated value) dat je kunt inlezen in Excel. Als u het .csv opent zie je de waarden in excel-kolommen weergegeven.

Een handige eerste filteroptie is om in Excel in menu \[Gegevens\] de optie \[Filter\] in te schakelen. Je krijgt per excel-kolom dan een filteroptie waar je op de gewenste waarde kunt filteren. Je kunt filters van meerdere kolommen tegelijk gebruiken.

![](https://res.cloudinary.com/callvoip/image/upload/v1564408518/gespreksrapportages-8.png)

Aan het aantal regels kunt zien om hoeveel gesprekken het gaat. Dit aantal wordt linksonder in de statusbalk weergegeven. Als je een filterselectie kopieert en in een nieuw blad plakt, kun je ook het totale aantal seconden (kolom Call Duration) berekenen. Deze call duration in seconden kun je dan delen door 60 om minuten te krijgen.

<h3>Voorbeelden gespreksrapportages opvragen:</h3>

1. Je wilt de specificaties gedurende één dag van één toestel opvragen

   Instructie:  
   \- in het basisfilter zijn geen instellingen nodig  
   \- open het geavanceerde filter  
   \- bij \[FROM\] vul je het interne toestelnummer in van het betreffende toestel  
   \- bij alle drie datumvelden (gebeld op, opgenomen op en opgehangen op) vul je in beide kalendervelden de dag in waarvan u de specificaties wilt opvragen. In het voorbeeld is dit 1 mei 2015.

   ![](https://res.cloudinary.com/callvoip/image/upload/v1564408737/gespreksrapportages-9.png)
2. Je wilt de specificaties gedurende de afgelopen week van je verkoopteam (3 medewerkers) bekijken

   Instructie:  
   \- basisfilter: kies \[**last week**\] (voor een eerdere week: gebruik het advanced filter)  
   \- open het geavanceerde filter  
   \- kies bij \[**From**\] het interne nummer van één van de drie verkoopteamleden  
   \- je krijgt nu de analyse te zien; herhaal dit voor de overige 2 verkoopteamleden

   ![](https://res.cloudinary.com/callvoip/image/upload/v1564408930/gespreksrapportages-10.png)  
   \- of: laat \[**From**\] leeg > je krijgt alle data in de gewenste periode van ALLE toestellen

   ![](https://res.cloudinary.com/callvoip/image/upload/v1564409009/gespreksrapportages-11.png)  
   \- klik nu op \[**Export**\] en laadt het .csv bestand in Excel

   ![](https://res.cloudinary.com/callvoip/image/upload/v1564409088/gespreksrapportages-12.png)  
   \- filter het excelbestand op kolom \[**from.name**\]

   ![](https://res.cloudinary.com/callvoip/image/upload/v1564409248/gespreksrapportages-13.png)
3. Je wilt weten hoeveel uitgaande gesprekken je de afgelopen maand heeft ontvangen op het balietoestel

   Instructie:  
   \- kies bij het basisfilter: \[**This month**\] (of een andere periode)  
   \- open het geavanceerde filter  
   \- vul bij \[**From**\] het interne nummer in van het betreffende balietoestel  
   \- kies bij het basisfilter: \[**Outgoing**\]

   ![](https://res.cloudinary.com/callvoip/image/upload/v1564409403/gespreksrapportages-14.png)
4. Je wilt een overzicht van het aantal keren en de data dat een bepaald specifiek nummer naar je organisatie heeft gebeld.

   Instructie:  
   \- open het geavanceerde filter  
   \- vul bij **FROM** het nummer in dat u zoekt en noteer het nummer als 31xxx  
   \- kies bij het basisfilter: \[Incoming\]

   ![](https://res.cloudinary.com/callvoip/image/upload/v1564409538/gespreksrapportages-15.png)