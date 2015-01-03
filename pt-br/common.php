<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'			=>	'ltr',	// ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'			=>	'pt-br',

// Number formatting
'lang_decimal_point'		=>	',',
'lang_thousands_sep'		=>	'.',

// Notices
'Bad request'				=>	'Erro de acesso. O link solicitado está incorreto ou desatualizado.',
'No view'					=>	'Você não tem permissão para visualizar estes fóruns.',
'No permission'				=>	'Você não tem permissão para acessar esta página.',
'CSRF token mismatch'		=>	'Não foi possível confirmar o token de segurança. A likely cause for this is that some time passed between when you first entered the page and when you submitted a form or clicked a link. If that is the case and you would like to continue with your action, please click the Confirm button. Otherwise, you should click the Cancel button to return to where you were.',
'No cookie'					=>	'You appear to have logged in successfully, however a cookie has not been set. Please check your settings and if applicable, enable cookies for this website.',


// Miscellaneous
'Forum index'				=>	'Índice do fórum',
'Submit'					=>	'Enviar',	// "name" of submit buttons
'Cancel'					=>	'Cancelar', // "name" of cancel buttons
'Preview'					=>	'Visualizar',	// submit button to preview message
'Delete'					=>	'Deletar',
'Split'						=>	'Dividir',
'Ban message'				=>	'Você está banido deste fórum.',
'Ban message 2'				=>	'O banimento expira ao fim de %s.',
'Ban message 3'				=>	'O administrador ou moderador que o baniu deixou a seguinte mensagem:',
'Ban message 4'				=>	'Por favor, dirija qualquer questionamento ao administrador do fórum em %s.',
'Never'						=>	'Nunca',
'Today'						=>	'Hoje',
'Yesterday'					=>	'Ontem',
'Forum message'				=>	'Mensagem do fórum',
'Maintenance warning'		=>	'<strong>ATENÇÃO! %s ativado.</strong> NÃO FAÇA O LOGOUT ou será incapaz de logar novamente.',
'Maintenance mode'			=>	'Modo de Manutenção',
'Redirecting'				=>	' Redirecionando…', // With space!
'Forwarding info'			=>	'Você deverá ser encaminhado automaticamente para uma nova página em %s %s.',
'second'					=>	'segundo',	// singular
'seconds'					=>	'segundos',	// plural
'Click redirect'			=>	'Clique aqui se não quiser esperar mais (ou se o seu navegador não o encaminhar automaticamente)',
'Invalid e-mail'			=>	'O endereço de e-mail informado é inválido.',
'New posts'					=>	'Novos posts',	// the link that leads to the first new post
'New posts title'			=>	'Encontrar tópicos contendo posts enviados desde a sua última visita.',	// the popup text for new posts links
'Active topics'				=>	'Tópicos ativos',
'Active topics title'		=>	'Encontrar tópicos que contenham posts recentes.',
'Unanswered topics'			=>	'Tópicos não respondidos',
'Unanswered topics title'	=>	'Encontrar tópicos que ainda não tenham sido respondidos.',
'Username'					=>	'Nome de usuário',
'Registered'				=>	'Registrado',
'Write message'				=>	'Escrever mensagem',
'Forum'						=>	'Fórum',
'Posts'						=>	'Posts',
'Pages'						=>	'Páginas',
'Page'						=>	'Página',
'BBCode'					=>	'BBCode',	// You probably shouldn't change this
'Smilies'					=>	'Smilies',
'Images'					=>	'Imagens',
'You may use'				=>	'Você pode usar: %s',
'and'						=>	'e',
'Image link'				=>	'imagem',	// This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'						=>	'escreveu',	// For [quote]'s (e.g., User wrote:)
'Code'						=>	'Código',		// For [code]'s
'Forum mailer'				=>	'%s Mailer',	// As in "MyForums Mailer" in the signature of outgoing e-mails
'Write message legend'		=>	'Escrever seu post',
'Required information'		=>	'Informação obrigatória',
'Reqmark'					=>	'*',
'Required warn'				=>	'Todos os campos em negrito devem ser preenchidos antes de enviar o formulário.',
'Crumb separator'			=>	' &rarr;&#160;', // The character or text that separates links in breadcrumbs
'Title separator'			=>	' — ',
'Page separator'			=>	'&#160;', //The character or text that separates page numbers
'Spacer'					=>	'…', // Ellipsis for paginate
'Paging separator'			=>	' ', //The character or text that separates page numbers for page navigation generally
'Previous'					=>	'Anterior',
'Next'						=>	'Próximo',
'Cancel redirect'			=>	'Operação cancelada.',
'No confirm redirect'		=>	'Nenhuma confirmação fornecida. Operação cancelada.',
'Please confirm'			=>	'Por favor, confirme:',
'Help page'					=>	'Ajuda com: %s',
'Re'						=>	'Re:',
'Page info'					=>	'(Página %1$s de %2$s)',
'Item info single'			=>	'%s: %s',
'Item info plural'			=>	'%s: %s a %s de %s', // e.g. Topics [ 10 to 20 of 30 ]
'Info separator'			=>	' ', // e.g. 1 Page | 10 Topics
'Powered by'				=>	'Powered by %s, supported by %s.',
'Maintenance'				=>	'Manutenção',
'Installed extension'		=>	'A %s extensão oficial está instalada. Copyright &copy; 2003&ndash;2012 <a href="http://punbb.informer.com/">PunBB</a>.',
'Installed extensions'		=>	'<span id="extensions-used" title="%s">%s extensões oficiais atualmente instaladas</span>. Copyright &copy; 2003&ndash;2012 <a href="http://punbb.informer.com/">PunBB</a>.',

