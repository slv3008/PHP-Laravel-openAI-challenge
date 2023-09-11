<?php
// routes/web.php

$router->get('/', 'ChatbotController@index');
$router->post('/chatbot', 'ChatbotController@respond');


