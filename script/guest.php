<?php

require_once '../utils/connect2.php';
include '../utils/http.php';

$reqs = request();
$method = $_SERVER['REQUEST_METHOD'];

if($reqs->q==='posts'){
    $posts = query("select * from posts where draft=0 order by date_posted desc");
    return respond($posts);
}

if($reqs->q==='donate'){
    $data = (array)$reqs;

    unset($data['q'], $data['gg']);
    $id = insert('donations', $data);
    return respond($id);
}
?>