<?php
function calcArea($top, $bottom, $height, $area) {
    $area = ($top + $bottom) * $height / 2 ;
}
function displayMsg($top, $bottom, $height, $area) {
    $msg = <<< EOM
    台形のサイズ
    上底：{$top}
    下底：{$bottom}
    高さ：{$height}
    面積：{$area} \n
    EOM;
    echo $msg;
}