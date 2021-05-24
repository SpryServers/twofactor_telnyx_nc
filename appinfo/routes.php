<?php

declare(strict_types=1);
/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> OCA\TwoFactorTelnyx\Controller\PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */
 return [
 	'routes' => [
 		[
 			'name' => 'settings#startVerification',
 			'url' => '/settings/enable',
 			'verb' => 'POST'
 		],
 		[
 			'name' => 'settings#revokeVerification',
 			'url' => '/settings/disable',
 			'verb' => 'DELETE'
 		],
 		[
 			'name' => 'settings#finishVerification',
 			'url' => '/settings/validate',
 			'verb' => 'POST'
 		]
 	]
 ];
