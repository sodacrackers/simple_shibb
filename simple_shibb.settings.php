<?php



$settings = array(

	'hosts' => array( 

		'*' => array(
		
			'login_url' => '/Shibboleth.sso/DS', 
			'logout_url' => '/Shibboleth.sso/Logout',
			'force_https' => false, 
			'login_text' => 'Login with your UW NetID',
			'username_variable' => 'uwnetid',
			'email_variable' => 'uweduemail',
			'link_accounts' => true, 
			'debug_path' => false, 
			//'enable_passive' => false, 
			'logout_expired_sessions' => false, 
		), 

	),

);




