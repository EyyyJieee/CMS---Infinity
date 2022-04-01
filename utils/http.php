<?php

function respond($data){
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

function request($key=null){
    $reqs=[];
    foreach($_REQUEST as $k=>$v){
      $reqs[$k] = $v;
    }
    if(empty($reqs) and 'GET'!==strtoupper($_SERVER['REQUEST_METHOD'])){
      $patch = array();
      parse_raw_http_request($patch);
      $reqs = $patch;
      if(is_array($patch)){
        foreach($reqs as $k=>$v){
          $reqs[$k] = $v;
        }
      }
    }
    return (object)$reqs;
}

function parse_raw_http_request(array &$a_data){
  $input = file_get_contents('php://input');

  preg_match('/boundary=(.*)$/', $_SERVER['CONTENT_TYPE'], $matches);
  $boundary = $matches[1];

  $a_blocks = preg_split("/-+$boundary/", $input);
  array_pop($a_blocks);

  foreach ($a_blocks as $id => $block){
    if (empty($block)){
      continue;
    }

    if (strpos($block, 'application/octet-stream') !== FALSE){
      preg_match("/name=\"([^\"]*)\".*stream[\n|\r]+([^\n\r].*)?$/s", $block, $matches);
    }else{
      preg_match('/name=\"([^\"]*)\"[\n|\r]+([^\n\r].*)?\r$/s', $block, $matches);
    }
    $a_data[$matches[1]] = $matches[2];
  }        
}

?>