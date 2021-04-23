---
title: Yealink T4x/T5x configureren (handmatig)
weight: 50
description: 'Yealink T4x/T5x configureren '
images: []
pdf: http://www.simmpl.nl/downloads/Simmpl_configuratiehandleiding_Yealink_T4x.pdf
hideinsearch: false
Nieuw: false
Update: false
hideingoogle: false
hidesocialshare: false
searchtags:
    - dsskey

---
[Yealink T4x/T5x gebruikshandleiding nodig? Klik hier!](https://www.callvoip.nl/ondersteuning/apparatuurhandleidingen/yealink-t4x-t5x-gebruikshandleiding/)

In deze handleiding kunt u lezen hoe u uw Yealink T4x of T5x IP telefoon configureert met een VoIP-account van de Callvoip telefooncentrale.

1. **Maak een Simmpl toestelaccount aan**  
   Voordat u de telefoon kunt instellen maakt u op de Callvoip centrale aan:  
   \- een gebruiker (extension)  
   \- een toestel (device) > hier vindt u ook de SIP-username en password  
   Voor meer informatie, raadpleeg de Callvoip handleidingenbibliotheek.
2. **Sluit het toestel aan**  
   Sluit het toestel aan door een netwerkkabel aan te sluiten op de INTERNET-poort (niet op de PC-poort, daar kan evt. uw computer op aangesloten worden). Deze netwerkkabel wordt op uw netwerk/router aangesloten zodat de telefoon met internet is verbonden.
3. **Stel het toestel in op de Nederlandse taal**  
   Kies op het toestel zelf:  
   menu > 3. settings > 1. basic settings > 1. language > kies Nederlands
4. **Vraag het IP-adres van uw IP-toestel op**  
   Om op het IP-toestel in te loggen heeft u het IP-adres nodig. Bij de Tiptel / Yealink toestellen kunt u het IP-adres opvragen door op de \[OK\] toets te drukken. Een IP-adres ziet eruit als: 192.168.1.105
5. **Log in op het toestel**  
   \- Vraag het IP-adres van het toestel op  
   \- Ga naar internet en toets het adres met de puntjes in de browser-adresbalk in  
   \- De standaard username en wachtwoord zijn \[**admin**\] en \[**admin**\]  
   \- Na inloggen komt u op tab \[**Status**\]

<h3>Inloggen</h3>

Vraag het IP-adres op en toets dit in in de browser, het inlogscherm verschijnt.  
![](https://res.cloudinary.com/callvoip/image/upload/v1565080115/yealink-handmatig-1_ztzczh.png)

<h3>Status</h3>

Na het inloggen verschijnt de bedieningspagina van de telefoon. Bovenin beeld ziet u een aantal tabbladen. U bent in het Statustabblad en ziet hier hoeveel accountposities er zijn en welke hiervan in gebruik zijn.  
![](https://res.cloudinary.com/callvoip/image/upload/v1565080212/yealink-handmatig-2_h31f3y.png)

<h3>Account</h3>

In tabblad Account heeft u de mogelijkheid om de VoIP-toestelgegevens in te vullen.  
![](https://res.cloudinary.com/callvoip/image/upload/v1565080315/yealink-handmatig-3_szhieu.png)  
![](https://res.cloudinary.com/callvoip/image/upload/v1565080373/yealink-handmatig-4_vltghw.png)

<h3>Network</h3>

Bij tabblad Network vindt u de netwerkinstellingen van de IP telefoon.  
Wij adviseren om DHCP te gebruiken; het toestel krijgt dan een IP-adres van de router.  
Uiteraard is het heel goed mogelijk dat het in uw situatie beter is om toch een statisch adres te kiezen; dit is afhankelijk van het netwerk waarin het toestel wordt gebruikt.  
![](https://res.cloudinary.com/callvoip/image/upload/v1565080538/yealink-handmatig-5_ytlaeg.png)  
Het subtabblad Advanced bevat geavanceerde opties. Bij Advanced heeft u bijvoorbeeld de mogelijkheid om het toestel in een apart VLAN te plaatsen. Wij verwijzen u hiervoor naar uw technisch adviseur.

<h3>DSSKey</h3>

Op tabblad DSSKey heeft u de mogelijkheid om de Line Keys (rechts en/of links van het display) van het Yealink toestel in te regelen met de door u gewenste functie. U kunt deze  voor drie verschillende acties gebruiken zoals lijntoets, Callpickup en BLF. Per button verschijnt een label in het display met een tekst die u zelf kiest. Bij een toestel met een groot aantal DSSKeys wordt één van de toetsen gebruikt als bladertoets.  
![](https://res.cloudinary.com/callvoip/image/upload/v1565080821/yealink-handmatig-6_xyvwss.png)  
U kunt hierbij kiezen uit vele soorten acties / functies, waaronder:  
\- **Line** > u gebruikt de button om een specifieke lijn / nummer / VoIP account te kiezen.  
\- **Speed Dial** > u gebruikt de button als snelkiestoets voor een intern/extern nummer  
\- **BLF** > u gebruikt de knop als snelkiestoets voor een intern nummer en ziet de status van het toestel van de collega (vrij, wordt gebeld, in gesprek).  
![](https://res.cloudinary.com/callvoip/image/upload/v1565081195/yealink-handmatig-7_crvehj.png)

<h3>Extension Panel instellen</h3>

Als uw toestel een expansion module ondersteunt en u deze gebruikt, kies Ext Key in het menu en programmeer de buttons van het Extension Panel. U meerdere Extension Panels op elkaar aansluiten.  
**Let op**: het maximale aantal kan per model verschillen. Mogelijk heeft u ook een extra voedingsadapter nodig wanneer er twee of meer expansion modules naast elkaar worden gebruikt.  
![](https://res.cloudinary.com/callvoip/image/upload/v1565081449/yealink-handmatig-8_n8q0af.png)

<h3>Features</h3>

Bij menu-item Features kunt u een groot aantal instellingen doen, zoals:  
\- **Call Waiting**: Maak van uw toestel een éénlijns- of meerlijns toestel  
\- **Auto Redial**: Wilt u dat het toestel zelf opnieuw een belpoging doet als de eerste poging niet slaagt? Zet het hier aan (default) of uit. Als u deze code uitschakelt ziet u in het display de foutcode als een gesprek niet goed gaat.  
\- **Call Waiting Tone**: Instelling dat u wel of geen toon hoort als er tijdens het bellen een tweede gesprek binnenkomt (default: aan)  
\- **Key Tone**: Instelling dat u wel of geen geluid hoort als u de toetsen van de telefoon indrukt  
\- **Transfer**: de wijze waarop als default wordt doorverbonden als u de sneltoetsen gebruikt > met of zonder ruggespraak

<h3>Settings</h3>

Bij menu-item Settings kunt u diverse instellingen doen zoals:  
\- Taal van de webinterface (niet van het toestel zelf)  
\- Backlight instellingen (gaat backlight uit ja/nee en na hoeveel tijd)  
\- Datum en tijd, zomertijd-instellingen  
\- **Upgrade** > mogelijkheid om het toestel te rebooten  
\- **Upgrade** > mogelijkheid om een firmware upgrade uit te voeren  
\- **Auto Provision** > mogelijkheid om het toestel te laten provisionen door bv. de Simmpl telefooncentrale > zie hiervoor de aparte Provisoning handleiding op www.simmpl.nl/support > handleidingenbibliotheek

<h3>Directory</h3>

In tabblad Contacts kunt u een lokaal adresboek aanleggen. Dit kan op eenvoudige wijze via de browser. Handig is ook dat u het adresboek kunt downloaden om het vervolgens op te slaan en/of in een andere telefoon (zelfde merk/type) te uploaden. Zo heeft u in korte tijd een centraal adresboek dat op alle toestellen gelijk is!  
U kunt ook groepen maken met bv. een afwijkende ringtone.  
![](https://res.cloudinary.com/callvoip/image/upload/v1565081829/yealink-handmatig-9_thxdwe.png)

<h3>Resetten naar factory defaults</h3>

\- Houdt de OK toets ingedrukt totdat de vraag voor reset verschijnt  
\- Beantwoord deze met OK en wacht tot het toestel weer terug is
