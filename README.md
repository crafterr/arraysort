Description
=========================
Library can change advance assoc array to simple numeric array

Requirements
============

* PHP >= 7

Dependance
============

* PHP >= 7.1


Installation by Composer
============

    composer require crafterr\arraysort

   
Manual instalation
============

    copy dir directory to your project etc. vendor 
    
Using
============
$arraySort = new ArraySort([ [1, 2, [3]], 4 ]);
   
$array = $arraySort->arrangeElements();
   
    
Features
--------

* PSR-4 autoloading compliant structure
* Unit-Testing with PHPUnit
* Comprehensive Guides and tutorial
