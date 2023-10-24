<?php
// 함수란??
// 특별한 목적의 작업을 수행하기 위해 독립적으로 설계된 코드의 집합을 말한다.

// 두 숫자의 합을 구하는 함수
function add($x,$y){
  $sum =$x + $y;
  return $sum;
}

$result = add(3,5);
print '더하기 함수 '.$result."<br>";



// PHP에서 function을 사용자가 정의할 때 default 파라미터를 정의할 수 있다.
// 사용자가 값을 입력하지 않으면 default값을 할당
function my_log($arg, $base=2){
  $result =log($arg)/log($base);
  return $result;
}
print "log2(10) = ".my_log(10,2).'<br>';
print "log10(100) = ".my_log(100,10).'<br>';
print "log2(8) = ".my_log(8,2).'<br>';
print "log2(8) = ".my_log(8).'<br>';



// func_get_args() : 사용자가 전달한 가변 파라미터를 가져올 수 있다.
// 파라미터의 목록을 배열의 형식으로 가지고 온다.
function my_print(){
  $args = func_get_args();
  foreach ($args as $arg) {
    print "파라미터 : $arg <br>";
  }
}
my_print('Apple','Orange','Pear','Banana','Cherry');



// 재귀함수란??
// 함수 내에서 자기 자신 함수를 호출하는 것을 의미한다.
function hanoi($number, $from, $via, $to){
  if($number == 1)
    print ("move disc $number from $from to $to ,<br>");
  else{
    hanoi($number -1, $from ,$to, $via);
    print("move disc $number from $from to $to <br>");
    hanoi($number -1, $via, $from, $to);
  }
}
// hanoi(5,'A','B', 'C');



// 전역 변수
function counts(){
  global $i;  // 함수 밖의 변수를 참조하고자할 때 사용한다
  $i = $i +1;
}

$i = 0;
while($i < 10){
  counts();
  // print $i."<br>";
}



// 정적 변수
// 바로 전 호출에서의 값을 기억한다.
function inc(){
  static $i = 1;
  print $i."<br>";
  $i += 1;
}

for($j = 1; $j <= 10; $j++){
  // inc();
}



// call by value
function swap1($a ,$b){ // $a,$b는 형식 파라미터라 한다.
  $temp = $a;
  $a = $b;
  $b = $temp;
}

// $i, $j는 실제 파라미터라 한다.
$i = 3;
$j = 4;

print "$i, $j <br>";
swap1($i, $j);
print "$i, $j <br>";



// call by reference
function swap2(&$a ,&$b){ // $a,$b는 형식 파라미터라 한다.
  $temp = $a;
  $a = $b;
  $b = $temp;
}

// $i, $j는 실제 파라미터라 한다.
$i = 3;
$j = 4;

print "$i, $j <br>";
swap2($i, $j);
print "$i, $j";