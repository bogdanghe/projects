<?php

namespace Maine\XMLWriter;

use Main\Writer\Writer;
use Main\Article\Article;

class XMLWriter implements Writer{

	public function write(Article $obj){
		
		$ret='<article>';
		$ret.='<title>'.$obj->title.'</title>';	
		$ret.='<author>'.$obj->author.'</author>';
		$ret.='<date>'.$obj->date.'</date>';
		$ret.='<category>'.$obj->category.'</category>';
		$ret.='</article>';
		
		return $ret;
	}
}