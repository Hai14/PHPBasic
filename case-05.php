<?php
// Input
$array = array("maria", "de", "ahhihi", "lanthanhtu", "ozawa", "wer");

// Requirement: Phần tử có chiều dài lớn nhất

// Output: lanthanhtu
$max_lenght = 0;
$name_MaxLeght = "";
for($i = 0;$i<count($array);$i++)
{
    if($max_lenght < strlen($array[$i]))
    {
        $max_lenght = strlen($array[$i]);
        $name_MaxLeght = $array[$i];
    }
}
echo "<pre>";
print_r($name_MaxLeght);
echo "</pre>";
