<?php 
    header('Content-Type: application/json');

    require_once 'db.php';

    $sqlQuery = "SELECT * FROM student ORDER BY id";
    $result = mysqli_query($conn, $sqlQuery);

    $data = array();
    foreach ($result as $row) {
        $data[] = $row;
    }

    mysqli_close($conn);

    echo json_encode($data);

?>