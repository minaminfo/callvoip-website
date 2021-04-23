---
title: Handleiding Click-to-Dial (uitgebreid)
weight: 
description: ''
images: []
pdf: http://www.simmpl.nl/downloads/Simmpl_handleiding_ClicktoDial.pdf
hideinsearch: false
Nieuw: false
Update: false
draft: true

---
De **gratis Simmpl Click-to-Dial plug-in voor de Chrome Browser** biedt u:

1. **Click2Dial**: klik op een nummer en bel dit op uw eigen toestel
2. **Paste2Dial**: type / paste een nummer in de app en klik om het nummer te bellen
3. **Select2Dial**: selecteer een nummer en klik rechts om het op uw vaste toestel te bellen
4. **Historie**: historie-tab met uw Paste2Dial bel-acties
5. **Contacten**: sla gebelde nummers op in uw telefoonboek en maak ze privé of deel ze met uw collega's
6. **Notificatie inkomend gesprek**: bij elke oproep kunt u een popup met het nummer én naam (als u deze in uw telefoonboek heeft opgeslagen) in uw scherm laten verschijnen

Bij elk nummer in Chrome ziet u een icoontje. Klik hierop en uw toestel gaat bellen!  
Neem het gesprek aan en uw toestel start met bellen naar het aangeklikte nummer.

<h3>Click-to-Dial snelstart handleiding</h3>

