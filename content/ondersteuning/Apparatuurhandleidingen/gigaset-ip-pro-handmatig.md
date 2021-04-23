---
title: Gigaset IP DECT instellen (handmatig)
weight: 40
description: Gigaset IP DECT instellen (handmatig)
images: []
pdf: http://www.simmpl.nl/downloads/Simmpl_configuratiehandleiding_Gigaset_IP_DECT.pdf
hideinsearch: false
Nieuw: false
Update: false
hideingoogle: false
hidesocialshare: false

---
In deze handleiding kunt u lezen hoe u uw Gigaset IP DECT instelt voor een VoIP-account van de Callvoip telefooncentrale.

**NB:** de handleiding is ook toepasbaar op een Sinus IP DECT (= speciale uitvoering Gigaset IP DECT). Let u er dan op dat u bij Telefonie > Voicemail geen vinkjes zet – het toestel zal dan niet gebeld kunnen worden.

1. **Maak een Simmpl toestelaccount aan**  
   Voordat u de telefoon kunt instellen maakt u op de Simmpl centrale aan:  
   \- een gebruiker (extension)  
   \- een toestel (device) > hier vindt u ook de SIP-username en password  
   Voor meer informatie, raadpleeg de Simmpl handleidingenbibliotheek.
2. **Sluit het Gigaset basisstation aan**  
   Aan de zijkant van het Gigaset IP DECT basisstation vindt u de aansluitmogelijkheid voor een netwerkkabel. Sluit hier een netwerkkabel op aan en sluit de kabel aan de andere zijde aan op uw netwerk/router zodat het DECT basisstation met internet is verbonden.
3. **Meld de handsets op de DECT basis aan**  
   U meld een handset aan door deze van de batterijen te voorzien; de handset zal vragen om op een basis te worden aangemeld met een melding zoals bv: \[HS aanmelden\]. Het is nu zaak dat de DECT basis en de handset op hetzelfde moment in de aanmeldstand worden gezet.  
   \- het DECT basisstation zet u in de aanmeldstand door de knop op de voorzijde 5 seconden ingedrukt te houden.  
   \- Een DECT handset set u in de aanmeldstand via menu Instellingen > Handset > handset aanmelden. Als u om een pincode wordt gevraagd, dan is de default code \[0000\].
4. **Vraag het IP-adres van de DECT basis op:**  
   Om op het Gigaset IP DECT basisstation in te loggen heeft u het IP-adres nodig. Dat kunt u als volgt opvragen:  
   \- Druk kort op de blauwe knop voorop de DECT basis; de aangemelde handsets gaan rinkelen en het IP-adres staat in het display van de handsets.  
   \- Of: ga op een handset naar menu > instellingen > basis > lokaal netwerk > als u om een pincode wordt gevraagd is de default code \[0000\]. Daarna krijgt u het IPadres in het display te zien.
5. **Log in op het Gigaset IP DECT basisstation**  
   \- Ga naar internet en toets het IP-adres met de puntjes in de browser-adresbalk in. (**NB:** laat nullen voor de getallen in het IP-adres weg!)

<h3>Inloggen</h3>

