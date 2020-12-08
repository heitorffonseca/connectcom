<?php

class Number
{
    protected $numbers;

    public function __construct(Array $numbers)
    {
        $this->numbers = $numbers;
    }

    /**
     * Entrega um array de números de pares e ímpares
     * @return Array
     */
    public function pairAndOddNumbers(): Array
    {
        $numbers = ['pair' => [], 'odd' => []];

        foreach($this->numbers as $key => $number) {
            if($number % 2 == 0) {
                array_push($numbers['pair'], $number);
            } else {
                array_push($numbers['odd'], $number);
            }
        }
            
        return $numbers;
    }

    /**
     * Entrega o menor número de um array
     * @return Int|Float
     */
    public function lowestNumber() 
    {
        return min($this->numbers);
    }

    /**
     * Entrega o maior número de um array
     * @return Int|Float
     */
    public function higherNumber()
    {
        return max($this->numbers);
    }

}