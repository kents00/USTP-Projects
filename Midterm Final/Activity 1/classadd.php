<?php
class Addition
{
    private $num1;
    private $num2;

    // Constructor to initialize properties
    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    // Method to calculate the sum
    public function calculateSum()
    {
        return $this->num1 + $this->num2;
    }
}
?>