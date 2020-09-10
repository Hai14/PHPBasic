<?php
    $array = [
        "zend2"     => 113,
        "php"       => 127,
        "typescript"=> 12,
        "jquery"    => 120,
        "angular"   => 50
    ];
    
    $max = 0;
    $name= "";
    for($i = 0;$i<count($array);$i++)
    {
       
        if(array_values($array)[$i] > $max )
        {
            $max = array_values($array)[$i];
            $name = array_keys($array)[$i];
        }
    }
    echo "Khóa học có thời lượng nhiều nhất: "."<br/>";
    echo "$name - $max";
    /* if(!empty($array))
    {
        foreach ($array() as $key => $value)
        {
            $Max = max($value);
        }
    } */