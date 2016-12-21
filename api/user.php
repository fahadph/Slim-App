<?php
 $app->get('/', function ($request, $response, $args) {
     $db = new DbHandler();
     $result = $db->getOneRecord('select * from login');
     echo json_encode($result);
 });
