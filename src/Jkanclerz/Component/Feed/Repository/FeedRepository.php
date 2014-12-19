<?php

namespace Jkanclerz\Component\Feed\Repository;

class FeedRepository
{
	protected $path;
	
	public function __construct($path)
	{
		$this->path = $path;
	}
	
	public function findAll()
	{
		$json = file_get_contents($this->path);
		
		return json_decode($json);
	}
}