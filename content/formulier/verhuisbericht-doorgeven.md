---
title: Verhuisbericht doorgeven
url: "/wijzigen/verhuisbericht/"
hideinsearch: true
hideingoogle: true

---
Gaat u verhuizen? Vul het formulier in, controleer de bevestigingsmail en stuur een reply, met akkoord per mail, naar ons ter bevestiging van uw opdracht. Wij nemen dan z.s.m. met u contact op!

{{< form "wijzigen-verhuisbericht" "/wijzigen/verzonden" >}}  
{{< form/template "d-fe851c4499b54b7e9378f4732769ab58">}}  
{{< form/to "aanvragen">}}

{{< form/fieldset "Bedrijfsgegevens" >}}

{{< form/input "Bedrijfsnaam" >}}

{{< form/input "Klantnummer" required >}}

{{< form/select "Aanhef" >}}

{{< form/option "Heer" >}}

{{< form/option "Mevrouw" >}}

{{</ form/select >}}

{{< form/input "Contactpersoon" >}}

{{< form/input "Telefoonnummer" >}}

{{< form/email "Email" required >}}

{{</ form/fieldset >}}

{{< form/fieldset "Oude adres" >}}

{{< form/input "Adres (oud)" >}}

{{< form/input "Postcode (oud)" >}}

{{< form/input "Woonplaats (oud)" >}}
{{</ form/fieldset >}}

{{< form/fieldset "Nieuwe adres" >}}

{{< form/input "Adres (nieuw)" >}}

{{< form/input "Postcode (nieuw)" >}}

{{< form/input "Woonplaats (nieuw)" >}}

{{< form/input "Datum verhuizing" >}}

{{< form/textarea "Opmerkingen" >}}

{{</ form/fieldset >}}

{{< form/button "Verstuur formulier" >}}

{{</ form >}}