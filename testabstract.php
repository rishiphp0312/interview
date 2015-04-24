 <?php
 // kuch hua
 // kabse hua hain
 <?php
 makenewfunc();
 ?>
//error handler function
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno]=== $errstr<br>";
  echo "Ending Script";
  die();
}

//set error handler
set_error_handler("customError");
//echo $test;
//trigger error
$test=2;
if ($test>1) {
  trigger_error("Value must be 1 or below",E_USER_WARNING);
}



die;
abstract class dbObject
{   
    const TABLE_NAME='undefined';
   
    public static function GetAll()
    {
        $c = get_called_class();
        return "SELECT * FROM `".$c::TABLE_NAME."`";
    }   
}
interface abc {
	const jadu ='222';
	//function ahaa();
}
class dbPerson extends dbObject implements abc
{
    const TABLE_NAME='persons';
	public  $x=3;
}

class dbAdmin extends dbPerson
{
    const TABLE_NAME='admins';
}

echo dbObject::GetAll()."<br>";//output: "SELECT * FROM `persons`"
echo dbPerson::GetAll()."====".dbPerson::TABLE_NAME."<br>";//output: "SELECT * FROM `persons`"
echo dbAdmin::GetAll()."<br>";//output: "SELECT * FROM `admins`"
$check = new dbPerson();
echo $check::TABLE_NAME;
echo $check->$x;

die;

class BookSingleton {
    private $author = 'Gamma, Helm, Johnson, and Vlissides';
    private $title  = 'Design Patterns';
    private static $book = NULL;
    private static $isLoanedOut = FALSE;

    private function __construct() {
		
		$this->author="good boy";
    
	}

    static function borrowBook() {
      if (FALSE == self::$isLoanedOut) {
        if (NULL == self::$book) {
           self::$book = new BookSingleton();
        }
        self::$isLoanedOut = TRUE;
        return self::$book;
      } else {
        return NULL;
      }
    }

    function returnBook(BookSingleton $bookReturned) {
        self::$isLoanedOut = FALSE;
    }

    function getAuthor() {return $this->author;}

    function getTitle() {return $this->title;}

    function getAuthorAndTitle() {
      return $this->getTitle() . ' by ' . $this->getAuthor();
    }
  }
  
  $x=  BookSingleton::borrowBook();
  var_dump($x);
  
  $y=  BookSingleton::borrowBook();
  var_dump($y);
  
 ?>