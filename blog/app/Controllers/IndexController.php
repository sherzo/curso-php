<?php

namespace App\Controllers;

use App\Models\BlogPost;

class IndexController extends BaseController {

	public function getIndex($page = 1)
	{
		$blogPosts = BlogPost::query()->orderBy('id', 'desc')->simplePaginate(2);

		return $this->render('index.twig', ['blogPosts' => $blogPosts]);
	}

	public function getPost($postId)
	{
		$blogPost = BlogPost::find($postId);
		if($blogPost){
			return $this->render('post.twig',[
				'blogPost' => $blogPost
			]);
		}else{
			header('Location:' . BASE_URL . '/');
		}
	}
}