<?php

/**
 * This file is part of web3.php package.
 * 
 * (c) Adel Raheli <adel.raheli@gmail.com>
 * 
 * @author Peter Lai <adel.raheli@gmail.com>
 * @license MIT
 */

namespace Web3\Formatters;

interface IFormatter
{
    /**
     * format
     * 
     * @param mixed $value
     * @return string
     */
    public static function format($value);
}