<?php

$f3=require('lib/base.php');

$f3->config('config.ini');

$f3->route('GET /',
    function($f3) {
        $f3->set('content','home.html');
        echo Template::instance()->render('index.html');
    }
);

$f3->route('GET /about',
	function($f3) {
		$f3->set('content','about.html');
		echo Template::instance()->render('index.html');
	}
);

$f3->route('GET /basket',
	function($f3) {
		$f3->set('content','basket.html');
		echo Template::instance()->render('index.html');
	}
);

$f3->run();
