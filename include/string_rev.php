<?php

function string_rev($str)
{
    return join('', array_reverse(preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY)));

}