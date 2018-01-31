<?php 

/**
*  Corresponding Class to test ArraySortTest class
*
*  For each class in your library, there should be a corresponding Unit-Test for it
*  Unit-Tests should be as much as possible independent from other test going on.
*
*  @author Adam Pietras
*/

use PHPUnit\Framework\TestCase;
use Crafter\ArraySort\ArraySort;

class ArraySortTest extends TestCase{


   static $array = [ [1, 2, [3]], 4 ];
	
  /**
  * Just check if the ArraySort Class has no syntax error
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
  public function testIsThereAnySyntaxError(){
	$var = new ArraySort(self::$array);
	$this->assertTrue(is_object($var));
	unset($var);
  }

  /**
   * Just check if array is not empty
   */
  public function testIsArrayIsEmpty()
  {
      $this->assertNotEmpty(self::$array);
  }

    /**
     * Just check if method return only array
     */
  public function testIsReturnArray()
  {
      $var = new ArraySort(self::$array);
      $this->assertTrue(is_array($var->arrangeElements()));
  }

  //You can write more tests bellow
  

  
}