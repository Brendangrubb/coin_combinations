<?php
    require_once 'src/Change.php';

    class ChangeTest extends PHPUnit_Framework_TestCase
    {
        function test_quarterChange()
        {

          //arrange
          $change = new Change(0.25);

          //act
          $result = $change->calculateChange();

          //assert
          $this->assertEquals("Quarter", $result);

        }

    }

?>
