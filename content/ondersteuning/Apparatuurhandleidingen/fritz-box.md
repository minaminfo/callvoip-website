---
title: FRITZ!Box instellen voor Callvoip
weight: 20
description: FRITZ!Box instellen voor Callvoip
images: []
pdf: http://www.simmpl.nl/downloads/Simmpl_configuratiehandleiding_FRITZBox.pdf
Hide in Search: false
Nieuw: false
Update: false
hideinsearch: false
hideingoogle: false
hidesocialshare: false

---
In deze handleiding kunt u lezen hoe u uw FRITZ!Box instelt voor een VoIP-account van de Callvoip telefooncentrale.

<br><h3>1. Maak een Callvoip toestelaccount aan</h3>  
Voordat u de telefoon kunt instellen maakt u op de Callvoip centrale aan:  
\- een gebruiker (extension)  
\- een toestel (device) > hier vindt u ook de SIP-username en password  
Voor meer informatie, raadpleeg de Callvoiphandleidingenbibliotheek.

<br><h3>2. Sluit de FRITZ!Box aan</h3>  
De meeste FRITZ!Boxen zijn modem-routers, dus het aansluiten ervan kan iets meer werk zijn dan enkel de stekker in het stopcontact doen. Zie hiervoor onze aparte handleiding. U bent klaar om uw FRITZ!Box voor Callvoip in te stellen als de FRITZ!Box met internet is verbonden.

<br><h3>3. BELANGRIJK: laadt de laatste firmware</h3>  
Het is van groot belang dat u uw FRITZ!Box van de **laatste firmware** voorziet. Omdat de FRITZ! zoveel functies vervult in uw netwerk, is een niet goed beveiligde FRITZ!Box een belangrijke kwetsbaarheid voor uw netwerk. Mocht zich een probleem hiermee voordoen, dan is het mogelijk dat uw VoIP-accounts door kwaadwillenden worden gebruikt en dat u de rekening betaalt…

