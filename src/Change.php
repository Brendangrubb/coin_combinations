<?php
    class Change
    {
        private $amount;
        private $quarters;
        private $dimes;
        private $nickels;
        private $pennies;
        private $correct_change;

        function __construct($amount) {
            $this->amount = $amount;
            $this->quarters = 0;
            $this->dimes = 0;
            $this->nickels = 0;
            $this->pennies = 0;
        }

        function calculateChange()
        {
          $user_change_due = $this->amount;
          while ($user_change_due >= 0.009) {
              if ($user_change_due > 0.24) {
                  $user_change_due -= 0.25;
                  $this->quarters += 1;
              } elseif ($user_change_due > 0.09) {
                  $user_change_due -= 0.10;
                  $this->dimes += 1;
              } elseif ($user_change_due > 0.04) {
                  $user_change_due -= 0.05;
                  $this->nickels += 1;
              } elseif ($user_change_due > 0) {
                  $user_change_due -= 0.010;
                  $this->pennies += 1;
              }
          }

          return "Quarters: " . $this->quarters . " Dimes: " . $this->dimes . " Nickels: " . $this->nickels . " Pennies: " . $this->pennies;
        }
    }




?>
