<?php
    require_once('database/init.php');
    require_once('database/books.php');
    
    $userID = 202005393;

    $wantToReadBooks = getWantToReadBooks($userID);
    //var_dump($wantToReadBooks);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $action = isset($_POST['action']) ? $_POST['action'] : '';
        $page_num = $_POST['page_num'];
        //var_dump($page_num);
        

        if ($action === 'remove_book') {
            $bookID = isset($_POST['book_id']) ? $_POST['book_id'] : '';
            //var_dump($bookID);
            removeFromWantToRead($userID, $bookID);
            header("Location: want_to_read.php");
            exit();
        }
    }


    //echo ("This is the Want to read Library");

    include_once('templates/header.php');
    include_once('templates/want_to_read_tpl.php');
?>