<?php

$string = 'Execute';
$matches = array();
$res = array();
if(preg_match('#[a-z]+#i',$string)){
    preg_match_all('/[a-z]+?/u',  $string, $matches);
    foreach ($matches[0] as $match) {
        $res[$match] = isset($res[$match]) ? ++$res[$match] : 1;
    }

    print_r($res);
}
elseif(preg_match('#[а-яё]+#i',$string)){
    preg_match_all('/[а-яА-ЯёЁ]+?/u',  $string, $matches);
    foreach ($matches[0] as $match) {
        $res[$match] = isset($res[$match]) ? ++$res[$match] : 1;
    }

    print_r($res);
}