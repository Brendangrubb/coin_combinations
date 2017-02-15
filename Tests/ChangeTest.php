<?php
    require_once 'src/Change.php';

    class ChangeTest extends PHPUnit_Framework_TestCase
    {
        function test_calculateChange_quartersChange()
        {

          //arrange
          $change = new Change(0.50);

          //act
          $result = $change->calculateChange();

          //assert
          $this->assertEquals("Quarters: " . 2 . " Dimes: " . 0 . " Nickels: " . 0 . " Pennies: " . 0, $result);

        }

        function test_calculateChange_dimesQuartersChange()
        {

          //arrange
          $change = new Change(0.70);

          //act
          $result = $change->calculateChange();

          //assert
          $this->assertEquals("Quarters: " . 2 . " Dimes: " . 2 . " Nickels: " . 0 . " Pennies: " . 0, $result);

        }

        function test_calculateChange_nickelsDimesQuartersChange()
        {

          //arrange
          $change = new Change(0.65);

          //act
          $result = $change->calculateChange();

          //assert
          $this->assertEquals("Quarters: " . 2 . " Dimes: " . 1 . " Nickels: " . 1 . " Pennies: " . 0, $result);

        }

        function test_calculateChange_penniesNickelsDimesQuartersChange()
        {

          //arrange
          $change = new Change(0.69);

          //act
          $result = $change->calculateChange();

          //assert
          $this->assertEquals("Quarters: " . 2 . " Dimes: " . 1 . " Nickels: " . 1 . " Pennies: " . 4, $result);

        }

    }

?>
