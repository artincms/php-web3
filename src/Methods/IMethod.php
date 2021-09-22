<?php

/**
 * This file is part of web3.php package.
 * 
 * (c) Adel Raheli <adel.raheli@gmail.com>
 * 
 * @author Peter Lai <adel.raheli@gmail.com>
 * @license MIT
 */

namespace Web3\Methods;

interface IMethod
{
    /**
     * transform
     * 
     * @param array &$data
     * @param array $rules
     * @return array
     */
    public function transform($data, $rules);
}