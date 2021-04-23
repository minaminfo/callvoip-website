---
title: Yealink T4x/T5x instellen (provisioning)
pdf: http://www.simmpl.nl/downloads/Simmpl_Provisioninghandleiding_Tiptel_Yealink.pdf
weight: 70
description: Yealink T4x/T5x instellen (provisioning)

---
Voor de meeste Yealink toestellen is provisioning mogelijk. Dit betekent dat u slechts één link in het toestel hoeft te plaatsen en dat het toestel dan door de telefooncentrale wordt geconfigureerd. U hoeft niets meer te doen, behalve het verder aanpassen van de instellingen aan uw wensen.

Het in gebruik nemen van een Yealink toestel is Simmpl! Daarvoor biedt de Simmpl telefooncentrale u provisioning: de automatische configuratie van uw toestel.

\- genereer de provisioning link  
\- plaats deze op de juiste plaats in uw toestel  
\- in minder dan een minuut is uw toestel ingesteld!

Hieronder vindt u ons snelle stappenplan en een uitgebreider stappenplan met gedetailleerde informatie en illustraties.

<h3>Stappenplan (snel)</h3>

1\. **Sluit uw Yealink IP-telefoon aan en maak deze klaar voor gebruik**

Zorg dat het toestel is aangesloten op uw netwerk en met internet is verbonden.

2\. **Vraag het IP-adres van uw IP-toestel op en log op uw toestel in**

