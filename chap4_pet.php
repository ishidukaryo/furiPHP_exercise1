<?php
function displayMsg($owner) {
    $animal_types = array($owner["animal"]);
    $animal = implode(",", $animal_types);
    $count = count($owner["animal"]);
    $msg = <<< EOS
{$owner["name"]}さんは
{$animal}を
{$count}匹飼っています。
EOS;
    echo $msg; 
}