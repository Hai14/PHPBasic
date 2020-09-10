<?php
    // Input
    $str = "1A|http://zend.vn/porn/video1a.mp4
            1B|http://zend.vn/porn/video1b.mp4
            http://zend.vn/porn/video2.mp4
            http://zend.vn/porn/video3.mp4
            4A|http://zend.vn/porn/video4A.mp4
            http://zend.vn/porn/video5.mp4
            6A|http://zend.vn/porn/video9A.mp4
            http://zend.vn/porn/video10.mp4
        ";
    
    preg_match_all('#(([A-Za-z0-9]{2})\|(http.*mp4)|(http.*mp4))#', $str, $matches);
    /* echo "<pre>";
    print_r($matches);
    echo "</pre>"; */
    $result = array();
    $index = 0;
    foreach ($matches[2] as $key => $value)
    {
        if($value!=null)
        {
            $index = (int)$key;
            $result[$value] = $matches[3][$key];
            
        }
        else {
            $index+=1;
            $result[$index] = $matches[4][$key];
        }
        
    }
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    /* Oupt: Array (
        [1A] => http://zend.vn/porn/video1a.mp4
        [1B] => http://zend.vn/porn/video1b.mp4
        [2]  => http://zend.vn/porn/video2.mp4
        [3]  => http://zend.vn/porn/video3.mp4
        [4A] => http://zend.vn/porn/video4A.mp4
        [5]  => http://zend.vn/porn/video5.mp4
        [6A] => http://zend.vn/porn/video9A.mp4
        [7]  => http://zend.vn/porn/video10.mp4
    ) */
    
   