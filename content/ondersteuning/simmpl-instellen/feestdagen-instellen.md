---
title: Handleiding vakanties en feestdagen instellen
weight: 
description: ''
images: []
pdf: https://files.callvoip.nl/downloads/Callvoip_handleiding_vakantie-feestdagen-instellen.pdf
aliases: 'meldtekst-instellen'

---
**Vakantie of feestdagen voor de deur?** 

Hoe trek je met een gerust hart de deur dicht?   
Stel in een handomdraai uw telefoon zó in zodat je je even, zonder telefoniezorgen, aan de feestdagen kunt overgeven. Met de zekerheid dat je klant weet waar hij aan toe is.

Hoe stel je de telefooncentrale in voor de feestdagen?

1. **Bepaal wat er moet gebeuren**: meldtekst, inspreken, emailnotificatie, …
2. **Afwezigheidsperiode instellen**: maak een tijdsconditie aan
3. **Meldtekst__: spreek de juiste meldtekst in – zie ook onze meldtekstenbibliotheek*
4. **Pas de belroute aan** zodat je feestdagenreces kan starten!

\* zie de standaard [meldteksten](/ondersteuning/meldteksten-wachtmuziek/meldteksten/) in de bibliotheek.

**Optie 1:** ontvang een emailnotificatie van elk telefoontje tijdens je afwezigheid  
**Optie 2**: zet de afwezigheidsmelding zelf aan/uit met de Smartphone app Qaller  
**Optie 3**: integreer een spoedoptie (keuzemenu met optie voor dringende zaken)

In dit document lees je hoe je dit snel instelt - sstart de feestdagen met een gerust hart!

