<?php

/**
 * This file is part of web3.php package.
 * 
 * (c) Adel Raheli <adel.raheli@gmail.com>
 * 
 * @author Peter Lai <adel.raheli@gmail.com>
 * @license MIT
 */

namespace Web3\Methods\Personal;

use InvalidArgumentException;
use Web3\Methods\EthMethod;
use Web3\Validators\TransactionValidator;
use Web3\Validators\StringValidator;
use Web3\Formatters\TransactionFormatter;
use Web3\Formatters\StringFormatter;

class SendTransaction extends EthMethod
{
    /**
     * validators
     * 
     * @var array
     */
    protected $validators = [
        TransactionValidator::class, StringValidator::class
    ];

    /**
     * inputFormatters
     * 
     * @var array
     */
    protected $inputFormatters = [
        TransactionFormatter::class, StringFormatter::class
    ];

    /**
     * outputFormatters
     * 
     * @var array
     */
    protected $outputFormatters = [];

    /**
     * defaultValues
     * 
     * @var array
     */
    protected $defaultValues = [];

    /**
     * construct
     * 
     * @param string $method
     * @param array $arguments
     * @return void
     */
    // public function __construct($method='', $arguments=[])
    // {
    //     parent::__construct($method, $arguments);
    // }
}