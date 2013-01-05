<?php

 /**
 * Solspace - Calendar
 *
 * @package		Solspace:Calendar
 * @author		Solspace DevTeam
 * @copyright	Copyright (c) 2010-2012, Solspace, Inc.
 * @link		http://www.solspace.com/docs/addon/c/Calendar/
 * @version		1.8.0
 * @filesource 	./system/expressionengine/third_party/calendar/language/english/
 */

$L = $lang = array(

//----------------------------------------
// Required for MODULES page
//----------------------------------------

'calendar_module_name' =>
'Calendrier',

'calendar_module_description' =>
'Un module complet de calendrier pour ExpressionEngine',

'calendar_module_version' =>
'Calendrier',

//----------------------------------------
//  Installation
//----------------------------------------

'calendars_field_group_already_exists' =>
'Le groupe de champs "Calendrier : Calendriers" existe déjà.',

'events_field_group_already_exists' =>
'Le groupe de champs "Calendrier : Événements" existe déjà.',

'calendars_weblog_already_exists' =>
'Le canal "Calendrier : Calendriers" existe déjà.',

'events_weblog_already_exists' =>
'Le canal "Calendrier : Événements" existe déjà.',

'cannot_install' =>
'Le module Calendrier ne peut être installé tant que ces erreurs ne sont pas corrigées :',

//----------------------------------------
//  Upgradeification
//----------------------------------------

'update_calendar' =>
'Mettre à jour Calendrier',

"update_successful"	=>
"Le module a été mis à jour avec succès.",

'calendar_update_message' =>
'Une nouvelle version de Calendrier est disponible. Souhaitez-vous appliquer la mise à jour ?',

'update_failure' =>
'La mise à jour du module Calendrier a échoué.',

'update_successful' =>
'Le module Calendrier a été mis à jour avec succès.',

//----------------------------------------
//  Main Menu
//----------------------------------------

'calendars' =>
'Calendriers',

'events' =>
'Événements',

'occurrences' =>
'Occurrences',

'reminders' =>
'Rappels',

'permissions' =>
'Autorisations',

'preferences' =>
'Préférences',

'documentation' =>
'Documentation en ligne',

'online_documentation' =>
'Documentation en ligne',

//----------------------------------------
//  Publish/Edit
//----------------------------------------

'filter' =>
'Filtre', /**verb or noun? verb => 'Filtrer' */

'remove_edited_occurrences' =>
'Supprimer les occurrences éditées',

'remove_edited_occurrences_desc' =>
'Décocher ceci si vous ne faîtes qu\'éditer les détails de cet événement. Il est recommandé de LAISSER CECI COCHÉ si vous changez les HORAIRES, DATES ou DATES DE FIN, au risque, dans le cas contraire, de créer des événements orphelins.',

'create_calendar_first' =>
'Vous devez d\'abord créer un calendrier avant de créer un événement.',

'select_a_calendar' =>
'Sélectionner un calendrier',

'new_date' =>
'Nouvelle date',

'add_rule' =>
'Ajouter une règle',

'editing_occurrence' =>
'L\'occurrence <strong>%date%</strong> de <strong>%title%</strong> est en cours d\'édition',

'type' =>
'Type',

'include' =>
'Inclure',

'exclude' =>
'Exclure',

'repeat' =>
'Répéter',

'none' =>
'Aucun',

'daily' =>
'Quotidiennement',

'weekly' =>
'Hebdomadairement',

'monthly' =>
'Mensuellement',

'yearly' =>
'Annuellement',

'select_dates' =>
'Sélectionner les dates',

'all_day_event' =>
'Événement sur la journée entière',

'from' =>
'À partir de',

'to' =>
'Jusqu\'à',

'every' =>
'Tous/toutes les',

'day_s' =>
'jour(s)',

'week_s_on' =>
'semaine(s)', /**à voir dans le contexte : "semaine(s) à venir ?" */

'at' =>
'à',

'month_s_by_day_of' =>
'mois par jour de', /**à voir dans le contexte */

'1st' =>
'1er',

'2nd' =>
'2d', /** norme typographique française : 2d/2de et non 2nd/2nde */

'3rd' =>
'3e', /** norme typographique française : 3e et non 3ième ou 3ème */

'4th' =>
'4e',

'5th' =>
'5e',

'only_on' =>
'Seulement le', /**à voir dans le contexte */

'year_s' =>
'année(s)',

'end' =>
'Fin',

'never' =>
'Jamais',

'by_date' =>
'par date',

'after' =>
'Après',

'time_s' =>
'horaire(s)',

//----------------------------------------
//  CP Calendars
//----------------------------------------

'calendar_id' =>
'ID du calendrier',

'calendar_name' =>
'Nom du calendrier',

'status' =>
'Statut',

'total_events' =>
'Nombre total d\'événements',

//----------------------------------------
//  CP Events
//----------------------------------------

'event_id' =>
'ID de l\'événement',

'event_name' =>
'Nom de l\'événement',

'recurs' =>
'Se répète', /** à voir dans le contexte */

'first_date' =>
'Première date',

'last_date' =>
'Dernière date',

'filter_events' =>
"Filtrer les événements",

'filter_by_calendar' =>
'Filtrer par calendrier',

'filter_by_status' =>
'Filtrer par statut',

'filter_by_recurs' =>
'Filtrer selon ceux qui se répètent', /** à voir dans le contexte */

'order_by' =>
'Trier selon',

'date_is' =>
'La date est',

'event_id' =>
'ID de l\'événement',

'event_title' =>
'Titre de l\'événement',

'calendar_name' =>
'Nom du calendrier',

'status' =>
'Statut',

'recurs' =>
'Se répète', /** à voir dans le contexte */

'first_date_is' =>
'La première date est',

'last_date' =>
'Dernière date',

'ascending' =>
'Croissant',

'descending' =>
'Décroissant',

'or_later' =>
'Ou plus tard',

'or_earlier' =>
'Ou plus tôt',

'this_date' =>
'Cette date',

'time' =>
'Horaire',

'all_day' =>
'Journée entière',

//----------------------------------------
//  CP Events Delete
//----------------------------------------

'delete' =>
'Supprimer',

'delete_events' =>
'Supprimer les événements',

'delete_events_title' =>
'Supprimer l\'(es) événement(s) ?',

'delete_events_question' =>
'Voulez-vous VRAIMENT supprimer {COUNT} événement(s) ?',

'events_deleted' =>
'Événement(s) ont été supprimé(s)',

//----------------------------------------
//  CP Occurrences
//----------------------------------------

'occurrence_id' =>
'ID de l\'occurrence',

'event_date' =>
'Date de l\'événement',

'limit' =>
'Limite',

'page_limit' =>
'Limite de page',

'occurrences_limit' =>
'Limite des occurrences', /** Limite du nombre d'occurrences ? */

// -------------------------------------
//	Permissions
// -------------------------------------

'calendar_permissions_desc' =>
"Les autorisations peuvent être définies lors de la création du calendrier, ou modifiées ici. Les Supers Administrateurs et les groupes sélectionnés dans 'Autoriser l\'accès complet aux groupes :' ont accès à tous les calendriers. Les groupes sélectionnés dans 'Interdire tout accès aux groupes :' n'auront accès à aucun calendrier.",

'allowed_groups' =>
"Groupes autorisés",

'allow_full_access' =>
'Autoriser l\'accès complet aux groupes :',

'permissions_enabled' =>
'Autorisations activées',

'save_permissions' =>
'Autorisations enregistrées',

'all_groups' =>
'Tous les groupes',


'allow_all' =>
'Les autoriser tous',

'deny_all_access' =>
'Interdire tout accès aux groupes :',

'deny_takes_precedence' =>
"Est prioritaire sur le paramétrage calendrier 'Les autoriser tous'",

'permissions_saved' =>
"Autorisations enregistrées",

'group_permissions' =>
'Autorisations de groupe',

'permissions_instructions' =>
"Choisissez les groupes que vous autorisez à éditer le calendrier et ses événements (Les Supers Administrateurs ont toujours accès à tous les calendriers). Si un groupe n'est pas visible, c'est qu'il se trouve déjà dans l'onglet Autorisations du panneau de contrôle calendrier (listes Les Autoriser Tous ou Les Interdire Tous).",

'disallowed_behavior_for_edit_page' =>
"Comportement interdit pour la page d'édition", /** Fonctionnement plutôt que Comportement ? */

'none' =>
"Aucun",

'search_filter' =>
"Filtre de recherche",

'disable_link' =>
"Lien de désactivation", /** à revoir dans le contexte */

'permission_dialog_title' =>
"Erreur d'autorisation",

'ok' => "OK",

//----------------------------------------
//  CP Preferences
//----------------------------------------

'preference' =>
'Préférence',

'setting' =>
'Paramètre',

'description' =>
'Description',

'first_day_of_week' =>
'Premier jour de la semaine',

'first_day_of_week_description' =>
'Le dimanche et le lundi sont les choix les plus probables.',

'clock_type' =>
'Type d\'horloge',

'clock_type_description' =>
'Dans le panneau de contrôle, utiliser une horloge sur une base 12 heures ou 24 heures ?',

'12_hour' =>
'12 heures',

'24_hour' =>
'24 heures',

'default_timezone' =>
'Fuseau horaire par défaut',

'default_timezone_description' =>
'Fuseau horaire par défaut pour les nouveaux calendriers.',

'preferences_updated' =>
'Préférences mises à jour.',

'default_date_format' =>
'Format de date',

'default_date_format_description' =>
'Format de date par défaut.',

'default_time_format' =>
'Format d\'heure par défaut',

'default_time_format_description' =>
'Format d\'heure par défaut pour les nouveaux calendriers.',

'calendar_weblog' =>
'Canal (ou canaux) pour le calendrier',

'calendar_weblog_description' =>
'Canal (ou canaux) devant être désigné(s) en tant que canal (ou canaux) pour gérer le calendrier',

'event_weblog' =>
'Canal (ou canaux) pour les événements',

'event_weblog_description' =>
'Canal (ou canaux) devant être désigné(s) en tant que canal (ou canaux) pour gérer les événements',

//----------------------------------------
//  Buttons
//----------------------------------------

'save' =>
'Enregistrer',

'delete_selected_items' =>
'Supprimer les éléments sélectionnés',

//----------------------------------------
//  Errors
//----------------------------------------

'no_results' =>
'Aucun résultat.',

'no_title' =>
'Aucun titre',

'invalid_request' =>
"Requête invalide",

'calendar_module_disabled' =>
"Le module Calendrier est actuellement désactivé. Merci de vous assurer qu'il est installé et à jour en vous rendant sur le panneau de contrôle du module dans le Panneau de Contrôle Expressionengine",

'disable_module_to_disable_extension' =>
"Pour désactiver cette extension, vous devez désactiver son <a href='%url%'>module</a> correspondant.",

'enable_module_to_enable_extension' =>
"Pour activer cette extension, vous devez installer son <a href='%url%'>module</a> correspondant.",

'cp_jquery_requred' =>
"L'extension 'jQuery pour le Panneau de Contrôle' doit être <a href='%extensions_url%'>activée</a> pour utiliser ce module.",

'invalid_weblog_id' =>
'ID de canal invalide',

'invalid_entry_id' =>
'ID d\'entrée invalide',

'invalid_site_id' =>
'ID de site invalide',

'invalid_calendar_id' =>
'ID de calendrier invalide',

'invalid_ymd' =>
'Date invalide',

'invalid_start_date' =>
'Date de début invalide',

'invalid_end_date' =>
'Date de fin invalide',

'invalid_year' =>
'Année invalide',

'invalid_month' =>
'Mois invalide',

'invalid_day' =>
'Jour invalide',

'invalid_date' =>
'Date invalide',

'invalid_time' =>
'Horaire invalide',

'invalid_start_time' =>
'Horaire de démarrage invalide',

'invalid_end_time' =>
'Horaire de fin invalide',

'invalid_hour' =>
'Heure invalide',

'invalid_minute' =>
'Minute invalide',

'invalid_repeat_dates' =>
'Dates répétées invalides',

'invalid_calendar_permissions' =>
'Vous n\'êtes pas autorisé à éditer ou à ajouter des événements à ce calendrier',

'no_permissions_for_any_calendars' =>
"Vous n'êtes pas autorisé à ajouter ou à éditer des événements sur un quelconque calendrier",

'invalid_permissions_json_request' =>
"Requête JSON invalide. Le group_id et EE 2.x+ sont exigés.",

'cannot_update_extensions_disabled' =>
'Ce module ne peut pas être mis à jour tant que les extensions sont désactivées.',

//----------------------------------------
//  Days /** Normalement, pas de majuscule. Sauf si c'est le 1er mot de la phrase. Choix fait de la conserver */
//----------------------------------------

'day_1_full' =>
'Lundi',

'day_2_full' =>
'Mardi',

'day_3_full' =>
'Mercredi',

'day_4_full' =>
'Jeudi',

'day_5_full' =>
'Vendredi',

'day_6_full' =>
'Samedi',

'day_0_full' =>
'Dimanche',

//----------------------------------------
//  Days - 2 Letters
//----------------------------------------

'day_1_2' =>
'Lu',

'day_2_2' =>
'Ma',

'day_3_2' =>
'Me',

'day_4_2' =>
'Je',

'day_5_2' =>
'Ve',

'day_6_2' =>
'Sa',

'day_0_2' =>
'Di',

//----------------------------------------
//  Days - 3 Letters
//----------------------------------------

'day_1_3' =>
'Lun',

'day_2_3' =>
'Mar',

'day_3_3' =>
'Mer',

'day_4_3' =>
'Jeu',

'day_5_3' =>
'Ven',

'day_6_3' =>
'Sam',

'day_0_3' =>
'Dim',

//----------------------------------------
//  Days - Short /** il n'y a pas d'abréviation courte officielle pour les jours de la semaine en langue française ; abréviation faîte sur 3 caractères */
//----------------------------------------

'day_1_short' =>
'Lun',

'day_2_short' =>
'Mar',

'day_3_short' =>
'Mer',

'day_4_short' =>
'Jeu',

'day_5_short' =>
'Ven',

'day_6_short' =>
'Sam',

'day_0_short' =>
'Dim',

//----------------------------------------
//  Days - 1 letter /** Risque de confusion entre mardi et mercredi : choix fait de mettre mercredi sur 2 lettres */
//----------------------------------------

'day_1_1' =>
'L',

'day_2_1' =>
'M',

'day_3_1' =>
'M',

'day_4_1' =>
'J',

'day_5_1' =>
'V',

'day_6_1' =>
'S',

'day_0_1' =>
'D',

//----------------------------------------
//  Ordinal suffixes /** abréviations officielles des ordinaux en français : er/ère ; d/de ; e  .Besoin de vérifier dans le contexte si ces données sont nécessaires*/
//----------------------------------------

'suffix_0' =>
'e',

'suffix_1' =>
'er',

'suffix_2' =>
'd',

'suffix_3' =>
'e',

'suffix_4' =>
'e',

'suffix_5' =>
'e',

'suffix_6' =>
'e',

'suffix_7' =>
'e',

'suffix_8' =>
'e',

'suffix_9' =>
'e',

'suffix_10' =>
'e',

'suffix_11' =>
'e',

'suffix_12' =>
'e',

'suffix_13' =>
'e',

'suffix_14' =>
'e',

'suffix_15' =>
'e',

'suffix_16' =>
'e',

'suffix_17' =>
'e',

'suffix_18' =>
'e',

'suffix_19' =>
'e',

//----------------------------------------
//  Months /** pas de majuscule */
//----------------------------------------

'month_1_full' =>
'janvier',

'month_2_full' =>
'février',

'month_3_full' =>
'mars',

'month_4_full' =>
'avril',

'month_5_full' =>
'mai',

'month_6_full' =>
'juin',

'month_7_full' =>
'juillet',

'month_8_full' =>
'août',

'month_9_full' =>
'septembre',

'month_10_full' =>
'octobre',

'month_11_full' =>
'novembre',

'month_12_full' =>
'décembre',

//----------------------------------------
//  Months - 3 letters
//----------------------------------------

'month_1_3' =>
'jan',

'month_2_3' =>
'fév',

'month_3_3' =>
'mar',

'month_4_3' =>
'avr',

'month_5_3' =>
'mai',

'month_6_3' =>
'jun', /** jun conservé pour différencier de juillet */

'month_7_3' =>
'jul', /** jul conservé pour différencier de juin */

'month_8_3' =>
'aoû',

'month_9_3' =>
'sep',

'month_10_3' =>
'oct',

'month_11_3' =>
'nov',

'month_12_3' =>
'déc',

//----------------------------------------
//  am/pm /** abréviations conservées telles quelles car issues du latin */
//----------------------------------------

'am' =>
'am',

'pm' =>
'pm',

'AM' =>
'AM',

'PM' =>
'PM',

'am_dot' =>
'a.m.',

'pm_dot' =>
'p.m.',

//----------------------------------------
//  Date parameters
//----------------------------------------

'today' =>
'aujourd\'hui',

'yesterday' =>
'hier',

'tomorrow' =>
'demain',

'day' =>
'jour',

'week' =>
'semaine',

'month' =>
'mois',

'year' =>
'année',

'ago' =>
'', /** pas de traduction, à voir dans contexte : "5 years ago => il y a 5 années => 5 années auparavant ?" */

'begin' =>
'débute',

'last' =>
'dernier/dernière', /** à voir dans contexte : dernier mois / dernière année => conserver les 2 */

//----------------------------------------
//  Time parameters
//----------------------------------------

'now' =>
'maintenant',

'noon' =>
'midi',

'midnight' =>
'minuit',

//----------------------------------------
//  field verbage
//----------------------------------------

'summary' =>
'Résumé',

'location' =>
'Emplacement',

'dates_and_options' =>
'Dates & Options',

'ics_url_label' =>
'Adresse URL du fichier iCalendar (.ics)',

'ics_url_desc' =>
"Ajouter une ou plusieurs adresses URL vers des fichiers .ics - séparées sur des lignes différentes - à importer dans ce calendrier. Tous les horaires importés seront ajustés selon les paramètres de fuseau horaire de ce calendrier.",

'ics_url_stub' =>
"Tous les horaires importés seront ajustés selon les paramètres de fuseau horaire de ce calendrier.",

'time_format_label' =>
'Format d\'heure',

'time_format_desc' =>
'Format d\'heure par défaut à utiliser pour ce calendrier.',

'timezone' =>
'Fuseau horaire',

/* END */
''=>''
);