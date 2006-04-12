<?php
$lang['install']['structure_version']	= '1';
$lang['install']['content_version']	= '1';
$lang['install']['language_name'] = 'Deutsch';
$lang['install']['lastchange'] = '24. August 2004';
$lang['install']['translator'] = 'Jochen';

$lang['install']['index_caption']	= 'Installation und Administration';
$lang['install']['index_subcaption']	= 'Auf diesen Seiten k�nnen Sie LanSuite installieren und verwalten';
$lang['install']['index_envcheck']	= 'Systemvorraussetzungen testen';
$lang['install']['index_dbmenu']	= 'Menueintr�ge neu schreiben';
$lang['install']['index_ls_conf']	= 'Grundeinstellungen (Datenbank-Zugangsdaten)';
$lang['install']['index_db']	= 'Datenbank updaten und verwalten';
$lang['install']['index_module']	= 'Modulmanager';
$lang['install']['index_settings']	= 'Allgemeine Einstellungen';
$lang['install']['index_import']	= 'Daten-Import';
$lang['install']['index_export']	= 'Daten-Export';
$lang['install']['index_pdfexport']	= 'PDF-Export';
$lang['install']['index_adminaccount']	= 'Administrator Account anlegen';
$lang['install']['index_feedback']	= 'Feedback senden';
$lang['install']['index_lansuite']	= 'Zum Lansuite Intranetsystem';
$lang['install']['db_caption']	= 'Datenbank-Initialisierung';
$lang['install']['db_subcaption']	= '<br><b>Ihre Datenbank-Struktur wurde soeben automatisch auf den neusten Stand gebracht</b>. Zus�tzlich k�nnen Sie unterhalb einzelne Modul-Datenbanken zur�cksetzen';
$lang['install']['db_createtables']	= 'Tabellen erstellen';
$lang['install']['db_insertdata']	= 'Daten in Tabellen schreiben';
$lang['install']['db_created']	= 'wurde angelegt';
$lang['install']['db_exists']	= 'Tabelle existiert bereits';
$lang['install']['db_ent_exists']	= 'Eintrag existiert bereits';
$lang['install']['db_rewrite']	= 'zur&uuml;cksetzen';
$lang['install']['db_alltables']	= 'Alle Tabellen';
$lang['install']['db_configs']	= 'Konfigurationseintr�ge';
$lang['install']['db_modules']	= 'Moduleintr�ge';
$lang['install']['db_admin']	= 'Adminacount';
$lang['install']['db_system']	= 'Systemacount';
$lang['install']['db_create_success']	= 'Die Tabelle \'%NAME%\' wurde erfolgreich erstellt';
$lang['install']['db_signonstatus']	= 'Anmeldestatus der Benutzer';
$lang['install']['db_signonstatus_rewritten']	= 'Status zur&uuml;ckgesetzt';
$lang['install']['db_insert_ok']	= 'Eintrag \'%NAME%\' eingef�gt';
$lang['install']['db_rewrite_quest']	= 'Sind Sie sicher, dass Sie das Modul \'%NAME%\' zur�cksetzen m�chten? Dies l�scht unwiederruflich alle Daten, die in diesem Modul bereits geschrieben wurden!';
$lang['install']['db_rewrite_all_quest']	= 'Sind Sie sicher, dass Sie alle Tabellen zur�cksetzen m�chten? Damit gehen alle Datenbankeintr�ge unwiederruflich verloren und LanSuite wird komplett auf den Ausgangszustand zur�ckgesetzt.' . HTML_NEWLINE . 'ACHTUNG: Diese Aktion l�scht alle Tabellen der Datenbank \'%NAME%\'; auch diejenigen, die nicht von Lansuite erstellt wurden!';
$lang['install']['db_rewrite_config_quest']	= 'Sind Sie sicher, dass Sie alle Konfigurationen zur�cksetzen m�chten? Damit gehen alle Ihre Moduleinstellungen verloren!';
$lang['install']['db_reset_user_quest']	= 'Sind Sie sicher, dass Sie den Status der Benutzer zur�cksetzen m�chten? Damit ist niemand mehr zur aktuellen Party angemeldet. Au�erdem wird der Bezahltstatus aller Benutzer auf \'Nicht Bezahlt\' gesetzt.';
$lang['install']['db_rewrite_modules_quest']	= 'Sind Sie sicher, dass Sie die Modultabelle zur�cksetzen m�chten? Dadurch sind nur noch die Module aktiviert, die Standartm��ig aktiviert sind.';
$lang['install']['db_rewrite_this_module_quest']	= 'Sind Sie sicher, dass Sie die Datenbank dieses Moduls zur�cksetzen m�chten? Alle Eintr�ge in dem Modul gehen dadurch unwiederruflich verloren!.';
$lang['install']['admin_caption']	= 'Adminaccount anlegen';
$lang['install']['admin_subcaption']	= 'Hier legen Sie einen Adminaccount an, �ber welchen Sie Zugriff auf diese Admin-Seite erhalten. Wenn Sie bereits Benutzer-Daten importiert haben m�ssen Sie hier keinen weiteren Account anlegen';
$lang['install']['admin_email']	= 'eMail';
$lang['install']['admin_pass2']	= 'Kennwort wiederholen';
$lang['install']['admin_success']	= 'Der Adminaccount wurde erfolgreich angelegt';
$lang['install']['admin_err_noemail']	= 'Bitte geben Sie eine Email-Adresse ein';
$lang['install']['admin_err_nopw']	= 'Bitte geben Sie ein Kennwort ein';
$lang['install']['admin_err_pwnotequal']	= 'Das Passwort und seine Verifizierung stimmen nicht �berein.';
$lang['install']['admin_warning']	= 'ACHTUNG: Es wurde noch kein Adminaccount angelegt. Bitte legen Sie diesen unbedingt unterhalb an. Sobald dieser angelegt worden ist, ist diese Seite nur noch mit diesem Account erreichbar';
$lang['install']['conf_caption']	= 'Grundeinstellungen';
$lang['install']['conf_subcaption']	= 'Bitte geben Sie nun die Zugangsdaten zur Datenbank an.';
$lang['install']['conf_dbdata']	= 'Datenbank-Zugangsdaten';
$lang['install']['conf_host']	= 'Host (Server-IP)';
$lang['install']['conf_user']	= 'Benutzername';
$lang['install']['conf_pass']	= 'Kennwort';
$lang['install']['conf_db']	= 'Datenbank';
$lang['install']['conf_prefix']	= 'Tabellen-Prefix';
$lang['install']['conf_display_debug_errors']	= 'MySQL-Fehler zeigen';
$lang['install']['conf_err_write']	= 'Datei \'config.php\' konnte <strong>nicht</strong> geschrieben werden.';
$lang['install']['conf_success']	= 'Datei \'config.php\' wurde erfolgreich geschrieben.';
$lang['install']['conf_design']	= 'Standard-Design';
$lang['install']['mod_caption']	= 'Modulverwaltung';
$lang['install']['mod_subcaption']	= 'Hier k�nnen Sie Module de-/aktivieren, sowie deren Einstellungen ver�ndern';
$lang['install']['mod_reset_quest']	= 'Sollen wirklich alle Module zur�ckgesetzt werden?' . HTML_NEWLINE . 'Dies wirkt sich nicht auf die Datenbankeintr�ge der Modules aus, jedoch gehen alle Einstellungen und Men��nderungen verloren, die zu den Modulen get�tigt worden sind. Au�erdem sind danach nur noch die Standartmodule aktiviert';
$lang['install']['mod_reset_mod_quest']	= 'Sollen das Modul \'%NAME%\' wirklich zur�ckgesetzt werden?' . HTML_NEWLINE . 'Dies wirkt sich nicht auf die Datenbankeintr�ge des Modules aus, jedoch gehen alle Einstellungen und Men��nderungen verloren, die zu den Modulen get�tigt worden sind. Au�erdem sind danach nur noch die Standartmodule aktiviert';
$lang['install']['mod_set_caption']	= 'Moduleinstellungen';
$lang['install']['mod_set_subcaption']	= 'Hier k�nnen Sie Einstellungen zu diesem Modul vornehmen';
$lang['install']['mod_set_err_nosettings']	= 'Zu diesem Modul gibt es keine Einstellungen';
$lang['install']['mod_menu_caption']	= 'Modul-Men�eintr�ge';
$lang['install']['mod_menu_subcaption']	= 'Hier k�nnen Sie die Navigationseintr�ge dieses Moduls �ndern';
$lang['install']['import_xml_caption']	= 'XML-Import - Dateiauswahl';
$lang['install']['import_xml_subcaption']	= 'W�hlen Sie nun das XML-File aus, das Sie importieren m�chten. Sollen die Userdaten und Sitzbl�cke HINZUGEF�GT werden, so m�ssen Sie die Option \'Datenbank l�schen\' deaktivieren. Sie bekommen anschlie�end die Details des Importfile angezeigt. Erst nach Best�tigung der Datei werden die Aktionen durchgef�hrt. Das Kommentarfeld k�nnen Sie benutzen, um jedem User, der importiert wird, den gleichen Kommentar zuzuweisen. Lassen Sie das Feld einfach leer, wenn Sie das nicht w�nschen.';
$lang['install']['import_caption']	= 'Daten importieren';
$lang['install']['import_subcaption']	= 'Hier k�nnen Sie Benutzerdaten, die Sie aus einem anderen System exportiert haben in Lanuite importieren';
$lang['install']['import_import']	= 'Import (*.xml, *.csv)';
$lang['install']['import_noseat']	= 'Sitzplan NICHT importieren';
$lang['install']['import_signon']	= 'Benutzer zur aktuellen Party anmelden';
$lang['install']['import_deldb']	= 'Alte Benutzerdaten l�schen';
$lang['install']['import_replace']	= 'Vorhandene Eintr�ge �berschreiben';
$lang['install']['import_comment']	= 'Kommentar f�r alle setzen';
$lang['install']['import_warning']	= '<b>Achtung:</b> Wird mit den importierten Daten auch ein Adminaccount importiert, werden Sie ab sofort aufgefordert sich mit diesem bei der Installation einzuloggen.';
$lang['install']['import_csv_report']	= 'Import wurde mit folgendem Ergebnis ausgef&uuml;hrt:' . HTML_NEWLINE . '<ul>Fehler: %ERROR%' . HTML_NEWLINE . 'Keine Aktion: %NOTHING%' . HTML_NEWLINE . 'Neue eingef�gt: %INSERT%' . HTML_NEWLINE . 'Alte �berschrieben: %REPLACE%</ul>';
$lang['install']['env_caption']	= 'Webserverkonfiguration und Systemvorraussetzungen �berpr�fen';
$lang['install']['env_subcaption']	= 'Hier k�nnen Sie testen, ob LanSuite auf ihrem System evtl. Probleme haben wird und bekommen L�sungsvorschl�ge angezeigt diese Probleme zu beheben';
$lang['install']['env_valid']	= 'erfolgreich';
$lang['install']['env_invalid']	= 'fehlgeschlagen';
$lang['install']['env_warning']	= 'bedenkliche Einstellung';
$lang['install']['env_stats_info']	= 'Leider nicht m�glich';
$lang['install']['env_stats_safemode']	= 'Statistiken funktionieren nicht wenn PHP im Safe-Modus l�uft.';
$lang['install']['env_stats']	= 'Auf ihrem System leider nicht m�glich. Der Befehl oder die Datei ' . HTML_NEWLINE . '{FEHLER} wurde nicht gefunden. Evtl. sind nur die Berechtigungen der Datei nicht ausreichend gesetzt';
$lang['install']['env_stats_os']	= 'Die Statistiken f�r Server funktionieren auf ihrem System leider nicht';
$lang['install']['env_phpversion']	= 'Auf Ihrem System wurde die PHP-Version ' . phpversion() . ' gefunden.  Lansuite ben&ouml;tigt mindestens PHP Version 4.3.0. Sie k�nnen zwar die Installation fortsetzen, allerdings kann keinerlei Garantie auf die ordnungsgem��e Funktionsweise gegeben werden. Laden und installieren Sie sich eine aktuellere Version von <a href=\'http://www.php.net\' target=\'_blank\'>www.php.net</a>.';
$lang['install']['env_no_mysql']	= 'Die MySQL-Erweiterung ist in PHP nicht geladen. Diese wird ben�tigt um auf die Datenbank zuzugreifen. Bevor keine Datenbank verf�gbar ist, kann LanSuite nicht installiert werden. Den MySQL-Server gibt es unter <a href=\'http://www.mysql.com\' target=\'_blank\'>www.mysql.com</a> zum download.';
$lang['install']['env_rg']	= 'Auf Ihrem System ist die PHP-Einstellung <b>register_globals</b> auf <b>On</b> gesetzt. Dies kann unter Umst&auml;nden ein Sicherheitsrisiko darstellen, wenn auch kein gro�es (siehe dazu: <a href=\'http://www.php.net/manual/de/security.globals.php\' target=\'_blank\'>www.php.net</a>). Sie sollten in Ihrer <b>PHP.ini</b> die Option <b>register_globals</b> auf <b>Off</b> setzen! Bitte vergessen Sie nicht, ihren Webserver nach dieser &Auml;nderung neu zu starten.';
$lang['install']['env_safe_mode']      = 'Auf Ihrem System ist die PHP-Einstellung <b>Safe_Mode</b> auf <b>On</b> gesetzt. Safe_Mode ist dazu gedacht, einige Systemfunktionen auf dem Server zu sperren um Angriffe zu verhindern (siehe dazu: <a href=\'http://de2.php.net/features.safe-mode\' target=\'_blank\'>www.php.net</a>). Doch leider ben�tigen einige LanSuite-Module (speziell: LansinTV, Serverstatistiken oder das Server-Modul) Zugriff auf genau diese Funktionen. Sie sollten daher in Ihrer <b>PHP.ini</b> die Option <b>safe_mode</b> auf <b>Off</b> setzen! <br /> au�er bei oben genannten Modulen, kann es bei aktiviertem Safe_Mode auch zu Problemen bei dem Generieren von Buttons, wie dem am Ende dieser Seite kommen.';
$lang['install']['env_mq']	= 'Auf Ihrem System ist die PHP-Einstellung <b>magic_quotes_gpc</b> auf <b>Off</b> gesetzt. Um mit Lansuite arbeiten zu k&ouml;nnen muss diese Option aktiviert sein. &Auml;ndern Sie bitte in Ihrer <b>PHP.ini</b> die Option <b>magic_quotes_gpc </b> auf <b> On </b>! Bitte vergessen Sie nicht ihren Webserver nach dieser &Auml;nderung neu zu starten.';;
$lang['install']['env_gd']	= 'Auf Ihrem System konnte das PHP-Modul <b>GD-Library</b> nicht gefunden werden. Durch diese Programmierbibliothek werden in Lansuite Grafiken, wie z.B. Turnierb&auml;ume generiert. Ab PHP Version 4.3.0 ist die GD bereits in PHP enthalten. Sollten Sie PHP 4.3.0 installiert haben und diese Meldung dennoch erhalten, &uuml;berpr&uuml;fen Sie, ob das GD-Modul evtl. deaktiviert ist. In PHP Version 4.2.3 ist die GD nicht enthalten. Wenn Sie diese Version benutzen muss GD 2.0 seperat heruntergeladen, installiert und in PHP einkompiliert werden. Sollten Sie Windows und PHP 4.2.3 benutzen, empfehlen wir auf PHP 4.3.0 umzusteigen, da sie sich auf diese Weise viel Arbeit sparen. Sollten sie die Auswahl zwischen GD und GD2 haben, w�hlen Sie immer das neuere GD2. Sie k�nnen die Installation jetzt fortf�hren, allerdings werden Sie erheblichen Einschr�nkungen im Gebrauch machen m�ssen.';
$lang['install']['env_gd1']	= 'Auf Ihrem System wurde das PHP-Modul <b>GD-Library</b> nur in der Version GD1 ' . $GD . ' gefunden. Damit ist die Qualit�t der erzeugten Bilder wesentlich schlechter. Es wird deshalb empfohlen GD2 zu benutzen. Sollten sie die Auswahl zwischen GD und GD2 haben, w�hlen Sie immer das neuere GD2. Sie k�nnen die Installation jetzt fortf�hren, allerdings werden Sie entsprechende Einschr�nkungen im Gebrauch machen m�ssen.';
$lang['install']['env_gd2']	= 'Auf Ihrem System wurde das PHP-Modul <b>GD-Library</b> ohne Free-Type Support gefunden. Dadurch werden die Schriftarten in Grafiken (z.b. im Turnierbaum) nicht sehr sch�n dargestellt. Sie k�nnen die Installation jetzt fortf�hren, allerdings werden Sie entsprechende Einschr�nkungen im Gebrauch machen m�ssen.';
$lang['install']['env_snmp']	= 'Auf Ihrem System konnte das PHP-Modul <b>SNMP-Library</b> nicht gefunden werden. SNMP erm&ouml;glicht es, auf Netzwerkdevices zuzugreifen, um detaillierte Informatioen �ber diese zu liefern. Ohne diese Bibliothek kann das Lansuite-Modul <b> NOC </b> (Netzwerk&uuml;berwachung) nicht arbeiten. Das Modul NOC wird <b>automatisch deaktiviert</b>.';;
$lang['install']['env_ftp']	= 'Auf Ihrem System konnte das PHP-Modul <b>FTP-Library</b> nicht gefunden werden. Dies kann zur Folge haben, dass Module die auf FTP-Server zugreifen (z.B. Downloadmodul, Servermodul) nicht korrekt funktionieren';
$lang['install']['env_no_cfgfile']	= 'Die Datei <b>config.php</b> befindet sich <b>nicht</b> im Lansuite-Verzeichnis <b> inc/base/ </b>. Bitte &uuml;berpr&uuml;fen Sie die Datei auf korrekte Gro�- und Kleinschreibung.';
$lang['install']['env_cfg_file']	= 'Die Datei <b>config.php</b> im Lansuite-Verzeichnis <b> inc/base/ </b> muss geschrieben werden k&ouml;nnen. &Auml;ndern Sie bitte die Zugriffsrechte entsprechend. Dies k&ouml;nnen Sie mit den meisten guten FTP-Clients erledigen. Die Datei musss mindestens Die Schreibrechte (chmod) 666 besitzen.';
$lang['install']['env_cfg_file_key']	= 'Schreibrechte auf die Konfigurationsdatei';
$lang['install']['env_no_ext_inc']	= 'Der Ordner <b>ext_inc</b> existiert <b>nicht</b> im Lansuite-Verzeichnis. Bitte &uuml;berpr&uuml;fen Sie den Pfad auf korrekte Gro�- und Kleinschreibung.';
$lang['install']['env_ext_inc']	= 'In den Ordner <b>ext_inc</b> und alle Seite Unterordner muss geschrieben werden k&ouml;nnen. &Auml;ndern Sie bitte die Zugriffsrechte entsprechend. Dies k&ouml;nnen Sie mit den meisten guten FTP-Clients erledigen. Die Datei musss mindestens Die Schreibrechte (chmod) 666 besitzen.';
$lang['install']['env_ext_inc_key']	= 'Schreibrechte im Ext_Inc-Ordner';
$lang['install']['env_errreport']	= 'In Ihrer php.ini ist \'error_reporting\' so konfiguriert, dass auch unwichtige Fehlermeldungen angezeigt werden. Die kann dazu f�hren, dass st�rende Fehlermeldungen in LanSuite auftauchen. Wir empfehlen diese Einstellung auf \'E_ALL ^ E_NOTICE\' zu �ndern. In dieser Einstellung werden dann nur noch Fehler angezeigt, welche die Lauff�higkeit des Skriptes beeintr�chtigen';
$lang['install']['wizard_caption']	= 'Lansuite Installation und Administration';
$lang['install']['wizard_subcaption']	= 'Willkommen bei der Installation von Lansuite.' . HTML_NEWLINE . 'Im ersten Schritt, wird die Konfiguration Ihres Webservers �berpr�ft.' . HTML_NEWLINE . 'Sollte alles korrekt sein, so dr�cken Sie bitte am Ende der Seite auf \'Weiter\' um mit der Eingabe der Grundeinstellungen fortzufahren.';
$lang['install']['wizard_db_notavailable']	= 'Die Datenbank ist nicht erreichbar. �berpr�fen Sie bitte die Angaben zur Datenbankverbindung';
$lang['install']['wizard_db_exist']	= 'Die Datenbank \'%DB%\' existiert bereits und wurde daher nicht neu angelegt.';
$lang['install']['wizard_db_createfailed']	= 'Anlegen der Datenbank fehlgeschlagen. �berpr�fen Sie bitte, ob der Angegebene Benutzer �ber au�reichende Rechte verf�gt um eine neue Datenbank anzulegen, bzw. �berpr�fen Sie, ob Sie den Namen der Datenbank korrekt angegeben haben';
$lang['install']['wizard_db_createsuccess']	= 'Datenbank wurde erfolgreich angelegt';
$lang['install']['wizard_db_createtable']	= '%CREATED% von %GES% Tabellen wurden angelegt. %EXIST% Tabellen existierten bereits.';
$lang['install']['wizard_db_createtable_fail']	= 'Das Erstellen der folgenden Tabellen ist fehlgeschlagen:';
$lang['install']['wizard_insertplz_success']	= 'Die Koordinaten der Postleitzahlen wurden erfolgreich in die Datenbank eingetragen';
$lang['install']['wizard_insertplz_failed']	= 'Fehler beim Eintragen der Postleitzahlen in die Datenbank';
$lang['install']['wizard_insertsettings_success']	= 'Die Standards der Einstellungen wurden erfolgreich in die Datenbank geschrieben';
$lang['install']['wizard_createsys_success']	= 'Der Systemaccount wurde in die Datenbank eingetragen';
$lang['install']['wizard_createsys_failed']	= 'Der Systemaccount existiert bereits und wurde daher nicht neu eingetragen';
$lang['install']['wizard_loadwarning']	= 'Achtung: Der Aufruf der n�chsten Seite kann bis zu einer Minute in Anspruch nehmen. Bitte in in dieser Zeit den Ladevorgang nicht abbrechen!';
$lang['install']['wizard_db_caption']	= 'Datenbankgenerierung';
$lang['install']['wizard_db_subcaption']	= 'Das Setup versucht nun die Datenbank zu initialisieren.';
$lang['install']['wizard_import_caption']	= 'Datenimport';
$lang['install']['wizard_import_subcaption']	= 'Hier k�nnen Sie die XML- oder CSV-Datei mit den Benutzerdaten ihrer G�ste importieren. Diese erhalten Sie z.B. bei LanSurfer, oder �ber den Export-Link einer anderen Lansuite-Version, oder von jedem anderen System, das das Lansuite XML-Benutzerformat unterst�tzt.' . HTML_NEWLINE . 'Sie k�nnen den Import auch �berspringen. In diesem Fall sollten Sie im n�chsten Schritt einen Adminaccount anlegen.';
$lang['install']['wizard_importupload_wrongformat']	= 'Bei der angegebenen Datei handelt es sich <b>nicht</b> um eine Lansuite-Import Datei';
$lang['install']['wizard_importupload_success']	= 'Datei-Import erfolgreich';
$lang['install']['wizard_importupload_filetype']	= 'Dateityp';
$lang['install']['wizard_importupload_date']	= 'Exportiert am/um';
$lang['install']['wizard_importupload_source']	= 'Quelle';
$lang['install']['wizard_importupload_event']	= 'LanParty';
$lang['install']['wizard_importupload_version']	= 'Lansuite-Version';
$lang['install']['wizard_importupload_unsuportetfiletype']	= 'Der von Ihnen angegebene Dateityp wird nicht unterst�tzt. Bitte w�hlen Sie eine Datei vom Typ *.xml, oder *.csv aus, oder �berspringen Sie den Dateiimport.';
$lang['install']['wizard_admin_caption']	= 'Adminaccount anlegen';
$lang['install']['wizard_admin_subcaption']	= 'Hier k�nnen Sie einen Adminaccount anlegen. Falls dies bereits durch den Import geschehen ist, k�nnen Sie diesen Schritt auch �berspringen.';
$lang['install']['wizard_final_caption']	= 'Installation abschlie�en';
$lang['install']['wizard_final_subcaption']	= 'Die Installation wurde erfolgreich beendet';
$lang['install']['wizard_final_text']	= 'Die Installation ist nun beendet.' . HTML_NEWLINE . HTML_NEWLINE .'Mit einem Klick auf \'Schlie�en\' gelangen Sie auf die Adminseite. Dort k�nnen Sie weitere Konfigurationen vornehmen, sowie bereits in der Installation get�tigte �ndern.' . HTML_NEWLINE . HTML_NEWLINE . 'Der Modulmanager erm�glicht es Ihnen dort Module zu aktivieren, bzw. Aktivierte abschalten.' . HTML_NEWLINE . HTML_NEWLINE . '�ber den Link \'Einstellungen\' stehen Ihnen eine Vielzahl an Konfigurationen in den einzelnen Module zur Verf�gung.';
$lang['install']['wizard_warning_noadmin']	= '<b>Es wurde kein Admin-Account angelegt</b>' . HTML_NEWLINE . 'Solange kein Admin-Account existiert, ist die Admin-Seite f�r JEDEN im Netzwerk erreichbar';
$lang['install']['export_caption']	= 'Daten exportieren';
$lang['install']['export_subcaption']	= 'Hier k�nnen Sie Benutzerdaten exportieren. Diese k�nnen Sie sp�ter wieder in Lansuite importieren.';
$lang['install']['settings_item_caption']	= 'Konfigurationseintrag bearbeiten';
$lang['install']['settings_item_subcaption']	= 'Hier k�nnen Sie den Wert dieses Eintrags editieren';
$lang['install']['settings_key']	= 'Schl�ssel';
$lang['install']['settings_description']	= 'Beschreibung';
$lang['install']['settings_value']	= 'Wert';
$lang['install']['settings_value_extended']	= 'Wert (Bei Boolean gilt 1 = ja, 0 = nein / Zeitwerte m�ssen noch als UNIX-timestamp eingegeben werden)';
$lang['install']['settings_new_caption']	= 'Eingabe eines neuen Konfigurationschl�ssels';
$lang['install']['settings_new_subcaption']	= 'Hier k�nnen Sie einen neuen Konfigurationschl�ssel anlegen';
$lang['install']['settings_type']	= 'Typ';
$lang['install']['settings_group']	= 'Existierende Gruppe';
$lang['install']['settings_newgroup']	= 'Oder: Neue Gruppe';
$lang['install']['update_db']   = 'Update der Datenbank';
$lang['install']['update_caption']	= 'Update der Datenbank';
$lang['install']['update_subcaption'] = 'Hier k�nnen sie eine alte Datenbank von Lansuite auf die neue Version updaten';
$lang['install']['update_install_version'] = 'Momentan installierte Version';
$lang['install']['update_update_file'] = 'Update ausw�hlen';
$lang['install']['update_no_file'] = 'Es ist kein Update vorhanden sie habe die aktuellste Version';
$lang['install']['update_ok'] = 'Update der Datenbank war erfolgreich';
$lang['install']['update_fail'] = 'Update der Datenbank war nicht erfolgreich.' . HTML_NEWLINE . 'Die Datei konnte nicht gefunden werden.';
$lang['install']['wizard_table_exist'] = 'System-Tabelle existiert bereits bitte im Adminmenu ein Update ausf�hren';
$lang['install']['export_xml_complete'] = 'XML: Komplette Datenbank Exportieren (Empfohlen)';
$lang['install']['export_xml_module'] = 'XML: Nur ausgew�hlte Module exportiern';
$lang['install']['export_xml_tables'] = 'XML: Nur ausgew�hlte Tabellen exportieren (f�r Experten)';
$lang['install']['export_cvs_complete'] = 'CSV: Userdaten komplett (inkl. Sitzplatz und IP)';
$lang['install']['export_cvs_sticker'] = 'CSV: Userdaten \'Aufkleber\' (Name, Username, Clan, Sitzplatz und IP)';
$lang['install']['export_cvs_card'] = 'CSV: Sitzplatzkarten (Name, Username, Clan, Sitzplatz und IP)';
$lang['install']['export_structure'] = 'Struktur exportieren';
$lang['install']['export_content'] = 'Inhalt exportieren';
$lang['install']['export_table'] = 'Diese Tabelle exportieren';
$lang['install']['export_cvs_complete_save'] = 'LanSuite-CSV-Export speichern';
$lang['install']['export_cvs_sticker_save'] = 'LanSuite-Aufkleber-Export speichern';
$lang['install']['export_cvs_card_save'] = 'LanSuite-Sitzplatzkarten-Export speichern';
$lang['install']['import_file'] = 'Zu importierende Datei';
$lang['install']['import_settings_new'] = 'Angaben f�r LanSuite-Export nach dem 06.02.2005';
$lang['install']['import_settings_old'] = 'Angaben f�r LanSurfer-Export und LanSuite-Export vor dem 06.02.2005';
$lang['install']['import_settings_lansurfer'] = 'Angaben f�r LanSurfer-Export';
$lang['install']['import_settings_overwrite'] = 'Vorhandene Eintr�ge ersetzen';
$lang['install']['import_success'] = 'Import erfolgreich';
$lang['install']['import_err_filetype'] = 'Dies scheint keine LanSuite-kompatible-XML-Datei zu sein. Bitte �berpr�fen sie den Eintrag &lt;filetype&gt; am Anfang der XML-Datei (FileType: \'%FILETYPE%\')';
$lang['install']['import_cvs_temp_unavailable'] = 'Der CSV-Import ist Aufgrund vieler Fehler vorr�bergehend aus dem System genommen worden';
$lang['install']['menu_reset_navi_quest'] = 'Sind Sie sicher, dass Sie alle Navigationseintr�ge zur�cksetzen m�chten?';
$lang['install']['menu_group_change'] = 'Gruppe �ndern';
$lang['install']['menu_group_change2'] = 'Hier k�nnen Sie diesen Navigationseintrag einer Gruppe zuweisen';
$lang['install']['menu_navi_caption'] = 'Navigationsmen� verwalten';
$lang['install']['menu_navi_subcaption'] = 'Hier k�nnen Sie das Navigationsmen� an Ihre W�nsche anpassen';
$lang['install']['menu_navi_reset'] = 'Navigation zur�cksetzen';
$lang['install']['menu_navi_showactive'] = 'Nur Eintr�ge von aktivierten Modulen anzeigen';
$lang['install']['menu_navi_showall'] = 'Alle Eintr�ge anzeigen';
$lang['install']['del'] = 'entfernen';
$lang['install']['edit'] = 'editieren';
$lang['install']['hr'] = 'Tennzeile';
$lang['install']['group'] = 'Gruppe';
$lang['install']['pos'] = 'Pos';
$lang['install']['index_no_admin_warnig'] = '<b>ACHTUNG</b>: Es existiert noch kein Admin-Account. Daher hat JEDER Benutzer Admin-Rechte. Legen Sie unbedingt im Benutzermanager einen Operator an';
$lang['install']['index_no_mod_admin_warnig'] = 'Die folgenden Module haben noch keinen Admin und sind daher f�r jeden Admin �nderbar:';
$lang['install']['index_no_mod_admin_hint'] = 'Aktuell sind noch nicht alle Module so programiert, dass sie eigene Admins haben k�nnen';
$lang['install']['index_config_ls'] = 'LanSuite konfigurieren';
$lang['install']['index_update_repair_ls'] = 'LanSuite updaten / reparieren';
$lang['install']['index_data_management'] = 'Daten-Management';
$lang['install']['index_navigation'] = 'Navigationsmen� verwalten';
$lang['install']['wizard_overwrite'] = 'Datenbank �berschreiben';
$lang['install']['wizard_overwrite2'] = '<b>ACHTUNG!</b>:Eventuell vorhandene Daten in der oben angegeben Datenbank gehen verloren.';
$lang['install']['none'] = 'keine';
$lang['install']['everyone'] = 'Jeder';
$lang['install']['only_login'] = 'Nur Eingeloggte';
$lang['install']['only_admin'] = 'Nur Admins';
$lang['install']['only_op'] = 'Nur Operatoren';
$lang['install']['no_admin'] = 'Keine Admins';
$lang['install']['only_logout'] = 'Nur Ausgeloggte';
$lang['install']['modules_settings_success'] = '�nderungen erfolgreich gespeichert.';
$lang['install']['modules_menu_start'] = 'Hauptmen�punkt des Moduls / Modul-Startseite';
$lang['install']['modules_menu_sub'] = 'Untermen�punkte';
$lang['install']['modules_menu_internal'] = 'Keine Men�punkte - Interne Verweise';
$lang['install']['modules_menu_new'] = 'Neuen Men�eintrag hinzuf�gen';
$lang['install']['modules_del_success'] = 'Der Men�-Eintrag wurde erfolgreich gel�scht';
$lang['install']['modules_db_caption'] = 'Datenbank - Modul';
$lang['install']['modules_db_subcaption'] = 'Hier k�nnen Sie die Datenbankeintr�ge zu diesem Modul verwalten';
$lang['install']['modules_db_belong'] = 'Folgende Datenbank-Tabellen geh�ren zu diesem Modul';
$lang['install']['modules_actions'] = 'Aktionen';
$lang['install']['modules_reset_moddb'] = 'Modul-Datenbank zur�cksetzen';
$lang['install']['modules_export_moddb'] = 'Modul-Datenbank exportieren';
$lang['install']['modules_rewritedb_success'] = 'Tabelle wurde erfolgreich neu geschrieben';
$lang['install']['modules_reset_modules'] = 'Alle Module zur�cksetzen';
$lang['install']['modules_config'] = 'Konfig.';
$lang['install']['modules_menu'] = 'Men�';
$lang['install']['modules_db'] = 'DB';
$lang['install']['unknown'] = 'Unbekannt';
$lang['install']['menu_cap'] = 'Menu eintr�ge ersetzen';
$lang['install']['menu_rewrite'] = 'Alle Eintr�ge ersetzen?';
$lang['install']['menu_write'] = 'Menu erfolgreich neu geschrieben';

$lang['install']['wizard_vars_caption'] = 'Wichtige Systemvariablen einstellen';
$lang['install']['wizard_vars_subcaption'] = 'Hier, in diesem letzten Schritt, werden die wichtigsten Konfigurationen in LanSuite eingestellt';
$lang['install']['vars_country'] = 'Land, in dem die Party stattfindet';
$lang['install']['vars_url'] = 'URL der Webseite';
$lang['install']['vars_email'] = 'Email des Webmasters';
$lang['install']['vars_system_mode'] = 'Internet-, oder Lokaler-Modus?';
$lang['install']['vars_system_mode_internet'] = 'Internet-Seite. Vor der Party';
$lang['install']['vars_system_mode_intranet'] = 'Intranet-Seite. Auf der party';
?>