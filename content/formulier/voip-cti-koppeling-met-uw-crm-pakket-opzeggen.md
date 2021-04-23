---
title: VoIP CTI (Koppeling met uw CRM-pakket) opzeggen
url: "/opzeggen/voipcti/"
hideinsearch: true
hideingoogle: true

---
Vul het formulier in, controleer de bevestigingsmail en stuur een reply, met akkoord per mail, naar ons ter bevestiging van uw opdracht. Wij nemen dan z.s.m. met u contact op!

{{< form "opzeggen-voipcti" "/opzeggen/verzonden" >}}  
{{< form/template "d-9f9d59454d29461697d5e1d428ab9ef8">}}  
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

{{< form/fieldset "Opzeggegevens" >}}

{{< form/input "Wensdatum opzegging" >}}

{{< form/textarea "Opmerkingen" >}}
{{</ form/fieldset >}}

{{< form/button "Verstuur formulier" >}}

{{</ form >}}