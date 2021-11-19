<?php

require_once(__Dir__."/router.php");

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/', 'index.php');
get('/all-phones', 'all-phones.php');
get('/mb-login', 'login.php');
// any('/404', '404.php');
