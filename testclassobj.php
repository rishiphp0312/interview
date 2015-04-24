<?php

abstract class Foo
{
    static function bar()
    {
        echo "test\n";
    }
}

Foo::bar();
die;


interface IDoSomething {
    public static function doSomething();
}

class One implements IDoSomething {
    public static function doSomething() {
        echo "One is doing something\n";
    }
}

class Two extends One {
    public static function doSomething() {
        echo "Two is doing something\n";
    }
}

function example(IDoSomething $doer) {
    $doer::doSomething(); // "unexpected ::" in PHP 5.2
}

example(new One()); // One is doing something
example(new Two()); // Two is doing something



die;

interface alam
{
    const b = 'Interface constantuuu';
	protected function abccheck();
}

// Prints: Interface constant
//echo a::b;

class ball implements alam
{
   //const b = 'Interface constantuuu nano'; // cannot override
   	protected function abccheck(){
	
		echo __CLASS__;
	}

}
//echo b::b;

// This works!!!
class c1 extends ball 
{
    function testnew(){
	echo 'lala';
	}
}

echo c1::testnew();
die;
class MyClass {
   public $message = 'Hello';

   public function MyClassFunction() {
       function InnerFunction() {
          MyClass::echoSomething();
       }
       innerFunction();
	   		//  self ::echoSomething();

   }

   public function echoSomething() {
      echo $this->message; // Reports a fatal error
   }
}

$class = new MyClass;
//$class->MyClassFunction();
$class->echoSomething();

die;


class Classy {

const       STAT = 'S' ; // no dollar sign for constants (they are always static)
static     $stat = 'Static' ;
public     $publ = 'Public' ;
private    $priv = 'Private' ;
protected  $prot = 'Protected' ;

function __construct( ){  
}

public function showMe( ){
    print '<br> self::STAT: '  .  self::STAT ; // refer to a (static) constant like this
    print '<br> self::$stat: ' . self::$stat ; // static variable
   print '<br>$this->stat: '  . $this->stat ; // legal, but not what you might think: empty result
    print '<br>$this->publ: '  . $this->publ ; // refer to an object variable like this
    print '<br>' ;
}

}

$me = new Classy( ) ;
$me->showMe() ;

die;
// Assignment of an object
Class Object{
				
	public $foo="bar";

};

$objectVar = new Object();
$reference  =  & $objectVar;
$assignment =  $objectVar;

var_dump($reference);
var_dump($assignment);
$objectVar->foo = "qux";
print_r( $objectVar );
print_r( $reference );//same data slot but handles same object so changes to object will reflect in all

print_r( $assignment );//different data slot but handles same object so changes to object will reflect in all


$objectVar = null;
print_r($objectVar);
print_r($reference);//same data slot but handles same object so changes to object will reflect in all

print_r($assignment); // different data slot but handles same object it will not be null bcoz it shows different data slots


die;
//
/*
namespace NS {
    class ClassName {
    }
    
    echo ClassName::class;
}

die;
*/
class Test
{
    static public function getNew()
    {
        return new static;
    }
}

class Child extends Test
{}

$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);
var_dump($obj1);
var_dump($obj2);

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);

die;
class SimpleClass{}
$instance = new SimpleClass();

$assigned   =  $instance;
$reference  =& $instance;

$instance->var = '$assigned will have this value';
//$assigned->a =30;
//$reference->a =10;

$instance = null; // $instance and $reference become null

var_dump($instance);
var_dump($reference);
var_dump($assigned);
die;
 class B extends C {}

 class A extends B{
 
 }
  class C  {}

 //class B extends C {}

 $A = new A;
var_dump($A);
die;
class A1
{
    function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class B1
{
    function bar()
    {
        // Note: the next line will issue a warning if E_STRICT is enabled.
        A::foo();
    }
}

$a = new A();
$a->foo();

// Note: the next line will issue a warning if E_STRICT is enabled.
A::foo();
$b = new B();
$b->bar();


// Note: the next line will issue a warning if E_STRICT is enabled.
B::bar();
//B::foonew();
?>

