---
title: Callvoip FTTH (glasvezel) instellen
weight: 
description: ''
images: []
hideinsearch: false
Nieuw: false
Update: false
pdf: ''

---
### Algemeen

De Callvoip Business FTTH-internetverbindingen zijn meestel van het type PPPoE en er kunnen per type apparaat verschillen zijn in de beste instellingswijze.

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

Log in en ga naar **WAN** en vervolgens **General Setup**. Kies **WAN2** (= router-poort) en stel deze in zoals hieronder aangegeven. Belangrijk: laat veld **_Display Name_** leeg

![](https://res.cloudinary.com/callvoip/image/upload/v1565008278/support-ftth-draytek_vhkark.png)

Ga nu naar **WAN** en vervolgens naar **Internet Access** en op **WAN2**. Stel deze in op PPPoE en neem de onderstaande instellen over. Bij username en password kunt u '**callvoip**' invullen.

![](https://res.cloudinary.com/callvoip/image/upload/v1565008408/support-ftth-draytek2_elu6wn.png)