1. Installeer de <a href="https://goo.gl/Px9dGE" target="_blank">Click-to-Dial</a> app
2. Maak de koppeling op Simmpl (beheerder)
3. Beheerder doet eerste login (4 velden)
4. Uzelf (gebruiker) logt in op de plugin (2 velden)
5. Start met Click-to-Dial!  
   ![](https://res.cloudinary.com/callvoip/image/upload/v1565095062/click2dial-uitgebreid-1_ircxw8.png)

<h3>Click-to-Dial stap-voor-stap handleiding</h3>

1. **Installeer de Simmpl Click-to-Dial app in uw Chrome browser**  
   <a href="https://goo.gl/Px9dGE" target="_blank">Download en installeer</a> de Click-to-Dial plugin. Het Click-to-Dial icoon verschijnt in uw browser.  
   ![](https://res.cloudinary.com/callvoip/image/upload/v1565095305/click2dial-uitgebreid-2_ljitxs.png)
2. **Maak de koppeling op Simmpl**  
   Log in op Simmpl als beheerder en maak éénmalig de koppeling aan.  
   (**NB**: Callvoip kan dit ook voor u doen.)  
   \- Log in op Simmpl > \[**Instellingen**\] > tabblad \[**API**}  
   \- Klik op \[**Toevoegen**\] en vul bij doorschakel URL in: https://api.simmpl.nl/api/check  
   \- Kopieer de Client ID en Secret ID voor stap 3 (App log-in)  
   \- Sla de koppeling op  
   Na de eerste login met Client en Secret kunnen alle collega's inloggen met hun Simmpl  inlogggegevens.
3. **Log in op de app (eerste gebruiker)**  
   Dubbelklik op het Click-to-Dial icoon rechts in de Chrome adresbalk. Er verschijnt een webpagina waar u 4 velden invult: Client ID, Client Secret, Simmpl gebruikersnaam en Simmpl wachtwoord
4. **Log in op de app (elke volgende gebruiker)**  
   Elke volgende gebruiker in de organisatie kan inloggen met zijn eigen Simmpl gebruikersnaam en wachtwoord.  
   ![](https://res.cloudinary.com/callvoip/image/upload/v1565095654/click2dial-uitgebreid-3_ki692e.png)
5. **Start met Click-to-Dial!**  
   U bent klaar! Telefoonnummers in de Chrome browser worden herkend en gemarkeerd met het Click-to-Dial icoon. Klik op het icoon en uw toestel gaat rinkelen, neem op en het nummer wordt gebeld.  
   **Tip 1**: Nummer niet herkend? **Select-to-Dial**! Selecteer, right-click en kies Click-to-Dial om te bellen.  
   **Tip 2**: Nummer niet in Chrome? **Paste-to-Dial**! Kopieer en type/plak, klik op button \[GA\]  
   ![](https://res.cloudinary.com/callvoip/image/upload/v1565095880/click2dial-uitgebreid-4_e0osc4.png)
6. **Notificatie: Zie welk nummer u belt!**  
   Wordt u gebeld, dan verschijnt er een popup met het nummer én naam (als deze in uw telefoonboek is opgeslagen):  
   ![](https://res.cloudinary.com/callvoip/image/upload/v1565096047/click2dial-uitgebreid-5_gypeza.png)  
   ![](https://res.cloudinary.com/callvoip/image/upload/v1565096105/click2dial-uitgebreid-6_wlcpvh.png)

<h3>Toelichting bij het maken van de API-koppeling</h3>

U maakt als volgt een API-koppeling:

1. Login als beheerder op <a href="https://panel.callvoip.nl/login/panel" target="_blank">panel.callvoip.nl</a>
2. Ga naar \[**instellingen**\] > tabblad \[**API**\]
3. Klik op \[**toevoegen**\] en vul de gegevens in
4. Doorschakel URL: https://api.simmpl.nl/api/check
5. Genereer een Client Secret  
   **Let op**: Client ID en Secret is nodig bij de eerste login  
   Sla deze dus op of download en installeer de app direct
6. Klik op \[**Opslaan**\]  
   ![](https://res.cloudinary.com/callvoip/image/upload/v1565096614/click2dial-uitgebreid-7_juhio9.png)

<h3>Instructie inloggen voor de eerste Click-to-Dial gebruiker:</h3>

De **eerste** gebruiker die op de Click to Dial inlogt wordt gevraagd om 4 velden in te vullen:  
Client ID, Client Secret, Simmpl gebruikersnaam en Simmpl wachtwoord.

Bij de **volgende** gebruikers in dezelfde organisatie hoeven **alleen** de Simmpl gebruikersnaam en Simmpl wachtwoord te worden ingevuld.

Als de API koppeling is gemaakt, download en installeer de app. Als u wilt inloggen krijgt u onderstaande pagina.  
De App Client ID en de App Client Secret vindt u in de API (zie hierboven, punt 5):

![](https://res.cloudinary.com/callvoip/image/upload/v1565096791/click2dial-uitgebreid-8_xyefam.png)

<h3>Toelichting: Paste-to-Dial</h3>

Open de app door op het Click-to-Dial icoon in de browserbalk te klikken

* in het veld ZOEK / PLAK EN BEL: type of plak / paste een nummer
* klik op de groen-witte Telefoon-button
* uw toestel rinkelt; neem aan en het nummer wordt op uw vaste telefoon gebeld
* een popup toont uw Paste-to-Dial actie; deze verdwijnt na 5 seconden automatisch  
  ![](https://res.cloudinary.com/callvoip/image/upload/v1565097029/click2dial-uitgebreid-9_q4cmsw.png)

<h3>Waarom Paste-to-Dial?</h3>

De Paste-to-Dial functie is handig als een nummer niet door Chrome wordt herkend als telefoonnummer of als u het nummer vanuit een ander programma, document of andere browser kunt kopiëren. Kopieer het nummer, klik op het telefoonhoorntje en klaar!

Ook vindt u hier een tabblad met historie: zo zijn recente click-to-dial gesprekken makkelijk snel opnieuw aan te klikken en te bellen én een tabblad met uw privé - en bedrijfsbreed gedeelde telefoonboek:  
![](https://res.cloudinary.com/callvoip/image/upload/v1565097122/click2dial-uitgebreid-10_zt2tjq.png)

<h3>Toelichting: Telefoonboek aanmaken</h3>

Hieronder ziet u in drie stappen hoe u een gebeld nummer kunt opslaan in uw telefoonboek.

In het tabblad Historie kunt u recent gebeld nummers voorzien van een naam (klik op **pennetje**) en opslaan in uw telefoonboek (klik op **sterretje**).

![](https://res.cloudinary.com/callvoip/image/upload/v1565097309/click2dial-uitgebreid-11_yzpruy.png)  
In het tabblad Contacten kunt u vervolgens aangeven of het een privénummer (**huisje**) of een zaaknummer (**koffertje**) betreft. Een privénummer wordt alleen opgenomen in uw persoonlijke telefoonboek, een zaaknummer óók in dat van al uw collega’s. U bent vervolgens de enige die dit contact kan bewerken (**pennetje**) of verwijderen (**prullenbak**) uit het bedrijfstelefoonboek.  
![](https://res.cloudinary.com/callvoip/image/upload/v1565097451/click2dial-uitgebreid-12_zihyq5.png)

<h3>Veelgestelde vragen bij de Simmpl Click-to-Dial app</h3>

Q: **Ik kan de app niet vinden; waar kan ik hem downloaden?**  
A: Er zijn meerdere stores; onze app staat in de Chrome Store en niet in de App Store of Play Store. U vindt de app <a href="https://goo.gl/Px9dGE" target="_blank">hier</a>.

Q: **Inloggen / Activeren lukt niet - ik krijg een foutmelding**  
A: Vul de eerste keer de 4 velden in en klik op \[**Registreren en inloggen**\]. Lukt dit niet? Check de rood gemarkeerde velden en vul deze opnieuw in. De ID en Secret vindt u in API koppeling op Simmpl; uw gebruikersnaam is uw verkorte nummer.bedrijfsnaam (bv 008.tijdhofconsulting) en inlog password.  
(**NB**: u gebruikt dus niet het beheerderspassword, maar het gebruikerspassword.)

Q: **Inloggen / Activeren lukt niet - ik krijg GEEN foutmelding**  
A: Alles lijkt goed ingevuld en u krijgt geen foutmelding maar de activeerknop gaat niet verder? Probeer dan eerst of een ander gebruikerswachtwoord wel werkt. Zo niet: deïnstalleer de Chrome app en installeer hem opnieuw. Vul de velden in en test of het nu wel werkt.  
Lukt het nog niet: leeg dan de browserhistorie / cookies en installeer de plugin nogmaals.

Q: **Activatie geslaagd! Maar de app staat uit?**  
A: Ja, na activatie staat de app uit, klik op de schakelaar en schakel hem in.

Q: **Als ik mijn account ontkoppel, hoe log ik dan weer in?**  
A: Vul de 2 velden opnieuw in; na ontkoppelen blijven de ID en Secret bewaard; u kunt dus vrij eenvoudig opnieuw inloggen of als andere gebruiker inloggen.

Q: **Ik heb Click-to-Dial geïnstalleerd maar hij doet het niet**  
A: Verifieert u dat u de Chrome browser gebruikt: u ziet dan het Click-to-Dial icoontje rechts van de Chrome adresbalk.

Q: **Ik gebruik de app en zie meerdere click-to-dial icoontjes.**  
A: Dit kan soms voorkomen; het is niet erg en u kunt elk icoontje aanklikken om de click to dial te gebruiken. Schakel de APP uit en weer aan – u ziet nu weer één icoontje.

Q: **In welke programma’s werkt Simmpl Click-to-Dial?**  
A: In elk programma dat via de Chrome browser geopend kan worden, bv. uw CRMsysteem, ticketsysteem, webshop, supportprogramma, Office 365 (cloud), Outlook en Gmail, etc.

Q: **Buitenlandse nummers lijken niet aanklikbaar**  
A: Niet alle buitenlandse nummers worden herkend; selecteer het nummer en right click met uw muis; kies Plaats een oproep om het nummer alsnog te bellen.

Q: **Ik zie geen click-to-dial icoontje staan**  
A: Als een telefoonnummer zonder icoontje wordt getoond, wordt het niet herkend. Dat kan bv. komen door een stylesheet van de website. Selecteer het nummer met de muis en klik op de rechtermuisknop. Kies het Click-to-dial icoontje om het nummer alsnog automatisch te bellen.

Q: **Ik klik maar mijn telefoon gaat niet rinkelen**  
A: Open de App settings (icoontje rechts van uw browserbalk) en controleer met welke account u bent ingelogd. Als een andere gebruiker op de app is ingelogd zal zijn/haar toestel gaan rinkelen. Ook als die heel ergens anders staat.  
Met name in situaties waarin met hotdesking wordt gewerkt is het goed hierop alert te zijn.

Q: **Ik zie een rare code in mijn telefoonscherm, klopt dat wel?**  
A: Ja dat klopt; dit is uw SIMMPL-gebruikersnaam.

Q: **De app doet het niet meer, hij meldt: gesprek mislukt**  
A: Ontkoppel uw account en log opnieuw in. Lost dit het probleem niet op: ga naar de Google Extensies, schakel de extensie uit en weer in, en test opnieuw. Lukt het nog niet, deinstalleer de extensie en installeer hem opnieuw.

Q: **Bij de eerste keer inloggen vraagt de app om een Client ID en Client Secret. Waar vind ik deze?**  
A: Log in op uw Simmpl-omgeving. Bij \[instellingen\] vindt u bovenaan het tabblad \[API\].  
Als u Click-to-Dial heeft geïnstalleerd ziet u deze hier.  
Klik op het bijbehorende icoontje en u ziet de App Client ID terug. U kunt hier een App Client Secret genereren. Vergeet niet rechtsboven op \[opslaan\] te drukken.

Q: **Ik zie geen click-to-dial app staan in mijn Simmpl-omgeving**  
A: Klik op \[Instellingen\] en dan in tabblad \[API\] rechtsboven op \[+ Toevoegen\]. Noem de API \[Callvoip Click-to-Dial\] en voer de doorschakel url in: <a href="https://api.simmpl.nl/api/check" target="_blank">https://api.simmpl.nl/api/check</a>  
Vergeet niet rechtsboven op \[Toevoegen\] te klikken om de koppeling op te slaan.

Q: **Ik wil geen popup meer op mijn scherm krijgen bij inkomende oproepen**  
A: In het tabblad {Instellingen} kunt u deze Notificaties aan- en uitzetten

Q: **Ik wil een telefoonnummer opslaan in mijn telefoonboek maar kan geen naam of nummer toevoegen**  
A: U kunt alleen reeds gebelde nummers aan uw contacten toevoegen. In het tabblad \[Historie\] klikt u op het \[pennetje\] achter het gebelde nummer. U kunt nu een naam toevoegen aan het nummer. Vervolgens drukt u op het \[sterretje\] om dit contact toe te voegen aan uw telefoonboek.

Q: **Ik kan een contact in mijn telefoonboek niet bewerken en/of verwijderen**  
A: Dit betreft dan een contact uit het zakelijke telefoonboek van uw bedrijf dat door iemand anders is aangemaakt. Alleen hij of zij kan het betreffende contact aanpassen / verwijderen

Q: **Ik wil een (zakelijk) contact toevoegen aan mijn telefoonboek die ook voor mijn collega’s zichtbaar is**  
A: Voeg in het tabblad \[Historie\] een naam toe aan het eerder door u gebelde nummer. In het tabblad \[Contacten\] ziet u vervolgens een \[koffertje\] achter het opgeslagen. Alleen u kunt hierna nog dit contact bewerken of verwijderen, uw collega’s niet.

Q: **Ik wil een (privé-)contact toevoegen aan mijn telefoonboek die alleen voor mij zichtbaar is en niet voor mijn collega’s**  
A: Voeg in het tabblad \[Historie\] een naam toe aan het eerder door u gebelde nummer. In het tabblad \[Contacten\] klikt u vervolgens op het \[koffertje\] achter het opgeslagen contact. Dit symbool zal nu wijzigen in een \[huisje\] en alleen nog maar in uw persoonlijk telefoonboek te zien zijn.