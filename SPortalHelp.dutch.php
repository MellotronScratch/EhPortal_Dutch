<?php
// Version: 1.3; EhPortal

global $helptxt;

// Configuration area
$helptxt['sp_ConfigurationArea'] = 'Hier kan je SimplePortal aanpassen aan je behoefte.';

// General settings
$helptxt['portalactive'] = 'Dit zal de portaal activeren.';
$helptxt['sp_portal_mode'] = 'SimplePortal kan draaien in verschillende modes. Deze optie maakt het mogelijk de gewenste mode te kiezen. Ondersteunde modes zijn:<br /><br />
<strong>Disabled:</strong> This will completely disable the portal.<br /><br />
<strong>Frontpage:</strong> This is the default setting. The portal page will greet viewers instead of the board index. Members will be able to access the board index by using the "forum" action, which can be accessed through the "forum" button.<br /><br />
<strong>Integration:</strong> This will disable the portal page. Blocks are only usable in forum.<br /><br />
<strong>Standalone:</strong> This will enable the portal to be displayed at a different url, away from the forum. The portal page appears in the url defined for the "Standalone URL" option. For details, check the PortalStandalone.php file found inside the forum root.';
$helptxt['sp_maintenance'] = 'Als onderhoudsmodus is geactiveerd, dan is het portaal alleen maar zichtbaar voor leden met SimplePortal permissies.';
$helptxt['sp_standalone_url'] = 'Volledige URL naar het standalone bestand.<br /><br />Voorbeeld: http://mijnforum.com/portaal.php';
$helptxt['portaltheme'] = 'Selecteer het thema dat het portaal moet gebruiken.';
$helptxt['sp_disableForumRedirect'] = 'Het activeren van deze optie zal het doorsturen naar onderwerp board index als forum index afdwingen in plaats van de portaal index.';
$helptxt['sp_disableColor'] = 'Als de Member Color Link mod is geïnstalleerd, zal dit de mod op het portaal uitschakelen (Behalve in de Wie is er Online lijst).';
$helptxt['sp_disable_random_bullets'] = 'Deactiveert het willekeurig kleuren van opsommingstekens in de portaal overzichten.';
$helptxt['sp_disable_php_validation'] = 'Deactiveert mogelijkheid om PHP code in de blokken te valideren en zodoende syntax fouten te voorkomen.';
$helptxt['sp_disable_php_eval'] = 'Disables the use of PHP\'s eval() function in favor of creating temporary PHP files.'; //Needs translation
$helptxt['sp_html_escape_filter'] = 'Enables an escape/backslash filter for HTML block/page output.'; //Needs translation
$helptxt['sp_php_html_escape_filter'] = 'Enables an escape/backslash filter for PHP block/page output.'; //Needs translation
$helptxt['sp_disable_side_collapse'] = 'Deactiveert de mogelijkheid om de linker en de rechter kolommen in te laten klappen in het portaal.';
$helptxt['sp_resize_images'] = 'Activeert het schalen van afbeeldingen in het Board nieuws en artikelen naar 300 x 300 pixels.';

// Block settings
$helptxt['showleft'] = 'Dit zal de linker kolom met blokken in het portaal en forum activeren.';
$helptxt['showright'] = 'Dit zal de rechter kolom met blokken in het portaal en forum activeren.';
$helptxt['leftwidth'] = 'Als de linker kolom is geactiveerd, dan kan hier de breedte van deze kolom worden vastgelegd in pixels(px) of percentages(%).';
$helptxt['rightwidth'] = 'Als de rechter kolom is geactiveerd, dan kan hier de breedte van deze kolom worden vastgelegd in pixels(px) of percentages(%).';
$helptxt['sp_enableIntegration'] = 'Deze optie activeert de blokken in het forum. Hierdoor kunnen geavanceerde <em>opmaak opties</em> voor elk blok worden vast gelegd.';
$helptxt['sp_IntegrationHide'] = 'Verberg blokken in bepaalde forum delen. De <em>Toon blokken in het forum</em> instelling moet geactiveerd worden om dit te laten werken.';
$helptxt['sp_delay_time'] = 'This setting will determine the delay time of the News rotation in milliseconds.<br />An entry of 0 will disable the rotation.'; //Needs translation
$helptxt['sp_fade_time'] = 'This setting will determine the delay time of the News fader in milliseconds.'; //Needs translation
$helptxt['sp_bullets'] = 'This setting will determine if bullets will appear for News rotation.<br />This will be disabled if the delay time is set to 0.'; //Needs translation

