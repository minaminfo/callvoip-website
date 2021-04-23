---
title: Nummer opzeggen
url: "/opzeggen/nummer/"
hideinsearch: true
hideingoogle: true

---
Wilt u een of meer nummers opzeggen? Vult u dan onderstaand formulier in zodat wij dit administratief kunnen verwerken. 

Vul het formulier in, controleer de bevestigingsmail en stuur een reply, met akkoord per mail, naar ons ter bevestiging van uw opdracht. Wij nemen dan z.s.m. met u contact op!

{{< form "opzeggen-nummer" "/opzeggen/verzonden" >}}  
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

{{< form/checkboxgroup "Wilt u uw telefoonnummers opzeggen of verhuizen" "inline" >}}

{{< form/checkbox "Verhuizen" "Checkbox example" >}}

{{< form/checkbox "Opzeggen" "Checkbox example" >}}

{{</ form/checkboxgroup >}}

{{< form/textarea "Welke nummers wilt u opzeggen / verhuizen" >}}

_Indien u de nummers meeneemt naar een andere provider, kunt u hieronder invullen welke._

{{< form/input "Nieuwe provider" >}}

_Per wanneer wilt u opzeggen?_

{{< form/input "Wensdatum opzegging" >}}

{{< form/textarea "Opmerkingen" >}}

{{</ form/fieldset >}}

{{< form/button "Verstuur formulier" >}}

{{</ form >}}