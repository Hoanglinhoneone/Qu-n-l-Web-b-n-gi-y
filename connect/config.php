<?php
        session_start();
        $server ='localhost';
        $user = 'root';
        $pass = '';
        $database = 'bangiay';

        $conn = new mysqli($server, $user, $pass, $database);
        
?>