// CSRF confirmation form
'Confirm'					=>	'Confirmar',	// Button
'Confirm action'			=>	'Confirmar ação',
'Confirm action head'		=>	'Por favor, confirme ou cancele sua última ação',

// Title
'Title'						=>	'Título',
'Member'					=>	'Membro',	// Default title
'Moderator'					=>	'Moderador',
'Administrator'				=>	'Administrador',
'Banned'					=>	'Banido',
'Guest'						=>	'Visitante',

// Stuff for include/parser.php
'BBCode error 1'			=>	'[/%1$s] encontrada sem uma [%1$s] correspondente',
'BBCode error 2'			=>	'A tag [%s] está vazia',
'BBCode error 3'			=>	'[%1$s] foi aberta dentro de [%2$s], isso não é permitido',
'BBCode error 4'			=>	'[%s] foi aberta dentro dela mesma, isso não é permitido',
'BBCode error 5'			=>	'[%1$s] encontrada sem uma [/%1$s] correspondente',
'BBCode error 6'			=>	'A tag [%s] tinha um atributo vazio',
'BBCode nested list'		=>	'Tags [list] não podem ser aninhadas',
'BBCode code problem'		=>	'Há um problema com as suas tags [code]',

// Stuff for the navigator (top of every page)
'Index'						=>	'Índice',
'User list'					=>	'Lista de usuários',
'Rules'						=>	'Regras',
'Search'					=>	'Busca',
'Register'					=>	'Registrar',
'register'					=>	'registrar',
'Login'						=>	'Login',
'login'						=>	'login',
'Not logged in'				=>	'Você não está logado.',
'Profile'					=>	'Perfil',
'Logout'					=>	'Logout',
'Logged in as'				=>	'Logado como %s.',
'Admin'						=>	'Administração',
'Last visit'				=>	'Última visita %s',
'Mark all as read'			=>	'Marcar todos os tópicos como lidos',
'Login nag'					=>	'Por favor, faça o login ou registre-se.',
'New reports'				=>	'Novos relatórios',

// Alerts
'New alerts'				=>	'Novos Alertas',
'Maintenance alert'			=>	'<strong>Modo de manutanção ativado.</strong> <em>NÃO FAÇA</em> um logout, ou não poderá entrar novamente.',
'Updates'					=>	'Atualizações do PunBB:',
'Updates failed'			=>	'The latest attempt at checking for updates against the punbb.informer.com updates service failed. This probably just means that the service is temporarily overloaded or out of order. However, if this alert does not disappear within a day or two, you should disable the automatic check for updates and check for updates manually in the future.',
'Updates version n hf'		=>	'A newer version of PunBB, version %s, is available for download at <a href="http://punbb.informer.com/">punbb.informer.com</a>. Furthermore, one or more hotfixes are available for install on the <a href="%s">Manage hotfixes</a> tab of the admin interface.',
'Updates version'			=>	'A newer version of PunBB, version %s, is available for download at <a href="http://punbb.informer.com/">punbb.informer.com</a>.',
'Updates hf'				=>	'One or more hotfixes are available for install on the <a href="%s">Manage hotfixes</a> tab of the admin interface.',
'Database mismatch'			=>	'Database version mismatch',
'Database mismatch alert'	=>	'Your PunBB database is meant to be used in conjunction with a newer version of the PunBB code. This mismatch can lead to your forum not working properly. It is suggested that you upgrade your forum to the newest version of PunBB.',

// Stuff for Jump Menu
'Go'						=>	'Ir',		// submit button in forum jump
'Jump to'					=>	'Saltar para o fórum:',

// For extern.php RSS feed
'RSS description'			=>	'Os tópicos mais recentes em %s.',
'RSS description topic'		=>	'Os posts mais recentes em %s.',
'RSS reply'					=>	'Re: ',	// The topic subject will be appended to this string (to signify a reply)

// Accessibility
'Skip to content'			=>	'Pular para o conteúdo do fórum',

// Debug information
'Querytime'					=>	'Generated in %1$s seconds (%2$s%% PHP - %3$s%% DB) with %4$s queries',
'Debug table'				=>	'Debug information',
'Debug summary'				=>	'Database query performance information',
'Query times'				=>	'Time (s)',
'Query'						=>	'Query',
'Total query time'			=>	'Total query time',

// Error message
'Forum error header'		=> 'Sorry! The page could not be loaded.',
'Forum error description'	=> 'This is probably a temporary error. Just refresh the page and retry. If problem continues, please check back in 5-10 minutes.',
'Forum error location'		=> 'The error occurred on line %1$s in %2$s',
'Forum error db reported'	=> 'Database reported:',
'Forum error db query'		=> 'Failed query:',

);
