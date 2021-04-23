---
title: Klantgegevens wijzigen
url: "/wijzigen/klantgegevens/"
hideinsearch: true
hideingoogle: true

---
Hieronder kunt u uw klantgegevens wijzigen. Vult u onderstaand formulier in en wij doen ons best deze wijzigingen zo snel mogelijk te verwerken.

Vul het formulier in, controleer de bevestigingsmail en stuur een reply, met akkoord per mail, naar ons ter bevestiging van uw opdracht. Wij nemen dan z.s.m. met u contact op!

{{< form "wijzigen-klantgegevens" "/wijzigen/verzonden" >}}  
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

{{< form/fieldset "Wijzigen factuurgegevens" >}}

_Indien u uw factuurgegevens wilt wijzigen kunt u hieronder uw nieuwe factuurgegevens invullen._

{{< form/input "Bedrijfsnaam (facturatie)" >}}

{{< form/select "Aanhef (facturatie)" >}}

{{< form/option "Heer" >}}

{{< form/option "Mevrouw" >}}

{{</ form/select >}}

{{< form/input "Contactpersoon (facturatie)" >}}

{{< form/input "Adres (facturatie)" >}}

{{< form/input "Postcode (facturatie)" >}}

{{< form/input "Woonplaats (facturatie)" >}}

{{< form/input "Telefoonnummer (facturatie)" >}}

{{< form/email "E-mailadres (facturatie)" >}}

{{< form/input "IBAN-nummer" >}}

{{< form/input "Naam rekeninghouder" >}}

{{< form/select "Ontvang facturen per" >}}

{{< form/option "E-mail" >}}

{{< form/option "Post (ad €1,50 per maand)" >}}

{{</ form/select >}}

{{</ form/fieldset >}}

{{< form/fieldset "Wijziging bedrijfsgegevens" >}}

_Indien u uw bedrijfsgegevens wilt wijzigen, kunt u hieronder uw nieuwe klantgegevens invullen._

{{< form/input "Bedrijfsnaam (wijziging)" >}}

{{< form/select "Aanhef (wijziging)" >}}

{{< form/option "Heer" >}}

{{< form/option "Mevrouw" >}}

{{</ form/select >}}

{{< form/input "Contactpersoon (wijziging)" >}}

{{< form/input "Telefoonnummer (wijziging)" >}}

{{< form/email "E-mailadres (login telefooncentrale) (wijziging)" >}}

{{< form/input "KvK-nummer (wijziging)" >}}

{{< form/input "BTW-nummer (wijziging)" >}}

{{</ form/fieldset >}}

{{< form/fieldset "Extra" >}}

{{< form/input "Wijzigen gaan in per" required >}}

{{< form/textarea "Opmerkingen" >}}

{{</ form/fieldset >}}

{{< form/button "Verstuur formulier" >}}

{{</ form >}}