Vraag het IP-adres van het IP DECT basisstation op en toets dit in de browser in, het inlogscherm verschijnt. De default pincode is \[0000\].  
![](https://res.cloudinary.com/callvoip/image/upload/v1565015685/gigaset-manual-1_fspowx.png)  
Als u bent ingelogd, ga naar tabblad \[**Instellingen**\]

Op deze pagina kunt u aangeven of de basis automatisch een IP-adres krijgt toegewezen of kunt u een vast IP-adres instellen. Wij adviseren DHCP; uw technisch adviseur kan u adviseren wat in uw situatie het beste is.  
![](https://res.cloudinary.com/callvoip/image/upload/v1565015771/gigaset-manual-2_fbfgqr.png)

<h3>Telefonie - Lijnen</h3>

![](https://res.cloudinary.com/callvoip/image/upload/v1565015848/gigaset-manual-3_rtjij8.png)  
Om een VoIP-account in de Gigaset N510IP te registreren, klik op button \[bewerken\] bij de accountpositie die u wilt instellen.

![](https://res.cloudinary.com/callvoip/image/upload/v1565015934/gigaset-manual-4_dlbk0s.png)  
Sluit af met \[**opslaan**\]. U komt terug bij de lijnen; eerst zal de lijn \[**Aanmelding is mislukt!**\] tonen. Als u na ca. 20 seconden ververst zou de status \[**Aangemeld**\] moeten zijn.

<h3>Geluid</h3>

De geluidsinstellingen zijn belangrijk voor om de geluidskwaliteit te optimaliseren.  
![](https://res.cloudinary.com/callvoip/image/upload/v1565016034/gigaset-manual-5_dghvpn.png)

<h3>Nummer toewijzen</h3>

Hier kunt u per handset bepalen:  
\- Met welke lijn er wordt uitgebeld (dit is er altijd maar één)  
\- Op welke lijnen de handset reageert (dit kunnen er meer zijn)  
![](https://res.cloudinary.com/callvoip/image/upload/v1565016143/gigaset-manual-6_kj7l4h.png)

<h3>Configuratie kiesregels</h3>

Bij Gigaset modellen met een **vaste-lijn-aansluiting** zoals de C610IP en de C530IP is het raadzaam om te zorgen dat de kiesregel voor het bellen naar noodnummer 112 niet via de vaste lijn gaat (default) maar dat u ook deze via uw Simmpl VoIP-account laat lopen. Ingeval van een calamiteit zal er dan dus via uw Simmpl VoIP lijn worden gebeld.  
![](https://res.cloudinary.com/callvoip/image/upload/v1565016219/gigaset-manual-7_b8wlu9.png)  
Bij accounts die een voicemailbox hebben kunt u het voicemailnummer instellen. Als u op de handset dan de voicemailknop gebruikt, wordt het voicemailnummer automatisch gebeld.

<h3>Configuratie voicemail</h3>

Bij accounts die een voicemail-box hebben kunt u het voicemailnummer instellen. Als u op de handset dan de voicemailknop gebruikt, wordt het voicemailnummer automatisch gebeld.

**BELANGRIJK**: bij de SINUS (speciale editie van de Siemens Gigaset telefoon) kunt u NIET gebeld worden als u de voicemail aanvinkt; let er hierbij dus op dat u het vinkje weglaat om het toestel voor inkomende en uitgaande gesprekken te kunnen gebruiken.  
![](https://res.cloudinary.com/callvoip/image/upload/v1565016298/gigaset-manual-8_u3mzm8.png)  
Simmpl gebruikt 1233 als persoonlijk voicemailnummer en 1233 gevolgd door uw bedrijfsvoicemailboxnummer als bedrijfsvoicemailnummer (deze laatste stellen wij standaard in op de laatste vier getallen van uw telefoonnummer – u kunt deze op de Simmpl centrale zelf aanpassen).

<h3>Geavanceerde VoIP-instellingen</h3>

![](https://res.cloudinary.com/callvoip/image/upload/v1565016373/gigaset-manual-9_fyc6gu.png)

<h3>Telefoonboek</h3>

Diverse modellen Gigaset bieden Telefoonboek-opties. Als default stellen wij dit als volgt in:

![](https://res.cloudinary.com/callvoip/image/upload/v1565016432/gigaset-manual-10_nquiag.png)

<h3>Apparaatbeheer</h3>  
<b>Apparaatbeheer - overige</b>

![](https://res.cloudinary.com/callvoip/image/upload/v1565016486/gigaset-manual-11_rjlsze.png)

<b>Apparaatbeheer > Opnieuw starten er herstellen</b>

![](https://res.cloudinary.com/callvoip/image/upload/v1565016554/gigaset-manual-12_vw2mh8.png)

<b>Apparaatbeheer > Opslaan en herstellen</b>

![](https://res.cloudinary.com/callvoip/image/upload/v1565016621/gigaset-manual-13_r7l7jt.png)

<b>Apparaatbeheer > Firmware-update</b>

![](https://res.cloudinary.com/callvoip/image/upload/v1565016682/gigaset-manual-14_mvyj1w.png)

<h3>Status</h3>

Controleer hier de statusgegevens van uw toestel:  
![](https://res.cloudinary.com/callvoip/image/upload/v1565016755/gigaset-manual-15_rglcuc.png)

<h3>BLF Maxwell 10</h3>

Onder functietoesten gaat u naar \[toetsen\]. Hier klikt u vervolgens op \[toevoegen\] > \[bewerken\]  
![](https://res.cloudinary.com/callvoip/image/upload/v1565016839/gigaset-manual-16_btpnza.png)  
**Toevoegen > Edit**  
![](https://res.cloudinary.com/callvoip/image/upload/v1565016889/gigaset-manual-17_zqpjwr.png)  
Aan de linkerkant het overzicht van de sneltoetsen.  
Rood: toestel ingesprek  
Groen: toestel vrij  
![](https://res.cloudinary.com/callvoip/image/upload/v1565016949/gigaset-manual-18_fxpug9.png)

<h3>Maxwell Basic en Maxwell 3</h3>

In deze handleiding kunt u lezen hoe u uw Gigaset Maxwell IP Phone instelt voor een VoIP-account van de Simmpl telefooncentrale.

1. **Sluit de Gigaset Maxwell aan**  
   Aan de achterkant van het Gigaset Maxwell toestel vindt u de aansluitmogelijkheid voor een netwerkkabel. Sluit hier een netwerkkabel op aan en sluit de kabel aan de andere zijde aan op uw netwerk/router zodat het toestel met internet is verbonden.
2. **Inloggen op de webpagina van de Maxwell**:  
   Om op de Maxwell in te loggen heeft u het IP-adres nodig.  
   Dat kunt u als volgt opvragen:  
   \- Ga via de menu toets (middelste knop op het toestel) instellingen > lokaal netwerk. Afhankelijk van het model dient u naar beneden te scrollen. Dit kan door op de onderste knop van de zilveren rand om de menutoets te drukken  
   \- Vul het ip adres in de adresbalk van de browser in.  
   \- Het standaard wachtwoord is \[**admin**\]  
   ![](https://res.cloudinary.com/callvoip/image/upload/v1565017115/gigaset-manual-19_ftkl5a.png)
3. **Maak een Simmpl gebruiker aan**  
   Voordat u de telefoon kunt instellen maakt u op de Simmpl centrale aan:  
   \- een gebruiker (Extension): naam met een verkort nummer.  
   \- een toestel hoeft u niet aan te maken als u het toestel automatisch laat instellen (auto provisioning)
4. **Advies: configureer via AUTO PROVISIONING**  
   Wij adviseren om de Maxwell via **AUTO PROVISIONING** automatisch door de telefooncentrale te laten instellen: dit gaat snel en de resultaten zijn goed. Bij het aanmaken van een toestelaccount vindt u deze optie.  
   De Simmpl beheerpagina vraagt om: MAC adres en MAC ID:  
   ![](https://res.cloudinary.com/callvoip/image/upload/v1565017233/gigaset-manual-20_rlrkf7.png)  
   Deze 2 codes vindt u in de Maxwell in menu STATUS:  
   ![](https://res.cloudinary.com/callvoip/image/upload/v1565017281/gigaset-manual-21_cqyh8a.png)  
   Vul deze 2 gegevens in en doorloop de wizard op de SIMMPL centrale om te zorgen dat het juiste gebruikersaccount in de Maxwell wordt gezet.

<h3>Checken van de Maxwell instellingen</h3>

Op de Maxwell configuratie pagina kunt u aangeven of de basis automatisch een IP-adres krijgt toegewezen of kunt u een vast IP-adres instellen. Wij adviseren DHCP; uw technisch adviseur kan u adviseren wat in uw situatie het beste is.  
![](https://res.cloudinary.com/callvoip/image/upload/v1565017376/gigaset-manual-22_f0zi8k.png)  
**Vervolgens klikt u op \[Telefonie\] > \[SIP en RTP algemeen\]**  
![](https://res.cloudinary.com/callvoip/image/upload/v1565017441/gigaset-manual-23_pumtd5.png)  
**SIP accounts:**  
Hier kunt u verschillende lijnen configureren.  
Druk op de \[bewerk\] toets om een lijn in te stellen.  
![](https://res.cloudinary.com/callvoip/image/upload/v1565017512/gigaset-manual-24_da5phw.png)  
**SIP-account settings**:

![](https://res.cloudinary.com/callvoip/image/upload/v1565017573/gigaset-manual-25_ptzlcf.png)  
**Codecs:**  
![](https://res.cloudinary.com/callvoip/image/upload/v1565017636/gigaset-manual-26_j3g1w8.png)  
**Voicemail:**  
![](https://res.cloudinary.com/callvoip/image/upload/v1565017688/gigaset-manual-27_i5uk3o.png)

<h3>Toetsen en LED’s</h3>

Hier zijn de sneltoetsen in te stellen. U kunt hier kiezen voor een lijn-toets, een sneltoets of een BLF toets om te zien wie er in gesprek is.

**NB:** via de autoprovisioning kunt u dit instellen op de SIMMPl centrale via button **CUSTOMiZE DEVICE BEHAVIOUR**

![](https://res.cloudinary.com/callvoip/image/upload/v1565017776/gigaset-manual-28_dtfjni.png)  
U kunt in het toestel ook instellingen bekijken.  
Als u wijzigingen doorvoert zal de auto provisioning de instellingen ca 12 uur later weer terugzetten naar de instellingen op de server.  
![](https://res.cloudinary.com/callvoip/image/upload/v1565017837/gigaset-manual-29_tkpjge.png)  
![](https://res.cloudinary.com/callvoip/image/upload/v1565017882/gigaset-manual-30_sjzegu.png)  
![](https://res.cloudinary.com/callvoip/image/upload/v1565017944/gigaset-manual-31_wii2hm.png)

**Links**  
<a href="https://callvoip.shop/" target="_blank">Callvoip.shop</a>: De winkel voor onze dienst!

<a href="https://www.gigaset.com/nl_nl/cms/ondersteuning.html" target="_blank">Gigaset support</a>: Beantwoord de meeste vragen!

**Resetten naar factory defaults**:  
\- Druk de button op het basisstation in en haal de basis van de stroom af.  
\- Sluit de stroomkabel weer aan maar houd de button nog 15 seconden vast.  
\- Laat de knop nu los - de basis is nu gereset naar fabrieksinstellingen