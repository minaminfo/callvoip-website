---
title: Handleiding SIP-Trunk
weight: 
description: ''
images: []
pdf: http://files.callvoip.nl/downloads/Callvoip_handleiding_trunk-en-eigen-voip-telefooncentrale.pdf
hideinsearch: false
Nieuw: false
Update: true

---
<h3>Handleiding SIP Trunk en een eigen VoIP telefooncentrale </h3>

==================================================

<h3>Nieuw: slimme Trunk Failover naar belplan</h3>

De Callvoip Trunk Service is nu uitgerust met een slimme trunk failover:  
\* maak een belplan aan met daarin de gewenste acties  
\* bewerk een bestaande trunk  
\* onderaan stap 1, onder de nummers, kun je de failover inschakelen:

![](https://res.cloudinary.com/callvoip/image/upload/v1580243576/trunk-failover_n2d8kp.jpg)

==================================================

De Callvoip telefooncentrale is zelf een centrale met veel mogelijkheden. Een eigen telefooncentrale heb je dus in principe niet nodig. Toch kun je redenen hebben om deze wel te gebruiken, bv bij gebruik van specifieke integraties / koppelingen of uit oogpunt van kosten, beheer of (on-)afhankelijkheid.  
De Callvoip centrale kan ook uitstekend worden gebruikt met eigen centrales.  
Dit kan op twee manieren:

**a) SIP TRUNK**

Callvoip biedt SIP trunks: één registratie als grote ‘snelweg’ met daarin al je nummers.  
Een trunk is één verbinding tussen de Callvoip-telefooncentrale en je eigen telefooncentrale (PBX) waar alle inkomende en uitgaande telefoonverkeer langsloopt.  
Je bepaalt zelf of nummers inkomend en/of uitgaand beschikbaar zijn voor de centrale achter de trunk en je beschikt over geavanceerde instellingen. Met één registratie is dit verreweg de meest efficiënte manier bij een groot aantal nummers. Kies dus een trunk bij 10 nummers of meer.  
Je kunt zelf een trunk-account aanmaken en deze op je eigen telefooncentrale instellen.

**b) TOESTELACCOUNT(S)**

Net zoals je een toestel van een SIP account voorziet, kun je je centrale vaak ook met een toestelaccount instellen. Het verschil met een trunk is dat een toestelaccount maar één vaste uitgaande identiteit heeft. Alleen dit nummer kan worden meegestuurd bij uitbellen. Je kunt wel meerdere toestelaccounts aanmaken en afzonderlijk naast elkaar registreren.

De Callvoip SIP Trunk werkt prima samen in combinatie met veel populaire lokale PBX omgevingen, o.a.:

* Digium Asterisk / Kamailio
* 3CX
* Yeastar / MuyPBX
* 4PSA
* Barracuda
* Elmeg
* IP Office
* SNOM PBX

<h3>Beveiligingstools</h3>

Callvoip heeft veiligheid hoog in het vaandel staan. Om je bij deze bescherming te faciliteren biedt Callvoip tools om beperkingen in te stellen die voorkomen dat er ongewenst gebruik plaatsvindt. Denk bijvoorbeeld aan:

* **Channels**: beperking van het aantal gelijktijdige gesprekken / spraakkanalen.
* **IP Whitelist**: beperken van de toegang tot specifieke IP-s of subnetten, door uzelf in te vullen
* **Destination Whitelist**: Het beperken van de bestemmingen waarnaar gebeld kan worden (regio, land, type telefoonnummer, prefix)
* **Limits**: het beperken van het bedrag / aantal gesprekken per uur-dag-week als fraudebeperking. Dit wordt reeds bij uitgifte van uw klantomgeving ingesteld op 10-25-50 Euro en kan op uw verzoek worden aangepast. U krijgt een emailnotificatie als u 80% van deze waarde bereikt.
* **Slimme Trunk Failover**: neemt de eigen centrale niet aan? Dan stuurt de Callvoip centrale het gesprek door naar een belplan met acties die je zelf kiest.

Op deze manier creëert Simmpl nog meer grip op veiligheid!

<h3>Hoe stel je de trunk precies in?</h3>

Klik rechts om de PDF handleiding te downloaden; daarin vindt je schermafbeeldingen en detail-informatie.