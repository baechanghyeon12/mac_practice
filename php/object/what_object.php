<?
// 접근제어 지시자
// public     클래서 멤버 변수와 함수를 어디서든 접근할 수 있도록 허용한 지시자
// protected  클래스 자신과 클래스를 상속받은 클래스에서만 접근할 수 있도록 선언한 지시자
// private    클래스 내에서만 접근할 수 있도록 허용한 지시자
class Student
{
  // 클래스 내의 변수를 멤버 변수라고 부른다.
  public $studentId;
  public $studentName;

  // 클래스 내의 함수를 멤버 함수라고 부른다.
  public function printStudent($id, $name){
    print "ID : ".$id."<br>";
    print "Name : ".$name."<br>";
  }
}

$object = new Student;
$object->studentId = 20171234;
$object->studentName = "Alice";

$object->printStudent($object->studentId, $object->studentName);


// this 포인터
class Student1
{
  private $studentId;
  private $studentName;

  public function printStudent(){
    print "ID : ".$this->studentId."<br>";
    print "Name : ".$this->studentName."<br>";
  }
  // 멤버 변수가 private으로 선언되어 있는 경우에 외부에서 접근이 불가능하기 때문에 외부와 접근할 수 있는 함수를 만들어줘야된다.
  public function setStudentId($id){
    $this->studentId = $id;
  }

  public function setStudentName($name){
    $this->studentName = $name;
  }
}

$object = new Student1;
$object->setStudentId(20171234);
$object->setStudentName("Alice");

$object->printStudent();



// 생성자  __construct()
// 생성자는 클래스를 이용하여 객체를 생성할 때 사용된다.
// 생성자를 정의하지 않았을 때는 디폴트 생성자가 선언된다
class Fruit
{
  private $fruit_name;
  private $price;
  private $color;

  function __construct($name, $price, $color)
  {
    $this->fruit_name = $name;
    $this->price = $price;
    $this->color = $color;
  }

  function print_fruit(){
    print "Fruit name : $this->fruit_name<br>";
    print "Fruit price : $this->price<br>";
    print "Fruit color : $this->color<br>";
  }
}

$Apple = new Fruit('Apple', 1000, 'red');       // Apple이라는 객체를 생성
$Orange = new Fruit('Orange', 2000, 'orange');  // Orange이라는 객체를 생성
$Banana = new Fruit('Banana', 500, 'yellow');   // Banana이라는 객체를 생성
$Pear = new Fruit('Pear', 3000, 'gray');        // Pear이라는 객체를 생성

$Apple->print_fruit();
$Orange->print_fruit();
$Banana->print_fruit();
$Pear->print_fruit();



// 상속이란
// 부모 클래스로부터 자식 클래스가 특성(property)을 계승받는 것을 말한다.
// 부모 클래스에서 선언되었던 멤버 변수와 함수를 자식 클래스에서 그대로 사용할 수 있는 것을 말한다.
class People
{
  protected $name;
  protected $age;

  function printPeople(){
    print "Name : ".$this->name."<br>";
    print "Age : ".$this->age."<br>";
  }
}
class Student3 extends People
{
  private $studentId;

  function __construct($name, $age, $id)
  {
    $this->name =$name;
    $this->age = $age;
    $this->studentId = $id;
  }
  function printStudent(){
    print "- Student -<br>";
    $this->printPeople();
    print "Id : ".$this->studentId."<br>";
  }
}

class Professor extends People
{
  private $office_No;

  function __construct($name, $age, $no)
  {
    $this->name =$name;
    $this->age = $age;
    $this->office_No = $no;
  }
  function printProfessor(){
    print "- Professor -<br>";
    $this->printPeople();
    print "Office_No : ".$this->office_No."<br>";
  }
}

class Staff extends People
{
  private $title;

  function __construct($name, $age, $title)
  {
    $this->name =$name;
    $this->age = $age;
    $this->title = $title;
  }
  function printStaff(){
    print "- Staff -<br>";
    $this->printPeople();
    print "Title : ".$this->title."<br>";
  }
}

$object1 = new Student3("Lee", "21", "20170123");
$object2 = new Professor("Kim", "42", "107");
$object3 = new Staff("Park", "37", "Chief");

$object1->printStudent();
print "<br>";
$object2->printProfessor();
print "<br>";
$object3->printStaff();
print "<br>";


// 함수 오버라이딩  (method overriding)
// 클래스 상속 시 부모 클래스에서 정의한 함수를 동일한 이름과 다른 동작으로 자식 클래스에서 재정의 하는 것을 말한다.
// 부모 클래스의 함수에 접근하려면 parent 키워드를 사용해야된다.