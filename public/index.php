<?php

/**
 * Affiches File Doc Comment
 * 
 * PHP version 8
 * 
 * @category Affiches
 * @package  Affiches
 * @author   Author <walid.rmd-perso@outlook.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/ 
 */

require_once "src/MesDates.php";

$objDate = new \UPJV\MesDates();
$dateDemain = $objDate->demain();
echo $dateDemain;