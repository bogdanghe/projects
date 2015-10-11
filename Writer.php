<?php

namespace Main\Writer;

use Main\Article\Article;

interface Writer{

	public function write(Article $obj);
}

