<?php
session_start();
require ('connect.php');

/*display values in screen function*/
/*to be deleted: Used in development*/
function dd($values)
{
echo "<pre>",print_r($values, true), "</pre";
    die();


}

/*execute queries function*/
function executeQuery($sql, $data)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt ->bind_param($types, ... $values);
    $stmt->execute();
    return $stmt;

}

// select all values in record
function selectAll($table, $conditions = [])
{
    global $conn;

    $sql = "SELECT * from $table";
    if(empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }else{
        //return records that match conditions provided...
        //$sql = "SELECT * from users where firstname = 'David' and admin = '1'";
        $i = 0;
        foreach ($conditions as $key => $value){
            if ($i === 0){
                $sql = $sql . " WHERE $key = ?";
            } else{
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }


}


/*select one record from db function*/
function selectOne($table, $conditions)
{
    global $conn;
    $sql = "SELECT * from $table";
    //return records that match conditions provided...
    //$sql = "SELECT * from users where firstname = 'David' and admin = '1'";
    $i = 0;
    foreach ($conditions as $key => $value){
        if ($i === 0){
            $sql = $sql . " WHERE $key = ?";
        } else{
            $sql = $sql . " AND $key = ?";
        }
        $i++;
    }

    $sql = $sql . " LIMIT 1";

    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;


}

/*create items function*/
function create($table, $data)
{
    global $conn;
    /*default methods of inserting queries
    $sql = 'INSERT INTO users(admin,first_name,second_name,national_id,phone_number,email,password) VALUES (? ,? ,? ,? ,? ,? ,? )';
    $sql = 'INSERT INTO users SET admin = ?,first_name=?,second_name=?,national_id=?,phone_number=?,email=?,password=?';

    //note the question marks are place holders where values are to be injected. This prevents sql injection


    */
    $sql = " INSERT INTO $table SET ";

    $i = 0;
    foreach ($data as $key => $value){
        if ($i === 0){
            $sql = $sql . " $key = ?";
        } else{
            $sql = $sql . ", $key = ?";
        }
        $i++;

    }

    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;


}

/*update function*/
function update($table, $id, $data)
{
    global $conn;
    //$sql = "UPDATE users SET admin = ?,first_name=?,second_name=?,national_id=?,phone_number=?,email=?,password=? WHERE id=?"

    $sql = " UPDATE $table SET ";

    $i = 0;
    foreach ($data as $key => $value)
    {
        if ($i === 0){
            $sql = $sql . " $key=?";
        }else{
            $sql = $sql . ", $key=?";
        }
        $i++;
    }
    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;//adds key value to the data to be updated
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows;



}

/*delete function*/
function delete($table, $id)
{
    global $conn;
    //$sql = "DELETE FROM users where id = ?";
    $sql = "DELETE FROM $table WHERE id=?";
    $stmt = executeQuery($sql,['id' => $id]);
    return $stmt->affected_rows;
}







