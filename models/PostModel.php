<?php
Class PostModel{
	public function getPost(){
		$connect = mysqli_connect("localhost","root","","oceansoft_test");
		if(mysqli_connect_errno()){
			echo "Failed to connect to". mysqli_connect_error();
		}
		$query = $connect->query("SELECT * FROM posts");
		$rows = array();
		if($query->num_rows > 0){
			while($row = mysqli_fetch_assoc($query)){
				$rows[] = $row;
			}
		}
		return $rows;
	}

	public function addPost($row){
		$connect = mysqli_connect("localhost","root","","oceansoft_test");
		if(mysqli_connect_errno()){
			echo "Failed to connect to". mysqli_connect_error();
		}

		$sql = "INSERT INTO posts(
        title,description,status,image,create_at) VALUES ('$row[title]','$row[description]','$row[status]','$row[image]',now())";

		$query = $connect->query($sql);
		return $query;

	}

	public function deletePost($id_post){
		$connect = mysqli_connect("localhost","root","","oceansoft_test");
		if(mysqli_connect_errno()){
			echo "Failed to connect to". mysqli_connect_error();
		}
		$sql="DELETE FROM posts WHERE id_post = '$id_post'";
		$query = $connect->query($sql);
		return $query;


	}
	public function editPost(){
		$connect = mysqli_connect("localhost","root","","oceansoft_test");
		if(mysqli_connect_errno()){
			echo "Failed to connect to". mysqli_connect_error();
		}
		$sql="UPDATE posts SET title='$title',description='$description',status='$status',image='$image',update_at=now() WHERE id_post='$id_post'";
		$query = $connect->query($sql);
		return $query;
	}
}


?>