<?php
    function getUser() {
        require('connect.php');

        $getData = 'SELECT * FROM users';
        $runQuery = $pdo->query($getData);

        $result = array();

        while($row = $runQuery->fetch(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        }

        return $result;
    }
