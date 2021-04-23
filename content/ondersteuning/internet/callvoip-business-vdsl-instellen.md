---
title: Callvoip Business VDSL instellen
weight: 
description: ''
images: []

---
### Algemeen

De Callvoip Business VDSL-internetverbindingen zijn meestel van het type PPPoE en er kunnen per type apparaat verschillen zijn in de beste instellingswijze.

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

Log in en ga naar WAN en vervolgens naar General Setup. Kies WAN1 (= xDSL interface) en stel deze in zoals hieronder aangegeven (NB: na het opslaan wijzigt de indicator ADSL in VDSL):

![](https://res.cloudinary.com/callvoip/image/upload/v1565008774/support-vdsl-draytek_qeilpd.png)

Klik op \[OK\] om de instellingen op te slaan.

Ga vevolgens naar menu WAN en Internet Access**.** Selecteer bij \[WAN 1\] als Access Mode: **PPPoE / PPPoA** en klik op \[Details Page\].

![](https://res.cloudinary.com/callvoip/image/upload/v1565008844/support-vdsl-draytek2_jylaej.png)

De detailpagina van WAN 1 komt naar voren. Vul die in zoals hieronder aangegeven.

![](https://res.cloudinary.com/callvoip/image/upload/v1565008931/support-vdsl-draytek3_nmutyu.png)

Klik vervolgens op OK om de instellingen op te slaan. Wacht nu ca 5 minuten en kijk of u internetverbinding heeft. Zo niet, check de bekabeling en doe de draytek dan eens uit, wacht ca 10 sec en doe hem dan weer aan. Komt de verbinding niet op, neem dan contact op met Callvoip voor verdere assistentie.