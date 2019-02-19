<?php
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod())."<br>";
echo "Today is " . date("m-d-Y") . "<br>";


$date1 = date_create("14-02-2019");
$date2 = date_create("05-02-2019");

//difference between two dates
$diff = date_diff($date1,$date2);

//count days
echo 'Days Count - '.$diff->format("%a")."<br><br>";


/*{greaterThanOrEqual(3; 3)} returns 1


{ifThenElse({and({gtreaterThanOrEqual(now;start)}; {lessThanorEqual(now;end)})}; {divide({datediff({now(m-d-Y)}; {start}; days)}; {datediff({start}; {end}; days)})})}


{divide({datediff({now(m-d-Y)}; {start}; days)}; {datediff({start}; {end}; days)})}

{divide({datediff({now(m-d-Y)};{P1};days)};{datediff({P1};{P0};days)})}


{datediff({P0};{now(m-d-Y)};days)}*/

?>

<?php
/*$a = 15;
$b = 276;
echo "\nBefore swapping:  ". $a . '-' . $b.'<br>';
list($a, $b) = array($b, $a);
echo "\nAfter swapping:  ". $a . '-' . $b."<br><br>";


?>

<?php
function armstrong_number($num) {
  $sl = strlen($num); 
  $sum = 0;
  $num = (string)$num;
  for ($i = 0; $i < $sl; $i++) {
    $sum = $sum + pow((string)$num{$i},$sl);

    echo 'i='.$num{$i}.' sl='.$sl.' sum=> '.$sum.'<br>';
  }
  if ((string)$sum == (string)$num) {
    return "True";
  } else {
    return "False";
  }
}
echo "Is 153 Armstrong number? ".armstrong_number(153).'<br>';
echo "\nIs 21 Armstrong number? ".armstrong_number(21).'<br>';
echo "\nIs 4587 Armstrong number? ".armstrong_number(4587).'<br>';

echo '<br>';
$date1 = date_create("2019-02-14");
$date2 = date_create("2019-02-05");

echo "Today  " . date("d/m/Y") . "<br>";

echo "Date Difference ". date_diff($date1,$date2);*/


?>


<form name="form" action="./index.php" method="get">
  <input type="text" name="subject" id="subject" value=""><br>
  <input type="submit" name="my_form_submit_button" value="submit"/><br>
</form>

<?php

// $sub = $_GET['subject'];
 
function word_digit($word) {
    $warr = explode(';',$word);
    $result = '';
    foreach($warr as $value){
        switch(trim($value)){
            case 'zero':
                $result .= '0';
                break;
            case 'one':
                $result .= '1';
                break;
            case 'two':
                $result .= '2';
                break;
            case 'three':
                $result .= '3';
                break;
            case 'four':
                $result .= '4';
                break;
            case 'five':
                $result .= '5';
                break;
            case 'six':
                $result .= '6';
                break;
            case 'seven':
                $result .= '7';
                break;
            case 'eight':
                $result .= '8';
                break;
            case 'nine':
                $result .= '9';
                break;    
        }
    }
    return $result;
}
//echo word_digit($sub)."<br>";
//echo word_digit("zero;three;five;six;eight;one")."\n";
//echo word_digit("seven;zero;one")."\n";
?>
<table style='width:30%' border='1'>
<tr><th>number i</th><th>number j</th><th>i/2</th><th>remain</th><th>prime</th></tr>
<?php
$primes = array();
$is_prime_no = false;

for ($i = 2; $i<10; $i++) {
     $is_prime_no = true; 
     
        for ($j = 2; $j<=($i/2); $j++) 
        {echo "<tr><th>".$i."</th><th>".$j."</th><th>".($i/2). "</th><th>".$i%$j."</th>";
                if ($i%$j==0) {$is_prime_no = false; echo "<th>NO</th></tr>";  break;}
        }
        if ($is_prime_no) {array_push($primes,$i);}
        
        if (count($primes)==100) {break;}
}

//echo array_sum($primes)."\n";
print_r($primes);
?>
</table>


<?php
function find_Pairs($nums, $pair_sum) {
  $nums_pairs = "";
  for ($i = 0; $i <= count($nums); $i++) {
     for ($j = $i + 1; $j < count($nums); $j++) {
        if ($nums[$i] + $nums[$j] == (int)$pair_sum) {
           $nums_pairs .= $nums[$i] . "-" . $nums[$j] . "|";
        }
     }
  }
  return $nums_pairs;
}
$nums = array(0,1,2,3,4,5,6);
//echo find_Pairs($nums, 7)."\n";
echo find_Pairs($nums, 5)."<br>";
?>
