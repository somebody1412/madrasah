<?php

function arrayToObject($array)
{
    $json = json_encode($array);
    $object = json_decode($json);
    return $object;
}
