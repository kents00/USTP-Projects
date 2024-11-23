<?php
class Addition
{
    private $num1;
    private $num2;

    public function setNumbers($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calculateSum()
    {
        return $this->num1 + $this->num2;
    }
}
?>
