<?php
class Power
{
    public function calculate($number, $power)
    {
        return array_reduce($this->getSerieToMultiply($number, $power), function ($v, $w) {
            return array_sum(array_map(function($n) use ($v) {
                return $v;
            }, range(1, $w)));
        }, 1);
    }

    private function getSerieToMultiply($number, $power)
    {
        return array_map(function($n) use ($number) {
            return $number;
        }, range(1, $power));
    }
}
