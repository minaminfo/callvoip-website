<?php
/*
  $Id: tcservices.php,v 1.4 2002/04/17 15:57:07 harley_vb Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
  
  Dutch translation by: Marieke Timmer (marieke.timmer@tijdhof.nl)
  
*/

define('NAVBAR_TITLE', 'CallVoip Telefonie Supportpagina');
define('HEADING_TITLE', 'CallVoip Telefonie Supportpagina');
define('TEXT_INFORMATION', ' 



<table class="tcservices" width="100%">
  <tr valign="top">
    <td> 

Hieronder vindt u enige documentatie en diverse links en downloads die u behulpzaam kunnen zijn bij het benutten van de vele features die CallVoip Telefooncentrale u te bieden heeft. Handig als u nieuw bent en handig als naslagwerk. <br>
Ondervindt u problemen met de registratie van uw account, dan vindt u bij [test en diagnostiek] een aantal links naar handige on-line tools om snel te kunnen zien of uw infrastructuur voldoet. <br>
Heeft u toch nog vragen, neemt u dan gerust <a class="url" href="mailto:callvoip@callvoip.nl?subject=CallVoip Telefonie Supportvraag &Body=%0DVermeld hieronder uw VoIP-account, uw vraag en alle relevante informatie. Wij doen ons best u zo snel mogelijk een antwoord op uw vraag te geven. ">contact</a> met ons op. <br>
Wij helpen u graag op weg. <br>
<br>

<fieldset>
<legend align="center">&nbsp;&nbsp;snelmenu &nbsp;&nbsp;</legend>
<!--
<a href="download/callvoip/callvoip_abonnee_actie.pdf" target="_blank" class="actie">&raquo;  CallVoip abonnee-actie</a><br>
-->

<table class="afb_r">
<tr>
<td>
<a href="cvtsupport/tc_support_teamviewer.exe" target="_blank" align="baseline" ><img src="/images/icon_teamviewer.gif" width="35" height="35" border="0" ></a>
</td>
</tr>
</table>

<a href="cvt_support.php#actuelemeldingen" class="url">1. Actuele meldingen</a><br>
<a href="cvt_support.php#assistentie" class="url">2. Remote Assistentie</a><br>
<a href="cvt_support.php#aanvraag" class="url">3. Aanvraag- en wijzigingsformulieren</a><br>
<a href="cvt_support.php#algdoc" class="url">4. Algemene documentatie</a><br>
<a href="cvt_support.php#pbx" class="url">5. Handleidingen CallVoip telefooncentrale</a><br>
<a href="cvt_support.php#config" class="url">6. Configuratiehandleidingen en gebruikstips</a><br>
<a href="cvt_support.php#diagnose" class="url">7. Tips, tests en diagnostiek</a><br>
<a href="cvt_support.php#audio" class="url">8. Sample audio-files</a><br>
<a class="url" href="mailto:callvoip@callvoip.nl?subject=CallVoip Telefonie Supportvraag &Body=%0DVermeld hieronder uw VoIP-account, uw vraag en alle relevante informatie. Wij doen ons best u zo snel mogelijk een antwoord op uw vraag te geven.">9. Stel uw vraag...</a><br>
</fieldset>

<br>
<hr>
<a name="actuelemeldingen"></a>
<br>

<fieldset>
<legend>&nbsp;&nbsp;1. actuele meldingen &nbsp;&nbsp;</legend> 
<table width="100%" cellpadding="3" cellspacing="1" class="klantenservice">
      <tr align="left" valign="top" class="detail-even">
        <td width="35" align="center">datum</td>
        <td width="40">status/type</td>
        <td>melding</td>
      </tr>


<!-- GEEN MELDING: -->

       <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="35" align="center">-</td>
        <td width="40"></td>
        <td>er zijn momenteel geen storingen<br><br></td>
     </tr> 

	  
<!-- Storing  -->


     <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="55" align="center">05-08-10</td>
        <td width="40">nieuws</b></td>
        <td>
<b>Bellen speciale gemeentenummers mogelijk</b><br>
Per 1 augustus is het mogelijk om te bellen naar de speciale verkorte nummers voor stad- en gemeentehuizen, ook wel 140xyz-nummers genoemd. Hierbij stelt [0xyz] het kengetal voor van de stad of gemeente. Burgers en bedrijven kunnen via deze nummers terecht bij hun gemeente met nagenoeg al hun vragen aan de overheid. Voorbeelden:<br>
&bull; Amsterdam: 14020 <br>
&bull; Rotterdam: 14010 <br>
&bull; Emmen: 140591 <br>
&bull; uw gemeente: 14 + netnummer van uw regio<br>
Overzicht: <a href="http://www.antwoord.nl/producten,14-netnummer" target="_blank" class="url">klik hier</a><br>
<br>
Mocht het bellen van 140xyz nummers bij u nog niet werken, belt of <a class="url" href="mailto:callvoip@callvoip.nl?subject=Verzoek activatie 140xyz-nummers &Body=%0DVermeld hieronder uw naam/nummer, zodat wij het gebruik van de 140xyz-nummers gelijk voor u activeren.">mailt</a> u ons dan zodat wij dit gelijk alsnog voor u in orde maken. <br><br>
</td>
</tr> 

 
	 
<!-- ONDERHOUD:
 
	 
	       <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="55" align="center">29-06-10</td>
        <td width="40">afmelding<br>storing</td>
        <td>

De problemen die zich incidenteel voordeden bij doorverbinden mét ruggespraak <br>(warm doorverbinden / attended transfers) zijn opgelost. 
<br><br>
<b>NB:</b> warm doorverbinden is een complex proces waarin het settelen van de gesprekskanalen enige tijd nodig heeft. 
Zorgt u ervoor dat de ruggespraak enkele (ca. 5) seconden duurt om het doorverbinden op correcte wijze tot stand te brengen. 
<br>
<br>
Voorbeeld:<br>
[A] belt [B] en wil spreken met [C].<br>
[B] belt [C] om het gesprek aan te kondigen.<br>
&raquo; ruggespraak duurt min. 5 sec.<br>
Na OK van [C] verbindt [B] het gesprek door.<br>
<br>






</td>
     </tr> -->

<!--
	       <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="55" align="center">21-06-10</td>
        <td width="40">afmelding<br>onderhoud</td>
        <td>

Momenteel doen zich problemen voor bij het doorverbinden mét ruggespraak. <br>
Dit probleem is bekend. Er zijn reeds diverse acties ondernomen die het probleem hebben doen verminderen, maar het is nog niet geheel opgelost. Hieraan wordt intensief gewerkt. <br>
Het is helaas niet mogelijk om een indicatie van de oplossingstermijn te geven, maar deze zaak heeft hoge prioriteit. <br>
U kunt echter wel doorverbinden zónder ruggespraak.<br>
<br><br>
<b>Advies:</b><br>
&bull; verbind zónder ruggespraak door. <br>
&bull; bel evt. vooraf uw collega om het gesprek aan te kondigen, hang op en verbind zonder ruggespraak door. <br>
<br>
Wij zijn ons bewust van het ongemak dat dit oplevert. <br>
Onze welgemeende excuses hiervoor. <br>
<br><br>
<b>Doorverbinden zonder ruggespraak:</b><br>
GrandStream GXP:<br>
kies [transfer] > nummer > send<br>
<br>
Linksys SPA:<br>
kies [xfer] > nummer > [xfer] > hang op<br>
<br>
SNOM bureautoestellen:<br>
kies [transfer] > nummer > vinkje<br>

===


Het onderhoud aan de SIP-servers is uitgevoerd. Alle apparatuur heeft zich hierna weer op de telefooncentrales aangemeld en is klaar om te bellen en gebeld te worden. <br>
Mocht u toch nog een probleem ondervinden, check dan de onderstaande adviezen of neem contact met ons op.  

<hr>
<b>opmerkingen:</b><br>
&bull; controleer of uw apparatuur naar behoren werkt <br>
&bull; zo niet: zet uw IP-apparaat dan uit, wacht ca. 1 min. en zet deze weer aan<br>
&bull; herstart evt. ook uw modem/router/switch<br>
&bull; de configuratie-gegevens blijven hetzelfde - er zijn geen wijzigingen in uw apparatuur nodig <br>
&bull; belangrijk: gebruik sip-serveradres<br>
&nbsp;&nbsp;[<b>sip.sipnl.net</b>] of <br>
&nbsp;&nbsp;[<b>sip.callvoip.nl</b>]<br>
&bull; registreer <b>niet</b> op IP-adres <br>
&bull; ondervindt u desondanks problemen, mail uw probleem dan naar <a class="url" href="mailto:callvoip@callvoip.nl?subject=CallVoip Telefonie Supportvraag nav onderhoud mei 2010&Body=%0DVermeld hieronder uw VoIP-account, welk probleem u ondervindt en wat u voor apparatuur gebruikt (telefoons, modme/router, evt. switches). Wij doen ons best u zo snel mogelijk een antwoord op uw vraag te geven.">callvoip@callvoip.nl</a><br>

<br> 
<hr>
<!-- Wij adviseren u te beoordelen wat de impact van dit onderhoud voor uw dienstverlening zal zijn.<br> 
Onze excuses voor het eeventuele ongemak dat door het onderhoud is ontstaan. -->

</td>
     </tr>

	  
</table>
</fieldset>

<hr>
<a name="assistentie"></a>
<br>

<fieldset>
<legend>&nbsp;&nbsp; 2. Remote Assistentie &nbsp;&nbsp;</legend> 
<table width="100%" cellpadding="3" cellspacing="1" class="klantenservice">

   <tr align="left" valign="top" class="detail-even">
        <td colspan="3" height="5">Remote Assistentie</b></td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center" valign="top"><a href="cvtsupport/tc_support_teamviewer.exe" target="_blank" align="baseline" ><img src="/images/icon_teamviewer.gif" width="35" height="35" border="0" ></a></td>
    <td><a href="cvtsupport/tc_support_teamviewer.exe" target="_blank" ><b>klik hier</b> en download de CallVoip Support applicatie<br> voor assistentie op afstand</a></td>
    <td width="35" align="right">&nbsp;</td>
  </tr>

  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
  <td>&nbsp;</td>
  <td><b>instructie:</b><br>
  &raquo; klik op de link en vervolgens 2x op [run] / [uitvoeren]<br>
  &raquo; er verschijnt een venster met een ID en een password<br>
  &raquo; geef beide codes door aan de TC supportmedewerker<br>
  &raquo; de Remote Assistentie-sessie kan starten<br>
  </td>
  <td>&nbsp;</td>
  </tr>
  
<tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
  <td>&nbsp;</td>
  <td><b>Wenst u remote assistentie van CallVoip?</b><br>
  Deze bieden wij graag. Denkt u bv. aan:<br>
&raquo; configuratie van uw VoIP-apparatuur op afstand<br>
&raquo; controle van de instellingen van uw toestellen<br>
&raquo; check-up van uw netwerk bij VoIP-problemen<br>
&raquo; e.d.<br></td>
  <td>&nbsp;</td>
  </tr>

<tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
  <td>&nbsp;</td>
  <td><b>Tijdstip en kosten</b><br>
  Als u gebruik wilt maken van de TC Remote Assistentieservice, laat u ons dan uw wens/probleem weten. Wij kunnen dan een afspraak voor  remote assistentie inplannen op een moment dat u past. <br>
  De TC Remote Assistentieservice is een betaalde dienst. De kosten bedragen € 20,- ex BTW per kwartier - u wordt hierover geinformeerd.</td>
  <td>&nbsp;</td>
  </tr>

  </table>
</fieldset>



<br>
<hr>
<a name="aanvraag"></a>
<br>
<fieldset>
<legend>&nbsp;&nbsp;3. formulieren&nbsp;&nbsp;</legend> 
<table width="100%" cellpadding="3" cellspacing="1" class="klantenservice">
      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
        <td><a href="callvoip_accounts.php">aanvraagformulier nieuwe accounts</a></td>
        <td width="35" align="right">&nbsp;</td>
      
</tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="/download/callvoip/CallVoip_telefonie_aanvraagformulier.pdf" target="_blank">CallVoip Telefonie aanvraagformulier </a></td>
        <td width="35" align="right">992kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="/download/callvoip/callvoip_nummervermeldingsformulier.pdf" target="_blank">aanvraagformulier telefoongidsvermelding</a></td>
        <td width="35" align="right">65kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="/download/callvoip/callvoip_gegevenswijzigingsformulier.pdf" target="_blank">wijzigingsformulier klant- en factuurgegevens </a></td>
        <td width="35" align="right">44kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="/download/callvoip/callvoip_aanvraagformulier_internationaalnummer.pdf" target="_blank">aanvraagformulier buitenlands nummer </a></td>
        <td width="35" align="right">61kB</td>
      </tr>
	  
      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="/download/callvoip/callvoip_opzeggingsformulier.pdf" target="_blank">CallVoip opzeggingsformulier</a></td>
        <td width="35" align="right">74kB</td>
      </tr>

	 </table>
	 </fieldset>

<br>
<hr>
<a name="algdoc"></a>
<br>

<fieldset>
<legend>&nbsp;&nbsp;4. algemene documentatie &nbsp;&nbsp;</legend> 
<table width="100%" cellpadding="3" cellspacing="1" class="klantenservice">
      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="/download/callvoip/callvoip.onlinecentrale_a.pdf" target="_blank">CallVoip Telefonie brochure</a></td>
        <td width="35" align="right">65kB</td>
      </tr>

	  
      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
        <td><a href="/callvoip_partners_referenties.php">CallVoip Telefonie - referenties en partners</a></td>
        <td width="35" align="right"></td>
      </tr>
	  

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
        <td><a href="http://www.callvoip.nl/tarieven/" target="_blank">CallVoip Telefonie - maandelijkse tarieven</a> </td>
        <td width="35" align="right">&nbsp;</td>
      </tr>
	  
      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
        <td><a href="http://www.callvoip.nl/gesprekskosten/" target="_blank">CallVoip Telefonie - gesprekskosten</a> </td>
        <td width="35" align="right">&nbsp;</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="/cvtsupport/callvoip_kpn_kostenvergelijking_010108.pdf" target="_blank">Kostenvergelijking CallVoip - KPN</a> </td>
        <td width="35" align="right">19kB</td>
      </tr>
 	  
</table>
</fieldset>

<br>
<hr>
<a name="pbx"></a>
<br>

<fieldset>
	  <LEGEND>&nbsp;&nbsp;5. handleidingen CallVoip telefooncentrale&nbsp;&nbsp;</legend>
      <table width="100%" cellpadding="3" cellspacing="1" class="klantenservice">


      <tr align="left" valign="top" class="detail-even">
        <td colspan="3" height="5"><br><b>a) Eerste kennismaking telefooncentrale</b></td>
      </tr>
 
      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td colspan="3" align="middle"><br><b>NB: de menu\'s van de telefooncentrale zijn recentelijk veranderd.<br>
