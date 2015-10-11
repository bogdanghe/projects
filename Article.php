<?php

namespace Main\Article;

use Main\Article\Article;

class Article{
	public $title;
	public $author;
	public $date;
	public $category;
	
	public function __construct($title, $author, $date, $category=0){
	$this->title=$title;
	$this->author=$author;
	$this->date=$date;
	$this->category=$category;
	
	}
}

