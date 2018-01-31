<?php
/**
 * User: adampietras
 * Date: 26/01/2018
 * Time: 23:07
 */

require __DIR__.'/vendor/autoload.php';
use Crafter\ArraySort\ArraySort;

/**
 * Index File
 */

/**
 * Initializate obiect
 * @params array if empty then exception
 */
$arraySort = new ArraySort([ [1, 2, [3]], 4 ]);

/**
 * Call mehotd arragneElements
 */
$array = $arraySort->arrangeElements();

/**
 * Symfony dumper show result
 */
dump($array);