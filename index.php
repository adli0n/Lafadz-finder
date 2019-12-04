<?php 
    include "tema/header.php";
        if (isset($_GET ['page'])){
            $page = $_GET['page'];

        switch ($page) {
            case 'search':
                include "search.php";
                break;
            default:
                include "tema/404.php";
                break;
        }
    } else {
        include "web/index.php";
    }
    include "tema/footer.php";
?>