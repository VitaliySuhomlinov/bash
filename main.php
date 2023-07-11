<?php
class StoragePostIdForAmazon
{

	private static $instances;
	private static $post_id;

	protected function __construct() { }

	protected function __clone() { }

	public function __wakeup()
	{
    	throw new \Exception("Cannot unserialize a singleton.");
	}

	public static function getInstance(): StoragePostIdForAmazon
	{
    	if (!isset(self::$instances)) {
        	self::$instances = new static();
    	}

    	return self::$instances;
	}

	public function setPostId($post_id)
	{
    	self::$post_id = $post_id;
	}

	public function getPostId()
	{
    	return self::$post_id;
	}

}


