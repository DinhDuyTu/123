<?php
include_once('config/connect&database.php');
include_once('controllers/PostController.php');
$postController = new PostController();
        if (isset($_GET['action'])) {
            if($_GET['action']=="list"){
            	$postController->getPost();
            }
            elseif($_GET['action']=="add"){
            	$postController->addPost();
            }
            elseif ($_GET['action']=="doAdd") {
            	$postController->doAdd();
                header('location: index.php?action=list');
            }
            elseif($_GET['action']=="delete"){
            	$id_post = $_GET['id_post'];
            	$postController->deletePost($id_post);
            	header('location: index.php?action=list');
            }
            elseif($_GET['action']=="edit"){
            	$id_post = $_GET['id_post'];
            	$postController->editPost();
            }
            elseif($_GET['action']=="doEdit"){
            	$postController->doEdit();
                header('location: index.php?action=list');
            }
        }
?>