<?php
include_once('models/PostModel.php');

Class PostController{
	public function getPost(){
		include_once('views/PostView.php');
		$postModel = new PostModel();
		$rows = $postModel->getPost();
		$postView = new PostView();
		$postView = $postView->show($rows);
	}
	public function addPost(){
		include_once('views/PostView.php');
		$postView = new PostView();
		$postView = $postView->add();
	}
	public function doAdd(){
		
			$title = $_POST['title'];
		    $description = $_POST['description'];
		    $status = $_POST['status'];
		    if($_FILES['image']['name']==''){
                $error_image='<span style="color: red;">Ảnh không hợp lệ</span>';
            }
            else{
                $image=$_FILES['image']['name'];
                $tmp_name=$_FILES['image']['tmp_name'];
            }
            move_uploaded_file($tmp_name, 'templates/image/'.$image);

		    $row = array(
		    	'title'=>$title,
		    	'description'=>$description,
		    	'status'=>$status,
		    	'image'=>$image,
		    );
		    
	        $postModel = new PostModel();
	        $rows = $postModel->addPost($row);
        
        
       
    }

    public function deletePost($id_post){
    	include_once('views/PostView.php');
    	$postModel = new PostModel();
	    $postModel->deletePost($id_post);
    }
	
    public function editPost(){
		include_once('views/PostView.php');
		$id_post = $_GET['id_post'];
		$postModel = new PostModel();
		$post = $postModel->getPostEdit($id_post);
    	$postView = new PostView();
		$postView = $postView->edit($post);
	}
	
    public function doEdit(){
    	$id_post = $_GET['id_post'];
		$title=$_POST['title'];
        $description=$_POST['description'];
        $status=$_POST['status'];
        if($_FILES['image']['name']==''){
            $image=$_POST['image'];
        }
        else{
            $image=$_FILES['image']['name'];
			$tmp_name=$_FILES['image']['tmp_name'];
			move_uploaded_file($tmp_name, 'templates/image/'.$image);
        }
		    
	    $postModel = new PostModel();
	    $postModel->editPost($id_post, $title, $description, $status, $image);
    }
}
?>