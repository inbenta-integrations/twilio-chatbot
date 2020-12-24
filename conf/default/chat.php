<?php

/**
 * DON'T MODIFY THIS FILE!!! READ "conf/README.md" BEFORE.
 */

// Inbenta Hyperchat configuration
return [
	'chat' => [
		'enabled' => false,
		'version' => '1',
		'appId' => '',
		'secret' => '',
		'roomId' => 1,             // Numeric value, no string (without quotes)
		'lang' => '',
		'source' => 3,             // Numeric value, no string (without quotes)
		'guestName' => '',
		'guestContact' => '',
		'regionServer' => '',
		'server' => '<server>',    // Your HyperChat server URL (ask your contact person at Inbenta)
		'server_port' => 443,
		'surveyId' => '',
		'queue' => [
			'active' => true
		]
	],
	'triesBeforeEscalation' => 0,
	'negativeRatingsBeforeEscalation' => 0,
	'messenger' => [
		'auht_url' => '',
		'key' => '',
		'secret' => '',
		'webhook_secret' => '' //More details at: https://help.inbenta.com/en/configuring-an-external-tickets-source/
	]
];