Het aanpasssen van de documentatie is op dit moment in volle gang.<br>
Binnenkort zijn alle centralehandleidingen weer up-to-date! </b><br><br>
</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
        <td><a href="http://www.callvoip.nl/pbx/" target="_blank">Overzicht + toelichting centrale-features</a></td>
        <td width="35" align="right">&nbsp;</td>
      </tr>	

        <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
          <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
          <td><a href="/cvtsupport/callvoip_handleiding_customer.pdf" target="_blank">Handleiding Klantlogin | Customer Selfcare</a></td>
        <td width="35" align="right">2,7MB</td>
        </tr>
      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_number.pdf" target="_blank">Handleiding Nummerlogin | Account Selfcare</a></td>
        <td width="35" align="right">2,5MB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_berichtencentrum.pdf" target="_blank">Handleiding Berichtencentrum | UM platform</a></td>
        <td width="35" align="right">600kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-even">
        <td colspan="3" height="5"><br><b>b) Quick start guides</b></td>
      </tr>
	
      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_quickstart_groepsnummer.pdf" target="_blank">Quick Start: groepsnummer | multi-ring scenario</a></td>
        <td width="35" align="right">400kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_quickstart_snelkiesnummers.pdf" target="_blank">Quick Start: snelkiesnummers definiëren</a></td>
        <td width="35" align="right">340kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_quickstart_voicemailwelkomstboodschap-inspreken.pdf" target="_blank">Quick Start: voicemail-welkomstboodschap inspreken</a></td>
        <td width="35" align="right">30kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_quickstart_voicemail_beluisteren.pdf" target="_blank">Quick Start: voicemailberichten beluisteren</a></td>
        <td width="35" align="right">40kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_quickstart_fax-to-email.pdf" target="_blank">Quick Start: fax-to-email</a></td>
        <td width="35" align="right">60kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-even">
        <td colspan="3" height="5"><br><b>c) Handleidingen specifieke features telefooncentrale</b></td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_followme.pdf" target="_blank">Handleiding Follow-Me | doorschakelingssysteem</a></td>
        <td width="35" align="right">1,1MB</td>
      </tr>
      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_auto_attendant.pdf" target="_blank">Handleiding Auto Attendant | telefonisch keuzemenu</a></td>
        <td width="35" align="right">650kB </td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_cli.pdf" target="_blank">Handleiding CLI | nummermeezending</a></td>
        <td width="35" align="right">143kB </td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_callqueue.pdf" target="_blank">Handleiding Call Queue  |  Wachtrijsystreem</a></td>
        <td width="35" align="right">348kB </td>
      </tr>


      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="/cvtsupport/callvoip_handleiding_fax2email.pdf" target="_blank">Handleiding Fax-to-email</a></td>
        <td width="35" align="right">600kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="/cvtsupport/callvoip_handleiding_voicemail.pdf" target="_blank">Handleiding Voicemail</a></td>
        <td width="35" align="right">367kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="/cvtsupport/callvoip_handleiding_voicemail_meldtekst_inspreken.pdf" target="_blank">Handleiding Voicemail-meldtekst inspreken</a></td>
        <td width="35" align="right">28kB</td>
      </tr>   

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="/cvtsupport/callvoip_handleiding_specificaties_opvragen.pdf" target="_blank">Handleiding Gespreksspecificaties opvragen</a></td>
        <td width="35" align="right">752kB</td>
      </tr>   

      <tr align="left" valign="top" class="detail-even">
        <td colspan="3" height="5"><br><b>d) Templates configuratie en nummerplan</b></td>
      </tr>
	  
      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_xls.gif" width="17" height="17" border="0"></td>
        <td><a href="/cvtsupport/callVoip_preconfiguratietabel.xls" target="_blank">CallVoip preconfiguratietabel</a></td>
        <td width="35" align="right">28kB</td>
      </tr>  

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_xls.gif" width="17" height="17" border="0"></td>
        <td><a href="/cvtsupport/callvoip_nummerplan.xls" target="_blank">CallVoip nummerplan (Excel)</a></td>
        <td width="35" align="right">42kB</td>
      </tr>  

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_word.gif" width="17" height="17" border="0"></td>
        <td><a href="/cvtsupport/callvoip_nummerplan_callgroup_huntgroup.doc" target="_blank">Template CallVoip nummerplan (Word)</a></td>
        <td width="35" align="right">86kB</td>
      </tr>  
  