<br><h3>4. Sluit uw apparatuur op de FRITZ!Box aan</h3>  
Er zijn diverse modellen FRITZ!Box die elk andere telefoon-aansluitingen bieden:  
\- Analoge aansluitpoorten: hierop kunt u analoge toestellen aansluiten  
\- S0 ISDN-poort: hierop kunt u uw ISDN-telefooncentrale aansluiten  
\- Ingebouwd DECT-basisstation: hierop kunt u uw draadloze handsets aanmelden  
Als u uw telefoontoestellen / -ISDN-centrale aansluit, dan kunt u in de FRITZ!Box per nummer instellen welke toestellen gaan rinkelen als u dit nummer gebeld wordt en met welk nummer de toestellen uitbellen. ![](https://res.cloudinary.com/callvoip/image/upload/v1564736007/fritzbox-1_n33fkz.png)

<br><h3>5. Log in op uw FRITZ!Box</h3>  
De FRITZ!Box heeft als standaard IP-adres: https://192.168.178.1 (aanpasbaar). Het wachtwoord om in te loggen kunt u vinden aan de onderzijde van de FRITZ!Box. U kunt gemakkelijk inloggen en een ander wachtwoord instellen als u dat wenst.

<b>Inloggen</b>

Log in op uw FRITZ!Box. uw Overview verschijnt met daarin een overzicht van de services die de FRITZ! u biedt:

![](https://res.cloudinary.com/callvoip/image/upload/v1564736442/fritzbox-2_fdh8ks.png)

In het middenscherm kunt u zien of er telefoonnummers zijn ingesteld. In het voorbeeld is dat niet het geval.

Onderin beeld kunt u zien of u als Standard of Advanced gebruiker bent ingelogd. Als u hier Standard ziet staan, klik er dan op zodat het in Advanced wijzigt.

**NB**: bij oudere modellen vindt u deze instelling in menu \[System\] > \[Expert Mode\]

1\. **Uw Simmpl VoIP-account instellen**

Kies in het menu optie \[Telephony\] en submenu \[Telephone Numbers\]: ![](https://res.cloudinary.com/callvoip/image/upload/v1564736694/fritzbox-3_iyweh8.png)
Om uw Simmpl VoIP-account toe te voegen, klik op \[**New Telephone Number**\].
Doorloop de wizard en maak de volgende keuzes:
![](https://res.cloudinary.com/callvoip/image/upload/v1564736827/fritzbox-4_xia9zw.png)
![](https://res.cloudinary.com/callvoip/image/upload/v1564736873/fritzbox-5_qasauc.png) Vul in het volgende scherm de SIP-Username en het SIP-password in van uw Simmpl VoIP-account. U kunt deze vinden op de Simmpl telefooncentrale en kunt uiteraard contact met ons opnemen voor assistentie. Bij Registrar en Proxy server vult u in: **pbx.callvoip.nl** ![](https://res.cloudinary.com/callvoip/image/upload/v1564736972/fritzbox-6_kzvtwg.png) De accountgegevens worden samengevat: ![](https://res.cloudinary.com/callvoip/image/upload/v1564737042/fritzbox-7_iqq1dj.png)
De wizard wordt beëindigd en u keert terug in het overzichtsscherm met alle telefoonnummers:
![](https://res.cloudinary.com/callvoip/image/upload/v1564737107/fritzbox-8_s3ceny.png)
Het groene bolletje voor het nummer geeft aan dat het nummer succesvol is geregistreerd. Dit kan even duren na het aanmaken van het account. Ververst u de pagina om te kijken of registratie is gelukt. U herkent het Simmpl-account aan **pbx.callvoip.nl**.

U kunt nu ook op de overview-pagina zien of het Simmpl account succesvol is geregistreerd:
![](https://res.cloudinary.com/callvoip/image/upload/v1564737218/fritzbox-9_mlkzvi.png)
Om de details van een VoIP-account op te vragen en evt. wijzigingen aan te brengen, ga terug naar het Telephone Numbers detailscherm en klik op het edit-icoon:
![](https://res.cloudinary.com/callvoip/image/upload/v1564737295/fritzbox-10_nv1hd0.png)
U krijgt een overzicht van de gegevens en kunt een aantal extra instellingen doen:
![](https://res.cloudinary.com/callvoip/image/upload/v1564737397/fritzbox-11_tnbiud.png)

2\. **Uw telefoontoestel(len) aansluiten / aanmelden op uw FRITZ!Box**

In de vorige stap heeft u uw Simmpl VoIP-account succesvol geregistreerd. Uw FRITZ!Box is een telefooncentrale waarop u meerdere (max. 10) VoIP-accounts kunt registreren en waarop u diverse toestellen kunt aansluiten.

Op de diverse soorten FRITZ!Boxen kunt u verschillende soorten apparaten aansluiten:
![](https://res.cloudinary.com/callvoip/image/upload/v1564737484/fritzbox-12_cwc6pe.png)
Uw analoge toestellen kunt aansluiten op de analoge FON-poorten (2 of 3).  
Uw ISDN-apparatuur (ISDN-centrale of ISDN-toestel) kunt u aansluiten op de S0-bus.  
Uw DECT toestellen kunt op op de FRITZ!Box-DECT basis aanmelden via de aanmeldprocedure die u start via de configuratie-pagina.
![](https://res.cloudinary.com/callvoip/image/upload/v1564737573/fritzbox-13_kyznvb.png)
Om toestellen aan te melden gaat u naar menu \[Telephony Devices\]. Klik vervolgens op \[Configure New Device\]:
![](https://res.cloudinary.com/callvoip/image/upload/v1564737638/fritzbox-14_u2dmul.png)
Doorloop de wizard:

* Als u een analoog toestel wilt toevoegen, kies dan \[Telephone\]
* Als u een DECT draadloos toestel wilt aanmelden, kies dan \[Telephone\]
* Als u een ISDN telefooncentrale wilt aansluiten, kies dan \[ISDN PBX\]
* Als u een faxapparaat wilt aansluiten, kies Fax Machine (fax via VoIP wordt afgeraden)

**NB**: met de onderste twee opties kunt u ook een FRITZ antwoordapparaat of faxbox aanmaken.
![](https://res.cloudinary.com/callvoip/image/upload/v1564737774/fritzbox-15_u2stcx.png)
De FRITZ!Box toont welke aansluitmogelijkheden nog beschikbaar zijn.
In het voorbeeld melden we een DECT toestel aan > kies optie DECT.

**NB**: u kunt DECT-toestellen ook toevoegen via menu-optie \[**DECT**\]
![](https://res.cloudinary.com/callvoip/image/upload/v1564737902/fritzbox-16_gyueso.png)
Volg de verdere instructies om de handset aan te melden:
![](https://res.cloudinary.com/callvoip/image/upload/v1564737962/fritzbox-17_aitv4f.png)
Wacht tot de handset is geregistreerd en laat de FRITZ!Box testen of de handset rinkelt:
![](https://res.cloudinary.com/callvoip/image/upload/v1564738022/fritzbox-18_provbx.png)
Na de succesvolle registratie is uw handset toegevoegd aan de toestellenlijst:
![](https://res.cloudinary.com/callvoip/image/upload/v1564738083/fritzbox-19_kzvqgb.png)
U kunt aangemelde DECT handsets ook terugzien in menu DECT > Cordless Telephones
![](https://res.cloudinary.com/callvoip/image/upload/v1564738167/fritzbox-20_xzkxd4.png)

3\. **Uw Simmpl-nummer koppelen aan de juiste toestellen**

U heeft uw Simmpl account succesvol geregistreerd en u heeft uw toestel aangemeld. Nu kunt u instellen dat inkomende gesprekken op deze (één of meer) toestellen gaan rinkelen en dat u met één of meer toestellen met uw Simmpl-account uitbelt.

Ga naar menu \[Telephony\] > \[Telephony Devices\] en klik op het wijzig-icoon achter het nummer.
![](https://res.cloudinary.com/callvoip/image/upload/v1564738254/fritzbox-21_ic5t4b.png)
In het detailscherm kiest u:
Bij \[**Name**\] een naam voor het toestel
Bij \[**outgoing calls**\] het nummer waarmee dit toestel uitbelt (één van uw accounts)
Bij \[**incoming calls**\] de nummers (één of meer) waarop het toestel reageert
![](https://res.cloudinary.com/callvoip/image/upload/v1564738350/fritzbox-22_r46gmt.png)

<h3>Uw voicemail bellen?</h3>

De Simmpl centrale biedt twee soorten voicemail:
\- bedrijfsvoicemailbox > bel 1233 gevolgd door het voicemailboxnummer
\- persoonlijke voicemail > bel 1233 of uw eigen verkorte nummer (001, 002, etc.)

<b>Problemen met de gesprekskwaliteit van toestellen achter uw FRITZ!?</b>

Als u (soms) meer bandbreedte gebruikt dan u tot uw beschikking heeft, of als de hoeveelheid bandbreedte die u krijgt in de praktijk schommelt zodat u deze grens tegenkomt, dan kan het zijn dat u een slechtere gesprekskwaliteit ervaart. Storingen, echo, ruis, delen die uit het gesprek wegvallen: dit zijn voorbeelden van zaken die kunnen optreden bij te weinig bandbreedte.

In zo’n situatie kunt u een extra prioritering inschakelen voor uw IP-toestellen die achter de FRITZBox staan.

1. Log in op uw FRITZ!Box
2. Ga naar menu \[Internet\] > \[Filters\]
3. Kies tabblad \[Prioritization\]
4. Bij **Prioritized Applications**, voeg een prioriteitsregel toe voor \[**All devices**\] > \[**Internet Telephony**\]
5. Sla op en verifieer of de problemen nu minder danwel verdwenen zijn

![](https://res.cloudinary.com/callvoip/image/upload/v1564738971/fritzbox-23_qs0nxb.png)

<b>Gefeliciteerd!</b>

U heeft uw toestel nu gekoppeld met het nummer en kunt starten met bellen en gebeld worden.

<h3>FRITZ!Box resetten naar factory defaults:</h3>

* Kunt u nog inloggen? Reset uw FRITZ!Box dan via menu \[System\] > \[Backup\] > tabblad \[Factory Settings\]
* Kunt u niet meer inloggen? Sluit een telefoontoestel op de FRITZ!Box aan
* Bel met het toestel de volgende code: \[Hekje\]991\[Sterretje\]15901590\[Sterretje\]
* U hoort een pieptoon; wacht tot u alles LED’s aan en uit ziet gaan
* Hang nu pas op. Uw FRITZBox is nu gereset naar factory defaults

<h3>FRITZ!Box kopen en/of support nodig?</h3>

Callvoip werkt al jaren met FRITZ!Boxen en kan u het gebruik hiervan van harte aanbevelen. Bezoek <a href="https://fritzshop.nl/" target="_blank">FRITZ!Shop</a> voor een ruim assortiment en veel tips. Voor uw supportvragen kunt u ook bij de <a href="[https://nl.avm.de/service/fritzbox/fritzbox-7490/knowledge-base/](https://nl.avm.de/service/fritzbox/fritzbox-7490/knowledge-base/)" target="_blank">officiële website van AVM</a> terecht.