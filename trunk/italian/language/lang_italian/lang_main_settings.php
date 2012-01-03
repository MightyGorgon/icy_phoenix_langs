<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang['Index'] = 'Icy Phoenix';
$lang['Default_META_Keywords'] = 'phpbb, forum, icy phoenix, icyphoenix, icy, phoenix, php, portal, cms, premodded, community, open source, mods, templates';
$lang['Default_META_Description'] = 'Icy Phoenix &egrave; un Content Management System basato su phpBB che consente in modo semplice la creazione di siti dinamici in pochi passi e con molte funzionalit&agrave; utili per la gestione di comunit&agrave; virtuali.';
$lang['Default_META_Title'] = 'Icy Phoenix';
$lang['Default_META_Author'] = 'Mighty Gorgon And Icy Phoenix Staff :: http://www.icyphoenix.com/';
$lang['Default_META_Copyright'] = '(c) 2001-' . gmdate('Y') . ' Mighty Gorgon';
$lang['Extra_Meta'] = '';

$lang['REGISTER_MESSAGE'] = '';

$lang['Welcome_Message'] = 'Benvenuto in <span class="topic_glo">Icy Phoenix</span><br />';
$lang['register_pm_subject'] = 'Benvenuto su %s';
$lang['register_pm'] = "Ciao!\n\nBenvenuto su %s.\n\nSperiamo che ti diverta sul nostro sito!\n\nSentiti libero di condividere con gli altri le tue discussioni o di aprirne di nuove!\n\nDivertiti!\nStaff di [b]%s[/b]";

$lang['Support_Us'] = 'Supporta questo sito con una donazione';
$lang['PayPal'] = '<img src="images/paypal.gif" alt="' . $lang['Support_Us'] . '" title="' . $lang['Support_Us'] . '" />';
/* Example of code you may add... replace with your own code.
$lang['PayPal'] = '
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick" />
<input type="image" src="images/paypal.gif" name="submit" alt="' . $lang['Support_Us'] . '" style="border-width:0px;" />
<input type="hidden" name="encrypted" value="" />
</form>
';
*/

$lang['OwnerSiteOwner'] = 'Mighty Gorgon';
$lang['OwnerSite'] = 'Icy Phoenix';
$lang['OwnerCompany'] = 'Icy Phoenix';
$lang['OwnerDetails'] = 'Icy Phoenix';
$lang['OwnerAdrress'] = 'Italy';
$lang['OwnerServer'] = 'Icy Phoenix';