</table>
      </fieldset> 
	  
<br>
<hr>
<a name="config"></a>
<br>

<fieldset>
	  <LEGEND>&nbsp;&nbsp;6. configuratiehandleidingen en gebruikstips&nbsp;&nbsp;</legend>
      <table width="100%" cellpadding="3" cellspacing="1" class="klantenservice">

      <tr align="left" valign="top" class="detail-even">
        <td colspan="3" height="5"><br><b>a) Troubleshooting en FAQ</b></td>
      </tr>
	  
      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_router_firewall_issues.pdf" target="_blank">Suggesties bij oplossen router/firewall-issues</a></td>
        <td width="35" align="right">30kB </td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_troubleshooting.pdf" target="_blank">Handleiding Troubleshooting | vragen en antwoorden</a></td>
        <td width="35" align="right">540kB </td>
      </tr>
 
      <tr align="left" valign="top" class="detail-even">
        <td colspan="3" height="5"><br><b>b) Softphone</b></td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
        <td><a href="http://www.counterpath.com/x-lite.html" target="_blank">X-Lite Softphone</a> (<a href="http://www.counterpath.com/x-lite-download.html" c;lass="url"target="_blank">gratis download</a>)</td>
        <td width="35" align="right">&nbsp;</td>
      </tr>	

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_xlite.pdf" target="_blank">Configuratiehandleiding: XLite Softphone</a></td>
        <td width="35" align="right">330kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-even">
        <td colspan="3" height="5"><br><b>c) Configuratiehandleidingen bij populaire apparatuur</b></td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_asterisk_pbx.pdf" target="_blank">Configuratiehandleiding: Asterisk PBX</a></td>
        <td width="35" align="right">36kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="/cvtsupport/callvoip_cisco_pix_firewall.pdf" target="_blank">Configuratiehandleiding: Cisco Pix openen voor VoIP</a></td>
        <td width="35" align="right">155kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="/cvtsupport/callvoip_handleiding_cisco_79xx.pdf" target="_blank">Configuratiehandleiding: Cisco 79xx IP Phone</a></td>
        <td width="35" align="right">45kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_draytek.pdf" target="_blank">Configuratiehandleiding: DrayTek V-modellen</a></td>
        <td width="35" align="right">587kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_draytek_bind_ip_to_mac.pdf" target="_blank">Configuratiehandleiding: DrayTek Bind-IP-to-Mac</a></td>
        <td width="35" align="right">587kB</td>
      </tr>
		
        <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
          <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
          <td><a href="/cvtsupport/callvoip_handleiding_fritzbox_uitgebreid.pdf" target="_blank">Configuratiehandleiding: FRITZ!Box Fon </a></td>
          <td width="35" align="right">3,5MB</td>
        </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_grandstream_gxp.pdf" target="_blank">Configuratiehandleiding: GrandStream GXP IP Phones</a></td>
        <td width="35" align="right">766kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_HP_SIP.pdf" target="_blank">Configuratiehandleiding: HP Smartphone met SIP client</a></td>
        <td width="35" align="right">120kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_linksysspa.pdf" target="_blank">Configuratiehandleiding: Linksys SPA 9xx IP Phones</a></td>
        <td width="35" align="right">1,8MB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_linksyspap2t.pdf" target="_blank">Configuratiehandleiding: Linksys PAP2T ATA</a></td>
        <td width="35" align="right">226kB</td>
      </tr>


      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_linksyswip310.pdf" target="_blank">Configuratiehandleiding: Linksys WIP310 WiFi VoIP Phone</a></td>
        <td width="35" align="right">720kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_nokia_symbian_smartphones.pdf" target="_blank">Configuratiehandleiding: Nokia Smartphones (Symbian S60)</a></td>
        <td width="35" align="right">50kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_Pirelli_DPL10.pdf" target="_blank">Configuratiehandleiding: Pirelli DP-L10 DualPhone GSM/VoIP</a></td>
        <td width="35" align="right">191kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_siemens.pdf" target="_blank">Configuratiehandleiding: Siemens IP DECT systemen</a></td>
        <td width="35" align="right">550kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_SNOM_3xx.pdf" target="_blank">Configuratiehandleiding: SNOM 3xx-serie IP Phones</a></td>
        <td width="35" align="right">870kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_SNOM_8xx.pdf" target="_blank">Configuratiehandleiding: SNOM 8xx-serie IP Phones</a></td>
        <td width="35" align="right">950kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_SNOM_M3.pdf" target="_blank">Configuratiehandleiding: SNOM M3 IP DECT telefoonsysteem</a></td>
        <td width="35" align="right">650kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_speedtouch.pdf" target="_blank">Configuratiehandleiding: SpeedTouch 7xx-serie</a></td>
        <td width="35" align="right">700kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/voip-speedtouch-firewall.pdf" target="_blank">Configuratiehandleiding: SpeedTouch firewall openen</a></td>
        <td width="35" align="right">25kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_zyxel.pdf" target="_blank">Configuratiehandleiding: ZyXEL VoIP-modem-router</a></td>
        <td width="35" align="right">295kB</td>
      </tr>

	  
      <tr align="left" valign="top" class="detail-even">
        <td colspan="3" height="5"><br><b>d) Handige gebruikstips bij populaire apparatuur</b></td>
      </tr>
      
      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_gebruikstips_grandstream_gxp1200.pdf" target="_blank">Handige gebruikstips: GrandStream GXP-1200</a></td>
        <td width="35" align="right">268kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_gebruikstips_grandstream_gxp2010_gxp2020.pdf" target="_blank">Handige gebruikstips: GrandStream GXP-2010/2020</a></td>
        <td width="35" align="right">795kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_gebruikstips_grandstream_gxp.pdf" target="_blank">Handige gebruikstips: GrandStream GXP IP Phones</a></td>
        <td width="35" align="right">284kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_grandstream_gxp_aanpassen_zomer_wintertijd.pdf" target="_blank">Handige gebruikstips: wijzigen zomer/wintertijd GXP Phones</a></td>
        <td width="35" align="right">195kB</td>
      </tr>

	        <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_gebruikstips_linksysspa.pdf" target="_blank">Handige gebruikstips: Linksys SPA9xx IP Phones en SPA932</a></td>
        <td width="35" align="right">260kB</td>
      </tr>
	  
      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_gebruikstips_siemens_ip_dect.pdf" target="_blank">Handige gebruikstips: Siemens IP DECT systemen</a></td>
        <td width="35" align="right">30kB</td>
      </tr> 
	  

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_gebruikstips_SNOM_3xx.pdf" target="_blank">Handige gebruikstips: SNOM 3xx IP Phones</a></td>
        <td width="35" align="right">25kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_gebruikstips_SNOM_87x.pdf" target="_blank">Handige gebruikstips: SNOM 87x IP Phones</a></td>
        <td width="35" align="right">700kB</td>
      </tr>
	  
      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_gxp_firmware_ringtones.pdf" target="_blank">Handleiding: GrandStream GXP firmware-/ringtone-update</a></td>
        <td width="35" align="right">228kB</td>
      </tr>
	  
