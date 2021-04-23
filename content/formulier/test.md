---
title: Test
url: "/formulier/test"
draft: true
hideinsearch: true
hideingoogle: true

---
Vraag hieronder eenvoudig een nieuw telefoonnummer aan. Uw nieuwe telefoonnummer is binnen 24 uur beschikbaar en actief. Wilt u een extra mooi telefoonnummer? Kies dan voor een Premium nummer. U ontvangt een lijst met telefoonnummers waar u uit kunt kiezen.

Vul het formulier in, controleer de bevestigingsmail en stuur een reply met akkoord per mail naar ons ter bevestiging van uw opdracht.

{{< form "aanvragen-nummer" "/aanvragen/verzonden" >}}

{{< form/fieldset "Bedrijfsgegevens" >}}
{{< form/input "Bedrijfsnaam"   >}}
{{< form/input "Klantnummer" required   >}}
{{< form/select "Aanhef" >}}
{{< form/option "Heer" >}}
{{< form/option "Mevrouw" >}}
{{</ form/select >}}
{{< form/input "Contactpersoon"   >}}
{{< form/input "Telefoonnummer"   >}}
{{< form/email "E-mailadres" required   >}}
{{</ form/fieldset >}}

{{< form/fieldset "Aanvraag nieuwe telefoonnummers" >}}
{{< form/radiogroup "Soort telefoonnummer" "inline" >}}
{{< form/radio "Regionaal" "Soort telefoonnummer" >}}
{{< form/radio "Landelijk" "Soort telefoonnummer" >}}
{{</ form/radiogroup >}}
{{< form/checkboxgroup "Checkbox example" "inline" >}}
{{< form/checkbox "Regionaal 2" "Checkbox example" >}}
{{< form/checkbox "Landelij 3k" "Checkbox example" >}}
{{</ form/checkboxgroup >}}
{{< form/input "Netnummer"   >}}
{{< form/select "Aantal telefoonnummers" >}}
{{< form/option "1" >}}
{{< form/option "2" >}}
{{< form/option "3" >}}
{{< form/option "4" >}}
{{< form/option "5" >}}
{{< form/option "6" >}}
{{< form/option "7" >}}
{{< form/option "8" >}}
{{< form/option "9" >}}
{{< form/option "10-blok" >}}
{{</ form/select >}}
{{< form/radiogroup "Wilt u een premium (mooi) nummer?" "inline" >}}
{{< form/radio "Nee" "Wilt u een premium (mooi) nummer?" >}}
{{< form/radio "Ja" "Wilt u een premium (mooi) nummer?" >}}
_De toeslag is € 50,00 excl. BTW._
{{</ form/radiogroup >}}
{{< form/textarea "Opmerkingen"  >}}

{{< form/fileupload "Opmerkingen"  >}}

{{</ form/fieldset >}}

{{< form/button "Verstuur formulier"  >}}