![](https://res.cloudinary.com/callvoip/image/upload/v1564494044/Support-feestdagen-algemeen_efz8fr.png)

### Bepaal wat er moet gebeuren

Wat moet er gebeuren gedurende de feestdagen/vakantieperiode?

* wil je dat de beller een meldtekst hoort?
* kan de beller daarna wel of niet een bericht inspreken?
* of wil je geen inspreekoptie maar wel een emailtje ontvangen van elk telefoontje?
* is er een spoedoptie nodig zodat er in noodgevallen toch kan worden doorgeschakeld?

{{< layout/columns >}}  
{{< layout/column2 >}}

### Stel de tijdsperioe in 

Bepaal in welke tijdsperiode telefoontjes in de feestdagen/vakantiestand moeten staan.  
Stap voor stap:

1. Login als beheerder op de Callvoip centrale
2. Kies links \[**BELPLANNEN**\] en in het bovenmenu \[**TIJDSCONDITIES**\]
3. Kies \[+ **TOEVOEGEN**\] om een tijdsconditie aan te maken en kies \[**DATUM**\].
4. Geef de tijdsconditie een duidelijke naam
5. Selecteer vervolgens jaar, maand, de data.   
   Vul onderaan de startn en eindtijd in - deze geldt voor elke dag.   
   Wijkt dit per dag af, klik nogmaals op toevoegen en voeg perioes toe.   
   Klik op \[**OPSLAAN**\] 

     
   Gefeliciteerd! De tijdsconditie is nu aangemaakt. Deze doet nu nog niets; pas als je hem in de belroute plaatst kun je zorgen dat er in deze perioe de juiste dingen gebeuren.

   {{</ layout/column2 >}}  
   {{< layout/column2 >}}  
   ![](https://res.cloudinary.com/callvoip/image/upload/v1564494269/Support-feestdagen-tijdsconditie_qzdlta.png)  
   {{</ layout/column2 >}}  
   {{</ layout/columns >}}

### Meldtekst inspreken

Een gemakkelijke manier om een geluidsbestand te maken is door te bellen naar de meldteksten inspreeklijn: bel 8000 vanaf één van je VoIP toestellen. Ingesproken meldteksten komen als .mp3 geluidsbestand per email binnen; spreek in en een paar seconden later wordt je meldtekst per email bij je afgeleverd. Handig toch? Sla dit bestand op je computer op, op een plek waar je deze terug kunt vinden. Ze kunnen dan in de meldtekstenbibliotheek van de centrale worden geupload.

### Pas uw belroute aan

{{< layout/columns >}}  
{{< layout/column2 >}}

1. Login, klik links op \[**BELPLANNEN**\] en kies het belplan van het telefoonnummer dat je wilt instellen. De belroute wordt geopend.
2. Links van het belplan vind je de lijst met alle apps. Klik op \[**TIJDSCONDITIE**\] en sleep deze bovenaan in je belplan, of in ieder geval **BOVEN** de normale acties.
3. Er verschijnt een pop-up \[**TIJDCONDITIE**\]: kies via de dropdown de zojuist aangemaakte tijdsconditie. Klik dan op \[**OPSLAAN**\]: uw tijdsconditie zit nu in de belroute.
4. In plaatsingskader \[**LEEG**\] kun je nu een app plaatsen om de gewenste actie te laten plaatsvinden. Stel, je wilt een meldtekst plaatsen en dan de verbinding verbreken. Klik en sleep app \[**GELUID**\] naar kader \[**LEEG**\]. Klik op upload om de meldtekst te uploaden en selecteer deze vervolgens in de bibliotheek. Kies opslaan. Klik en sleep app \[**HANG OP**\] en zet deze onder de meldtekst.
5. **BELANGRIJK**: zorg dat de acties **inspringen** onder de tijdsconditie; dit betekent dat zij zich aan de tijdsconditie houden en niet **BUITEN** uw afwezigheidsperiode uitgevoerd worden.
6. Klik ten slotte op \[**OPSLAAN**\] om alles vast te leggen.

{{</ layout/column2 >}}  
{{< layout/column2 >}}  
![](https://res.cloudinary.com/callvoip/image/upload/v1564494502/Support-feestdagen-belplan_pew7go.png)  
{{</ layout/column2 >}}  
{{</ layout/columns >}}

#### Optie 1: ontvang een emailnotificatie van elk inkomend telefoontje

{{< layout/columns >}}  
{{< layout/column2 >}}  
Handig! Met de **email app** kun je instellen dat je een email krijgt van elk gesprek dat langskomt in de belroute: dit mailbericht komt gelijk na het gesprek.

Handig als je op vakantie bent, maar ook voor gesprekken die worden gemist tijdens normale werktijd, of buiten werktijd!

> Sleep de email app in de belroute onder de tijdsconditie, voor of na de meldtekst en sla op.  
> {{</ layout/column2 >}}  
> {{< layout/column2 >}}  
> ![](https://res.cloudinary.com/callvoip/image/upload/v1564494895/Support-feestdagen-email_bknhxn.png)  
> {{</ layout/column2 >}}  
> {{</ layout/columns >}}

#### Optie 2: zet het vakantieschema aan/uit met de smartphone app Qaller

Wilt je de flexibiliteit hebben om op elk gewenst moment te bepalen wanneer je vakantieroute aan of uit is? Dat is mogelijk met de omleidings-app en Qaller, onze smartphone app.

Met de **omleidings-app** kun je een schakelaar aan de belroute toevoegen. De schakelaar kun je aan en uitzetten op de centrale, met een telefoontoestel en met Qaller, de smartphone app.

1. Klik en sleep de **omleidings-app** naar de belroute: deze kan in plaats van de tijdsconditie komen. Zorg dat de gewenste acties onder de omleidings-app **inspringen** zodat zij zich aan de schakelaar (aan/uit) houden.
2. Installeer Qaller (zie [www.callvoip/telefonie/qaller](www.callvoip/telefonie/qaller)) en zorg dat je beheerder bent. Ga naar het belplan van je bedrijfsnummer en naar de de omleidingen - hier kun je ze met één druk op de knop aan en uitzetten.

![](https://res.cloudinary.com/callvoip/image/upload/v1564494945/Support-feestdagen-belplanqaller_zxe7s1.png)

#### Optie 3: integreer een spoedoptie

Wens je voor spoedeisende zaken tijdens je afwezigheid de beller de mogelijkheid te bieden om een keuze te maken en naar een ander nummer (mobiel of waarnemer) te worden doorverbonden?

Dat kan met het **keuzemenu** (NB: voor de keuzemenu-app geldt een meerprijs van 4 euro per maand). Maak een keuzemenu aan; plaats bij **START** de begroetingstekst waarin je de beller ook de keuze-optie noemt. Bij de gewenste keuze (bv. 1) zet je de doorverbinden app met het juiste spoednummer.

![](https://res.cloudinary.com/callvoip/image/upload/v1564495010/Support-feestdagen-keuzemenu_e9plzu.png)