</table>
      </fieldset> 

<br>
<hr>
<a name="diagnose"></a>
<br>
  
<fieldset>
<legend>&nbsp;&nbsp; 7. tips, tests en diagnostiek &nbsp;&nbsp;</legend> 
<table width="100%" cellpadding="3" cellspacing="1" class="klantenservice">

   <tr align="left" valign="top" class="detail-even">
        <td colspan="3" height="5"><br><b>a) Check uw bandbreedte</b></td>
  </tr>

       <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
         <td width="22" align="center"><a href="http://myvoipspeed.visualware.com/" target="_blank"><img src="/images/icon_html.gif" width="17" height="17" border="0"></a></td>
         <td><a href="http://myvoipspeed.visualware.com/" target="_blank">MyVoIPSpeed - on-line of lokale diagnosetool </a></td>
          <td width="35" align="right">&nbsp;</td>
        </tr>
		
	        <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
	          <td width="22" align="center"><a href="http://www.speedtest.nl/" target="_blank"><img src="/images/icon_html.gif" width="17" height="17" border="0"></a></td>
	          <td><a href="http://www.speedtest.nl/ " target="_blank">SpeedTest.nl - vuistregel:  100Kbit/s upload per gesprek</a></td>
          <td width="35" align="right">&nbsp;</td>
        </tr>

	        <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
	          <td width="22" align="center"><a href="http://www.speedtest.net/" target="_blank"><img src="/images/icon_html.gif" width="17" height="17" border="0"></a></td>
	          <td><a href="http://www.speedtest.net/ " target="_blank">SpeedTest.net - vuistregel:  100Kbit/s upload per gesprek</a></td>
          <td width="35" align="right">&nbsp;</td>
        </tr>
		
       <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
         <td width="22" align="center"><a href="http://pcdb.bbned.nl/" target="_blank"><img src="/images/icon_html.gif" width="17" height="17" border="0"></a></td>
         <td><a href="http://pcdb.bbned.nl/" target="_blank">Afstandstest - Check afstand tot wijkcentrale</a></td>
        <td width="35" align="right">&nbsp;</td>
      </tr>

   <tr align="left" valign="top" class="detail-even">
        <td colspan="3" height="5"><br><b>b) Analyzers en tools voor het interne netwerk</b></td>
  </tr>

       <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
         <td width="22" align="center"><a href="http://www.wireshark.org/" target="_blank"><img src="/images/icon_html.gif" width="17" height="17" border="0"></a></td>
         <td><a href="http://www.wireshark.org/" target="_blank">Wireshark - krachtige Network Protocol Analyzer</a></td>        <td width="35" align="right">&nbsp;</td>
      </tr>

       <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
         <td width="22" align="center"><a href="http://www.ethereal.com/download.html" target="_blank"><img src="/images/icon_html.gif" width="17" height="17" border="0"></a></td>
         <td><a href="http://www.ethereal.com/download.html" target="_blank">Ethereal - krachtige Network Protocol Analyzer</a></td>        <td width="35" align="right">&nbsp;</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
        <td><a href="http://www.yougetsignal.com/tools/open-ports/" target="_blank">Open Port Check Tool</a>  </td>
        <td width="35" align="right">&nbsp;</td>
      </tr>  

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
        <td><a href="http://www.t1shopper.com/tools/port-scanner/" target="_blank">Online Port Scanner</a>  </td>
        <td width="35" align="right">&nbsp;</td>
      </tr>  

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
        <td><a href="http://www.colasoft.com/download/products/download_mac_scanner.php" target="_blank">MAC-scanner - vind het IP-adres v/e apparaat in uw netwerk</a>  </td>
        <td width="35" align="right">&nbsp;</td>
      </tr> 

   <tr align="left" valign="top" class="detail-even">
        <td colspan="3" height="5"><br><b>c) Informatie over SIP-verkeer in het netwerk</b></td>
  </tr>

       <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
         <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
         <td><a href="cvtsupport/callvoip_overzicht_sip_status_codes.pdf" target="_blank">Overzicht SIP statuscodering</a></td>
		 <td width="35" align="right">24kB</td>
      </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
        <td><a href="http://www.voipmechanic.com/voip-technical-support.htm" target="_blank">VoipMechanic: handige tips bij VoIP-problemen</a></td>
        <td width="35" align="right">&nbsp;</td>
      </tr>

       <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
         <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
         <td><a href="http://en.wikipedia.org/wiki/List_of_TCP_and_UDP_port_numbers" target="_blank">TCP/UDP-poorttabel 1</a>&nbsp;|&nbsp;<a href="http://www.chebucto.ns.ca/~rakerman/port-table.html" target="_blank">TCP/UDP-poorttabel 2</a>&nbsp;|&nbsp;<a href="http://www.pc-library.com/ports/" target="_blank">Port Library</a></td>
		 <td width="35" align="right"></td>
      </tr>

       <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
         <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
         <td><a href="http://en.wikipedia.org/wiki/Real-time_Transport_Protocol" target="_blank">Informatie Real-Time Transport Protocol (RTP)</a></td>
		 <td width="35" align="right"></td>
      </tr>

       <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
         <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
         <td><a href="http://www.canyouseeme.org/" target="_blank">CanyouSeeMe - Open Port Check Tool</a></td>
		 <td width="35" align="right"></td>
      </tr>



   <tr align="left" valign="top" class="detail-even">
        <td colspan="3" height="5"><br><b>d) Telefoonnummers en netnummers</b></td>
  </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
         <td width="22" align="center"><a href="http://www.opta.nl/nl/nummers/nummers-zoeken/?search=adv&query=" target="_blank"><img src="/images/icon_html.gif" width="17" height="17" border="0"></a></td>
         <td><a href="http://www.opta.nl/nl/nummers/nummers-zoeken/?search=adv&query=" target="_blank">Zoek de provider bij een telefoonnummer</a></td>
		 <td width="35" align="right">&nbsp;</td>
      </tr>

       <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
         <td width="22" align="center"><a href="http://www.zoeknummerinfo.nl/" target="_blank"><img src="/images/icon_html.gif" width="17" height="17" border="0"></a></td>
         <td><a href="http://www.zoeknummerinfo.nl/" target="_blank">Zoek een adres bij een telefoonnummer (1)</a></td>
		 <td width="35" align="right">&nbsp;</td>
      </tr>

       <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
         <td width="22" align="center"><a href="http://www.zoekenbel.nl/telefoon.asp?zoekop=B" target="_blank"><img src="/images/icon_html.gif" width="17" height="17" border="0"></a></td>
         <td><a href="http://www.zoekenbel.nl/telefoon.asp?zoekop=B" target="_blank">Zoek een adres bij een telefoonnummer (2)</a></td>
		 <td width="35" align="right">&nbsp;</td>
      </tr>

	<!--	
      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
        <td><a href="http://www.hektra.nl/info/netnummers/" target="_blank">Zoek plaats en netnummer (hektra.nl)</a>  </td>
        <td width="35" align="right">&nbsp;</td>
      </tr>  -->

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
        <td><a href="http://www.telefoonboek.nl/netnummer/" target="_blank">Zoek plaats en netnummer (telefoonboek.nl)</a>  </td>
        <td width="35" align="right">&nbsp;</td>
      </tr>  

   <tr align="left" valign="top" class="detail-even">
        <td colspan="3" height="5"><br><b>e) Externe apparatuur: fax, PIN, frankeerautomaat, intercom, e.d.</b></td>
  </tr>

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_pdf.gif" width="17" height="17" border="0"></td>
        <td><a href="cvtsupport/callvoip_handleiding_faxovervoip.pdf" target="_blank">Tips voor optimale kwaliteit faxen over VoIP</a></td>
        <td width="35" align="right">30kB</td>
      </tr> 

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
        <td><a href="http://www.voipmechanic.com/faxingissuesandotherdevices.htm" target="_blank">VoipMechanic: tips voor faxen over VoIP</a></td>
        <td width="35" align="right">&nbsp;</td>
      </tr> 
	 

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
        <td><a href="http://www.siedle.de/App/WebObjects/XSeMIPS.woa/cms/page/pid.221.226.269.622.538.701.924/ecm.p/Konfigurationsberichte-VoIP-Adapter.html" target="_blank">Tips voor koppeling VoIP met intercom via ATA (Siedle.de)</a>  </td>
        <td width="35" align="right">&nbsp;</td>
      </tr>  

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
        <td><a href="http://www.callvoip.nl/callvoip_zakelijk.php#diensten" target="_blank">VoIP en uw alarmsysteem, PIN- en frankeerautomaat</a>  </td>
        <td width="35" align="right">&nbsp;</td>
      </tr>  

      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
        <td><a href="http://www.myfax.com/" target="_blank">MyFax: email2fax service</a> (NB: geen support via CallVoip) </td>
        <td width="35" align="right">&nbsp;</td>
      </tr>  
	  	  
		  
	  