// Article settings
$helptxt['articleactive'] = 'Deze instelling activeerde het tonen van artikelen op het portaal.';
$helptxt['articleperpage'] = 'Deze instelling is om het maximale aantal artikelen per pagina vast te leggen.';
$helptxt['articlelength'] = 'Bij deze instelling kan worden vastgelegd na hoeveel karakters het bericht moet worden afgekapt op het portaal. Het afkappingsteken ziet er als volgt uit (...) Door hier op te klikken kan de bezoeker het hele artikel lezen.';
$helptxt['articleavatar'] = 'Als deze instelling is geactiveerd dan zal de avatar van de auteur te zien zijn in het artikel.';

// Blocks area
$helptxt['sp_BlocksArea'] = 'Blokken zijn kolommen die zichtbaar kunnen zijn in het forum of in het portaal. In deze sectie kunnen bestaande blokken worden aangepast en nieuwe worden aangemaakt.';

// Block list
$helptxt['sp-blocksLeftList'] = 'Deze blokken zijn zichtbaar in de linker kolom van het portaal of het forum.';
$helptxt['sp-blocksTopList'] = 'Deze blokken zijn zichtbaar in de bovenzijde van het portaal of het forum.';
$helptxt['sp-blocksBottomList'] = 'Deze blokken zijn zichtbaar in de onderzijde van het portaal of het forum.';
$helptxt['sp-blocksRightList'] = 'Deze blokken zijn zichtbaar in de bovenzijde van het portaal of het forum.';
$helptxt['sp-blocksHeaderList'] = 'These blocks are displayed on the top of the portal and forum.'; //Needs translation
$helptxt['sp-blocksFooterList'] = 'These blocks are displayed on the bottom of the portal and forum.'; //Needs translation

// Add/Edit blocks
$helptxt['sp-blocksAdd'] = 'Deze sectie maakt het mogelijk om een blok aan te maken.';
$helptxt['sp-blocksSelectType'] = 'Deze sectie maakt het mogelijk om een blok aan te maken. Standaard blokken of aangepaste blokken kunnen eenvoudig worden aangemaakt via de diverse opties.';
$helptxt['sp-blocksEdit'] = 'Deze sectie maakt het mogelijk om een geselecteerd blok aan te passen.';
$helptxt['sp-blocksDisplayOptions'] = 'Hier kunt u instellen waar het blok zichtbaar moet zijn ';
$helptxt['sp-blocksCustomDisplayOptions'] = 'Aangepaste beeld opties maakt het mogelijk om op een geavanceerde wijze controle te krijgen over het blok middels speciale syntaxis.<br /><br />
<strong>Special actions include:</strong><br /><br />
<strong>all:</strong> every page in forum.<br />
<strong>portal:</strong> portal page and it\'s sub-actions.<br />
<strong>forum:</strong> board index.<br />
<strong>sforum:</strong> all actions and boards, except portal.<br />
<strong>allaction:</strong> all actions.<br />
<strong>allboard:</strong> all boards.<br /><br />
<strong>Wavy (~)</strong><br />
This symbol acts as a wildcard, allowing you to include dynamic actions like ../index.php?issue=* or ../index.php?game=*. Used as ~action<br /><br />
<strong>Idkin (|)</strong><br />
Another wildcard sybmol which allows you to specify an exact value for a dynamic action like ../index.php?issue=1.0 or ../index.php?game=xyz. Should be used with wavy and after the action like; ~action|value<br /><br />
<strong>Negator (-)</strong><br />
This symbol is to exclude regular and dynamic actions. Should be used before the action name for regular actions and before the wavy for dynamic actions. Used as -action and -~action';
$helptxt['sp-blocksStyleOptions'] = 'Door deze opties kan je CSS styling toepassen voor elk blok.';

