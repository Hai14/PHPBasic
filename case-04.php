<?php
$str = "php/127/typescript/12/jquery/120/angular/50";

// Output:
//     Array
//     (
//         [php] => 127
//         [typescript] => 12
//         [jquery] => 120
//         [angular] => 50
//     )
$arr = array();
$str = trim($str);//Loại bỏ khoảng trắng trong chuỗi str
//Chuyển chuỗi về mảng
$arr = explode("/", $str);
for ($i = 0;$i<count($arr);$i+=2)
{
    $result[] = array("$arr[$i]"=>$arr[($i+1)]);
}

foreach ($result as $key => $value)
    foreach ($value as $keys => $values)
        $Out[$keys] = $values;
echo "<pre>";

print_r($Out);
echo "</pre>";

