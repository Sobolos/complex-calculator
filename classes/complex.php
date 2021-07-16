<?php
namespace complex;
require "../interfaces/complexInterface.php";

class complex implements complexInterface
{
    private int $a_1;
    private int $a_2;

    private int $b_1;
    private int $b_2;

    /**
     * complex constructor.
     * @param array $complex_1
     * @param array $complex_2
     */
    public function __construct(array $complex_1, array $complex_2)
    {
        $this->a_1 = $complex_1['a_1'];
        $this->a_2 = $complex_2['a_2'];

        $this->b_1 = $complex_1['b_1'];
        $this->b_2 = $complex_2['b_2'];
    }

    /**
     * Складывает числа
     */
    protected function complicate(): array
    {
        $new_a = $this->a_1 + $this->a_2;
        $new_b = $this->b_1 + $this->b_2;
        return ["a" => $new_a,"b" =>  $new_b];
    }

    /**
     * Вычитает числа
     */
    protected function subtract(): array
    {
        $new_a = $this->a_1 - $this->a_2;
        $new_b = $this->b_1 - $this->b_2;
        return ["a" => $new_a,"b" =>  $new_b];
    }

    protected function divide(): array
    {
        $new_a = ($this->a_1 * $this->a_2 + $this->b_1 * $this->b_2) / (pow($this->a_2, 2) + pow($this->b_2, 2));
        $new_b = ($this->a_2 * $this->b_1 - $this->a_1 * $this->b_2) / (pow($this->a_2, 2) + pow($this->b_2, 2));
        return ["a" => $new_a,"b" =>  $new_b];
    }

    protected function multiply(): array
    {
        $new_a = $this->a_1 * $this->a_2 - $this->b_1 * $this->b_2;
        $new_b = $this->a_1 * $this->b_2 + $this->a_2 * $this->b_1;
        return ["a" => $new_a,"b" =>  $new_b];
    }

    /**
     * Запускает выполнение операции
     */
    public function operate(string $operation): array
    {
       return $this->$operation();
    }
}