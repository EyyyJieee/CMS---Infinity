<?php

function query_noresult($query) {
	global $conn;
	 
	if($conn->query($query) === false) {
	  trigger_error('Wrong SQL: ' . $query . ' Error: ' . $conn->error, E_USER_ERROR);
	} else {
	  $affected_rows = $conn->affected_rows;
	}
}

function query_hasrow($query) {
    global $conn;

    $rs=$conn->query($query);

    if($rs === false) {
    trigger_error('Wrong SQL: ' . $query . ' Error: ' . $conn->error, E_USER_ERROR);
    } else {
    $rows_returned = $rs->num_rows;
    }
    return $rows_returned;
}

function query_row($query) {
  global $conn;
  $rs=$conn->query($query);
  $rs->data_seek(0);
  $row = $rs->fetch_assoc();
  return $row;
}

function query($query) {
    global $conn;
    //echo $query;
    $rs=$conn->query($query);
        if($rs === false) {
    trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
    } else {
    $rows_returned = $rs->num_rows;
    }

    $data = array();
    $rs->data_seek(0);
    while ( $row = $rs->fetch_assoc() ) {
    $data[] = $row;
    }
    return $data;
}

function insert($table,$data) {
    $sql_key="";
	$sql_value="";
	$sql="";
	foreach ($data as $key=>$value) {
        $sql = $sql . $key . "='". $value . "',";		
	}
	$sql_key = "insert into $table set $sql";
	$sql_string=substr($sql_key,0,strlen($sql_key)-1);
	global $conn;
	
	if($conn->query($sql_string) === false) {
	  trigger_error('Wrong SQL: ' . $sql_string . ' Error: ' . $conn->error, E_USER_ERROR);
	} else {
	  $last_inserted_id = $conn->insert_id;
	  $affected_rows = $conn->affected_rows;
	}	
	return $last_inserted_id;
 	
}

function update($table,$data,$where) {
  $sql_key="";
  $sql="";
  foreach ($data as $key=>$value) {
    $sql = $sql . $key . "='". $value . "',";	
  }
  $sql_key = "update $table set $sql";
  $sql_key=substr($sql_key,0,strlen($sql_key)-1);
  $sql_string = $sql_key . " where " . $where;
  global $conn;
  if($conn->query($sql_string) === false) {
    trigger_error('Wrong SQL: ' . $sql_string . ' Error: ' . $conn->error, E_USER_ERROR);
  } else {
    return $conn->affected_rows;
  }
  return 1;
}
?>