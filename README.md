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

    composer require crafterr/arraysort dev-master

   
Manual instalation
============

    copy dir directory to your project etc. vendor 
    
Using
============
$arraySort = new ArraySort([ [1, 2, [3]], 4 ]);
   
$array = $arraySort->arrangeElements();

`return array 
[1,2,3,4]`
   
    
Features
--------

* PSR-4 autoloading compliant structure
* Unit-Testing with PHPUnit
* Comprehensive Guides and tutorial
