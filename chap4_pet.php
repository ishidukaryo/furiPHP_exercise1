<?php
function displayMsg($owner, $animal, $count) {
    function array_unique($owner) {
        $animal_types = array($owner["animal"]);
        $animal = implode(",", $animal_types);
    }
    function count($owner) {
        $count = count($owner["animal"]);
        return $count;
    }
    $msg = <<< EOS
{$owner["name"]}さんは
{$animal}を
{$count}匹飼っています。
EOS;
    echo $msg; 
}