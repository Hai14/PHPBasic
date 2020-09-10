<?php
$str = '{
                "name": "Angular 2x",
                "author": "ZendVN",
                "info": {
                    "publishDate": "20/08/2016",
                    "requirement": "Typescript",
                    "student": "false"
                }
            }';
    $data = json_decode($str);
    echo "Name: ".$data ->name ."<br/>";
    echo "Author: ".$data ->author."<br/>";
    echo "PublishDate : ".$data -> info -> publishDate."<br/>";
    echo "Requirement : ".$data -> info -> requirement."<br/>";