---
title: Tips bij router-/firewall problemen
weight: 2
description: ''
images: []
pdf: http://www.simmpl.nl/downloads/Simmpl_Router-en-Firewall-Issues.pdf
hideinsearch: false
Nieuw: false
Update: false
aliases: "/firewall"
hideingoogle: false
hidesocialshare: false

---
**Onbelemmerd verkeer tussen uw netwerk en de Simmpl centrale:**

Veel problemen worden opgelost als je de router zo instelt dat er vrij verkeer van en naar onze telefonie-servers mogelijk is. Alle apparatuur staat in dit subnet:

* UDP **van** bereik 185.19.236.0/22 (=185.19.236.0 t/m 185.19.239.255)
* UDP **naar** bereik 185.19.236.0/22 (=185.19.236.0 t/m 185.19.239.255)
* 5060 UDP > SIP (nodig om te registeren)
* 10000 - 60000 UDP > RTP (nodig voor 2-zijdige audio)

***

U maakt gebruik van internettelefonie van Callvoip via de Simmpl telefooncentrale en u ervaart problemen met uw telefoons. Vervelend! Met deze ondersteuningspagina hopen wij u te kunnen assisteren bij het vinden van de oorzaak en het wegnemen ervan.

Een goede VoIP-verbinding start uiteraard met een werkende internetverbinding, een goed geconfigureerde IP-telefoon en geschikte netwerkapparatuur die ook weer goed is geconfigureerd. Dit laatste is iets waar uw systeembeheerder of technisch adviseur vaak een rol kan spelen. Callvoip adviseert u graag wat in uw situatie mogelijk is, niet vanuit een allesomvattende technische kennis maar vanuit ruime ervaring met netwerkonderdelen die bewezen hebben goed te functioneren.

Een belangrijke oorzaak van problemen met telefonie is een scheidsrechter die een ander spel speelt, ofwel een netwerkrouter die het door u gewenste telefonieverkeer geen doorgang verleent. Een netwerkrouter die niet doet wat hij moet doen kan er bijvoorbeeld voor zorgen dat uw IP-telefoon zich helemaal niet kan registreren. U ziet dan geen IP-adres en geen groen bolletje op de Simmpl telefooncentrale. In dit geval is het advies om op de netwerkrouter poort 5060 te openen; deze staat vermoedelijk dicht.

