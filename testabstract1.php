<?php
class A {
    //    public $x ;
    var $x;
	function initialval(){
	   $this->x=34;
	}
	function getval(){
	  // self :: initialval();
	  echo $this->x;
	}
}  

$objssh = new A;
$objssh->initialval();
$objssh->getval();

//$b = $a; 
/*class A{

	public  $x;
	
	function initialval(){
	   $this->x=34;
	}
	function getval(){
	  echo $this->x;
	}

}

*/

$objhssh = new A;
//$objssh->initialval();
//$objssh->getval();

die;

?>