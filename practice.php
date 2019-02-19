<?php
define('STDIN',fopen("php://stdin","w"));

$raw = '26. 11. 2018';
echo 'raw date '.$raw.'<br>';
$start = DateTime::createFromFormat('d. m. Y', $raw);

echo 'Start date: ' . $start->format('d-m-Y') . "<br>";


$end = clone $start;

$end->add(new DateInterval('P1M6D'));
echo 'End date: ' . $end->format('d-m-Y') . "<br>";
$diff = $end->diff($start);
echo 'Difference: ' . $diff->format('%m month, %d days (total: %a days)') . "<br>";



$periodInterval = DateInterval::createFromDateString('first monday');
$periodIterator = new DatePeriod($start, $periodInterval, $end, DatePeriod::EXCLUDE_START_DATE);
foreach ($periodIterator as $date) {
    // output each date in the period
    echo $date->format('d-m-Y') . '<br><br>';
}

?>

<?php
echo "<br>Associative array : Ascending order sort by value";
$array2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
    asort($array2);
        foreach($array2 as $y=>$y_value)
        {
            echo "<br>Age of ".$y." is : ".$y_value."";
        }

echo "<br>Associative array : Ascending order sort by Key";
$array3=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
    ksort($array3);
        foreach($array3 as $y=>$y_value)
        {
            echo "<br>Age of ".$y." is : ".$y_value."";
        }

echo "<br>Associative array : Descending order sorting by Value";
$age=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
    arsort($age);
        foreach($age as $y=>$y_value)
        {
            echo "<br>Age of ".$y." is : ".$y_value."";
        }

echo "<br>Associative array : Descending order sorting by Key";
$array4=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
    krsort($array4);
        foreach($array4 as $y=>$y_value)
        {
            echo "<br>Age of ".$y." is : ".$y_value."";
        }

?>
<br><br>






<?php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);

foreach($temp_array as $temp)
    {
        $tot_temp += $temp;
    }
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."<br>"; 
sort($temp_array);
echo " List of five lowest temperatures :";

for ($i=0; $i< 5; $i++)
    { 
        echo $temp_array[$i].", ";
    }
echo "<br>List of five highest temperatures :";

for ($i=($temp_array_length-5); $i< $temp_array_length; $i++)
    {
        echo $temp_array[$i].", ";
    }
?>
<br><br><br>




<?php
$list1 = "4, 5, 6, 7";
  $list2 = "4, 5, 7, 8";
  // combine both lists with unique values only
  $result = implode("," , array_unique(array_merge(explode(",",$list1),explode(",", $list2))));
  $new_list1 = explode(",",$list1);
  $new_lsit2 = explode(",",$list2);
  $merged = array_merge($new_list1,$new_lsit2);
  $unige = array_unique($merged);
  $final = implode(' -',$unige);



  echo $final."<br>";
  echo "<pre>";
?>

<?php
 $my_array = array(15, null, "  ", -2, NULL, "", " \n", "Red", 54, "\t");
print_r($my_array);
$result = array_filter($my_array, create_function('$x','return preg_match("#\S#", $x);'));                 
print_r($result);
?>