![](https://res.cloudinary.com/callvoip/image/upload/v1564562663/routerissues-1_pivxmg.png)

Ook na succesvolle registratie (= groen bolletje zichtbaar op de Simmpl centrale) kunnen er zich nog problemen voordoen. Vaak gaat het hierbij om audioproblemen, waaronder bijvoorbeeld:

* inkomende gesprekken gaan niet rinkelen op uw toestellen
* bij inkomende gesprekken hoort de beller stilte (geen overgangstoon) gevolgd door (na ca. 30 seconden) uw voicemail of ingestelde doorschakeling
* één van beide gesprekspartners hoort de ander niet (single way audio)
* u kunt niet uitbellen
* u kunt gesprekken niet (intern) doorverbinden
* de verbinding wordt tijdens het gesprek verbroken
* de verbinding wordt telkens na hetzelfde tijdsinterval (bv. 30 sec) verbroken
* u heeft een bijzonder slechte verbinding (missende stukken, haperende verbinding) terwijl uw gesprekspartner geen probleem ervaart
* degene die u belt hoort een echo van zichzelf

<h3>Suggesties voor oplossing van dit probleem</h3>

Een goede router weet wat VoIP is en zal de bijbehorende signalen op de juiste wijze routeren binnen het netwerk zodat alles verloopt zoals bedoeld. U hoeft hieraan in principe niets meer in te stellen.

Ondervindt u echter wél problemen? Dan zult u uw router een handje moeten helpen bij met maken van de juiste routeringen. De problemen worden doorgaans veroorzaakt door de firewall van de router (ook bekend als NAT) die bepaalde activiteiten van het VoIP-verkeer blokkeert.

Veel problemen komen voor met (vaak door internetproviders meegeleverde) **modem-routers met VoIP**, zoals bijvoorbeeld:

* KPN ExperiaBox (KPN, Planet)
* ZyXEL-modem-routers (Telfort)
* SMC (Solcon)
* Cisco, Ubee of Thomson kabelrouter (UPC, ZIGGO)
* en vele andere apparaten die door providers standaard worden meegeleverd

De door providers meegeleverde apparatuur is vaak voorzien van een eigen firmware met beperkte configuratie-mogelijkheden voor uzelf. Vervanging door een apparaat waar u zelf wel de configuratie kunt regelen is vaak de oplossing van uw probleem. Wij kunnen u de modemrouters van FRITZ!Box en DrayTek aanbevelen.

Er zijn ook diverse **modem-router / routers** zonder VoIP die problemen geven, waaronder o.a.:

* Cisco Linksys (diverse modellen modems-routers, routers)
* Netgear
* Sweex
* Veel sterk op beveiliging gerichte firewalls (Juniper, SonicWall, Atera, etc.)

Daarnaast kunnen **switches** kunnen problemen met single-way audio en problemen met (intern) doorverbinden veroorzaken.

Het **eerste** advies is om uw netwerkapparatuur en uw telefoons eens uit te doen, ca. 1 minuut te wachten, en deze weer aan te doen. Herstart uw VoIP-apparatuur als laatste. Herhaal dit evt. een paar keer en test of het daarna beter gaat. In de brede range van toegangspoorten die VoIP kan gebruiken is bij diverse routers een deel niet toegankelijk. Het VoIP-signaal staat voor een dichte deur. Door de apparatuur te herstarten komt deze wellicht voor een geopende deur te staan en werkt alles weer naar wens. Dit is helaas geen lange-termijn-oplossing, maar voor de korte termijn wellicht toch de moeite van een poging waard.

Het **tweede** advies is de complexiteit in uw netwerk zover mogelijk te reduceren. Dit betekent dat u uw telefoons / IP-apparatuur beter niet achter drie routers en 2 switches kunt zetten, maar bv. 2 toestellen direct achter uw modem-router waar uw internetverbinding door binnenkomt (als test). Kijk of u met deze twee toestellen wel kunt doorverbinden, uitbellen, bereikbaar bent, etc. Zo ja, wantrouw dan de achterliggende apparatuur/bekabeling en vervang of herconfigureer de onderdelen die de problemen veroorzaakten.

Hieronder vindt u een aantal **verdere adviezen** die u behulpzaam kunnen zijn bij het lokaliseren van de blokkades en het wegnemen hiervan danwel verbeteren van de situatie.

TIP: voer één wijziging per keer door en test; voer daarna een volgende wijziging door. Lossen de suggesties uw probleem niet op, dan adviseren wij u de aanschaf van een ander apparaat dat wel geschikt is voor het bedienen van VoIP-verkeer.

1. **Controleer internetverbinding**  
   Controleer eerst of u een werkende internetverbinding heeft. Open een willekeurige website, bv. <a href="https://www.nu.nl" target="_blank">www.nu.nl</a>. Zo niet: neem dan contact op met uw internetprovider.
2. **Belangrijk: gebruik laatste firmware op uw router**  
   Controleer of uw router de laatst beschikbare firmware heeft. Zo niet, upgrade dan de firmware. Veel VoIP-firewall-problemen worden opgelost door een recente firmware, omdat de fabrikant hierin ondersteuning biedt voor VoIP-verkeer. Bij oudere firmwares is deze ondersteuning vaak niet of in mindere mate aanwezig. Voor gedetailleerde instructies raadpleeg de handleiding en/of fabrikant / website van uw router.
3. **Laat verkeer van/naar telefooncentrales door**  
   Stel in de router in dat verkeer afkomstig van en richting de IP-adressen (range) van onze telefoooncentrales altijd wordt doorgelaten. Dit adres is: **pbx.callvoip.nl**  
   Netwerkadressen:  
   UDP **van** alle poorten in bereik **185.19.236.0/22** (=185.19.236.0 t/m 185.19.239.255)  
   UDP **naar** alle poorten in bereik: **185.19.236.0/22** (=185.19.236.0 t/m 185.19.239.255)  
   Uw netwerkrouter router dient dit verkeer goed te routeren.
4. **Zet firewall-services uit**  
   Sommige routers veranderen SIP-gegevenspakketten waardoor VoIP-problemen worden gecreëerd. Ga naar de configuratiepagina van uw firewall (vaak menu-opties als Configuration / Firewall / Advanced Settings) en:  
   \- zet **Stateful Packet Inspection (SPI)** uit > sla op en test  
   \- zet **SIP Application Layer Gateway (SIP ALG)** uit > sla op en test
5. **Schakel Firewall uit**  
   Probeer om de firewall uit te schakelen (disable), herstart router en VoIP-telefoon en test. Dit is geen eindoplossing maar wel een test of de firewall het probleem veroorzaakt. Ongeacht of dit wel of geen oplossing / verbetering biedt, is het advies om de firewall hierna wel weer te activeren om geen onnodige netwerkrisico’s te lopen. Probeer het pijnpunt in de firewall-configuratie te vinden en weg te nemen.
6. **Forward VoIP-poorten naar apparatuur**  
   U kunt proberen om de benodigde poorten die de VoIP-signalen transporteren te forwarden naar uw VoIP-apparatuur. U maakt in de NAT-tabel van de router een regel aan waardoor de achterliggende VoIP-apparatuur op een aantal vaste poorten naar buiten gaat. Deze poorten kunt u middels een andere NAT-regel ook weer openstellen voor inkomend verkeer.  
   De hieronder genoemde poorten zijn doorgaans nodig voor VoIP verkeer vanaf uw VoIP-apparaat naar de Simmpl telefooncentrales.  
   Onbelemmerd verkeer tussen uw netwerk en de Simmpl centrale:  
   \- UDP **van** alle poorten in bereik 185.19.236.0/22 (=185.19.236.0 t/m 185.19.239.255)  
   \- UDP **naar** alle poorten in bereik: 185.19.236.0/22 (=185.19.236.0 t/m 185.19.239.255)  
   Afhankelijk van uw situatie:  
   \- Poort 80 TCP naar 185.19.236.0 - 185.19.239.255 (webinterface en provisioning)  
   \- Poort 443 TCP naar 185.19.236.0 - 185.19.239.255 (webinterface en provisioning)  
   Gedeeltelijke openstelling van het uitgaande audio-verkeer:  
   \- 5060 UDP > SIP (signaleringspoort > maakt registratie mogelijk)  
   \- 10000 - 60000 UDP > RTP (NB: deze instellingen zijn niet meer nodig als u regel 1 en 2 al heeft ingesteld)
7. **Zet VoIP-apparatuur in DMZ**  
   Schakel de optie **DMZ** in op uw router – deze zorgt ervoor dat de firewall niet geldt voor een specifiek IP-adres. Vul hier het IP-adres van uw VoIP-apparaat in. Zijn dat er meerdere, test dan eerst met één VoIP-apparaat.

Het vinden van de juiste instellingen voor uw router / netwerk kan een tijdrovende klus zijn, en mogelijk krijgt u dit niet voor elkaar omdat de router te inflexibel is. Neem ook de uren van u dan wel uw systeembeheerder mee in de overweging om een nieuwe router aan te schaffen. Wij hebben goede ervaringen met de producten van de merken FRITZ!Box en DrayTek.

Laat u ons gerust uw situatie weten - wij doen ons best u te adviseren zodat u zo snel mogelijk zorgeloos kunt bellen en gebeld kunt worden.dat er meerdere, test dan eerst met één VoIP-apparaat.
