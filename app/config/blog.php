<?php

return array(
	/*
	|--------------------------------------------------------------------------
	| Title of the Blog
	|--------------------------------------------------------------------------
	|
	| Title Displayed on all pages
	|
	*/
	'title' => 'Title of the Blog',

	/*
	|--------------------------------------------------------------------------
	| Tag Line or Site Description
	|--------------------------------------------------------------------------
	|
	| Subtitle, description, site tag line 
	| NULL if you do not want to use, other wise a String
	|
	*/
	'tag_line' => 'Tag Line/Site Description',

	/*
	|--------------------------------------------------------------------------
	| Post Count on index and RSS feed
	|--------------------------------------------------------------------------
	|
	| The post count to display per page and the number of posts to display on 
	| the rss feed
	| Must be an integer greater than 1
	|
	*/
	'post_count' => 10, 

	/*
	|--------------------------------------------------------------------------
	| Disqus Shortname
	|--------------------------------------------------------------------------
	|
	| To enable comments use add your disqus shortname or use NULL to disable 
	| comments
	|
	*/
	'disqus_shortname' => NULL,

	/*
	|--------------------------------------------------------------------------
	| Google Analytics
	|--------------------------------------------------------------------------
	|
	| To enable analytics add your GA number  or use NULL to disable
	|
	*/
	'google_analytics_number' => NULL,

	/*
	|--------------------------------------------------------------------------
	| Word Count to display for index and RSS feed
	|--------------------------------------------------------------------------
	|
	| To enable excerpts add an integer greater than 0.  To use full text use 
	| NULL
	|
	*/
	'exceprt_word_count' => NULL,

	/*
	|--------------------------------------------------------------------------
	| Do Not Edit Here
	|--------------------------------------------------------------------------
	|
	| The path to the posts and pages parent folder
	|
	*/
	'path' => realpath(app_path().'/../assets')
);