// Articles area
$helptxt['sp_ArticlesArea'] = 'Artikelen zijn onderwerpen (alleen het eerste bericht) die worden getoond in het portaal. Deze sectie maakt het mogelijk om bestaande artikelen aan te passen en nieuwe aan te maken.';

// Add/Edit articles
$helptxt['sp-articlesAdd'] = 'Deze optie stelt u in staat om boards of categorieën toe te voegen van het forum';
$helptxt['sp-articlesEdit'] = 'Met deze optie kunt u de categorie of de status van het artikel wijzigen';
$helptxt['sp-articlesCategory'] = 'Selecteer een categorie voor dit artikel.';
$helptxt['sp-articlesApproved'] = 'Goedgekeurd artikel zal worden getoond op het portaal';
$helptxt['sp-articlesTopics'] = 'Selecteer de onderwerpen, die als artikelen moeten worden getoond.';
$helptxt['sp-articlesBoards'] = 'Selecteer een board om te zoeken naar onderwerpen.';

// Categories area
$helptxt['sp_CategoriesArea'] = 'Categorieën bevatten artikelen. Deze sectie maakt het mogelijk om bestaande categorieën voor artikelen te bewerken en nieuwe aan te maken. Om een artikel aan te maken moet er tenminste een categorie zijn.';

// Add/Edit categories
$helptxt['sp-categoriesAdd'] = 'Deze sectie maakt het mogelijk om nieuwe categorieën voor artikelen aan te maken. Om een artikel aan te maken moet er tenminste een categorie zijn.';
$helptxt['sp-categoriesEdit'] = 'Deze sectie maakt het mogelijk om bestaande categorieën voor artikelen te bewerken.';
$helptxt['sp-categoriesCategories'] = 'Deze pagina maakt toont een overzicht van bestaande categorieën voor artikelen. Om een artikel aan te maken moet er tenminste een categorie zijn.';
$helptxt['sp-categoriesDelete'] = 'Het verwijderen van een categorie zal de de artikelen verwijderen of ze verplaatsen naar een ander categorie.';

// Pages area
$helptxt['sp_PagesArea'] = 'De pagina\'s zijn  BBC, PHP or HTML code blokken welke worden getoond op een eigen pagina in uw forum. Deze sectie stelt u in staat om pagina\'s aan te maken, te wijzigen en te configureren. 

// Shoutbox area
$helptxt['sp_ShoutboxArea'] = 'De Shoutbox moet worden aangemaakt in deze sectie. Deze sectie stelt u in staat om shoutboxen aan te maken en te configureren. 

// Add/Edit shoutboxes
$helptxt['sp-shoutboxesWarning'] = 'Het bericht dat u hier invult zal zichtbaar zijn in de shoutbox.
$helptxt['sp-shoutboxesBBC'] = 'Deze instelling stelt u in staat om BBC codes te gebuiken in deze shoutbox..<br /><br />Druk op de  CTRL key om BBC codes te selecteren of te deselecteren. <br /><br />Indien u meerdere BBC codes wilt selecteren, klik dan op de eerste BBC code welke u wilt seleteren, houdt dan de SHIFT toetst ingedrukt, click dan op de laatste BBC code die u wilt selecteren. 

$helptxt['sp_permissions'] = 'This option enables permissions to be used on blocks. The first three options are the simplest to use and understand. //Needs translation
<ul>
	<li><strong>Guests:</strong> Any user who is not registered or logged in <em>will</em> see this block. Logged-in users (including Administrators) <em>will not</em> see this block.</li>
	<li><strong>Members:</strong> Any user who is logged in (including Administrators) <em>will</em> see this block.</li>
	<li><strong>Everyone:</strong> All users, whether they are logged in or not, <em>will</em> see this block.</li>
	<li><strong>Custom:</strong> Select this to show the Custom Permissions area. In the Custom Permissions Settings, there are three options to choose for each group.
		<ul>
			<li><strong>A:</strong> Allowed, any user of this group <em>will</em> see this block.</li>
			<li><strong>X:</strong> Disallowed, any user of this group <em>will not</em> see this block by default. The user may see this block if they are part of a group with Allowed permissions.</li>
			<li><strong>D:</strong> Denied, any user of this group <em>will never</em> see this block. This overrides the Allowed setting for any group a user is part of, so <strong>be careful</strong> with this permission.</li>
		</ul>
	</li>