Druk op de \[OK\]-toets om het IP-adres op te vragen en log in, default user en password zijn \[admin en \[admin\].

3\. **Het verzamelen van de benodigde toestelgegevens**

Als u inlogt vindt u op tabblad \[status\]:

\- de firmware-versie > provisioning is mogelijk vanaf versie x.70  
\- het MAC-adres > dit kunt u invullen op de Simmpl centrale

4\. **Log in op de Simmpl centrale om een gebruiker en toestel aan te maken**

Zorg dat u op de Simmpl centrale een gebruiker en een toestel heeft aangemaakt en gekoppeld. (voor meer informatie, zie de handleidingen in onze bibliotheek).  
Ga naar de toestel-instellingen, kies in stap 1 \[Provisioning\] en plak het MAC-adres.  
Kopieer in stap 2 de provisioning link en vergeet niet op \[Finish\] te klikken.

5\. **Log in op uw IP-toestel om de provisioning link te plaatsen**

Log weer in op het toestel en ga naar tabblad \[Upgrade\] > tab \[Advanced\].  
Plak de provisioning link in veld \[Provisioning Server\] en klik op \[Auto Provisioning\]. Bevestig en wacht tot het toestel klaar is met instellen.

6\. **Controleer of provisioning is geslaagd!**

Controleer of provisioning geslaagd is:

\- door te testen of het toestel kan uitbellen  
\- door te testen of de gegevens goed op Accounttabblad 1 staan  
\- door op de Simmpl centrale te kijken of het toestel is aangemeld (groen bolletje)

Gefeliciteerd, provisioning is geslaagd!

<h3>Stappenplan (uitgebreid)</h3>

<br.,br>

1\. **Sluit uw Yealink IP-telefoon aan en maak deze klaar voor gebruik**

Sluit uw Yealink IP-telefoon aan. Zorg dat het toestel met een netwerkkabel is verbonden met uw internetverbinding. Let erop dat u de kabel aan de toestel-zijde aansluit op de INTERNET-poort (en niet op de PC-poort, daar kan evt. uw computer op aangesloten worden). Deze netwerkkabel wordt op uw netwerk/router aangesloten zodat de telefoon met internet is verbonden. Als u de telefoon start, dan zal deze doorgaans eerst kijken of er nieuwe firmware beschikbaar is. Wacht totdat het toestel hiermee klaar is en ga pas dan verder.

Als het een nieuw toestel is, dan staan er nog geen instellingen in. Als het een toestel is dat eerder reeds in gebruik was, dan is het aan te raden om het toestel te resetten. Dat doet u door de OK toets (ronde knop) 10 seconden ingedrukt te houden totdat het toestel vraagt of het moet worden gereset. Bevestig dit en wacht tot het toestel weer terug is.

2\. **Vraag het IP-adres van uw IP-toestel op en log op uw toestel in**

Om op het IP-toestel in te loggen heeft u het IP-adres nodig.

\- druk op de OK toets om het IP-adres op te vragen  
\- Een IP-adres ziet er bijvoorbeeld als volgt uit: 192.168.1.105

Ga nu naar internet en vul het IP-adres met puntjes in de adresbalk van uw internetprogramma (browser) in. Het inlogscherm verschijnt: ![](https://res.cloudinary.com/callvoip/image/upload/v1565083035/yealink-provisioning-1_jo6zdb.png)

3\. **Het verzamelen van de benodigde toestelgegevens**

Om uw toestel te kunnen hebben we een aantal gegevens nodig. Als u bent ingelogd op uw toestel zien we deze gegevens gelijk in het scherm: ![](https://res.cloudinary.com/callvoip/image/upload/v1565083097/yealink-provisioning-2_dyhrj5.png)
Provisioning werkt vanaf firmwareversie x.70. Heeft uw toestel een oudere firmwareversie? Upgrade dan eerst de firmware.
![](https://res.cloudinary.com/callvoip/image/upload/v1565083161/yealink-provisioning-3_zzzv7z.png)

4\. **Log in op de Simmpl centrale om een gebruiker en toestel aan te maken**

U heeft de configuratiepagina van uw IP-telefoon nog geopend. Open nu een tweede internetvenster (bv. nieuw tabblad in uw browser) en ga in dat tabblad naar de Simmpl telefooncentrale. U kunt dan gemakkelijk het toestel aanmaken en de provisioning link op de telefooncentrale opvragen, en deze daarna op de juiste plaats in uw toestel plaatsen zonder dat u opnieuw hoeft in te loggen.

Ga naar de <a href="https://panel.callvoip.nl/login/panel" target="_blank">Simmpl telefooncentrale</a> en log in. Kies links in het menu optie \[Toestellen\]. ![](https://res.cloudinary.com/callvoip/image/upload/v1565083314/yealink-provisioning-4_cw9ojl.png)
Als het toestel dat u wilt gaan gebruiken nog niet is aangemaakt, voeg dan een toestel toe door op button \[Toevoegen\] te klikken en doorloop de wizard.

**Let op**: selecteer het juiste merk en type toestel. U kunt het type toestel vinden op de doos en in het menu van uw toestel
![](https://res.cloudinary.com/callvoip/image/upload/v1565083732/yealink-provisioning-5_uery2l.png)
![](https://res.cloudinary.com/callvoip/image/upload/v1565083789/yealink-provisioning-6_np4gfy.png)
![](https://res.cloudinary.com/callvoip/image/upload/v1565083831/yealink-provisioning-7_z2yzlm.png)
In stap 3 krijgt u de provisioning link die in de IP-telefoon kan worden ingevuld zodat de Simmpl centrale het werk kan gaan doen.

\- kopieer de provisioning link met uw muis of met button \[**Kopieer**\]  
\- **BELANGRIJK**: klik op \[**Afronden**\] om het toestel definitief aan te maken. Als u dit vergeet is het toestel niet aangemaakt en zal provisioning niet werken.
![](https://res.cloudinary.com/callvoip/image/upload/v1565083927/yealink-provisioning-8_ta5ud4.png)

5\. **Log in op uw IP-toestel om de provisioning link te plaatsen**

Ga terug naar het andere internet-tabblad waar u was ingelogd op uw toestel, of log opnieuw op uw toestel in. Ga naar tabblad \[Settings\] > submenu \[Auto Provision\].

\- vervang de waarde van veld \[Provisioning Server\] met de provisioning link  
\- Controleer of deze begint met https://provisioning.callvoip.nl/....

![](https://res.cloudinary.com/callvoip/image/upload/v1565084058/yealink-provisioning-9_mhvp39.png)

klik nu op \[Confirm\] om de link op te slaan
klik tenslotte op \[Auto Provision\] om de provisioning te starten.
![](https://res.cloudinary.com/callvoip/image/upload/v1565084128/yealink-provisioning-10_s3cidy.png)
Klik op OK
Het Provisioning-verzoek wordt nu naar het toestel verstuurd.
![](https://res.cloudinary.com/callvoip/image/upload/v1565084192/yealink-provisioning-11_lk261b.png)
Als de telefooncentrale klaar is met provisioning volgt melding:
![](https://res.cloudinary.com/callvoip/image/upload/v1565084243/yealink-provisioning-12_g2z8aq.png)

6\. **Controleer of provisioning is geslaagd!**

Uw toestel is nu geprovisioned. Dat betekent dat de Simmpl telefooncentrale het toestel heeft ingeregeld en dat u ermee moet kunnen bellen*.

U kunt dit op de volgende manier testen:

\- Controleer of u met het toestel kunt uitbellen  
\- Ga naar tabblad \[Account 1\] van de webinterface en controleer de gegevens:

![](https://res.cloudinary.com/callvoip/image/upload/v1565084337/yealink-provisioning-13_wgivj9.png)
\- Op de Simmpl telefooncentrale of het account geregistreerd is.
Log in, ga naar het toesteloverzicht en controleer de succesvolle registratie.
![](https://res.cloudinary.com/callvoip/image/upload/v1565084404/yealink-provisioning-14_qynrdk.png)
\* **NB**: als u in stap 4 nog geen gebruiker aan het toestel had gekoppeld, doe dat dan alsnog (anders kunt u het account nog niet gebruiken)

<h3>Bijlage: de firmware van uw Tiptel Yealink toestel upgraden</h3>

Bij tabblad \[Upgrade\] > \[Basic\] ziet u de firmwareversie en heeft u de mogelijkheid om het toestel te resetten naar fabrieksinstellingen of te herstarten (de instellingen blijven behouden). Ook kunt u het toestel hier handmatig van een firmware upgrade voorzien. U kunt dan eerst de juiste firmwareversie downloaden bij de toestelfabrikant.

**Belangrijk**: laadt geen verkeerde versie firmware of een Tiptel firmware in een Yealink toestel, dit kan ervoor zorgen dat uw toestel niet meer inzetbaar is.
![](https://res.cloudinary.com/callvoip/image/upload/v1565084545/yealink-provisioning-15_up0loh.png)

<h3>De firmware van uw Yealink toestel upgraden</h3>

Controleer welke firmwareversie u nu heeft door op het toestel in te loggen > u ziet de firmwareversie staan op tabblad \[Status\]. U kunt op het toestel zelf ook klikken op \[Menu\] > \[Status\] > \[Firmware\] om de firmwareversie op te vragen.
![](https://res.cloudinary.com/callvoip/image/upload/v1565084681/yealink-provisioning-16_ug20sl.png) Af-fabriek worden de toestellen van Yealink voorzien van een provisioninglink naar de firmware-server. Dit betekent in de meeste gevallen dat een toestel dat wordt aangesloten op internet en wordt geherstart automatisch gaat zoeken naar de laatste firmware versie. Sluit het toestel aan op internet en herstart; kijk of het toestel gaat zoeken naar firmware.

Als uw toestel niet automatisch de firmware upgrade uitvoert, log dan in op uw toestel en ga naar tabblad \[Upgrade\], submenu \[Advanced\]. Controleer hier twee dingen:

\- Staat er iets ingevuld in veld \[Provisioningserver\]? Dit zou de server van de leverancier van de telefoon (Yealink) moeten zijn. Als het veld leeg is is het logisch dat het toestel niet upgrade. Reset het toestel dan naar factory defaults om deze instellingen te herstellen.  
\- Staat veld \[Check new config\] op Disabled? Ook dan is het logisch dat er niets gebeurt. Verander deze waarde naar \[Power on\] en herstart het toestel nogmaals. ![](https://res.cloudinary.com/callvoip/image/upload/v1565085253/yealink-provisioning-17_z6yyv8.png)