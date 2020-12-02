<?php

interface iTemplate
{
	public function setVariable($name,$var);
	public function getHTML($template);
}

class Template implements iTemplate
{
	private $vars=array();
	public function setVariable($name,$var)
	{
		$this->vars[$name]=$var;
	}
	public function getHTML($template)
	{
		foreach ($$this->vars as $name => $value) 
		{
			$template=str_replace('{',.$name.'}',$value,$template);
		}
		return $template;
	}

}

?>