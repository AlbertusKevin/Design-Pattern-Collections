<?php
class Numbers
{
    private int $num1;
    private int $num2;

    private string $calculationWanted;

    public function __construct(int $num1, int $num2, string $calcWanted)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->calculationWanted = $calcWanted;
    }

    /**
     * Get the value of num1
     */
    public function getNum1() : int
    {
        return $this->num1;
    }
    public function getNum2() : int
    {
        return $this->num2;
    }
    public function getCalculationWanted()
    {
        return $this->calculationWanted;
    }
}
