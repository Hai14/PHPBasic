<?php
    // Input: Chuỗi lưu trữ ID của các Developer bị trễ task
    $strID = "78, 60, 62, 68, 69, 68, 73, 85,
                    66, 69, 65, 74, 63, 67, 65, 64, 68, 73, 75, 69, 73, 169";
    
    // Requirement: Tìm xem Developer có ID 69 bị trễ Task bao nhiêu lần
    $Count= 0;
    $Count = substr_count($strID, "69");
    print_r($Count);
// Output: 3

