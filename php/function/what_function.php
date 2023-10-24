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
