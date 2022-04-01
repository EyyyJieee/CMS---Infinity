<?php

require_once '../utils/connect.php';
include '../utils/http.php';

$reqs = request();
$method = $_SERVER['REQUEST_METHOD'];

if(isset($reqs->q) and $reqs->q==='donations'){
    $donations = query("select * from donations order by id desc");
    return respond($donations);
}

if ($method === 'POST') {
    $img = isset($_FILES['img']) ? $_FILES['img'] : null;
    $path = 'assets/img/posts/';
    $file='';
    $data = (array)$reqs;
    if(!is_null($img)){
        $info = pathinfo($img['name']);
        if(isset($reqs->update) ?? $reqs->update){
            $file = $path . 'post_' . $data['id'] .".". $info['extension'];
            if (file_exists($file)) {
                unlink($file);
            }
            move_uploaded_file( $img['tmp_name'], $file);
            unset($data['id'], $data['img'], $data['update']);
            $data['image'] = $file;
            $updated = update('posts', $data, "id='$reqs->id'");
            return respond($updated);
        }
        unset($reqs->img);
        $last_id = insert('posts', (array)$reqs);
    
        $file = $path . 'post_' . $last_id .".". $info['extension'];
        if (file_exists($file)) {
            unlink($file);
        }
        query_noresult("update posts set image='$file' where id='$last_id'");
        move_uploaded_file( $img['tmp_name'], $file);
        return respond($last_id);
    }
}

if ($method === 'PATCH') {
    $data = (array)$reqs;
    unset($data['id']);
    $updated = update('posts', $data, "id='$reqs->id'");
    return respond($updated);
}

if ($method === 'GET') {
    $posts = query("select * from posts order by date_posted desc");
    return respond($posts);
}

if ($method === 'DELETE') {
    $image = query("select image from posts where id=".$reqs->id);
    if(!empty($image) and !is_null($image[0]['image'])){
        unlink($image[0]['image']);
    }
    query_noresult("delete from posts where id=".$reqs->id);
    return respond(['nice'=>'yeah']);
}
?>