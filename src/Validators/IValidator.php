<?php

/**
 * This file is part of web3.php package.
 * 
 * (c) Adel Raheli <adel.raheli@gmail.com>
 * 
 * @author Peter Lai <adel.raheli@gmail.com>
 * @license MIT
 */

namespace Web3\Validators;

interface IValidator
{
    /**
     * validate
     *
     * @param mixed $value
     * @return bool
     */
     public static function validate($value);
}