$lang['PrivacyDisclaimer'] = '<b>INFORMATIVA SUL TRATTAMENTO DI DATI PERSONALI</b><br />Decreto Legislativo nr. 196 del 30 Giugno 2003 - (Codice in materia di protezione dei dati personali)<br /><br />Ai sensi dell\'articolo 13 del decreto legge suddetto, INFORMIAMO che tutti i Dati riguardanti il cliente / utente (in qualit&agrave; di Interessati al Trattamento) da esso stesso forniti e tutti i Dati che dovessero essere forniti in seguito, sono oggetto di trattamento esclusivamente per finalit&agrave; connesse o strumentali all\'attivit&agrave;, alle operazioni e ai servizi offerti e prestati da: ' . $lang['OwnerCompany'] . ' secondo la legge indicata quale Titolare del trattamento.<br />Il Titolare garantisce che il trattamento dei dati personali si svolga nel rispetto dei diritti e delle libert&agrave; fondamentali, nonch&eacute; della dignit&agrave; dell\'interessato, con particolare riferimento alla riservatezza, all\'identit&agrave; personale e al diritto alla protezione dei dati personali.<br /><br /><ol type="1"><li><b>Finalit&agrave; del trattamento dei dati personali</b><br />Tutti i dati comunicati dai soggetti interessati, sono trattati esclusivamente per adempimenti connessi all\'attivit&agrave; ed ai servizi promossi dal Titolare e richiesti dall\'Interessato all\'atto dell\'iscrizione, in particolare:<br /><ol type="a"><li>Adempiere agli obblighi fiscali, civilistici, amministrativi finalizzati alla gestione dei rapporti instaurati con Il Titolare e dei servizi prestati dallo stesso;</li><li>Prestare servizio di chat line e di forum, di newsletter nonch&eacute; con riferimento ad ogni altro servizio offerto e prestato a favore dei soggetti registrati alla community che sia necessario per lo svolgimento del rapporto stesso;</li><li>Svolgere funzioni di assistenza e di informazione tecnica, relativa ai servizi e ai prodotti oggetto dell\'attivit&agrave; del Titolare e di verifica del gradimento di questi;</li><li>Esecuzione dell\'attivit&agrave; di commercio elettronico;</li><li>Svolgere analisi, indagini di mercato e statistiche, di rilevazione del grado di soddisfazione dei clienti / utenti e delle preferenze di questi, relativamente ai servizi oggetto dell\'attivit&agrave; del Titolare, di societ&agrave; affiliate, collegate, controllate, di partners commerciali, inserzionisti di ' . $lang['OwnerSite'] . ' del Titolare con link presente sul sito ' . $lang['OwnerSite'] . ' e outsourcers.</li><li>Svolgimento, anche tramite invio di e-mail, sms, mms, posta ed altri mezzi di comunicazione e di trasmissione dati, di giochi a premio, estrazioni ed iniziative promozionali in genere, nell\'interesse ed a vantaggio dei clienti / utenti registrati;</li><li>Elaborazione dei Dati forniti dal cliente / utente registrato e di quelli desunti dalle sue navigazioni sul sito ' . $lang['OwnerSite'] . ' per individuare il profilo commerciale e per l\'utilizzo di questo per finalit&agrave; di marketing, pubblicitarie, promozionali e commerciali sia di ' . $lang['OwnerSite'] . ' che di societ&agrave; affiliate, collegate, controllate, di partners commerciali, inserzionisti di Il ' . $lang['OwnerSite'] . ' con link presente sul sito ' . $lang['OwnerSite'] . ' e outsourcers;</li></ol><br /><br /></li><li><b>Comunicazione e diffusione dei dati</b><br />Tutti i Dati, inclusi i dati sensibili, potranno essere comunicati o trasferiti, anche temporaneamente, a soggetti terzi, pubblici o privati, (anche in Paesi aderenti o non aderenti all\'Unione Europea), purch&eacute; autorizzati dal Titolare, allo scopo esclusivo di realizzare le finalit&agrave; indicate al punto 1, precedente, a seconda della tipologia di consenso prestato.<br />I Dati raccolti e trattati direttamente dagli inserzionisti di ' . $lang['OwnerSite'] . ' tramite i siti web che hanno link sul sito ' . $lang['OwnerSite'] . ' non rientrano nella presente informativa e richiesta di prestazione di consenso.<br /><br /></li><li><b>Natura del conferimento dati e conseguenze del consenso.</b><br />Il conferimento dei Dati che potrebbe esserLe richiesto dal Titolare ed il relativo consenso al trattamento, alla comunicazione ed al trasferimento, per le strette finalit&agrave; di cui al 1, lettere da a) a d), sono obbligatori per l\'esecuzione del rapporto. L\'eventuale rifiuto di fornire i Dati richiesti o di prestare il relativo consenso al trattamento, comunicazione e trasferimento, comporterebbe la mancata instaurazione del rapporto e l\'impossibile esecuzione degli adempimenti contrattuali e di legge connessi al rapporto stesso.<br />Il conferimento dei dati che potrebbe esserLe richiesto dal Titolare ed il relativo consenso al trattamento, alla comunicazione ed al trasferimento, per le sole finalit&agrave; di cui al punto 1, lettere da e) a g) sono facoltativi. Il rifiuto, tuttavia, potrebbe comportare l\'impossibilit&agrave; di realizzare la finalit&agrave; stessa.<br /><br /></li><li><b>Modalit&agrave; del trattamento e comunicazione dei dati</b><br />Le modalit&agrave; di trattamento e comunicazione dei Dati sono adempiute in stretta connessione con le finalit&agrave; esposte  al punto 1 ed al relativo consenso, mediante strumenti idonei a garantirne la sicurezza e la riservatezza a norma del Titolo V, Capi I e II del Codice. Esse possono essere compiute anche attraverso strumenti elettronici presso la sede del Titolare.<br />Il trattamento avverr&agrave; anche mediante un processo che consente di rilevare le attitudini dell\'utente manifestato attraverso una navigazione (cookies). I cookies sono informazioni inviate al browser dell\'utente da un Web server che vengono salvate su disco fisso del pc dell\'utente; i cookies aiutano a migliorare la navigabilit&agrave; del sito, ad offrire servizi personalizzati e a permettere all\'utente di iscriversi alla community di ' . $lang['OwnerSite'] . '. L\'utente pu&ograve; scegliere di accettare i cookies inviati modificando le impostazioni del suo browser in modo che questo rifiuti tutti i cookies, oppure facendo in modo che mostri quando un cookie &egrave; stato inviato, cos&igrave; da poter decidere se riceverlo o meno. Se l\'utente sceglie di non accettare tali cookies, la navigazione sul sito potrebbe risultare limitata e alcune caratteristiche potrebbero non funzionare correttamente.<br /> I dati saranno conservati presso I server ' . $lang['OwnerServer'] . '.<br /><br /></li><li><b>Cessazione del rapporto</b><br />In caso di cessazione del rapporto tra l\'Interessato ed il Titolare, per qualsiasi causa, i dati potranno essere alternativamente:<br /><ol type="a"><li>distrutti;</li><li>conservati per fini esclusivamente personali e non destinati ad una comunicazione sistematica o alla diffusione;</li><li>conservati per scopi storici, statistici o scientifici, in conformit&agrave; alla legge, ai regolamenti ed alla normativa comunitaria.</li></ol><br /><br /></li><li><b>Soggetti del Trattamento dei dati personali</b><br />Il Titolare del trattamento dei dati personali &egrave; ' . $lang['OwnerCompany'] . ', ' . $lang['OwnerAdrress'] . '<br />Responsabile del trattamento &egrave; ' . $lang['OwnerSiteOwner'] . '.<br />Il personale espressamente nominato da ' . $lang['OwnerCompany'] . ' &egrave; incaricato del trattamento.<br /><br /></li><li><b>Diritto di accesso ai dati personali</b><br />L\'interessato ha diritto di ottenere la conferma dell\'esistenza o meno di dati personali che lo riguardano, anche se non ancora registrati, e la loro comunicazione in forma intelligibile.<br /><br />L\'interessato ha diritto di ottenere l\'indicazione:<br /><ul><li>dell\'origine dei dati personali, delle finalit&agrave; e modalit&agrave; del trattamento;</li><li>della logica applicata in caso di trattamento effettuato con l\'ausilio di strumenti elettronici;</li><li>degli estremi identificativi del Titolare, dei responsabili e del rappresentante designato ai sensi dell\'articolo 5, comma 2;</li><li>dei soggetti o delle categorie di soggetti ai quali i dati personali possono essere comunicati o che possono venirne a conoscenza in qualit&agrave; di rappresentante designato nel territorio dello Stato, di responsabili o incaricati.</li></ul><br /><br />L\'interessato ha diritto di ottenere:<br /><ul><li>l\'aggiornamento, la rettificazione ovvero, quando vi ha interesse, l\'integrazione dei dati;</li><li>la cancellazione, la trasformazione in forma anonima o il blocco dei dati trattati in violazione di legge, compresi quelli di cui non &egrave; necessaria la conservazione in relazione agli scopi per i quali i dati sono stati raccolti o successivamente trattati.</li></ul><br /><br />L\'interessato ha diritto di opporsi, in tutto o in parte:<ul><li>per motivi legittimi al trattamento dei dati personali che lo riguardano, ancorch&eacute; pertinenti allo scopo della raccolta;</li><li>al trattamento di dati personali che lo riguardano a fini di invio di materiale pubblicitario o di vendita diretta o per il compimento di ricerche di mercato o di comunicazione commerciale.</li></ul></li></ol><br /><br /><br />I diritti di cui sopra potranno essere esercitati con richiesta rivolta senza formalit&agrave; al titolare o ad uno dei responsabili, anche per il tramite di un incaricato. La richiesta rivolta al titolare o al responsabile potr&agrave; essere trasmessa anche mediante lettera raccomandata, telefax o posta elettronica.<br />';

