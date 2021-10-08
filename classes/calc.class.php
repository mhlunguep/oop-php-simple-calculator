<?php
/* Caclulator class */
class Calc {
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $operator, int $num1, int $num2)
    {
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calculator() 
    {
        switch ($this->operator) {
            case 'add':
                $reslut = $this->num1 + $this->num2;
                return $reslut;
                break;
            case 'sub':
                $reslut = $this->num1 - $this->num2;
                return $reslut;
                break;
            case 'mult':
                $reslut = $this->num1 * $this->num2;
                return $reslut;
                break;
            case 'div':
                
                if ($this->num2==0) {
                    echo "Error! Cannot devide by zero";
                    exit;
                }
                else {
                    $reslut = $this->num1 / $this->num2;
                return $reslut;
                }
                break;
            default:
                echo "Error";
                break;
        }
    }
}