</table>
</fieldset>

<br>
<hr>
<a name="audio"></a>
<br>

<fieldset>
<legend>&nbsp;&nbsp; 8. sample audiofiles* &nbsp;&nbsp;</legend> 
<table width="100%" cellpadding="3" cellspacing="1" class="klantenservice">

   <tr align="left" valign="top" class="detail-even">
        <td colspan="3" height="5"><br><b>a) audiotools en conversieprogramma\'s</b></td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
    <td><a href="http://audacity.sourceforge.net/" target="_blank">maak en bewerk audiobestanden met AudaCity Audio Editor</a></td>
    <td width="35" align="right">&nbsp;</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
    <td><a href="http://media-convert.com/omzetten/" target="_blank">converteer uw audiofile naar .mp3 / .au / .wav</a></td>
    <td width="35" align="right">&nbsp;</td>
  </tr>
 
      <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
        <td width="22" align="center"><img src="/images/icon_html.gif" width="17" height="17" border="0"></td>
        <td><a href="http://www.magikinfo.com/vm2wm/" target="_blank">VM2WM: Conversie voicemail-files voor uw Windows Mobile</a>  </td>
        <td width="35" align="right">&nbsp;</td>
      </tr>  
	  	   
      <tr align="left" valign="top" class="detail-even">
        <td colspan="3" height="5"><br><b>b) stilte, wachttoon en speciale audiofiles</b></td>
      </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_au.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/10ms_stilte.au" target="_blank">audiofile met 10ms stilte (bv. als intro bij de Auto Attendant)</a></td>
    <td width="40" align="right">1kB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_au.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/faxaudio.au" target="_blank">fax-audiofile (als greeting in UM van uw faxnummer)</a></td>
    <td width="40" align="right">117kB</td>
  </tr>
   <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_au.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/waiting-440-61s.au" target="_blank">default wachttoon (alternatief voor wachtmuziek) </a></td>
    <td width="40" align="right">477kB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_au.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/hold-dual440multi-30s.au" target="_blank">on-hold-toon (dubbele piep, alternatief voor wachtmuziek)</a></td>
    <td width="40" align="right">240kB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_au.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/busy-440-60s.mp3" target="_blank">in-gesprek-toon (bv. voor gebruik in Auto Attendant)</a></td>
    <td width="40" align="right">965kB</td>
  </tr>
  
      <tr align="left" valign="top" class="detail-even">
        <td colspan="3" height="5"><br><b>c) wachtmuziekbestanden</b></td>
      </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/chillout_slow_243.wav" target="_blank">Music on Hold - Chillout slow (2:43) </a></td>
    <td width="40" align="right">1,21MB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/moh_guitarsong_343.wav" target="_blank">Music on Hold - Guitarsong (3:43) </a></td>
    <td width="40" align="right">1,66MB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/moh_jazz_easybeat_217.wav" target="_blank">Music on Hold - Jazz Easybeat (2:17) </a></td>
    <td width="40" align="right">1,04MB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/moh_jazz_fast_258.wav" target="_blank">Music on Hold - Jazz Fast (2:58) </a></td>
    <td width="40" align="right">1,35MB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/moh_jazz_fastbeat_315.wav" target="_blank">Music on Hold - Jazz Fastbeat (3:15) </a></td>
    <td width="40" align="right">1,49MB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/moh_funkyjazz_midtempo_217.wav" target="_blank">Music on Hold - Funky Jazz (2:17) </a></td>
    <td width="40" align="right">2MB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/moh_funkypop_midtempo_154.wav" target="_blank">Music on Hold - Funky Pop (1:54) </a></td>
    <td width="40" align="right">1,21MB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/moh_pop_beat_320.wav" target="_blank">Music on Hold - Popbeat (3:20) </a></td>
    <td width="40" align="right">1,48MB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/moh_tropical_beat_318.wav" target="_blank">Music on Hold - Tropical Beat (3:18) </a></td>
    <td width="40" align="right">1,50MB</td>
  </tr>

  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/queue_manolo_camp_short_201.mp3" target="_blank">Music on Hold - Trance</a></td>
    <td width="40" align="right">1,9MB</td>
  </tr>

  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/moh_ClassicPiano.mp3" target="_blank">Music on Hold - Classic </a></td>
    <td width="40" align="right">200kB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/moh_CaribianSunset.mp3" target="_blank">Music on Hold - Carribean</a></td>
    <td width="40" align="right">272kB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/moh_DreamTraveller.mp3" target="_blank">Music on Hold - Lounge</a></td>
    <td width="40" align="right">277kB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/moh_EasyJazzSwing.mp3" target="_blank">Music on Hold - Jazzy</a></td>
    <td width="40" align="right">124kB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/moh_BlueJazz.mp3" target="_blank">Music on Hold - Blues </a></td>
    <td width="40" align="right">304kB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/moh_FunkyMusic.mp3" target="_blank">Music on Hold - Funky</a></td>
    <td width="40" align="right">164kB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/moh_DanceParty.mp3" target="_blank">Music on Hold - Disco </a></td>
    <td width="40" align="right">189kB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/moh_EasyListening.mp3" target="_blank">Music on Hold - Easy Listing</a></td>
    <td width="40" align="right">192kB</td>
  </tr>
      <tr align="left" valign="top" class="detail-even">
        <td colspan="3" height="5"><br><b>d) muziekbestanden wachtrij / call queue</b></td>
      </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/queue_latin_beat_135.wav" target="_blank">Queue - Latin Beat (1:35) </a></td>
    <td width="40" align="right">772kB</td>
  </tr>
   <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/queue_dreamtraveller_134.mp3" target="_blank">Queue - Lounge (1:34) </a></td>
    <td width="40" align="right">1,5MB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/queue_jazz_easybeat_119.wav" target="_blank">Queue - Jazz Easybeat (1:19)</a></td>
    <td width="40" align="right">1MB</td>
  </tr>
  <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/queue_funkyjazz_midtempo_122.wav" target="_blank">Queue - Funky Jazz (1:22)</a></td>
    <td width="40" align="right">1MB</td>
  </tr>
   <tr align="left" valign="top" class="detail-odd" onMouseOver="this.className=\'detail-over\'" onMouseOut="this.className=\'detail-odd\'">
    <td width="22" align="center"><img src="/images/icon_mp3.gif" width="17" height="17" border="0"></td>
    <td><a href="cvtsupport/audio/queue_manolo_camp_short_201.mp3" target="_blank">Queue - Trance</a></td>
    <td width="40" align="right">1,9MB</td>
  </tr>

 </table>
