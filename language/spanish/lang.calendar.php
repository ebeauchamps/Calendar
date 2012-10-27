<?php

 /**
 * Solspace - Calendar
 *
 * @package		Solspace:Calendar
 * @author		Solspace DevTeam
 * @copyright	Copyright (c) 2010-2012, Solspace, Inc.
 * @link		http://www.solspace.com/docs/addon/c/Calendar/
 * @version		1.7.1
 * @filesource 	./system/expressionengine/third_party/calendar/language/spanish/
 */

$L = $lang = array(

//----------------------------------------
// Required for MODULES page
//----------------------------------------

'calendar_module_name' =>
'Calendario',

'calendar_module_description' =>
'Un módulo de calendario completo para ExpressionEngine',

'calendar_module_version' =>
'Calendario',

//----------------------------------------
//  Installation
//----------------------------------------

'calendars_field_group_already_exists' =>
'El grupo de campos "Calendario: Calendarios" ya existe.',

'events_field_group_already_exists' =>
'El grupo de campos "Calendario: Eventos" ya existe.',

'calendars_weblog_already_exists' =>
'El weblog "Calendario: Calendarios" ya existe.',

'events_weblog_already_exists' =>
'El weblog "Calendario: Eventos" ya existe.',

'cannot_install' =>
'El Módulo de Calendario no puede ser instalado hasta que se corrigen estos errores:',

//----------------------------------------
//  Upgradeification
//----------------------------------------

'update_calendar' =>
'Actualizar Calendario',

"update_successful"	=>
"El módulo ha sido instalado con éxito.",

'calendar_update_message' =>
'Una nueva versión de Calendario esta disponible. ¿Desea actualizarlo?',

'update_failure' =>
'El Módulo de Calendario no ha sido actualizado con éxito.',

'update_successful' =>
'El Módulo de Calendario ha sido actualizado con éxito.',

//----------------------------------------
//  Main Menu
//----------------------------------------

'calendars' =>
'Calendarios',

'events' =>
'Eventos',

'occurrences' =>
'Repeticiones',

'reminders' =>
'Recordatorios',

'permissions' =>
'Permisos',

'preferences' =>
'Preferencias',

'documentation' =>
'Documentación en Línea',

'online_documentation' =>
'Documentación en Línea',

//----------------------------------------
//  Publish/Edit
//----------------------------------------

'filter' =>
'Filtro',

'remove_edited_occurrences' =>
'Borrar Repeticiones Editados',

'remove_edited_occurrences_desc' =>
'Desmarque esto si solo está editando detalles sobre éste evento. Se recomienda que se DEJE ESTO MARCADO si esta cambiando HORARIOS, FECHAS, o FECHAS FINALES de eventos, si no se creará eventos huérfanos.',

'create_calendar_first' =>
'Debe crear un calendario antes de crear un evento.',

'select_a_calendar' =>
'Seleccione un calendario',

'new_date' =>
'Fecha Nueva',

'add_rule' =>
'Añadir Regla',

'editing_occurrence' =>
'Editando el <strong>%date%</strong> repetición de <strong>%title%</strong>',

'type' =>
'Tipo',

'include' =>
'Incluye',

'exclude' =>
'Excluye',

'repeat' =>
'Repite',

'none' =>
'Ninguno',

'daily' =>
'Diario',

'weekly' =>
'Semanal',

'monthly' =>
'Mensual',

'yearly' =>
'Anual',

'select_dates' =>
'Seleccione Fechas',

'all_day_event' =>
'Evento de Todo el Día',

'from' =>
'Desde',

'to' =>
'Hasta',

'every' =>
'Cada',

'day_s' =>
'día(s)',

'week_s_on' =>
'semana(s) en',

'at' =>
'en',

'month_s_by_day_of' =>
'mes(es) por día de',

'1st' =>
'1º',

'2nd' =>
'2º',

'3rd' =>
'3º',

'4th' =>
'4º',

'5th' =>
'5º',

'only_on' =>
'Solo en',

'year_s' =>
'año(s)',

'end' =>
'Final',

'never' =>
'Nunca',

'by_date' =>
'por Fecha',

'after' =>
'Después',

'time_s' =>
'hora(s)',

//----------------------------------------
//  CP Calendars
//----------------------------------------

'calendar_id' =>
'ID de Calendario',

'calendar_name' =>
'Nombre de Calendario',

'status' =>
'Estado',

'total_events' =>
'Total Eventos',

//----------------------------------------
//  CP Events
//----------------------------------------

'event_id' =>
'ID del Evento',

'event_name' =>
'Nombre del Evento',

'recurs' =>
'Repite',

'first_date' =>
'Primera Fecha',

'last_date' =>
'Última Fecha',

'filter_events' =>
"Filtrar Eventos",

'filter_by_calendar' =>
'Filtrar por Calendario',

'filter_by_status' =>
'Filtrar por Estado',

'filter_by_recurs' =>
'Filtrar por Repeticiones',

'order_by' =>
'Ordenar por',

'date_is' =>
'Fecha es',

'event_id' =>
'ID del Evento',

'event_title' =>
'Título del Evento',

'calendar_name' =>
'Nombre del Calendario',

'status' =>
'Estado',

'recurs' =>
'Repite',

'first_date_is' =>
'Primera Fecha Es',

'last_date' =>
'última Fecha',

'ascending' =>
'Ascendente',

'descending' =>
'Descendente',

'or_later' =>
'O Más Tarde',

'or_earlier' =>
'O Más Temprano',

'this_date' =>
'ésta Fecha',

'time' =>
'Hora',

'all_day' =>
'Todo el Día',

//----------------------------------------
//  CP Events Delete
//----------------------------------------

'delete' =>
'Borrar',

'delete_events' =>
'Borrar Eventos',

'delete_events_title' =>
'¿Borrar Evento(s)?',

'delete_events_question' =>
'¿Desea borrar {COUNT} evento(s)?',

'events_deleted' =>
'Los Evento(s) han sido borrados',

//----------------------------------------
//  CP Occurrences
//----------------------------------------

'occurrence_id' =>
'ID de la Repetición',

'event_date' =>
'Fecha del Evento',

'limit' =>
'Límite',

'page_limit' =>
'Límite de Página',

'occurrences_limit' =>
'Límite de Repeticiones',

// -------------------------------------
//	Permissions
// -------------------------------------

'calendar_permissions_desc' =>
"Los permisos pueden ser fijados cuando se crea el calendario, o cambiados aquí. Super Admins y los grupos seleccionados en 'Permitir Acceso Completo Para Grupos' tienen acceso a todos los calendarios. Grupos seleccionados en 'Negar Acseso Completo Para Grupos' no tendran acceso a ninguno de los calendarios.",

'allowed_groups' =>
"Grupos Permitidos",

'allow_full_access' =>
'Permitir Acceso Completo Para Grupos',

'permissions_enabled' =>
'Permisos Habilitados',

'save_permissions' =>
'Guardar Permisos',

'all_groups' =>
'Todos Los Grupos',

'allow_all' =>
'Permitir Todo',

'deny_all_access' =>
'Negar Accseso Completo Para Grupos',

'deny_takes_precedence' =>
"Tiene precedencia sobre Permitir Todo del calendario",

'permissions_saved' =>
"Permisos Guardados",

'group_permissions' =>
'Permisos de Grupo',

'permissions_instructions' =>
"Elige los grupos que desea que tengan acceso para editar calendario y sus eventos. (Los Super Admin siempre tienen acceso a todos los calendarios). Si no aparece un grupo, estará en la lista Permitir Todo o Negar Todo en la pestaña del panel de control del Calendario.",

'disallowed_behavior_for_edit_page' =>
"Comportamiento No Permitido para la Página de Editar",

'none' =>
"Ninguno",

'search_filter' =>
"Filtro de Búsqueda",

'disable_link' =>
"Inhabilitar Enlace",

'permission_dialog_title' =>
"Error de Permiso",

'ok' => "ACEPTAR",

//----------------------------------------
//  CP Preferences
//----------------------------------------

'preference' =>
'Preferencias',

'setting' =>
'Ajuste',

'description' =>
'Descripción',

'first_day_of_week' =>
'Primer Día de la Semana',

'first_day_of_week_description' =>
'Domingo y Lunes son las opciones más probables.',

'clock_type' =>
'Tipo Reloj',

'clock_type_description' =>
'¿Utilice reloj de 12 ó 24 horas en el panel de control?',

'12_hour' =>
'12-horas',

'24_hour' =>
'24-horas',

'default_timezone' =>
'Zona Horaria por Defecto',

'default_timezone_description' =>
'Zona horaria por defecto para calendarios nuevos.',

'preferences_updated' =>
'Preferencias Actualizadas.',

'default_date_format' =>
'Formato Fecha Datepicker',

'default_date_format_description' =>
'Formato de fechas del datepicker.',

'default_time_format' =>
'Formato Horaria por Defecto',

'default_time_format_description' =>
'Formato horaria por defecto para calendarios nuevos.',

'calendar_weblog' =>
'Calendarios de Weblog(s)',

'calendar_weblog_description' =>
'Weblog(s) para designar como weblog(s) de Calendario',

'event_weblog' =>
'Weblog(s) de Eventos',

'event_weblog_description' =>
'Weblog(s) para designar como  weblog(s)',

//----------------------------------------
//  Buttons
//----------------------------------------

'save' =>
'Guardar',

'delete_selected_items' =>
'Borrar Artículos Seleccionados',

//----------------------------------------
//  Errors
//----------------------------------------

'no_results' =>
'Sin resultados.',

'no_title' =>
'Sin Título',

'invalid_request' =>
"Instancia Inválida",

'calendar_module_disabled' =>
"El módulo Calendario esta actualmente desactivado. Por favor, asegure de que está instalada y actualizada, comprobandolo en el panel de control del módulo, en el Panel de Control de ExpressionEngine",

'disable_module_to_disable_extension' =>
"Para desactivar esta extensión, debe desactivar su correspondiente <a href='%url%'>módulo</a>.",

'enable_module_to_enable_extension' =>
"Para activar esta extensión, debe instalar su correspondiente <a href='%url%'>módulo</a>.",

'cp_jquery_requred' =>
"La extensión 'jQuery para el Panel de Control' debe estar <a href='%extensions_url%'>activado</a> para utilizar este módulo.",

'invalid_weblog_id' =>
'ID de weblog Inválido',

'invalid_entry_id' =>
'ID de entrada Inválida',

'invalid_site_id' =>
'ID de sitio Inválido',

'invalid_calendar_id' =>
'ID de calendario Inválido',

'invalid_ymd' =>
'Fecha Inválida',

'invalid_start_date' =>
'Fecha inicial Inválida',

'invalid_end_date' =>
'Fecha final Inválida',

'invalid_year' =>
'Año Inválido',

'invalid_month' =>
'Mes Inválido',

'invalid_day' =>
'Día Inválido',

'invalid_date' =>
'Fecha Inválida',

'invalid_time' =>
'Hora Inválida',

'invalid_start_time' =>
'Hora inicial Inválida',

'invalid_end_time' =>
'Hora final Inválida',

'invalid_hour' =>
'Hora Inválida',

'invalid_minute' =>
'Minuto Inválido',

'invalid_repeat_dates' =>
'Fechas repetitivas Inválidas',

'invalid_calendar_permissions' =>
'No está permitido editar o añadir eventos a éste calendario',

'no_permissions_for_any_calendars' =>
"No tiene permisos para editar o añadir eventos en ninguno de los calendarios",

'invalid_permissions_json_request' =>
"Instancia de JSON inválida. Requiere group_id y EE 2.x+.",

//----------------------------------------
//  Days
//----------------------------------------

'day_1_full' =>
'Lunes',

'day_2_full' =>
'Martes',

'day_3_full' =>
'Miércoles',

'day_4_full' =>
'Jueves',

'day_5_full' =>
'Viernes',

'day_6_full' =>
'Sábado',

'day_0_full' =>
'Domingo',

//----------------------------------------
//  Days - 2 Letters
//----------------------------------------

'day_1_2' =>
'Lu',

'day_2_2' =>
'Ma',

'day_3_2' =>
'Mi',

'day_4_2' =>
'Ju',

'day_5_2' =>
'Vi',

'day_6_2' =>
'Sa',

'day_0_2' =>
'Do',

//----------------------------------------
//  Days - 3 Letters
//----------------------------------------

'day_1_3' =>
'Lun',

'day_2_3' =>
'Mar',

'day_3_3' =>
'Mie',

'day_4_3' =>
'Jue',

'day_5_3' =>
'Vie',

'day_6_3' =>
'Sab',

'day_0_3' =>
'Dom',

//----------------------------------------
//  Days - Short
//----------------------------------------

'day_1_short' =>
'Lun',

'day_2_short' =>
'Mar',

'day_3_short' =>
'Mie',

'day_4_short' =>
'Jue',

'day_5_short' =>
'Vie',

'day_6_short' =>
'Sab',

'day_0_short' =>
'Dom',

//----------------------------------------
//  Days - 1 letter
//----------------------------------------

'day_1_1' =>
'L',

'day_2_1' =>
'M',

'day_3_1' =>
'X',

'day_4_1' =>
'J',

'day_5_1' =>
'V',

'day_6_1' =>
'S',

'day_0_1' =>
'D',

//----------------------------------------
//  Ordinal suffixes
//----------------------------------------

'suffix_0' =>
'º',

'suffix_1' =>
'º',

'suffix_2' =>
'º',

'suffix_3' =>
'º',

'suffix_4' =>
'º',

'suffix_5' =>
'º',

'suffix_6' =>
'º',

'suffix_7' =>
'º',

'suffix_8' =>
'º',

'suffix_9' =>
'º',

'suffix_10' =>
'º',

'suffix_11' =>
'º',

'suffix_12' =>
'º',

'suffix_13' =>
'º',

'suffix_14' =>
'º',

'suffix_15' =>
'º',

'suffix_16' =>
'º',

'suffix_17' =>
'º',

'suffix_18' =>
'º',

'suffix_19' =>
'º',

//----------------------------------------
//  Months
//----------------------------------------

'month_1_full' =>
'Enero',

'month_2_full' =>
'Febrero',

'month_3_full' =>
'Marzo',

'month_4_full' =>
'Abril',

'month_5_full' =>
'Mayo',

'month_6_full' =>
'Junio',

'month_7_full' =>
'Julio',

'month_8_full' =>
'Agosto',

'month_9_full' =>
'Septiembre',

'month_10_full' =>
'Octubre',

'month_11_full' =>
'Noviembre',

'month_12_full' =>
'Diciembre',

//----------------------------------------
//  Months - 3 letters
//----------------------------------------

'month_1_3' =>
'Ene',

'month_2_3' =>
'Feb',

'month_3_3' =>
'Mar',

'month_4_3' =>
'Abr',

'month_5_3' =>
'May',

'month_6_3' =>
'Jun',

'month_7_3' =>
'Jul',

'month_8_3' =>
'Ago',

'month_9_3' =>
'Sep',

'month_10_3' =>
'Oct',

'month_11_3' =>
'Nov',

'month_12_3' =>
'Dic',

//----------------------------------------
//  am/pm
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
'hoy',

'yesterday' =>
'ayer',

'tomorrow' =>
'mañana',

'day' =>
'día',

'week' =>
'semana',

'month' =>
'mes',

'year' =>
'año',

'ago' =>
'hace',

'begin' =>
'empieza',

'last' =>
'última',

//----------------------------------------
//  Time parameters
//----------------------------------------

'now' =>
'ahora',

'noon' =>
'mediodía',

'midnight' =>
'medianoche',

//----------------------------------------
//  field verbage
//----------------------------------------

'summary' =>
'Sumario',

'location' =>
'Ubicación',

'dates_and_options' =>
'Fechas y Opciones',

'ics_url_label' =>
'URL a archivo iCalendar (.ics)',

'ics_url_desc' =>
"Añade uno o más URLs a archivos .ics - separados por líneas - para importar a éste calendario. Todas las horas importadas seran ajustadas a la zona horaria de éste calendario.",

'ics_url_stub' =>
"Todas las horas importadas seran ajustadas a la zona horaria de éste calendario.",

'time_format_label' =>
'Formato Horaria',

'time_format_desc' =>
'Formato horaria por defecto para éste calendario.',

'timezone' =>
'Zona Horaria',

/* END */
''=>''
);