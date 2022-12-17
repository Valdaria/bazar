<?php 
class QuadraticCalculator {

    public static function evaluate(string $quadraticFunction, int $x)
    {
        
        // Parse a quadratic function
        $re = '/^((?P<squaredValue>[+-]?\d+)x²)?((?P<xValue>[+-]?\d+)x)?((?P<oneValue>[+-]?\d+))?$/m';
        
        preg_match($re, $quadraticFunction, $matches);
        
        $result = 0;
        
        if ($squaredValue = $matches['squaredValue']) {
            $result += intval($squaredValue)*$x*$x;
        }
        if ($xValue = $matches['xValue']) {
            $result += intval($xValue)*$x;
        }
        if ($oneValue = $matches['oneValue']) {
            $result += intval($oneValue);
        }
        
        return $result;
    }
}

?>