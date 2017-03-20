<?php

$router->get('/orders', 'Admin\OrdersController@apiIndex');
$router->post('/orders/pdf', 'Admin\OrdersController@apiOrdersPDF');
$router->post('/orders/emails', 'Admin\OrdersController@apiEmails');
$router->post('/orders/special', 'Admin\OrdersController@apiSpecial');
$router->post('/orders/hide', 'Admin\OrdersController@apiHide');