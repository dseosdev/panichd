<?php

return [

 /*
  *  Constants
  */
  'nav-administrators'            => 'Administradors',
  'nav-agents'                    => 'Agents',
  'nav-categories'                => 'Categories',
  'nav-configuration'             => 'Configuració',
  'nav-dashboard'                 => 'Panell admin.',
  'nav-dashboard-title'           => 'Panell d\'administrador',
  'nav-members'                   => 'Membres',
  'nav-notices'                   => 'Avisos',
  'nav-priorities'                => 'Prioritats',
  'nav-settings'                  => 'Paràmetres',
  'nav-statuses'                  => 'Estats',

  'table-hash'                    => '#',
  'table-id'                      => 'Id',
  'table-name'                    => 'Nom',
  'table-create-level'            => 'Crear tiquets',
  'table-action'                  => 'Acció',
  'table-categories'              => 'Categories',
  'table-categories-autoasg-title'=> 'Assignació automàtica de nous tiquets',
  'table-email'                   => 'E-mail',
  'table-magnitude'               => 'Magnitud',
  'table-num-tickets'             => 'Núm. tiquets',
  'table-remove-agent'            => 'Excloure d\'agents',
  'table-remove-administrator'    => 'Excloure d\'administrators',

  'table-slug'                    => 'Concatenat', // http://www.atcreativa.com/blog/que-es-slug-de-wordpress/  //Revisar (enllaçat, lligat ??)
  'table-default'                 => 'Valor predeterminat',
  'table-value'                   => 'Valor configurat',
  'table-lang'                    => 'Idioma',
  'table-edit'                    => 'Editar',

  'btn-add-new'                   => 'Afegir nou',
  'btn-back'                      => 'Endarrere',
  'btn-change'                    => 'Canviar',
  'btn-create'                    => 'Crear',
  'btn-delete'                    => 'Eliminar',
  'btn-edit'                      => 'Editar',
  'btn-join'                      => 'Unir',
  'btn-remove'                    => 'Excloure',
  'btn-submit'                    => 'Enviar',
  'btn-save'                      => 'Desar',
  'btn-update'                    => 'Actualitzar',

  // Vocabulary
  'admin'                         => 'Admin',
  'colon'                         => ': ',
  'role'                          => 'Rol',

  /* Access Levels */
  'level-1'                       => 'Tothom',
  'level-2'                       => 'agents assignats + admins.',
  'level-3'                       => 'admins.',
  
 /*
  *  Page specific
  */

// $admin_route_path/dashboard
  'index-title'                         => 'Panell d\'Administració de Tiquets',
  'index-empty-records'                 => 'Encara no hi ha tiquets',
  'index-total-tickets'                 => 'Tiquets totals',
  'index-newest-tickets'                => 'Tiquets nous',
  'index-active-tickets'                => 'Tiquets oberts',
  'index-complete-tickets'              => 'Tiquets tancats',
  'index-performance-indicator'         => 'Indicador de rendiment',
  'index-periods'                       => 'Períodes',
  'index-3-months'                      => '3 mesos',
  'index-6-months'                      => '6 mesos',
  'index-12-months'                     => '12 mesos',
  'index-tickets-share-per-category'    => 'Proporció de tiquets per categoria',
  'index-tickets-share-per-agent'       => 'Proporció de tiquets per agent',
  'index-categories'                    => 'Categories',
  'index-category'                      => 'Categoria',
  'index-agents'                        => 'Agents',
  'index-agent'                         => 'Agent',
  'index-administrators'                => 'Administradors',
  'index-administrator'                 => 'Administrador',
  'index-users'                         => 'Usuaris',
  'index-user'                          => 'Usuari',
  'index-tickets'                       => 'Tiquets',
  'index-open'                          => 'Oberts',
  'index-closed'                        => 'Tancat',
  'index-total'                         => 'Total',
  'index-month'                         => 'Mes',
  'index-performance-chart'             => 'Quants dies de promig per resoldre un tiquet?',
  'index-categories-chart'              => 'Distribució de tickets per Categoria',
  'index-agents-chart'                  => 'Distribució de tickets per Agent',
  'index-view-category-tickets'         => 'Veure tiquets :list de la categoria :category',
  'index-view-agent-tickets'            => 'Veure tiquets :list assignats a l\'agent',
  'index-view-user-tickets'             => 'Veure tiquets :list de l\'usuari',

// $admin_route_path/agent/____
  'agent-index-title'             => 'Gestió d\'Agents',
  'agent-index-no-agents'         => 'No hi ha agents',
  'agent-index-create-new'        => 'Afegir agent',
  'agent-create-form-agent'       => 'Usuari',
  'agent-create-add-agents'       => 'Afegir Agents',
  'agent-create-no-users'         => 'No hi ha cap compte d\'usuari, primer cal crear-ne un.',
  'agent-store-ok'                => 'L\'usuari ":name" s\'ha afegit com a agent',
  'agent-updated-ok'              => 'L\'agent ":name" s\'ha actualitzat correctament',
  'agent-excluded-ok'            => 'L\'agent ":name" s\'ha exclòs',
  
  'agent-store-error-no-category' => 'Per afegir un agent cal marcar com a mínim una categoria',

  // $admin_route_path/agent/edit
  'agent-edit-title'                 => 'Permisos d\'usuari per a :agent',
  'agent-edit-table-category'        => 'Categoria',
  'agent-edit-table-agent'           => 'Permisos d\'agent',
  'agent-edit-table-autoassign'      => 'Tiquets nous auto.',
  
// $admin_route_path/administrators/____
  'administrator-index-title'                   => 'Gestió d\'Administradors',
  'btn-create-new-administrator'                => 'Crear nou administrador',
  'administrator-index-no-administrators'       => 'No hi ha administradors, ',
  'administrator-index-create-new'              => 'Afegir administradors',
  'administrator-create-title'                  => 'Afegir Administrador',
  'administrator-create-add-administrators'     => 'Afegir Administradors',
  'administrator-create-no-users'               => 'No hi ha cap compte d\'usuari, primer cal crear-ne un.',
  'administrator-create-select-user'            => 'Tria comptes d\'usuari per a utilitzar-se com administradors',

// $admin_route_path/category/____
  'category-index-title'          => 'Gestió de Categories',
  'btn-create-new-category'       => 'Crear nova categoria',
  'category-index-no-categories'  => 'No hi ha categories, ',
  'category-index-create-new'     => 'crear nova categoria',
  'category-index-js-delete'      => 'Estàs segur/a que vols eliminar la categoria: ',
  'category-index-email'          => 'Remitent de notificacions',
  'category-index-reasons'        => 'Raons tancament',
  'category-index-tags'           => 'Etiquetes',
  'category-create-title'         => 'Crear Nova Categoria',
  'category-create-name'          => 'Nom',
  'category-create-email'         => 'Remitent de notificacions',
  'category-email-origin'         => 'Origen',
  'category-email-origin-website' => 'Lloc web',
  'category-email-origin-tickets' => 'Email general de tiquets',
  'category-email-origin-category'=> 'Aquesta categoria',
  'category-email-from'           => 'De',
  'category-email-name'           => 'Nom',
  'category-email'                => 'E-mail',
  'category-email-reply-to'       => 'Respostes a',
  'category-email-default'        => 'Predeterminat',
  'category-email-this'           => 'Aquesta bústia',
  'category-email-from-info'      => '"From": Remitent utilitzat a totes les notificacions en aquesta categoria',
  'category-email-reply-to-info'  => '"Reply to": Correu de destinació per a les respostes als e-mail de notificació',
  'category-email-reply-this-info'=> 'La especificada més amunt',
  'category-create-color'         => 'Color',
  'category-create-new-tickets'   => 'Qui pot crear tiquets',
  'category-create-new-tickets-help'   => 'Nivell mínim a la categoria per a crear tiquets',
  'category-edit-title'                => 'Editar Categoria: :name',  
  'category-edit-closing-reasons'      => 'Tancaments de tiquet',
  'category-edit-closing-reasons-help' => 'Opcions que l\'usuari haurà de triar quan tanqui un tiquet',
  'category-edit-reason'          => 'Raó de tancament',
  'category-edit-reason-label'    => 'Raó',
  'category-edit-reason-status'   => 'Estat',
  'category-delete-reason'        => 'Eliminar raó',
  'category-edit-new-tags'        => 'Etiq. noves',
  'category-edit-current-tags'    => 'Etiq. actuals',
  'category-edit-tag'             => 'Editar etiqueta',
  'category-edit-tag-background'  => 'Fons',
  'category-edit-tag-text'        => 'Text',

  // Category form validation
  'category-reason-is-empty'      => 'La raó de tancament :number no té text',
  'category-reason-too-short'     => 'La raó de tancament :number amb el nom ":name" requereix :min caràcters',
  'category-reason-no-status'     => 'La raó de tancament :number amb el nom ":name" requereix un estat definit',
  'category-tag-not-valid-format' => 'L\'etiqueta ":tag" no té un format vàlid',

// $admin_route_path/member/____
  'member-index-title'            => 'Gestió d\'usuaris Membres',
  'member-index-help'             => 'Els membres son tots els usuaris registrats a la base de dades. L\'administrador d\'aquest lloc web pot haver filtrat la llista',
  'member-index-empty'            => 'No s\'ha trobat usuaris registrats. Si us plau, revisa si hi ha algun error a la vista de la base de dades "panichd_members"',
  'member-modal-update-title'     => 'Actualitzar usuari membre',
  'member-modal-create-title'     => 'Crear usuari membre',
  'member-delete-confirmation'    => 'Estàs segur que vols eliminar l\'usuari de la base de dades?',
  'member-password-label'         => 'Contrasenya',
  'member-new-password-label'     => 'Contrasenya nova (opcional)',
  'member-password-repeat-label'  => 'Repetir contrasenya',
  'member-added-ok'               => 'L\'usuari membre ":name" s\'ha creat correctament',
  'member-updated-ok'             => 'L\'usuari membre ":name" s\'ha actualitzat correctament',
  'member-deleted'                => 'L\'usuari membre ":name" s\'ha ELIMINAT',
  
// $admin_route_path/priority/____
  'priority-index-title'          => 'Gestió de prioritats',
  'priority-index-help'           => 'Pots canviar l\'ordre de les prioritats arrosegant les files d\'aquesta taula. Aquest ordre s\'utilitzarà també a la llista de tiquets quan es seleccioni',
  'btn-create-new-priority'       => 'Crear nova prioritat',
  'priority-index-no-priorities'  => 'No hu ha prioritats, ',
  'priority-index-create-new'     => 'crear nova prioritat',
  'priority-index-js-delete'      => 'Esteu segur que voleu eliminar la prioritat?: ',
  'priority-create-title'         => 'Crear prioritat nova',
  'priority-create-name'          => 'Nom',
  'priority-create-color'         => 'Color',
  'priority-edit-title'           => 'Editar prioritat: :name',
  'priority-delete-title'         => 'Eliminar prioritat: :name',
  'priority-delete-warning'           => 'Hi ha <span class="modal-tickets-count"></span> tiquets que utilitzen aquesta prioritat. Has d\'indicar-ne una de nova per a tots ells',
  'priority-delete-error-no-priority' => 'Cal indicar una prioritat nova per als tiquets que utilitzen la prioritat ":name"',

// $admin_route_path/status/____
  'status-index-title'            => 'Gestió d\'estats',
  'btn-create-new-status'         => 'Crear nou estat',
  'status-index-no-statuses'      => 'No hi ha estats,',
  'status-index-create-new'       => 'Crear nou estat',
  'status-index-js-delete'        => 'Esteu segur que voleu eliminar l\'estat?: ',
  'status-create-title'           => 'Crear nou estat',
  'status-create-name'            => 'Nom',
  'status-create-color'           => 'Color',
  'status-edit-title'             => 'Editar Estat: :name',
  'status-delete-title'           => 'Eliminar l\'estat ":name"',
  'status-delete-warning'         => 'Hi ha <span class="modal-tickets-count"></span> tiquets que utilitzen aquest estat. Has d\'indicar-ne un de nou per a tots ells',
  'status-delete-error-no-status' => 'Cal indicar un estat nou per als tiquets que utilitzen l\'estat ":name"',

// $admin_route_path/notice/____
  'notice-index-title'         => 'Gestió d\'avisos a departaments',
  'btn-create-new-notice'      => 'Afegir avís',
  'notice-index-empty'         => 'No hi ha avisos configurats.',
  'notice-index-owner'         => 'Propietari',
  'notice-index-email'         => 'E-mail d\'avís',
  'notice-index-department'    => 'Avís visible per a',
  'notice-modal-title-create'   => 'Afegir un avís a departament',
  'notice-modal-title-update'   => 'Actualitzar un avís a departament',
  'notice-saved-ok'             => 'Avís desat correctament',
  'notice-deleted-ok'           => 'Avís eliminat',
  'notice-index-js-delete'      => 'Estàs segur/a que vols eliminar aquest avís?',
  'notice-index-help'           => 'Quan es crei un tiquet indicant algun d\'aquests propietaris, passarà dues coses:<br /><br /><p>
  	<ol><li>S\'enviarà un correu electrònic al <b>propietari</b>, amb una plantilla de correu específica.</li><li>Mentre el tiquet estigui <b>obert</b>, els usuaris del mateix departament veuran el tiquet com un <b>avís</b> quan vagin al menú de crear tiquet.</li></ol></p>',
  'notice-index-owner-alert'    => 'Un usuari normal, quan crei un nou tiquet, no podrà veure cap usuari llistat aquí', 
  
// $admin_route_path/configuration/____
  'config-index-title'            => 'Paràmetres de configuració',
  'config-index-subtitle'         => 'configuració',
  'btn-create-new-config'         => 'Afegir nova configuració',
  'config-index-no-settings'      => 'No hi ha configuracions,',
  'config-index-initial'          => 'Inicial',
  'config-index-tickets'          => 'Tiquets',
  'config-index-notifications'    => 'Notificacions',
  'config-index-permissions'      => 'Permisos',
  'config-index-editor'           => 'Editor',
  'config-index-other'            => 'Altres',
  'config-create-title'           => 'Crear: Nou Configuració Global',
  'config-create-subtitle'        => 'Crear Configuració',
  'config-edit-title'             => 'Editar: Configuració Global',
  'config-edit-subtitle'          => 'Editar configuració',
  'config-edit-id'                => 'Id',
  'config-edit-slug'              => 'Concatenat', //Revisar
  'config-edit-default'           => 'Valor per defecte',
  'config-edit-value'             => 'Valor configurat',
  'config-edit-language'          => 'Idioma',
  'config-edit-unserialize'       => 'Obtenir els valors de la matriu, i canviar els valors',
  'config-edit-serialize'         => 'Obtenir la cadena serialitzada dels valors modificats (per ser introduït en el camp)',  //Get the serialized string of the changed values (to be entered in the field)
  'config-edit-should-serialize'  => 'Cadena serialitzada', //Revisar Serialize
  'config-edit-eval-warning'      => 'When checked, the server will run eval()!
  									  Don\'t use this if eval() is disabled on your server or if you don\'t exactly know what you are doing! 
  									  Exact code executed:', //Revisar
  'config-edit-reenter-password'  => 'Torneu a introduir la contrasenya',
  'config-edit-auth-failed'       => 'La contrasenya no coincideix',
  'config-edit-eval-error'        => 'Valor no vàlid',
  'config-edit-tools'             => 'Eines:',
  'config-update-confirm'         => 'El paràmetre :name s\'ha actualitzat',

];
