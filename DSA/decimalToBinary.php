<?PHP
// function convertDecimalToBinary($num)
// {
//     $stack = new SplStack();

//     while ($num > 1) {
//         $result = $num % 2;
//         $stack->push($result);
//         $num /= 2;
//     }

//     foreach ($stack as $item) {
//         echo $item;
//     }
// }
// convertDecimalToBinary(10);
class DecimalToBinary
{
    protected $stack;
 
    public function __construct()
    {
        $this->stack = [];
       
    }

    public function push($item)
    {
        array_push($this->stack, $item);
   
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            echo "STACK IS EMPTY!";
        } else {
            return array_pop($this->stack);
        }
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
   
function DecimalToBinary1($num) {
    $element = "";
    while (floor($num) > 0) {
        $element .= $num % 2;
        $num /= 2;
    }
    return strrev($element);
}   

}
function DecimalToBinary($number)
{
    $stack = new DecimalToBinary();
    while ($number != 0) {
        $result = floor($number / 2);
        $s = $number % 2;
        $stack->push($s);
        $number = $result;
    }

     $binaryNumber = "";
    while (!$stack->isEmpty()) {
        $binaryNumber .= $stack->pop();
    }
   return $binaryNumber;

         
}
$DecimalToBinary= new DecimalToBinary();
DecimalToBinary(4);
echo $DecimalToBinary->DecimalToBinary1(100);


// $dec=4;
// $binStr = '';
// while ($dec>=1){
//     $bin = $dec % 2;
//     $dec = round($dec/2, 0, PHP_ROUND_HALF_DOWN);
//     $binStr .= $bin;
// }
// $binStr = str rev($binStr);
// echo $binStr;