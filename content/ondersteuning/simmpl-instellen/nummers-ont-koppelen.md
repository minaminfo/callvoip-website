---
title: Handleiding nummerbeheer
weight: 
description: ''
images: []
pdf: https://files.callvoip.nl/downloads/Callvoip_handleiding_nummerbeheer.pdf

---
**Hoeveel en welke nummers heb je en hoe maak je ze actief en gebruiksklaar?**

Heb je een 10-blok of een 100-blok met regionale of 088 nummers?   
 Dan worden alle 100 nummers op de Callvoip centrale geactiveerd. Je kunt zelf bepalen hoeveel en welke nummers van het blok je wilt gebruiken. Als wij weten welke nummers je  
 wilt gebruiken, dan bereiden we dit alvast voor je voor.   
 Wilt je meer of andere nummers, dan kun je dit gemakkelijk zelf doen.   
 In deze handleiding vind je informatie hoe je dat kunt doen.

In deze handleiding vind je de volgende onderwerpen:

1. Een overzicht van je nummers opvragen
2. Een ongebruikt nummer in gebruik nemen (belplan)
3. Een gebruikt nummer ontkoppelen (belplan)
4. Een ongebruikt nummer in gebruik nemen (trunk)
5. Een gebruikt nummer ontkoppelen (trunk)

### Een overzicht van je nummers opvragen

Je hebt een 100-nummerblok op de Callvoip centrale. Je kunt op Simmpl een overzicht opvragen van al je nummers, of deze aan een belplan zijn gekoppeld en zo ja, aan welk belplan. Wil je een extra nummer gebruiken uit uw blok dan kan deze eenvoudig worden toegevoegd.

**Login op de Callvoip centrale** en ga in het menu links naar \[**rapporten**\] > tab \[**Gebruik**\]  
Hier vind je een overzicht van je nummers. Achter de nummers staat:  
\* of ze in gebruik zijn  
\* zo ja, de naam van het belplan of trunk  
\* zo nee, dan zie je staan: \[ongebruikt\]

![](https://res.cloudinary.com/callvoip/image/upload/v1564491141/Support-nummerontkoppelen-externenummers_cdzwil.png)

### Een ongebruikt nummer in gebruik nemen (belplan)

Om een nummer dat nu ongebruikt is in gebruik te nemen kun je deze als volgt koppelen aan een belplan:

**Login op de Callvoip centrale** en klik in het menu op \[**belplannen**\] > \[**Belregels**\] > \[**toevoegen**\]

![](https://res.cloudinary.com/callvoip/image/upload/v1564491266/Support-nummerontkoppelen-belroutes_ikvbwg.png)

Na het invullen van de gegevens klik je op \[**toevoegen**\]. Vervolgens kun je aan de slag met het maken van het belplan. Het belplan omvat de **acties die worden uitgevoerd als er een oproep binnenkomt**. Als je een extern nummer aan je belplan koppelt dan stel je in dit belplan in welke acties worden uitgevoerd als dat nummer wordt gebeld.

![](https://res.cloudinary.com/callvoip/image/upload/v1564491348/Support-nummerontkoppelen-nieuwebelroute_eyo4tt.png)

Zodra het belplan ingesteld is klik je op \[**opslaan**\]. Vanaf nu kun je het nieuwe nummer in gebruik nemen.

### Een gebruikt nummer ontkoppelen (belplan)

Om een nummer dat nu aan een belplan is gekoppeld te ontkoppelen kun je deze stappen volgen: **Login op de Callvoip centrale** en klik in het menu op \[**belplannen**\] > klik op het belplan

![](https://res.cloudinary.com/callvoip/image/upload/v1564491552/Support-nummerontkoppelen-devries_sfdkwj.png)

Klik bovenin beeld op \[**Instellingen**\]. Bij \[**Extern nummer**\] zie je het gekoppelde telefoonnummer.

![](https://res.cloudinary.com/callvoip/image/upload/v1564491564/Support-nummerontkoppelen-instellingen_dmdsow.png)

Selecteer het telefoonnummer en verwijder het (Ctrl+X, backspace of delete) en klik op \[Opslaan\].

![](https://res.cloudinary.com/callvoip/image/upload/v1564491578/Support-nummerontkoppelen-instellingen2_mggaqq.png)

Het belplan is nu niet meer gekoppeld aan het externe nummer. Het externe nummer is weer beschikbaar om aan een ander belplan of trunk te koppelen. Je ziet het terug in het overzicht van je nummers: rapporten > tab gebruik.

![](https://res.cloudinary.com/callvoip/image/upload/v1564491599/Support-nummerontkoppelen-devries2_dv00xs.png)

### Een ongebruikt nummer in gebruik nemen (trunk)

Om een beschikbaar nummer aan een trunk te koppelen ga je als volgt te werkt.

**Login op de Callvoip centrale** en klik in het menu op \[**toestellen**\] > tabblad Trunks Klik bij de trunk die je wilt bewerken op het bewerken-icoon (tandwieltje rechts)

![](https://res.cloudinary.com/callvoip/image/upload/v1564491810/Support-nummerontkoppelen-trunkregistratie_fpibfl.png)

In stap 1 van de Trunk-instellingen kun je een nummer toevoegen. Klik op de drop-down voor een overzicht van je nummers. Je ziet ALLE nummers met een | (semi-colon) en daarachter of ze aan een belplan of trunk zijn gekoppeld. De vrije nummers hebben deze toevoeging niet:

![](https://res.cloudinary.com/callvoip/image/upload/v1564491845/Support-nummerontkoppelen-trunknummers_z4ueu5.png)

Kies een vrij nummer en vink aan of je:

* het nummer zowel INKOMEND wilt koppelen (gesprekken komen op de trunk uit)
* of als NUMMERWEERGAVE (u kunt het nummer meesturen met uw trunkverkeer)
* of BEIDE

Klik vervolgens op de plus om het nummer aan de trunk te koppelen.

![](https://res.cloudinary.com/callvoip/image/upload/v1564491881/Support-nummerontkoppelen-trunknummertoevoegen_cv4oys.png)

Rond de trunk wizard af om de instellingen op te slaan.

NB: je kunt een nummer dat al wordt gebruikt selecteren, jeu koppelt het dan aan deze trunk en ontkoppelt het van een belplan. Je kunt het ook enkel als nummerweergave gebruiken en het nummer behoudt dan zijn inkomende route.

### Een gebruikt nummer ontkoppelen (trunk)

Om een nummer van een trunk te ontkoppelen ga je als volgt te werk:

**Login op de Callvoip centrale** en klik in het menu op \[**toestellen**\] > tabblad Trunks.   
Klik bij de trunk die je wilt bewerken op het bewerken-icoon (tandwieltje rechts).

In stap 1 van de Trunk-instellingen zie je welke nummers aan de trunk zijn gekoppeld. Om een nummer te verwijderen, klik op het rode kruis.

![](https://res.cloudinary.com/callvoip/image/upload/v1564491701/Support-nummerontkoppelen-trunkroodkruis_bpmsyt.png)

Het nummer is nu verwijderd van de trunk. Rond de trunk wizard af om de instellingen op te slaan.