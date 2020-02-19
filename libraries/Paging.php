<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paging{
	private $paging="";
	private $pagefilters="";
	
	public function createpaging($url,$pages,$pagefilters){
		$this->pagefilters=http_build_query($pagefilters);
		if($this->pagefilters!=""){
			$this->pagefilters="?".$this->pagefilters;
		}
		$this->paging.="<ul class='pagination pagination1'>";
		//prev
		for($i=1;$i<=$pages;$i++){
			$this->paging.=$this->createlinks($url,$i);
		}
		//next
		$this->paging.="</ul>";
		return $this->paging;
	}
	
	public function createlinks($url,$page){
		$link="<li class='page-item'>";
		$link.="<a href='$url/page/$page/".$this->pagefilters."' class='page-link'>$page</a>";
		$link.="</li>";
		return $link;
	}
	
}
?>