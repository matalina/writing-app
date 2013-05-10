<?php

class AdminController extends \BaseController {

	/**
	 * Displays Login form
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Logs in the user
	 *
	 * @return Response
	 */
	public function login()
	{

	}

	/**
	 * Log User out
	 *
	 * @return Response
	 */
	public function logout()
	{

	}

	/**
	 * Display New Post/Page Editor
	 * 
	 * @param string $slug base file name of the file to be edited
	 * @param string $type post, page or draft
	 * @return Response
	 */
	public function newPostPage($slug, $type = 'post')
	{

	}

	/**
	 * Saves Post/Page
	 * 
	 * @param boolean $create false to edit existing post, true to create new post
	 * @return Response
	 */
	public function savePostPage($create = false)
	{

	}

	/**
	 * Display Edit page/post Editor
	 *
	 * @param string $slug base file name of the file to be edited
	 * @param string $type post, page or draft
	 * @return Response
	 */
	public function editPostPage($slug, $type = 'post') 
	{

	}

	/**
	 * Deletes Post/page 
	 *
	 * @param string $slug base file name of the file to be edited
	 * @param string $type post, page or draft
	 * @return Response
	 */
	public function deletePostPage($slug, $type = 'post')
	{

	}

	/**
	 * Display Menu Editor
	 *
	 * @return Response
	 */
	public function pageMenu()
	{

	}

	/**
	 * Save Menu Order
	 *
	 * @return Response
	 */
	public function saveMenu()
	{

	}

	/**
	 * Get all posts and displays them
	 *
	 * @return Response
	 */
	public function listPosts()
	{

	}

	/**
	 * Gets all pages and displays them
	 *
	 * @return Response
	 */
	public function listPages()
	{

	}

	/**
	 *Gets all drafts and displays them
	 *
	 * @return Response
	 */
	public function listDrafts()
	{

	}

}