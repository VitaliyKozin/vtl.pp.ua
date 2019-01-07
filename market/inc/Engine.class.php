<?
class Engine{
	public $page=array();
	function __construct(){
		$query="SELECT * FROM `pages` WHERE `url`='".$_SERVER['REQUEST_URI']."'";
		$result=mysql_query($query);
		if(mysql_num_rows($result)>0){
			$this->page=mysql_fetch_assoc($result);
		} /* echo $_SERVER['REQUEST_URI']; */  //Для проверки адреса
	}
}

?>