$lang['ENCODING'] = 'UTF-8';
$lang['DIRECTION'] = 'ltr';
$lang['USER_LANG'] = 'it';
$lang['HEADER_LANG'] = 'it';
$lang['HEADER_LANG_XML'] = 'it';
$lang['HEADER_LANG_JQUERY'] = 'it';
$lang['LEFT'] = 'sinistra';
$lang['RIGHT'] = 'destra';
$lang['DATE_FORMAT'] = 'd F y H:i'; // This should be changed to the default date format for your language, php date() format
$lang['DATE_FORMAT_DATE'] = 'd/m/Y';
$lang['DATE_FORMAT_TIME'] = 'H.i';
$lang['DATE_FORMAT_MG'] = 'Y/m/d - H:i';
$lang['DATE_FORMAT_VF'] = 'd M Y';
$lang['DATE_FORMAT_DATE_JQUI_JQ'] = 'dd/mm/yy'; // You can only use one of these three formats: dd/mm/yy, mm/dd/yy, yy/mm/dd
$lang['DATE_FORMAT_TIME_JQUI_JQ'] = 'hh:ss';
$lang['DATE_FORMAT_DATE_JQUI_PHP'] = 'd/m/Y'; // You can only use one of these three formats: d/m/Y, m/d/Y, Y/m/d
$lang['DATE_FORMAT_TIME_JQUI_PHP'] = 'H.i';
$lang['DATE_FORMAT_DATE_MYSQL_PHP'] = 'dmy'; // You can only use one of these three formats: dmy, mdy, ymd (this is used to convert dates from MySQL and PHP and vice versa, all dates are with leading zeroes)
$lang['DATE_FORMAT_BIRTHDAY'] = 'd F Y';
$lang['DATE_FORMAT_CALENDAR'] = 'd F Y'; // This should be changed to the default date format for your language, php date() format
$lang['JOINED_DATE_FORMAT'] = 'F Y'; // Date format of Joined date, php date() format
$lang['NUMBER_FORMAT_DECIMALS'] = 0;
$lang['NUMBER_FORMAT_DECIMALS_SEP'] = ',';
$lang['NUMBER_FORMAT_THOUSANDS_SEP'] = '.';
$lang['NUMBER_FORMAT_DATE_SEP'] = '/';
$lang['NUMBER_FORMAT_TIME_SEP'] = ':';

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
/*
$lang['TRANSLATION_INFO'] = 'Traduzione Italiana verificata da <a href="http://www.mightygorgon.com/" class="copyright" target="_blank">Mighty Gorgon</a>';
$lang['TRANSLATION'] = 'Traduzione Italiana verificata da <a href="http://www.mightygorgon.com/" class="copyright" target="_blank">Mighty Gorgon</a>';
*/
$lang['TRANSLATION_INFO'] = '';
$lang['TRANSLATION'] = '';

?>