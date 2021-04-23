---
title: Rekeningnummer wijzigen
url: "/wijzigen/rekeningnummer/"
hideinsearch: true
hideingoogle: true

---
Wilt u uw rekeningnummer wijzigen voor de automatische incasso? Geef dan hieronder uw nieuwe rekening door.

Vul het formulier in, controleer de bevestigingsmail en stuur een reply, met akkoord per mail, naar ons ter bevestiging van uw opdracht. Wij nemen dan z.s.m. met u contact op!

{{< form "wijzigen-rekeningnummer" "/wijzigen/verzonden" >}}  
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

{{< form/fieldset "Te wijzigen rekeningnummer" >}}

{{< form/input "Oude IBAN-nummer" >}}

{{< form/input "Nieuwe IBAN-nummer" >}}

{{< form/textarea "Opmerkingen" >}}

{{</ form/fieldset >}}

{{< form/button "Verstuur formulier" >}}

{{</ form >}}