</fieldset>
<br>
<fieldset>
<legend align="center">&nbsp;&nbsp;aandachtspunten bij audio&nbsp;&nbsp;</legend>

&raquo; MoH-files kunnen op uw verzoek door ons op de centrale worden geplaatst<br>
&raquo; andere audiofiles zijn mogelijk; max. grootte 2MB<br>
&raquo; hou rekening met BUMA/Stemra en auteursrechten - u bent zelf aansprakelijk<br>
&raquo; advies: gebruik de fax-audiofile als UM-tekst voor fax-to-email<br>
&raquo; resultaat: de ideale basis voor de ontvangst van faxberichten<br> 
</fieldset>



<br>




<br>
<hr>
<br>

<br>
<center>
<table>
<tr>
<td class="supersmallText"> <br>
<a href="http://www.callvoip.nl/download/callvoip/callvoip.bereikbaar_a.pdf" target="_blank">
<img src="download/callvoip/bereikbaar_k.gif" width="100" height="140" alt="CallVoip Telefonie - overal en altijd bereikbaar op één nummer!" class="foto"></a><br>
</td>

<td class="supersmallText"> <br>
<a href="http://www.callvoip.nl/download/callvoip/callvoip.internationaal_b.pdf" target="_blank"><img src="download/callvoip/internationaal_k.gif" width="100" height="140" alt="CallVoip Telefonie - flink besparen op uw internationale belkosten" class="foto"></a><br>
</td>

<td class="supersmallText"> <br>
<a href="http://www.callvoip.nl/download/callvoip/callvoip.interlokaal_b.pdf" target="_blank"><img src="download/callvoip/interlokaal_k.gif" width="100" height="140" alt="CallVoip Telefonie - fors besparen op uw belkosten!" class="foto"></a><br>
</td>

<td class="supersmallText"> <br>
<a href="http://www.callvoip.nl/download/callvoip/callvoip.onlinecentrale_a.pdf" target="_blank"><img src="download/callvoip/onlinecentrale_k.gif" width="100" height="140" alt="CallVoip Telefonie - standaard uitgerust met krachtige online telefooncentrale! " class="foto"></a><br>
</td>
</tr>
</table>
</center>
<br>

    </td>
	 </tr>

</table>

<br>
<br>






 ');
?>