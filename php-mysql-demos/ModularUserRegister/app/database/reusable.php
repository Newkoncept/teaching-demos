<?php

include_once "dbh.php";

function dd($value) {
    echo "<pre>". print_r($value, true) ."</pre>";
    die();
}

function executeQuery($sql, $data) {
    global $conn;

    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat("s", count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

function selectAll($table, $conditions = []){
    $sql = "SELECT * FROM $table";

    if(empty($conditions)) {
        global $conn;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $result;
    } else {
        $i = 0;
        foreach ($conditions as $key => $value) {
            if($i === 0) {
                $sql .= " WHERE $key = ?";
            } else {
                $sql .= " AND $key = ?";
            }
            $i++;
        }
        
        $stmt = executeQuery($sql, $conditions);
        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $result;
    }
}

function selectOne($table, $conditions){
    $sql = "SELECT * FROM $table";

    $i = 0;
    foreach ($conditions as $key => $value) {
        if($i === 0) {
            $sql .= " WHERE $key = ?";
        } else {
            $sql .= " AND $key = ?";
        }
        $i++;
    }

    $sql .= " LIMIT 1";
    $stmt = executeQuery($sql, $conditions);
    $result = $stmt->get_result()->fetch_assoc();
    return $result;
}

function create($table, $data){
    // $SQL = INSERT INTO TABLE SET KEY=?, KEY=?, KEY=?;
    
    $sql = "INSERT INTO $table SET";

    $i = 0;
    foreach ($data as $key => $value) {
        if($i === 0) {
            $sql .= " $key = ?";
        } else {
            $sql .= ", $key = ?";
        }
        $i++;
    }

    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}

function update($table, $id, $data){
    // $SQL = UPDATE TABLE SET KEY=?, KEY=?, KEY=? WHERE id=?;
    
    $sql = "UPDATE $table SET";

    $i = 0;
    foreach ($data as $key => $value) {
        if($i === 0) {
            $sql .= " $key = ?";
        } else {
            $sql .= ", $key = ?";
        }
        $i++;
    }

    $sql .= " WHERE id = ?";
    $data['id'] = $id;

    $stmt = executeQuery($sql, $data);
    $id = $stmt->affected_rows;
    return $id;
}

function delete($table, $id){
    // $SQL = DELETE FROM TABLE WHERE id=?;
    
    $sql = "DELETE FROM $table WHERE id = ?";

    $stmt = executeQuery($sql, ['id' => $id]);
    $id = $stmt->affected_rows;
    return $id;
}