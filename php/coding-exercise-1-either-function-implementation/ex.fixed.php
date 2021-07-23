<?php

function either(...$args)
{
    foreach ($args as $arg) {
        if ($arg) {
            return $arg;
        }
    }
}
