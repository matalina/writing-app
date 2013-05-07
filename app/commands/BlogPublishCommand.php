<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class BlogPublishCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'blog:publish';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Publish your blog after adding to content.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		$path = Config::get('blog.path');
		$index_path = $path.'/index.json';
		$post_path = $path.'/posts/';
		$page_path = $path.'/pages/';

		$index_file = File::get($index_path, true);
		$index_items = json_decode($index_file);

		$this->info();
	}

}