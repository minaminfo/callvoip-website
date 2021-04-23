---
title: Een kostenindicatie in een paar klikken
type: page
layout: calculator
hero:
  image: "/v1562160476/calculator_ogqrzh.png"
  disable_image_on_mobile: false
outputs:
- HTML
- JSON
basic:
- name: Telefooncentrale
  description: De Callvoip online telefooncentrale
  min: 1
  max: 1
  price_monthly: 7.5
  price_onetime: 15
  required: true
- name: Telefoonnummer
  description: Aantal telefoon- en faxnummers
  min: 0
  max: 999
  price_monthly: 2
  price_onetime: 15
  required: true
- name: Toestelaccounts
  description: Aantal gebruikers met een vast toestel
  min: 0
  max: 999
  price_monthly: 4
  price_onetime: 5
  required: false
- name: Webcall-accounts
  description: Aantal gebruikers met browser based bellen
  min: 0
  max: 999
  price_monthly: 4
  price_onetime: 5
  required: false
- name: Qaller-Plus-accounts
  description: Aantal gebruikers met een mobiele app (Qaller Plus)
  min: 0
  max: 999
  price_monthly: 4
  price_onetime: 5
  required: false
callminutes:
  title: Belbundel
  description: Geen verrassingen, kies een belbundel
  items:
  - name: Geen belminuten
    value: 
    price_monthly: 
    price_onetime: 
    required: false
  - name: Belminuten 500
    value: 1
    price_monthly: 10
    price_onetime: 
    required: false
  - name: Belminuten 1500
    value: 1
    price_monthly: 12.5
    price_onetime: 
    required: false
  - name: Belminuten 5000
    value: 1
    price_monthly: 25
    price_onetime: 
    required: false
security:
  title: Beveiligd bellen (SRTP)
  description: De gesprekken zijn versleuteld tussen de telefoons en de telefooncentrale.
  items:
  - name: Normaal bellen
    value: 
    price_monthly: 
    price_onetime: 
    required: false
  - name: Beveiligd bellen (SRTP)
    value: 1
    price_monthly: 2
    price_onetime: 
    required: false
options:
  title: Breid uit met extra's
  description: 'Misschien is onze standaard telefooncentrale niet genoeg. Breid deze
    dan eenvoudig uit met:'
  items:
  - name: Wachtrij
    description: Heb je veel inkomend telefonieverkeer en wil je elke beller beantwoorden?
    min: 0
    max: 999
    price_monthly: 4
    price_onetime: 5
    required: false
  - name: Keuzemenu
    description: Begeleid de beller meteen naar de juiste persoon en/of afdeling?
    min: 0
    max: 999
    price_monthly: 4
    price_onetime: 5
    required: false
  - name: Faxbox
    description: Wil je met één van je nummers faxen ontvangen en versturen? Kies
      dan voor een faxbox!
    min: 0
    max: 999
    price_monthly: 4
    price_onetime: 5
    required: false
callrecording:
  title: Gesprekken opnemen
  description: 'Met gespreksopname neem je al jouw inkomende & uitgaande gesprekken
    op. '
  items:
  - name: Bewaartijd 30 dagen
    min: 0
    max: 999
    price_monthly: 5
    price_onetime: 5
    required: false
crm:
- name: Koppeling CRM-pakket (aantal gebruikers)
  min: 0
  max: 999
  price_monthly: 5
  price_onetime: 150
  required: false
offerte:
  title: Vrijblijvende offerte ontvangen?
  description: Vul hier onder je gegevens in en ontvang van onze medewerkers een vrijblijvende
    offerte op basis van bovenstaande wensen.
hidesocialshare: false
hideinsearch: false
searchtags:
- calculator
- kosten
- berekenen
- prijzen
- prijs
- tarieven
- tarief
aliases: "/calc"

---
We zitten klaar om aan de hand van deze calculatie een offerte voor jouw situatie op te stellen. Naast de kosten, is het minstens zo
belangrijk om te weten wat onze oplossing kan opleveren. Vraag een vrijblijvende offerte aan en we geven graag een toelichting bij de
kosten en mogelijkheden voor jouw situatie.
