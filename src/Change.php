<?php
    class Change
    {
        private $amount;
        private $correct_change;

        function __construct($amount) {
            $this->amount = $amount;
            $this->correct_change = "";
        }

        function calculateChange()
        {
          $user_change_due = $this->amount;
          if ($user_change_due >= 0.25) {
              $user_change_due -= 0.25;
              if (!$this->correct_change) {
                $this->correct_change .= "Quarter";
              }
          }

          return $this->correct_change;
        }
    }




?>
