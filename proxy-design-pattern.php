<?php
interface FileInterface
{

}
class RealFile implements FileInterface
{
   private $filename;
   private $fileContent;
   public function __construct($filename)
    {
        $this->fileName=$fileName;
        $this->readfile();	
    }

   public function readFile()
    {
        $this->fileContent=file_get_contents($this->filename);	
    }

   public function content()
    {
    	return $this->fileContent;
    }
}


class ProxyFile implements FileInterface
{
    private $fileName;
    private $realFileObject;

    public function __construct($fileName)	
    {
    	 $this->fileName=$fileName;	
    }

    public function content()
    {
    	if(!$this->realFileObject)
    	{
    	$this->realFileObject=new RealFile($this->fileName);	     
    	 // Lazy load the file using the RealFile class
    	}
    	return $this->realFileObject->content();
    }


}
$realFile = new RealFile('/path/to/file.jpg');
var_dump(memory_get_usage()); // ~5Mb
$realFile->content();
var_dump(memory_get_usage()); // ~5Mb

$realFile->content();
var_dump(memory_get_usage()); // ~5Mb

$proxyFile = new ProxyFile('/path/to/file.jpg');
var_dump(memory_get_usage()); // ~350Kb
$proxyFile->content();
var_dump(memory_get_usage()); // ~5Mb

$proxyFile->content();
var_dump(memory_get_usage()); // ~5Mb

?>