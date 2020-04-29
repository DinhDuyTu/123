<?php
Class PostView{
	public function show($rows){
		include_once('templates/posts.php');
	}
	public function add(){
		include_once('templates/add_post.php');
	}
	public function edit($post){
		include_once('templates/edit_post.php');
	}
}
?>