<?php
/**
 * AssessmentTest.php
 * @author  Reginald Quarcoo Bossman <reggiestain@gmail.com>
 * @version 1.0       
 */
use PHPUnit\Framework\TestCase;
use ISAssessment\Assessment;

/**
 * Internet Solutions - Technical AssessmentTest class
 * @package vendor/phpunit
 */
class AssessmentTest extends TestCase {
    
    protected $assessment;

    protected function setUp() {
        $this->assessment = new Assessment();
    }

    public function testclosestToZero() {
        $this->assertLessThanOrEqual(0, $this->assessment->closestToZero());
    }

    public function testforLoop() {
        $sum = is_int($this->assessment->forLoop());
        $this->assertTrue($sum);
    }

    public function testwhileLoop() {
        $sum = is_int($this->assessment->whileLoop());
        $this->assertTrue($sum);
    }

    public function testrecursiveFunction() {
        $arr = array(1, 2, 3, 4, 5);
        $arrSize = sizeof($arr);
        $sum = is_int($this->assessment->recursiveFunction($arr, $arrSize));
        $this->assertTrue($sum);
    }

    public function testcombineArrays() {
        $arrDiff = array_diff($this->assessment->combineArrays(), ['a', 1, 'b', 2, 'c', 3]);
        $this->assertEmpty($arrDiff);
    }

    public function testfibonacci() {
        $fibs = $this->assessment->fibonacci(100);
        foreach ($fibs as $fib) {
            if($this->isFibonacci($fib)) 
              $this->assertTrue(true);   
        }
    }
    
    public function testabsoluteSum() {
       $sum = is_int($this->assessment->absoluteSum());
        $this->assertTrue($sum); 
    }

    // A utility function that 
    // returns true if x is  
    // perfect square 
    private function isPerfectSquare($x) {
        $s = (int) (sqrt($x));
        return ($s * $s == $x);
    }

    // Returns true if n is a 
    // Fibinacci Number, else false 
    private function isFibonacci($n) {
        // n is Fibinacci if one of  
        // 5*n*n + 4 or 5*n*n - 4 or  
        // both is a perferct square 
        return $this->isPerfectSquare(5 * $n * $n + 4) ||
               $this->isPerfectSquare(5 * $n * $n - 4);
    }

}