</ul>';

// Block parameters
$helptxt['sp_param_sp_latestMember_limit'] = 'Het aantal te tonen leden.';
$helptxt['sp_param_sp_boardStats_averages'] = 'Toon statistieken.';
$helptxt['sp_param_sp_topPoster_limit'] = 'Het aantal te tonen top posters.';
$helptxt['sp_param_sp_topPoster_type'] = 'Vanaf wanneer top posters tonen.';
$helptxt['sp_param_sp_recent_limit'] = 'Het aantal te tonen recente berichten of onderwerpen.';
$helptxt['sp_param_sp_recent_type'] = 'Toon recente berichten of onderwerpen.';
$helptxt['sp_param_sp_recentPosts_limit'] = 'Het aantal te tonen recente berichten.';
$helptxt['sp_param_sp_recentTopics_limit'] = 'Het aantal te tonen recente berichten of onderwerpen.';
$helptxt['sp_param_sp_topTopics_type'] = 'Sorteer onderwerpen op antwoorden of aantal maal bekeken.';
$helptxt['sp_param_sp_topTopics_limit'] = 'Het aantal te tonen onderwerpen.';
$helptxt['sp_param_sp_topBoards_limit'] = 'Het aantal te tonen boards.';
$helptxt['sp_param_sp_showPoll_topic'] = 'Het ID van het onderwerp met de te tonen poll.';
$helptxt['sp_param_sp_showPoll_type'] = 'Selecteer de wijze waarop polls moeten worden getoond. Normaal maakt het mogelijk om een poll aan te roepen via het topic ID, Recent toont de meest recente poll en willekeurig spreekt voor zich.';
$helptxt['sp_param_sp_boardNews_board'] = 'Het ID van het board waar de onderwerpen vandaan komen. Laat deze leeg om onderwerpen uit alle zichtbare boards te tonen.';
$helptxt['sp_param_sp_boardNews_limit'] = 'Het aantal te tonen nieuws items.';
$helptxt['sp_param_sp_boardNews_start'] = 'Het ID van een bepaalde post om mee te beginnen (anders zal de eerste post gebruikt worden).';
$helptxt['sp_param_sp_boardNews_length'] = 'Als dit ingevuld is dan zal het bericht afgekapt worden bij het hier ingevulde aantal karakters. Dit is zichtbaar door (...) of een "Lees meer" link.';
$helptxt['sp_param_sp_boardNews_avatar'] = 'Deze optie maakt het mogelijk om avatars te tonen van het lid dat het nieuws heeft gepost.';
$helptxt['sp_param_sp_boardNews_per_page'] = 'Het aantal te tonen berichten per pagina. Laat dit leeg om automatisch aanmaken van pagina\'s uit te schakelen.';
$helptxt['sp_param_sp_attachmentImage_limit'] = 'Het aantal te tonen recente afbeelding bijlagen.';
$helptxt['sp_param_sp_attachmentImage_direction'] = 'Afbeelding bijlagen kunnen horizontaal en verticaal uitgelijnd worden.';
$helptxt['sp_param_sp_attachmentRecent_limit'] = 'Het aantal te tonen recente bijlagen.';
$helptxt['sp_param_sp_calendar_events'] = 'Deze optie maakt het mogelijk om gebeurtenissen van de kalender te tonen.';
$helptxt['sp_param_sp_calendar_birthdays'] = 'Deze optie maakt het mogelijk om verjaardagen van de kalender te tonen.';
$helptxt['sp_param_sp_calendar_holidays'] = 'Deze optie maakt het mogelijk om feestdagen van de kalender te tonen.';
$helptxt['sp_param_sp_calendarInformation_events'] = 'Deze optie maakt het mogelijk om gebeurtenissen van de kalender te tonen.';
$helptxt['sp_param_sp_calendarInformation_future'] = 'Deze optie maakt het mogelijk om toekomstige gebeurtenissen van de kalender te tonen. U kunt het gewenste aantal dagen vooraf instellen. De optie om gebeurtenissen van de kalender te tonen moet dan wel aan staan. Om alleen gebeurtenissen van vandaag te tonen, gebruik "0".';
$helptxt['sp_param_sp_calendarInformation_birthdays'] = 'Deze optie maakt het mogelijk om verjaardagen van de kalender te tonen.';
$helptxt['sp_param_sp_calendarInformation_holidays'] = 'Deze optie maakt het mogelijk om feestdagen van de kalender te tonen.';
$helptxt['sp_param_sp_rssFeed_url'] = 'Vul hier de URL van de RSS feed in.';
$helptxt['sp_param_sp_rssFeed_show_title'] = 'Show feed titles.'; //Needs translation
$helptxt['sp_param_sp_rssFeed_show_content'] = 'Show feed contents.'; //Needs translation
$helptxt['sp_param_sp_rssFeed_show_date'] = 'Show feed dates.'; //Needs translation
$helptxt['sp_param_sp_rssFeed_strip_preserve'] = 'HTML tags to preserve in feed content separated by commas.'; //Needs translation
$helptxt['sp_param_sp_rssFeed_count'] = 'Het aantal te tonen items.';
$helptxt['sp_param_sp_rssFeed_limit'] = 'Het aantal te tonen karakters van de RSS feeds inhoud.';
$helptxt['sp_param_sp_staff_lmod'] = 'Deactiveert het tonen van lokale moderators.';
$helptxt['sp_param_sp_articles_category'] = 'The category to display articles from.'; //Needs translation
$helptxt['sp_param_sp_articles_limit'] = 'Het aantal te tonen artikelen.';
$helptxt['sp_param_sp_articles_type'] = 'Toont willekeurig artikelen of het laatste artikel.';
$helptxt['sp_param_sp_articles_image'] = 'Maakt het mogelijk om en categorie afbeelding, een avatar of niets te tonen in het artikel.';
$helptxt['sp_param_sp_gallery_limit'] = 'Het aantal te tonen items.';
$helptxt['sp_param_sp_gallery_type'] = 'Toont willekeurig afbeeldingen of de recentste afbeeldingen uit de galerij.';
$helptxt['sp_param_sp_gallery_direction'] = 'Galerij afbeeldingen kunnen horizontaal of verticaal worden uitgelijnd.';
$helptxt['sp_param_sp_arcade_limit'] = 'Het aantal te tonen items.';
$helptxt['sp_param_sp_arcade_type'] = 'Toont van de Arcades meest gespeelde spel, beste speler, of de kampioen.';
$helptxt['sp_param_sp_shop_style'] = 'Toont de rijkste leden of de shop items.';
$helptxt['sp_param_sp_shop_limit'] = 'Het aantal te tonen items.';
$helptxt['sp_param_sp_shop_type'] = 'Toont van de leden het totaal bedrag, het bedrag in de portemonnee of het totaal bedrag.';
$helptxt['sp_param_sp_shop_sort'] = 'Toont willekeurig of recent toegevoegde items.';
$helptxt['sp_param_sp_blog_limit'] = 'Het aantal te tonen items.';
$helptxt['sp_param_sp_blog_type'] = 'Toont artikelen of blogs.';
$helptxt['sp_param_sp_blog_sort'] = 'Toont willekeurig of recent toegevoegde blogs.';
$helptxt['sp_param_sp_html_content'] = 'Plaats hier zelf gemaakte HTML code.';
$helptxt['sp_param_sp_bbc_content'] = 'Plaats hier zelf gemaakte BBC code.';
$helptxt['sp_param_sp_php_content'] = 'Plaats hier zelf gemaakte HTML code.';

?>
########## Old values from SimplePortal ##########
/**
 * $helptxt['sp-blocksPermissionType'] = 'Deze optie maakt het mogelijk om permissies toe te passen op blokken. Of het lid moet in alle groepen zijn om het blok te zien, in een van de groepen of geen van de groepen (dan wordt het permissie systeem dus genegeerd). Hier kan het ingesteld worden.
 * $helptxt['sp_param_sp_rssFeed_titles_only'] = 'Toont feed titels, zonder inhoud.';
 */
