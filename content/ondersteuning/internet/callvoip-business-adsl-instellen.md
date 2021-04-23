---
title: Callvoip Business ADSL instellen
weight: 
description: ''
images: []
hideinsearch: false
Nieuw: false
Update: false
pdf: ''

---
### Algemeen

De Callvoip Business ADSL-internetverbindingen zijn meestel van het type PPPoE en er kunnen per type apparaat verschillen zijn in de beste instellingswijze.

<br>

{{< layout/columns >}}  
{{< layout/column3 >}}  
**Encapsulatie**  
{{</ layout/column3 >}}  
{{< layout/column3 >}}  
PPPoE (FRITZ!Box)  
PPPoA (Draytek)  
{{</ layout/column3 >}}  
{{< layout/column3 >}}  
  
{{</ layout/column3 >}}  
{{</ layout/columns >}}

{{< layout/columns >}}  
{{< layout/column3 >}}  
**VPI**  
{{</ layout/column3 >}}  
{{< layout/column3 >}}  
0  
{{</ layout/column3 >}}  
{{< layout/column3 >}}

{{</ layout/column3 >}}  
{{</ layout/columns >}}

{{< layout/columns >}}  
{{< layout/column3 >}}  
**VCI**  
{{</ layout/column3 >}}  
{{< layout/column3 >}}  
35  
{{</ layout/column3 >}}  
{{< layout/column3 >}}

{{</ layout/column3 >}}  
{{</ layout/columns >}}

{{< layout/columns >}}  
{{< layout/column3 >}}  
**Username | Password**  
{{</ layout/column3 >}}  
{{< layout/column3 >}}  
callvoip | callvoip  
{{</ layout/column3 >}}  
{{< layout/column3 >}}

{{</ layout/column3 >}}  
{{</ layout/columns >}}

{{< layout/columns >}}  
{{< layout/column3 >}}  
**DNS-server 1**  
{{</ layout/column3 >}}  
{{< layout/column3 >}}  
62\.212.131.101  
{{</ layout/column3 >}}  
{{< layout/column3 >}}

{{</ layout/column3 >}}  
{{</ layout/columns >}}

{{< layout/columns >}}  
{{< layout/column3 >}}  
**DNS-server 2**  
{{</ layout/column3 >}}  
{{< layout/column3 >}}  
62\.212.131.130  
{{</ layout/column3 >}}  
{{< layout/column3 >}}

{{</ layout/column3 >}}  
{{</ layout/columns >}}

{{< layout/columns >}}  
{{< layout/column3 >}}  
**SMTP-server**  
{{</ layout/column3 >}}  
{{< layout/column3 >}}  
smtp.ipcentraal.nl  
{{</ layout/column3 >}}  
{{< layout/column3 >}}

{{</ layout/column3 >}}  
{{</ layout/columns >}}

<br>

### Draytek

Log in en ga naar WAN > General Setup. Kies WAN1 (=xDSL interface) en stel deze in zoals hieronder aangegeven:

![](https://res.cloudinary.com/callvoip/image/upload/v1565009325/support-dsl-draytek_rf7fj8.png)

Klik op \[OK\] om de instellingen op te slaan.

Ga vervolgens naar menu WAN > Internet Access. Selecteer bij \[WAN1\] als Access Mode: PPPoE / PPPoA en klik op \[Details Page\].

![](https://res.cloudinary.com/callvoip/image/upload/v1565009339/support-dsl-draytek2_bk4ly8.png)

De detailpagina van WAN1 komt naar voren. Vul die in zoals hieronder aangegeven.

![](https://res.cloudinary.com/callvoip/image/upload/v1565009358/support-dsl-draytek3_xruczl.png)

Klik vervolgens op \[OK\] om de instellingen op te slaan. Wacht nu ca. 5 minuten en kijk of u internetverbinding heeft. Zo niet, check de bekabeling en doe de draytek eens uit. Wacht ca. 15 sec. en doe de Draytek dan weer aan. Komt de verbinding niet op, neem dan contact op met Callvoip voor verdere assistentie.