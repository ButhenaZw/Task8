<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task7</title>
</head>
<body>
    <h2>
        <?php 


//task1
$x = 12;
$y = 10;
function swaper($num1, $num2)
{
    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    $num1 = $num1 - $num2;
    return "x = $num1 y= $num2";
};

echo swaper($x, $y);
echo "<br>";
//task2
// $armstrong = "407";

// function armstronger($num)
// {
//     $splited = str_split($num);
//     if ($splited[0]  3 + $splited[1]  3 + $splited[2] ** 3 == $num) {
//         return "Armstrong number";
//     } else {
//         return "Not an Armstrong number";
//     }
// };
// echo armstronger($armstrong);
// echo "<br>";
//task3
$words = "Eva, can I see bees in a cave?";
function isPalindrome($str)
{
    $clean = preg_replace("/[^a-zA-Z0-9]/", "", strtolower($str));
    $reversedStr = strrev($clean);
    return $clean === $reversedStr;
}
if (isPalindrome($words)) {
    echo "Yes, it is a palindrome";
} else {
    echo "No, it is not a palindrome";
}
echo '<br>';


//Task4

$number =array(2,4,7,4,8,4);
print_r (array_unique($number));
echo '<br>';

//task5
echo strrev("remove");
echo "<br>";

//task6
function lowercase($word){
    if($word == strtolower($word)){
        return "Your String is Ok ";
    }else{
        return "Your String is not Ok";
        }
}
echo lowercase('jenan');
echo "<br>";


//task7
$text = "group orange coding3";
echo strtoupper ($text);
echo '<br>';
echo strtolower ($text);
echo '<br>';
echo ucfirst ($text);
echo '<br>';
echo ucwords($text);
echo '<br>';





//task8
$number = "085119";

$num1 = substr($number, 0, 2); 
$num2 = substr($number, 2, 2);  
$num3 = substr($number, 4, 2); 

$numberss = $num1 . ':' . $num2 . ':' . $num3;

echo $numberss; 
echo '<br>';


//task9
$texts = 'I am a full stack developer at orange coding academy';
$word = 'orange';
if(strpos($texts, $word) !== false)
{ echo "Word Found!";
 } else{ echo "Word Not Found!"; } 
 echo '<br>';


 //task10
$url = 'www.orange.com/index.php';
$path = parse_url($url, PHP_URL_PATH);
echo basename($path);
echo '<br>';


//task11
$word1 = 'dragonball';
$word2 = 'dragonboll';

$result = strspn($word1 ^ $word2, "\0");

printf('First difference between two strings at position  %d: "%s" vs "%s"',
    $result, $word1[$result], $word2[$result]);
printf("\n");
echo '<br>';
//task12
$alphabet = 'h';
$next = ++$alphabet; 
if (strlen($next) > 1) 
{
 $next = $next[0];
 }
echo $next."\n";
echo '<br>';

//task 13
$number = "000065722.24";

$number = ltrim($number , "0");
echo $number;
echo '<br>';
//task14
function RemoveSpecialChar($numberstr){

    $rmoval = preg_replace('/[^a-zA-Z0-9_ -]/s',' ',$numberstr);
    return $rmoval;
}
$numberstr = '\"\1+2/3*2:2%3/4*3' ; 
$str1 = RemoveSpecialChar($numberstr); 
echo $str1; 
echo '<br>';

//task15
$paragraph = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $paragraph), 0, 5))."\n";



        ?>
    </h2>
</body>
</html>