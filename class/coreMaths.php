<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 ************************************************************************************
 * @ASCOOS-NAME        	: ASCOOS CMS 25'                                            *
 * @ASCOOS-VERSION     	: 25.0.0                                                    *
 * @ASCOOS-CATEGORY    	: Framework (Frontend and Administrator Side)               *
 * @ASCOOS-CREATOR     	: Drogidis Christos                                         *
 * @ASCOOS-SITE        	: www.ascoos.com                                            *
 * @ASCOOS-LICENSE     	: [Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html  *
 * @ASCOOS-COPYRIGHT   	: Copyright (c) 2007 - 2025, AlexSoft Software.             *
 ************************************************************************************
 *
 * @package            	: ASCOOS FRAMEWORK 25'
 * @subpackage         	: Math Handles
 * @source             	: afw/kernel/coreMaths.php
 * @fileNo             	: 
 * @version            	: 25.0.0
 * @build               : 10845
 * @created            	: 2007-05-11 07:00:00 UTC+2
 * @updated            	: 2025-01-09 07:00:00 UTC+2
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: AGL-F (Free Edition)
 * 
 * @since PHP 8.2.0
 */
declare(strict_types=1);
namespace ASCOOS\FRAMEWORK\Kernel\Maths;
defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");
defined ("ASCOOS_FRAMEWORK_RUN") or die("Prohibition of Access.");
 
use ASCOOS\FRAMEWORK\Kernel\Core\TObject; 
use Exception, InvalidArgumentException;


/******************************************************************************
 * @startcode TMathsHandler
 *****************************************************************************/
/**
 * @class   TMathsHandler
 * @extends TObject
 * 
 * @summary Handles mathematics formulas.
 * 
 * 
 * [ METHODS ]
 * @method void __construct(array $properties = [])                         The constructor method for the class. It must always be overridden.
 * @method array absArray(array $nums)                                      Calculate the absolute value of each number in an array.
 * @method float areaOfCircle(float $radius)                                Calculate the area of a circle.
 * @method float areaOfParallelogram(float $base, float $height)            Calculate the area of a parallelogram.
 * @method float areaOfRegularDecagon(float $side)                          Calculate the area of a regular decagon.
 * @method float areaOfRegularDodecagon(float $side)                        Calculate the area of a regular dodecagon.
 * @method float areaOfRegularHeptagon(float $side)                         Calculate the area of a regular heptagon.
 * @method float areaOfRegularHexagon(float $side)                          Calculate the area of a regular hexagon.
 * @method float areaOfRegularIcosahedron(float $side)                      Calculate the area of a regular icosahedron.
 * @method float areaOfRegularNonagon(float $side)                          Calculate the area of a regular nonagon.
 * @method float areaOfRegularPentadecagon(float $side)                     Calculate the area of a regular pentadecagon.
 * @method float areaOfRegularPentagon(float $side)                         Calculate the area of a regular pentagon.
 * @method float areaOfRegularPolygon(int $n, float $side)                  Calculate the area of a regular polygon given the number of sides and the length of each side.
 * @method float areaOfRhombus(float $d1, float $d2)                        Calculate the area of a rhombus given its diagonals.
 * @method float areaOfSquare(float $side)                                  Calculate the area of a square.
 * @method float areaOfTrapezoid(float $a, float $b, float $height)         Calculate the area of a trapezoid.
 * @method float areaOfTriangle(float $base, float $height)                 Calculate the area of a triangle given its base and height.
 * @method float areaOfTriangleHeron(float $a, float $b, float $c)          Calculate the area of a triangle using Heron's formula.
 * @method int binomialCoefficient(int $n, int $k)                          Calculate the binomial coefficient (n choose k).
 * @method array broydenMethod(callable $F, array $x0, float $tol = 1e-7, int $max_iter = 100)  Solve a system of nonlinear equations using Broyden's method.
 * @method float circumference(float $radius)                               Calculate the circumference of a circle.
 * @method float circumscribedCircleAroundSquare(float $side)               Calculate the radius of a circle circumscribed around a square.
 * @method float circumscribedCircleRadius(float $a, float $b, float $c)    Calculate the radius of the circumscribed circle around a triangle.
 * @method int combination(int $n, int $r)                                  Calculate the number of combinations of n items taken r at a time.
 * @method array combinations(array $elements, int $size)                   Generate combinations of a given size from an array of elements.
 * @method array complexAddition(array $a, array $b)                        Add two complex numbers.
 * @method array complexConjugate(array $a)                                 Calculate the conjugate of a complex number.
 * @method array complexDerivative(callable $f, array $z, float $h = 1e-5)  Calculate the derivative of a complex function.
 * @method array complexDivision(array $a, array $b)                        Divide two complex numbers.
 * @method array complexExponential(array $a)                               Calculate the exponential of a complex number.
 * @method array complexIntegral(callable $f, array $a, array $b, int $n = 1000)    Calculate the integral of a complex function over an interval.
 * @method array complexLogarithm(array $a)                                 Calculate the logarithm of a complex number.
 * @method float complexMagnitude(array $a)                                 Calculate the magnitude of a complex number.
 * @method array complexMultiplication(array $a, array $b)                  Multiply two complex numbers.
 * @method float cosh(float $angle)                                         Calculate the hyperbolic cosine of an angle.
 * @method float cot(float $angle)                                          Calculate the cotangent of an angle.
 * @method float csc(float $angle)                                          Calculate the cosecant of an angle.
 * @method array deflatePolynomial(array $coefficients, float $root)        Deflate a polynomial by a given root.
 * @method float derivative(callable $f, float $x, float $h = 1e-5)         Calculate the derivative of a function at a given point.
 * @method float determinantUsingCofactors(array $A)                        Calculate the determinant of a matrix using cofactor expansion.
 * @method float diagonalOfCube(float $side)                                Calculate the length of the diagonal of a cube.
 * @method float diagonalOfRectangle(float $length, float $width)           Calculate the diagonal of a rectangle.
 * @method float diagonalOfRegularDodecagon(float $side)                    Calculate the length of a diagonal of a regular dodecagon.
 * @method float diagonalOfRegularNonagon(float $side)                      Calculate the length of a diagonal of a regular nonagon.
 * @method float diagonalOfRegularOctagon(float $side)                      Calculate the length of a diagonal of a regular octagon.
 * @method float diagonalOfRegularSquare(float $side)                       Calculate the diagonal of a square.
 * @method float distanceBetweenPoints(float $x1, float $y1, float $x2, float $y2)   Calculate the distance between two points in a plane.
 * @method float evaluatePolynomial(array $coefficients, float $x)          Evaluate a polynomial at a given point.
 * @method float evaluatePolynomialDerivative(array $coefficients, float $x)  Evaluate the derivative of a polynomial at a given point.
 * @method float exponentialFunction(float $x, float $base = M_E)           Calculate the exponential function.
 * @method int factorial(int $n)                                            Calculate the factorial of a number.
 * @method int factorialIterative(int $n)                                   Calculate the factorial of a number using iteration.
 * @method array findPolynomialRoots(array $coefficients)                   Find the roots of a polynomial.
 * @method array gaussSeidel(array $A, array $b, array $x0, float $tol = 1e-7, int $max_iter = 100)     Solve a system of linear equations using the Gauss-Seidel iterative method.
 * @method int gcd(int $a, int $b)                                          Calculate the greatest common divisor (GCD) of two numbers.
 * @method array generateSubmatrices(array $A, int $size)                   Generate submatrices of a given size from a matrix.
 * @method float geometricMean(array $nums)                                 Calculate the geometric mean of an array of numbers.
 * @method float harmonicMean(array $nums)                                  Calculate the harmonic mean of an array of numbers.
 * @method float hypotenuse(float $a, float $b)                             Calculate the hypotenuse of a right triangle using the Pythagorean theorem.
 * @method float inscribedCircleInSquare(float $side)                       Calculate the radius of a circle inscribed in a square.
 * @method float inscribedCircleRadius(float $a, float $b, float $c)        Calculate the radius of the circle inscribed in a triangle.
 * @method float integrate(callable $f, float $a, float $b, int $n = 1000)  Calculate the integral of a function over an interval using the trapezoidal rule.
 * @method float integrateSimpson(callable $f, float $a, float $b, int $n = 1000) Calculate the integral of a function over an interval using Simpson's rule.
 * @method float integrateTrapezoidal(callable $f, float $a, float $b, int $n = 1000) Calculate the integral of a function over an interval using the trapezoidal rule.
 * @method bool isPrime(int $n)                                             Check if a number is a prime number.
 * @method array jacobiIteration(array $A, array $b, array $x0, float $tol = 1e-7, int $max_iter = 100) Solve a system of linear equations using the Jacobi iterative method.
 * @method float lawOfCosines(float $a, float $b, float $angleC)            Calculate the length of a side of a triangle using the law of cosines.
 * @method float logarithmicFunction(float $x, float $base = M_E)           Calculate the logarithmic function.
 * @method float|int lcm(int $a, int $b)                                    Calculate the least common multiple (LCM) of two numbers.
 * @method array matrixAdjoint(array $A)                                    Calculate the adjugate of a matrix.
 * @method array matrixAdjugate(array $A)                                   Calculate the adjugate of a matrix.
 * @method array matrixCofactor(array $A)                                   Calculate the cofactor of a matrix.
 * @method float matrixDeterminant(array $A)                                Calculate the determinant of a matrix.
 * @method array matrixEigenvalues(array $A)                                Calculate the eigenvalues of a matrix.
 * @method array matrixInverse(array $A)                                    Calculate the inverse of a matrix.
 * @method array matrixMinor(array $A, int $row, int $col)                  Calculate the minor of an element in a matrix.
 * @method array matrixMultiplication(array $A, array $B)                   Multiply two matrices.
 * @method int matrixRank(array $A)                                         Calculate the rank of a matrix.
 * @method float matrixTrace(array $A)                                      Calculate the trace of a matrix.
 * @method array matrixTranspose(array $A)                                  Transpose a matrix.
 * @method float mean(array $nums)                                          Calculate the mean of an array of numbers.
 * @method float median(array $nums)                                        Calculate the median of an array of numbers.
 * @method float naturalLogarithm(float $x)                                 Calculate the natural logarithm of a number.
 * @method float newtonRaphson(callable $f, callable $df, float $x0, int $maxIter = 100, float $tol = 1e-5)     Find the roots of a function using the Newton-Raphson method.
 * @method array newtonRaphsonSystem(callable $F, callable $J, array $x0, float $tol = 1e-7, int $max_iter = 100)     Solve a system of nonlinear equations using the Newton-Raphson method.
 * @method float newtonsMethod(callable $f, callable $f_prime, float $x0, float $tol = 1e-7, int $max_iter = 100) Calculate the root of a function using Newton's method.
 * @method float perimeterOfPolygon(array $sides)                           Calculate the perimeter of a polygon given an array of side lengths.
 * @method float perimeterOfRegularPolygon(int $numSides, float $side)      Calculate the perimeter of a regular polygon given the number of sides and the length of each side.
 * @method float perimeterOfRegularPolygonByRadius(float $radius, int $numSides)    Calculate the perimeter of a regular polygon given its radius.
 * @method float perimeterOfTriangle(float $a, float $b, float $c)          Calculate the perimeter of a triangle given its three sides.
 * @method int permutation(int $n, int $r)                                  Calculate the number of permutations of n items taken r at a time.
 * @method float power(float $x, int $n)                                    Calculate the exponential of a number.
 * @method array qrDecomposition(array $A)                                  Perform QR decomposition of a matrix.
 * @method float quadraticMean(array $nums)                                 Calculate the quadratic mean (root mean square) of an array of numbers.
 * @method float rootMeanSquare(array $nums)                                Calculate the root mean square (RMS) of an array of numbers.
 * @method float sec(float $angle)                                          Calculate the secant of an angle.
 * @method float secondDerivative(callable $f, float $x, float $h = 1e-5)   Calculate the second derivative of a function at a given point.
 * @method float sideLengthOfHexagonFromArea(float $area)                   Calculate the side length of a regular hexagon given its area.
 * @method float sideLengthOfPolygon(float $radius, int $numSides)          Calculate the side length of a regular polygon given its radius.
 * @method float sinh(float $angle)                                         Calculate the hyperbolic sine of an angle.
 * @method array solveFirstOrderODE(callable $f, float $x0, float $y0, float $h, int $n) Solve a first-order differential equation using Euler's method.
 * @method array solveLinearSystem(array $A, array $b)                      Solve a system of linear equations using Gaussian elimination.
 * @method array solveQuadratic(float $a, float $b, float $c)               Solve a quadratic equation ax^2 + bx + c = 0.
 * @method array solveSecondOrderODE(callable $f, float $x0, float $y0, float $dy0, float $h, int $n) Solve a second-order differential equation using Euler's method.
 * @method float standardDeviation(array $nums)                             Calculate the standard deviation of an array of numbers.
 * @method float surfaceAreaOfCone(float $radius, float $slantHeight)       Calculate the surface area of a cone.
 * @method float surfaceAreaOfCylinder(float $radius, float $height)        Calculate the surface area of a cylinder.
 * @method float surfaceAreaOfEllipsoid(float $a, float $b, float $c)       Calculate the surface area of an ellipsoid.
 * @method float surfaceAreaOfRegularDecagon(float $side)                   Calculate the surface area of a regular decagon.
 * @method float surfaceAreaOfRegularIcosahedron(float $side)               Calculate the surface area of a regular icosahedron.
 * @method float surfaceAreaOfRegularIcosahedronFromRadius(float $radius)   Calculate the surface area of a regular icosahedron given its circumscribed radius.
 * @method float surfaceAreaOfRegularPentadecagon(float $side)              Calculate the surface area of a regular pentadecagon.
 * @method float surfaceAreaOfSphere(float $radius)                         Calculate the surface area of a sphere.
 * @method float surfaceAreaOfSphereFromRadius(float $radius)               Calculate the surface area of a sphere given its radius.
 * @method float surfaceAreaOfTetrahedron(float $side)                      Calculate the surface area of a regular tetrahedron.
 * @method array taylorSeries(callable $f, float $x, int $n, float $h = 1e-5)   Calculate the Taylor series expansion of a function at a given point.
 * @method float tanh(float $angle)                                         Calculate the hyperbolic tangent of an angle.
 * @method float thirdDerivative(callable $f, float $x, float $h = 1e-5)    Calculate the third derivative of a function at a given point.
 * @method float variance(array $nums)                                      Calculate the variance of an array of numbers.
 * @method float volumeOfCone(float $radius, float $height)                 Calculate the volume of a cone.
 * @method float volumeOfCylinder(float $radius, float $height)             Calculate the volume of a cylinder.
 * @method float volumeOfPyramid(float $baseArea, float $height)            Calculate the volume of a pyramid.
 * @method float volumeOfRectangularPrism(float $length, float $width, float $height)    Calculate the volume of a rectangular prism (cuboid).
 * @method float volumeOfRegularDodecahedron(float $side)                   Calculate the volume of a regular dodecahedron.
 * @method float volumeOfRegularDodecahedronFromRadius(float $radius)       Calculate the volume of a regular dodecahedron given its circumscribed radius.
 * @method float volumeOfRegularHeptagon(float $side)                       Calculate the volume of a regular heptagon.
 * @method float volumeOfRegularIcosahedron(float $side)                    Calculate the volume of a regular icosahedron.
 * @method float volumeOfRegularIcosahedronFromInradius(float $inradius)    Calculate the volume of a regular icosahedron given its inradius.
 * @method float volumeOfRegularOctahedron(float $side)                     Calculate the volume of a regular octahedron.
 * @method float volumeOfRegularPentadecagon(float $side)                   Calculate the volume of a regular pentadecagon.
 * @method float volumeOfSphere(float $radius)                              Calculate the volume of a sphere.
 * @method float volumeOfSphereFromSurfaceArea(float $surfaceArea)          Calculate the volume of a sphere given its surface area.
 * @method float volumeOfTetrahedralPyramid(float $side)                    Calculate the volume of a regular tetrahedral pyramid.
 * 
 * 



 * [ INHERITANCE TObject METHODS ]
 * @method string __toString()                                             Returns a string containing the name of this class.
 * @method bool Free(object $object)                                       Frees the memory of the Object or its clone.
 * @method bool FreeProperties(object $object)                             Delete and Frees up memory for all class properties.
 * @method array getChildren(object|string|null $object_or_class = null)   Return the child classes of the given class or object
 * @method bool getClassDeprecated()                                       Returns true if class is deprecated, otherwise false.
 * @method int getClassVersion()                                           We get the version of the class.
 * @method mixed getDeepProperty(array $keys, ?array $array = null)        Gets a property at any depth within the properties array.
 * @method array getDescendantsTree(object|string|null $object_or_class = null)     Return a tree array of all descendants of the given class or object
 * @method array|false getParents(object|string|null $object_or_class = null, bool $autoload = true)     Return the parent classes of the given class or object
 * @method array getProperties()                                           Returns the table of class properties.
 * @method mixed getProperty(string $property)                             Returns the content of the requested property.
 * @method ?array getPublicProperties()                                    Returns an array of the public properties of the class.
 * @method int|false getVersion(string $property)                          Get the version as an integer.       
 * @method string|false getVersionStr(string $property)                    Get the version as a formatted string.
 * @method bool isExecutable(int $currentVersion, int $currentPHPVersion)  Checks whether the current version of the class is executable according to the minimum and maximum versions you specify.
 * @method void setDeepProperty(array $keys, mixed $value, ?array &$array = null)                       Sets a property at any depth within the properties array.
 * @method void setProjectVersion(int|string $version = -1)                                             Sets the project version.
 * @method bool setProperties(array $properties, string|int|null $property_key = null)                  Recursively sets properties of the class, merging sub-arrays without overwriting other data.
 * @method bool setProperty(string|int $property, mixed $value, string|int|null $property_key = null)   Set a single property of the class.
 */
class TMathsHandler extends TObject
{

    /**
     * The constructor method for the class. It must always be overridden.
     * 
     * @desc <English>  Initializes the class with optional properties.
     * @desc <Greek>    Αρχικοποιεί την κλάση με προαιρετικές ιδιότητες.
     * 
     * @param array $properties <English>  Optional properties for the class.
     *                           <Greek>    Προαιρετικές ιδιότητες για την κλάση.
     * 
     * @version 25.0.0
     */
    public function __construct(array $properties = [])
    {
        /*
        <English>
            If there are new properties for the class, we pass them to the properties table by calling the parent constructor.
        </English>
        <Greek>
            Εάν υπάρχουν νέες ιδιότητες για την κλάση, τις περνάμε στον πίνακα ιδιοτήτων καλώντας τον προγονικό κατασκευαστή.
        </Greek>
        */
        parent::__construct($properties);
    }
    
    
    /**
     * Calculate the absolute value of each number in an array.
     *
     * @desc <English> Calculate the absolute value of each number in an array.
     * @desc <Greek> Υπολογίστε την απόλυτη τιμή κάθε αριθμού σε έναν πίνακα.
     *
     * @param array $nums <English> Array of numbers
     *                    <Greek> Πίνακας αριθμών
     * @return array <English> Array of absolute values
     *               <Greek> Πίνακας απόλυτων τιμών
     *
     * @formula |x| = x if x >= 0, -x if x < 0
     *
     * @version 25.0.0
     */
    public function absArray(array $nums): array
    {
        return array_map('abs', $nums);
    }



    /**
     * Calculate the area of a circle.
     *
     * @desc <English> Calculate the area of a circle.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός κύκλου.
     *
     * @param float $radius <English> Radius of the circle
     *                      <Greek> Ακτίνα του κύκλου
     * @return float <English> Area of the circle
     *               <Greek> Επιφάνεια του κύκλου
     *
     * @formula A = π * r^2
     *
     * @version 25.0.0
     */
    public function areaOfCircle(float $radius): float
    {
        if ($radius <= 0) {
            throw new InvalidArgumentException("The radius should be positive.");
        }

        return M_PI * $radius * $radius;
    }


    /**
     * Calculate the area of a parallelogram.
     *
     * @desc <English> Calculate the area of a parallelogram.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός παραλληλογράμμου.
     *
     * @param float $base <English> Length of the base
     *                    <Greek> Μήκος της βάσης
     * @param float $height <English> Height of the parallelogram
     *                      <Greek> Ύψος του παραλληλογράμμου
     * @return float <English> Area of the parallelogram
     *               <Greek> Επιφάνεια του παραλληλογράμμου
     *
     * @formula A = base * height
     *
     * @version 25.0.0
     */
    public function areaOfParallelogram(float $base, float $height): float
    {
        if ($base <= 0 || $height <= 0) {
            throw new InvalidArgumentException("The base and height should be positive.");
        }

        return $base * $height;
    }

    
    /**
     * Calculate the area of a regular decagon.
     *
     * @desc <English> Calculate the area of a regular decagon.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός κανονικού δεκαγώνου.
     *
     * @param float $side <English> Length of a side of the decagon
     *                    <Greek> Μήκος μιας πλευράς του δεκαγώνου
     * @return float <English> Area of the decagon
     *               <Greek> Επιφάνεια του δεκαγώνου
     *
     * @formula A = (5/2) * side^2 * (1 + √5)
     *
     * @version 25.0.0
     */
    public function areaOfRegularDecagon(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return (5 / 2) * pow($side, 2) * (1 + sqrt(5));
    }


    /**
     * Calculate the area of a regular dodecagon.
     *
     * @desc <English> Calculate the area of a regular dodecagon.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός κανονικού δωδεκάγωνου.
     *
     * @param float $side <English> Length of a side of the dodecagon
     *                    <Greek> Μήκος μιας πλευράς του δωδεκάγωνου
     * @return float <English> Area of the dodecagon
     *               <Greek> Επιφάνεια του δωδεκάγωνου
     *
     * @formula A = 3 * (2 + √3) * side^2
     *
     * @version 25.0.0
     */
    public function areaOfRegularDodecagon(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return 3 * (2 + sqrt(3)) * pow($side, 2);
    }


    /**
     * Calculate the area of a regular heptagon.
     *
     * @desc <English> Calculate the area of a regular heptagon.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός κανονικού επτάγωνου.
     *
     * @param float $side <English> Length of a side of the heptagon
     *                    <Greek> Μήκος μιας πλευράς του επτάγωνου
     * @return float <English> Area of the heptagon
     *               <Greek> Επιφάνεια του επτάγωνου
     *
     * @formula A = (7/4) * side^2 * cot(π/7)
     *
     * @version 25.0.0
     */
    public function areaOfRegularHeptagon(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return (7 / 4) * pow($side, 2) * $this->cot(M_PI / 7);
    }



    /**
     * Calculate the area of a regular hexagon.
     *
     * @desc <English> Calculate the area of a regular hexagon.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός κανονικού εξαγώνου.
     *
     * @param float $side <English> Length of a side of the hexagon
     *                    <Greek> Μήκος μιας πλευράς του εξαγώνου
     * @return float <English> Area of the hexagon
     *               <Greek> Επιφάνεια του εξαγώνου
     *
     * @formula A = (3√3/2) * side^2
     *
     * @version 25.0.0
     */
    public function areaOfRegularHexagon(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return (3 * sqrt(3) / 2) * pow($side, 2);
    }


    /**
     * Calculate the area of a regular icosahedron.
     *
     * @desc <English> Calculate the area of a regular icosahedron.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός κανονικού εικοσάεδρου.
     *
     * @param float $side <English> Length of a side of the icosahedron
     *                    <Greek> Μήκος μιας πλευράς του εικοσάεδρου
     * @return float <English> Area of the icosahedron
     *               <Greek> Επιφάνεια του εικοσάεδρου
     *
     * @formula A = 5 * √3 * side^2
     *
     * @version 25.0.0
     */
    public function areaOfRegularIcosahedron(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return 5 * sqrt(3) * pow($side, 2);
    }


    /**
     * Calculate the area of a regular nonagon.
     *
     * @desc <English> Calculate the area of a regular nonagon.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός κανονικού εννεαγώνου.
     *
     * @param float $side <English> Length of a side of the nonagon
     *                    <Greek> Μήκος μιας πλευράς του εννεαγώνου
     * @return float <English> Area of the nonagon
     *               <Greek> Επιφάνεια του εννεαγώνου
     *
     * @formula A = (9/4) * side^2 * cot(π/9)
     *
     * @version 25.0.0
     */
    public function areaOfRegularNonagon(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return (9 / 4) * pow($side, 2) * $this->cot(M_PI / 9);
    }
  

    /**
     * Calculate the area of a regular pentadecagon.
     *
     * @desc <English> Calculate the area of a regular pentadecagon.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός κανονικού δεκαπενταγώνου.
     *
     * @param float $side <English> Length of a side of the pentadecagon
     *                    <Greek> Μήκος μιας πλευράς του δεκαπενταγώνου
     * @return float <English> Area of the pentadecagon
     *               <Greek> Επιφάνεια του δεκαπενταγώνου
     *
     * @formula A = (15 / 4) * side^2 * $this->cot(π / 15)
     *
     * @version 25.0.0
     */
    public function areaOfRegularPentadecagon(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return (15 / 4) * pow($side, 2) * $this->cot(M_PI / 15);
    }


    /**
     * Calculate the area of a regular pentagon.
     *
     * @desc <English> Calculate the area of a regular pentagon.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός κανονικού πενταγώνου.
     *
     * @param float $side <English> Length of a side of the pentagon
     *                    <Greek> Μήκος μιας πλευράς του πενταγώνου
     * @return float <English> Area of the pentagon
     *               <Greek> Επιφάνεια του πενταγώνου
     *
     * @formula A = (5/4) * side^2 * cot(π/5)
     *
     * @version 25.0.0
     */
    public function areaOfRegularPentagon(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return (5 / 4) * pow($side, 2) * $this->cot(M_PI / 5);
    }


    /**
     * Calculate the area of a regular polygon given the number of sides and the length of each side.
     *
     * @desc <English> Calculate the area of a regular polygon given the number of sides and the length of each side.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός κανονικού πολυγώνου δεδομένου του αριθμού των πλευρών και του μήκους κάθε πλευράς.
     *
     * @param int $n <English> Number of sides of the polygon
     *               <Greek> Αριθμός πλευρών του πολυγώνου
     * @param float $side <English> Length of each side of the polygon
     *                    <Greek> Μήκος κάθε πλευράς του πολυγώνου
     * @return float <English> Area of the polygon
     *               <Greek> Επιφάνεια του πολυγώνου
     *
     * @formula A = (n * s^2) / (4 * tan(π / n))
     *
     * @version 25.0.0
     */
    public function areaOfRegularPolygon(int $n, float $side): float
    {
        if ($n <= 0 || $side <= 0) {
            throw new InvalidArgumentException("The number of sides and the length of the side should be positive.");
        }

        return ($n * pow($side, 2)) / (4 * tan(M_PI / $n));
    }


    /**
     * Calculate the area of a rhombus given its diagonals.
     *
     * @desc <English> Calculate the area of a rhombus given its diagonals.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός ρομβοειδούς δεδομένων των διαγωνίων του.
     *
     * @param float $d1 <English> Length of the first diagonal
     *                  <Greek> Μήκος της πρώτης διαγωνίου
     * @param float $d2 <English> Length of the second diagonal
     *                  <Greek> Μήκος της δεύτερης διαγωνίου
     * @return float <English> Area of the rhombus
     *               <Greek> Επιφάνεια του ρομβοειδούς
     *
     * @formula A = (1/2) * d1 * d2
     *
     * @version 25.0.0
     */
    public function areaOfRhombus(float $d1, float $d2): float
    {
        if ($d1 <= 0 || $d2 <= 0) {
            throw new InvalidArgumentException("The lengths of the diagonals should be positive.");
        }

        return (1/2) * $d1 * $d2;
    }


    /**
     * Calculate the area of a square.
     *
     * @desc <English> Calculate the area of a square.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός τετραγώνου.
     *
     * @param float $side <English> Length of a side of the square
     *                    <Greek> Μήκος μιας πλευράς του τετραγώνου
     * @return float <English> Area of the square
     *               <Greek> Επιφάνεια του τετραγώνου
     *
     * @formula A = side^2
     *
     * @version 25.0.0
     */
    public function areaOfSquare(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return pow($side, 2);
    }


    /**
     * Calculate the area of a trapezoid.
     *
     * @desc <English> Calculate the area of a trapezoid.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός τραπεζίου.
     *
     * @param float $a <English> Length of the first base
     *                 <Greek> Μήκος της πρώτης βάσης
     * @param float $b <English> Length of the second base
     *                 <Greek> Μήκος της δεύτερης βάσης
     * @param float $height <English> Height of the trapezoid
     *                      <Greek> Ύψος του τραπεζίου
     * @return float <English> Area of the trapezoid
     *               <Greek> Επιφάνεια του τραπεζίου
     *
     * @formula A = (1/2) * (a + b) * height
     *
     * @version 25.0.0
     */
    public function areaOfTrapezoid(float $a, float $b, float $height): float
    {
        if ($a <= 0 || $b <= 0 || $height <= 0) {
            throw new InvalidArgumentException("The lengths of the bases and height should be positive.");
        }

        return (1/2) * ($a + $b) * $height;
    }


    /**
     * Calculate the area of a triangle given its base and height.
     *
     * @desc <English> Calculate the area of a triangle given its base and height.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός τριγώνου δεδομένης της βάσης και του ύψους του.
     *
     * @param float $base <English> Base of the triangle
     *                    <Greek> Βάση του τριγώνου
     * @param float $height <English> Height of the triangle
     *                      <Greek> Ύψος του τριγώνου
     * @return float <English> Area of the triangle
     *               <Greek> Επιφάνεια του τριγώνου
     *
     * @formula A = (1/2) * base * height
     *
     * @version 25.0.0
     */
    public function areaOfTriangle(float $base, float $height): float
    {
        if ($base <= 0 || $height <= 0) {
            throw new InvalidArgumentException("The base and height should be positive.");
        }

        return (1/2) * $base * $height;
    }


    /**
     * Calculate the area of a triangle using Heron's formula.
     *
     * @desc <English> Calculate the area of a triangle using Heron's formula.
     * @desc <Greek> Υπολογίστε το εμβαδόν ενός τριγώνου χρησιμοποιώντας τη φόρμουλα του Ηρώνα.
     *
     * @param float $a <English> Length of side a
     *                 <Greek> Μήκος της πλευράς a
     * @param float $b <English> Length of side b
     *                 <Greek> Μήκος της πλευράς b
     * @param float $c <English> Length of side c
     *                 <Greek> Μήκος της πλευράς c
     * @return float <English> Area of the triangle
     *               <Greek> Εμβαδόν του τριγώνου
     *
     * @formula A = √(s(s - a)(s - b)(s - c)), όπου s = (a + b + c) / 2
     *
     * @version 25.0.0
     */
    public function areaOfTriangleHeron(float $a, float $b, float $c): float
    {
        if ($a <= 0 || $b <= 0 || $c <= 0) {
            throw new InvalidArgumentException("The lengths of the sides should be positive.");
        }

        if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
            throw new InvalidArgumentException("The sum of any two sides must be greater than the third side.");
        }

        $s = ($a + $b + $c) / 2;
        return sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
    }


    /**
     * Calculate the binomial coefficient (n choose k).
     *
     * @desc <English> Calculate the binomial coefficient (n choose k).
     * @desc <Greek> Υπολογίστε τον διωνυμικό συντελεστή (n choose k).
     *
     * @param int $n <English> The number of items
     *               <Greek> Ο αριθμός των στοιχείων
     * @param int $k <English> The number of choices
     *               <Greek> Ο αριθμός των επιλογών
     * @return int <English> The binomial coefficient
     *             <Greek> Ο διωνυμικός συντελεστής
     *
     * @formula C(n, k) = n! / (k! * (n - k)!)
     *
     * @version 25.0.0
     */
    public function binomialCoefficient(int $n, int $k): int
    {
        if ($k > $n) {
            return 0;
        }
        if ($k === 0 || $k === $n) {
            return 1;
        }
        $k = min($k, $n - $k); // C(n, k) == C(n, n-k)
        $c = 1;
        for ($i = 0; $i < $k; $i++) {
            $c = $c * ($n - $i) / ($i + 1);
        }
        return $c;
    }


    /**
     * Solve a system of nonlinear equations using Broyden's method.
     *
     * @desc <English> Solve a system of nonlinear equations using Broyden's method.
     * @desc <Greek> Λύστε ένα σύστημα μη γραμμικών εξισώσεων χρησιμοποιώντας τη μέθοδο του Broyden.
     *
     * @param callable $F <English> Function that returns the vector of functions F(x)
     *                    <Greek> Συνάρτηση που επιστρέφει το διάνυσμα των συναρτήσεων F(x)
     * @param array $x0 <English> Initial guess for the solution
     *                  <Greek> Αρχική προσέγγιση για τη λύση
     * @param float $tol <English> Tolerance level
     *                   <Greek> Επίπεδο ανοχής
     * @param int $max_iter <English> Maximum number of iterations
     *                      <Greek> Μέγιστος αριθμός επαναλήψεων
     * @return array <English> Approximate solution vector
     *               <Greek> Προσεγγιστικό διάνυσμα λύσης
     *
     * @version 25.0.0
     */
    public function broydenMethod(callable $F, array $x0, float $tol = 1e-7, int $max_iter = 100): array
    {
        $n = count($x0);
        $x = $x0;
        $B = array_fill(0, $n, array_fill(0, $n, 0));
        for ($i = 0; $i < $n; $i++) {
            $B[$i][$i] = 1;
        }
        $F_val = $F($x);
        for ($iter = 0; $iter < $max_iter; $iter++) {
            $dx = $this->solveLinearSystem($B, array_map(function($v) { return -$v; }, $F_val));
            for ($i = 0; $i < $n; $i++) {
                $x[$i] += $dx[$i];
            }
            $F_new = $F($x);
            if (max(array_map('abs', $F_new)) < $tol) {
                return $x;
            }
            $dF = array_map(function($a, $b) { return $a - $b; }, $F_new, $F_val);
            $B = array_map(function($row, $dr) use ($dx) {
                return is_array($row) ? array_map(function($b, $d) use ($dr, $dx) {
                    return $dr[0] != 0 ? $b + ($d / $dr[0]) * $dx[0] : $b;
                }, $row, $dx) : $row;
            }, $B, $dF);
            $F_val = $F_new;
        }
        throw new Exception("Maximum number of iterations reached.");
    }

    
    /**
     * Calculate the circumference of a circle.
     *
     * @desc <English> Calculate the circumference of a circle.
     * @desc <Greek> Υπολογίστε την περίμετρο ενός κύκλου.
     *
     * @param float $radius <English> Radius of the circle
     *                      <Greek> Ακτίνα του κύκλου
     * @return float <English> Circumference of the circle
     *               <Greek> Περίμετρος του κύκλου
     *
     * @formula C = 2 * π * r
     *
     * @version 25.0.0
     */
    public function circumference(float $radius): float
    {
        if ($radius <= 0) {
            throw new InvalidArgumentException("The radius should be positive.");
        }

        return 2 * M_PI * $radius;
    }


    /**
     * Calculate the radius of a circle circumscribed around a square.
     *
     * @desc <English> Calculate the radius of a circle circumscribed around a square.
     * @desc <Greek> Υπολογίστε την ακτίνα ενός κύκλου που περιγράφεται γύρω από ένα τετράγωνο.
     *
     * @param float $side <English> Length of the side of the square
     *                    <Greek> Μήκος της πλευράς του τετραγώνου
     * @return float <English> Radius of the circumscribed circle
     *               <Greek> Ακτίνα του περιγεγραμμένου κύκλου
     *
     * @formula R = side * (√2 / 2)
     *
     * @version 25.0.0
     */
    public function circumscribedCircleAroundSquare(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return $side * (sqrt(2) / 2);
    }

   
    /**
     * Calculate the radius of the circumscribed circle around a triangle.
     *
     * @desc <English> Calculate the radius of the circumscribed circle around a triangle.
     * @desc <Greek> Υπολογίστε την ακτίνα του περιγεγραμμένου κύκλου γύρω από ένα τρίγωνο.
     *
     * @param float $a <English> Length of side a
     *                 <Greek> Μήκος της πλευράς a
     * @param float $b <English> Length of side b
     *                 <Greek> Μήκος της πλευράς b
     * @param float $c <English> Length of side c
     *                 <Greek> Μήκος της πλευράς c
     * @return float <English> Radius of the circumscribed circle
     *               <Greek> Ακτίνα του περιγεγραμμένου κύκλου
     *
     * @formula R = (a * b * c) / (4 * A), όπου A είναι η περιοχή του τριγώνου
     *
     * @version 25.0.0
     */
    public function circumscribedCircleRadius(float $a, float $b, float $c): float
    {
        if ($a <= 0 || $b <= 0 || $c <= 0) {
            throw new InvalidArgumentException("The lengths of the sides should be positive.");
        }

        if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
            throw new InvalidArgumentException("The sum of any two sides must be greater than the third side.");
        }

        $area = $this->areaOfTriangleHeron($a, $b, $c);
        return ($a * $b * $c) / (4 * $area);
    }


    /**
     * Calculate the number of combinations of n items taken r at a time.
     *
     * @desc <English> Calculate the number of combinations of n items taken r at a time.
     * @desc <Greek> Υπολογίστε τον αριθμό των συνδυασμών n στοιχείων που λαμβάνονται ανά r.
     *
     * @param int $n <English> The number of items
     *               <Greek> Ο αριθμός των στοιχείων
     * @param int $r <English> The number of choices
     *               <Greek> Ο αριθμός των επιλογών
     * @return int <English> The number of combinations
     *             <Greek> Ο αριθμός των συνδυασμών
     *
     * @formula C(n, r) = n! / (r! * (n - r)!)
     *
     * @version 25.0.0
     */
    public function combination(int $n, int $r): int
    {
        if ($n < 0 || $r < 0) {
            throw new InvalidArgumentException("The number of elements and options should be positive.");
        }
        if ($r > $n) {
            throw new InvalidArgumentException("The number of options cannot be greater than the number of items.");
        }

        return $this->factorial($n) / ($this->factorial($r) * $this->factorial($n - $r));
    }


    /**
     * Generate combinations of a given size from an array of elements.
     *
     * @desc <English> Generate combinations of a given size from an array of elements.
     * @desc <Greek> Δημιουργήστε συνδυασμούς ενός δεδομένου μεγέθους από έναν πίνακα στοιχείων.
     *
     * @param array $elements <English> The array of elements
     *                        <Greek> Ο πίνακας των στοιχείων
     * @param int $size <English> The size of the combinations
     *                  <Greek> Το μέγεθος των συνδυασμών
     * @return array <English> The array of combinations
     *               <Greek> Ο πίνακας των συνδυασμών
     *
     * @formula C(n, k) = n! / (k!(n - k)!)
     *
     * @version 25.0.0
     */
    public function combinations(array $elements, int $size): array
    {
        $result = [];
        if ($size == 1) {
            foreach ($elements as $element) {
                $result[] = [$element];
            }
        } else {
            for ($i = 0; $i <= count($elements) - $size; $i++) {
                $remaining = array_slice($elements, $i + 1);
                $combinations = $this->combinations($remaining, $size - 1);
                foreach ($combinations as $combination) {
                    $result[] = array_merge([$elements[$i]], $combination);
                }
            }
        }

        return $result;
    }


    /**
     * Add two complex numbers.
     *
     * @desc <English> Add two complex numbers.
     * @desc <Greek> Προσθέστε δύο σύνθετους αριθμούς.
     *
     * @param array $a <English> The first complex number (array with two elements: real and imaginary parts)
     *                 <Greek> Ο πρώτος σύνθετος αριθμός (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     * @param array $b <English> The second complex number (array with two elements: real and imaginary parts)
     *                 <Greek> Ο δεύτερος σύνθετος αριθμός (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     * @return array <English> The sum of the two complex numbers (array with two elements: real and imaginary parts)
     *               <Greek> Το άθροισμα των δύο σύνθετων αριθμών (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     *
     * @formula (a + bi) + (c + di) = (a + c) + (b + d)i
     *
     * @version 25.0.0
     */
    public function complexAddition(array $a, array $b): array
    {
        return [$a[0] + $b[0], $a[1] + $b[1]];
    }


    /**
     * Calculate the conjugate of a complex number.
     *
     * @desc <English> Calculate the conjugate of a complex number.
     * @desc <Greek> Υπολογίστε τον συζυγή ενός σύνθετου αριθμού.
     *
     * @param array $a <English> The complex number (array with two elements: real and imaginary parts)
     *                 <Greek> Ο σύνθετος αριθμός (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     * @return array <English> The conjugate of the complex number (array with two elements: real and imaginary parts)
     *               <Greek> Ο συζυγής του σύνθετου αριθμού (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     *
     * @formula conjugate(a + bi) = a - bi
     *
     * @version 25.0.0
     */
    public function complexConjugate(array $a): array
    {
        return [$a[0], -$a[1]];
    }


    /**
     * Calculate the derivative of a complex function.
     *
     * @desc <English> Calculate the derivative of a complex function.
     * @desc <Greek> Υπολογίστε την παράγωγο μιας σύνθετης συνάρτησης.
     *
     * @param callable $f <English> The complex function
     *                    <Greek> Η σύνθετη συνάρτηση
     * @param array $z <English> The point at which to evaluate the derivative (array with two elements: real and imaginary parts)
     *                 <Greek> Το σημείο στο οποίο θα αξιολογηθεί η παράγωγος (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     * @param float $h <English> Small interval for calculating the derivative (default is 1e-5)
     *                 <Greek> Μικρό διάστημα για τον υπολογισμό της παραγώγου (προεπιλογή είναι το 1e-5)
     * @return array <English> The derivative of the complex function at the given point (array with two elements: real and imaginary parts)
     *               <Greek> Η παράγωγος της σύνθετης συνάρτησης στο δεδομένο σημείο (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     *
     * @formula f'(z) = (f(z + h) - f(z - h)) / (2h)
     *
     * @version 25.0.0
     */
    public function complexDerivative(callable $f, array $z, float $h = 1e-5): array
    {
        $re = $z[0];
        $im = $z[1];
        $fzh = $f([$re + $h, $im]);
        $f_zh = $f([$re - $h, $im]);
        $dfre = ($fzh[0] - $f_zh[0]) / (2 * $h);
        $dfim = ($fzh[1] - $f_zh[1]) / (2 * $h);
        return [$dfre, $dfim];
    }


    /**
     * Divide two complex numbers.
     *
     * @desc <English> Divide two complex numbers.
     * @desc <Greek> Διαιρέστε δύο σύνθετους αριθμούς.
     *
     * @param array $a <English> The first complex number (array with two elements: real and imaginary parts)
     *                 <Greek> Ο πρώτος σύνθετος αριθμός (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     * @param array $b <English> The second complex number (array with two elements: real and imaginary parts)
     *                 <Greek> Ο δεύτερος σύνθετος αριθμός (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     * @return array <English> The quotient of the two complex numbers (array with two elements: real and imaginary parts)
     *               <Greek> Το πηλίκο των δύο σύνθετων αριθμών (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     *
     * @formula (a + bi) / (c + di) = [(a * c + b * d) / (c^2 + d^2)] + [(b * c - a * d) / (c^2 + d^2)]i
     *
     * @version 25.0.0
     */
    public function complexDivision(array $a, array $b): array
    {
        $denominator = $b[0] * $b[0] + $b[1] * $b[1];
        $real = ($a[0] * $b[0] + $a[1] * $b[1]) / $denominator;
        $imaginary = ($a[1] * $b[0] - $a[0] * $b[1]) / $denominator;
        return [$real, $imaginary];
    }


    /**
     * Calculate the exponential of a complex number.
     *
     * @desc <English> Calculate the exponential of a complex number.
     * @desc <Greek> Υπολογίστε την εκθετική ενός σύνθετου αριθμού.
     *
     * @param array $a <English> The complex number (array with two elements: real and imaginary parts)
     *                 <Greek> Ο σύνθετος αριθμός (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     * @return array <English> The exponential of the complex number (array with two elements: real and imaginary parts)
     *               <Greek> Η εκθετική του σύνθετου αριθμού (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     *
     * @formula e^(a + bi) = e^a * (cos(b) + i * sin(b))
     *
     * @version 25.0.0
     */
    public function complexExponential(array $a): array
    {
        $expReal = exp($a[0]);
        $real = $expReal * cos($a[1]);
        $imaginary = $expReal * sin($a[1]);
        return [$real, $imaginary];
    }


    /**
     * Calculate the integral of a complex function over an interval.
     *
     * @desc <English> Calculate the integral of a complex function over an interval.
     * @desc <Greek> Υπολογίστε το ολοκλήρωμα μιας σύνθετης συνάρτησης σε ένα διάστημα.
     *
     * @param callable $f <English> The complex function
     *                    <Greek> Η σύνθετη συνάρτηση
     * @param array $a <English> Start of the interval (array with two elements: real and imaginary parts)
     *                 <Greek> Αρχή του διαστήματος (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     * @param array $b <English> End of the interval (array with two elements: real and imaginary parts)
     *                 <Greek> Τέλος του διαστήματος (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     * @param int $n <English> Number of sub-intervals (default is 1000)
     *               <Greek> Αριθμός υποδιαστημάτων (προεπιλογή είναι 1000)
     * @return array <English> The integral of the complex function over the interval (array with two elements: real and imaginary parts)
     *               <Greek> Το ολοκλήρωμα της σύνθετης συνάρτησης στο διάστημα (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     *
     * @formula ∫ f(z) dz ≈ Σ (f(z_i) * Δz)
     *
     * @version 25.0.0
     */
    public function complexIntegral(callable $f, array $a, array $b, int $n = 1000): array
    {
        $reA = $a[0];
        $imA = $a[1];
        $reB = $b[0];
        $imB = $b[1];

        $hRe = ($reB - $reA) / $n;
        $hIm = ($imB - $imA) / $n;

        $sumRe = 0.5 * ($f($a)[0] + $f($b)[0]);
        $sumIm = 0.5 * ($f($a)[1] + $f($b)[1]);

        for ($i = 1; $i < $n; $i++) {
            $re = $reA + $i * $hRe;
            $im = $imA + $i * $hIm;
            $sumRe += $f([$re, $im])[0];
            $sumIm += $f([$re, $im])[1];
        }

        $integralRe = $hRe * $sumRe;
        $integralIm = $hIm * $sumIm;

        return [$integralRe, $integralIm];
    }


    /**
     * Calculate the logarithm of a complex number.
     *
     * @desc <English> Calculate the logarithm of a complex number.
     * @desc <Greek> Υπολογίστε τον λογάριθμο ενός σύνθετου αριθμού.
     *
     * @param array $a <English> The complex number (array with two elements: real and imaginary parts)
     *                 <Greek> Ο σύνθετος αριθμός (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     * @return array <English> The logarithm of the complex number (array with two elements: real and imaginary parts)
     *               <Greek> Ο λογάριθμος του σύνθετου αριθμού (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     *
     * @formula log(a + bi) = ln|a + bi| + i*arg(a + bi)
     *
     * @version 25.0.0
     */
    public function complexLogarithm(array $a): array
    {
        $magnitude = sqrt($a[0] * $a[0] + $a[1] * $a[1]);
        $angle = atan2($a[1], $a[0]);
        return [log($magnitude), $angle];
    }


    /**
     * Calculate the magnitude of a complex number.
     *
     * @desc <English> Calculate the magnitude of a complex number.
     * @desc <Greek> Υπολογίστε το μέτρο ενός σύνθετου αριθμού.
     *
     * @param array $a <English> The complex number (array with two elements: real and imaginary parts)
     *                 <Greek> Ο σύνθετος αριθμός (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     * @return float <English> The magnitude of the complex number
     *               <Greek> Το μέτρο του σύνθετου αριθμού
     *
     * @formula |a + bi| = √(a^2 + b^2)
     *
     * @version 25.0.0
     */
    public function complexMagnitude(array $a): float
    {
        return sqrt(pow($a[0], 2) + pow($a[1], 2));
    }


    /**
     * Multiply two complex numbers.
     *
     * @desc <English> Multiply two complex numbers.
     * @desc <Greek> Πολλαπλασιάστε δύο σύνθετους αριθμούς.
     *
     * @param array $a <English> The first complex number (array with two elements: real and imaginary parts)
     *                 <Greek> Ο πρώτος σύνθετος αριθμός (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     * @param array $b <English> The second complex number (array with two elements: real and imaginary parts)
     *                 <Greek> Ο δεύτερος σύνθετος αριθμός (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     * @return array <English> The product of the two complex numbers (array with two elements: real and imaginary parts)
     *               <Greek> Το γινόμενο των δύο σύνθετων αριθμών (πίνακας με δύο στοιχεία: πραγματικό και φανταστικό μέρος)
     *
     * @formula (a + bi) * (c + di) = (ac - bd) + (ad + bc)i
     *
     * @version 25.0.0
     */
    public function complexMultiplication(array $a, array $b): array
    {
        $real = $a[0] * $b[0] - $a[1] * $b[1];
        $imaginary = $a[0] * $b[1] + $a[1] * $b[0];
        return [$real, $imaginary];
    }


    /**
     * Calculate the hyperbolic cosine of an angle.
     *
     * @desc <English> Calculate the hyperbolic cosine of an angle.
     * @desc <Greek> Υπολογίστε το υπερβολικό συνημίτονο μιας γωνίας.
     *
     * @param float $angle <English> The angle in radians
     *                     <Greek> Η γωνία σε ακτίνια
     * @return float <English> The hyperbolic cosine of the angle
     *               <Greek> Το υπερβολικό συνημίτονο της γωνίας
     *
     * @formula cosh(x) = (e^x + e^(-x)) / 2
     *
     * @version 25.0.0
     */
    public function cosh(float $angle): float
    {
        return (exp($angle) + exp(-$angle)) / 2;
    }
    

    /**
     * Calculate the cotangent of an angle.
     *
     * @desc <English> Calculate the cotangent of an angle.
     * @desc <Greek> Υπολογίστε την εφαπτομένη μιας γωνίας.
     *
     * @param float $angle <English> Angle in radians
     *                     <Greek> Γωνία σε ακτίνια
     * @return float <English> Cotangent of the angle
     *               <Greek> Εφαπτομένη της γωνίας
     *
     * @formula cot(angle) = 1 / tan(angle)
     *
     * @version 25.0.0
     */
    public function cot(float $angle): float
    {
        if ($angle == 0) {
            throw new InvalidArgumentException("Angle must not be zero.");
        }

        return 1 / tan($angle);
    }


    /**
     * Calculate the cosecant of an angle.
     *
     * @desc <English> Calculate the cosecant of an angle.
     * @desc <Greek> Υπολογίστε την συνεφαπτομένη μιας γωνίας.
     *
     * @param float $angle <English> Angle in radians
     *                     <Greek> Γωνία σε ακτίνια
     * @return float <English> Cosecant of the angle
     *               <Greek> Συνεφαπτομένη της γωνίας
     *
     * @formula csc(angle) = 1 / sin(angle)
     *
     * @version 25.0.0
     */
    public function csc(float $angle): float
    {
        return 1 / sin($angle);
    }


    /**
     * Deflate a polynomial by a given root.
     *
     * @desc <English> Deflate a polynomial by a given root.
     * @desc <Greek> Αφαιρέστε ένα πολυώνυμο με μια δεδομένη ρίζα.
     *
     * @param array $coefficients <English> Coefficients of the polynomial
     *                            <Greek> Συντελεστές του πολυωνύμου
     * @param float $root <English> The root to deflate by
     *                    <Greek> Η ρίζα για την οποία αφαιρείται το πολυώνυμο
     * @return array <English> The deflated polynomial coefficients
     *               <Greek> Οι συντελεστές του πολυωνύμου μετά την αφαίρεση
     *
     * @formula P(x) / (x - r)
     *
     * @version 25.0.0
     */
    public function deflatePolynomial(array $coefficients, float $root): array
    {
        $n = count($coefficients) - 1;
        $newCoefficients = [];
        $newCoefficients[0] = $coefficients[0];
        for ($i = 1; $i < $n; $i++) {
            $newCoefficients[$i] = $coefficients[$i] + $root * $newCoefficients[$i - 1];
        }
        return array_slice($newCoefficients, 0, $n);
    }


    /**
     * Calculate the derivative of a function at a given point.
     *
     * @desc <English> Calculate the derivative of a function at a given point.
     * @desc <Greek> Υπολογίστε την παράγωγο μιας συνάρτησης σε ένα δεδομένο σημείο.
     *
     * @param callable $f <English> Function to derive
     *                    <Greek> Συνάρτηση για παράγωγο
     * @param float $x <English> Point at which to evaluate the derivative
     *                 <Greek> Σημείο στο οποίο θα αξιολογηθεί η παράγωγος
     * @param float $h <English> Small interval for calculating the derivative
     *                 <Greek> Μικρό διάστημα για τον υπολογισμό της παραγώγου
     * @return float <English> Derivative value at point x
     *               <Greek> Τιμή παραγώγου στο σημείο x
     *
     * @formula f'(x) ≈ (f(x + h) - f(x)) / h
     *
     * @version 25.0.0
     */
    public function derivative(callable $f, float $x, float $h = 1e-5): float
    {
        return ($f($x + $h) - $f($x)) / $h;
    }
    

    /**
     * Calculate the determinant of a matrix using cofactor expansion.
     *
     * @desc <English> Calculate the determinant of a matrix using cofactor expansion.
     * @desc <Greek> Υπολογίστε τον προσδιοριστή ενός πίνακα χρησιμοποιώντας συμπαράγοντες.
     *
     * @param array $A <English> The matrix
     *                 <Greek> Ο πίνακας
     * @return float <English> The determinant of the matrix
     *               <Greek> Ο προσδιοριστής του πίνακα
     *
     * @formula det(A) = Σ (-1)^(i+j) * A[i][j] * det(A_{i,j})
     *
     * @version 25.0.0
     */
    public function determinantUsingCofactors(array $A): float
    {
        $n = count($A);
        if ($n == 1) {
            return $A[0][0];
        }
        if ($n == 2) {
            return $A[0][0] * $A[1][1] - $A[0][1] * $A[1][0];
        }

        $det = 0;
        for ($i = 0; $i < $n; $i++) {
            $minor = $this->matrixMinor($A, 0, $i);
            $det += pow(-1, $i) * $A[0][$i] * $this->determinantUsingCofactors($minor);
        }

        return $det;
    }


    /**
     * Calculate the length of the diagonal of a cube.
     *
     * @desc <English> Calculate the length of the diagonal of a cube.
     * @desc <Greek> Υπολογίστε το μήκος της διαγωνίου ενός κύβου.
     *
     * @param float $side <English> Length of a side of the cube
     *                    <Greek> Μήκος μιας πλευράς του κύβου
     * @return float <English> Length of the diagonal
     *               <Greek> Μήκος της διαγωνίου
     *
     * @formula d = side * √3
     *
     * @version 25.0.0
     */
    public function diagonalOfCube(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return $side * sqrt(3);
    }


    /**
     * Calculate the diagonal of a rectangle.
     *
     * @desc <English> Calculate the diagonal of a rectangle.
     * @desc <Greek> Υπολογίστε τη διαγώνιο ενός ορθογωνίου παραλληλογράμμου.
     *
     * @param float $length <English> Length of the rectangle
     *                      <Greek> Μήκος του ορθογωνίου
     * @param float $width <English> Width of the rectangle
     *                     <Greek> Πλάτος του ορθογωνίου
     * @return float <English> Diagonal of the rectangle
     *               <Greek> Διαγώνιος του ορθογωνίου
     *
     * @formula d = √(length^2 + width^2)
     *
     * @version 25.0.0
     */
    public function diagonalOfRectangle(float $length, float $width): float
    {
        if ($length <= 0 || $width <= 0) {
            throw new InvalidArgumentException("The length and width should be positive.");
        }

        return sqrt(pow($length, 2) + pow($width, 2));
    }


    /**
     * Calculate the length of a diagonal of a regular dodecagon.
     *
     * @desc <English> Calculate the length of a diagonal of a regular dodecagon.
     * @desc <Greek> Υπολογίστε το μήκος της διαγωνίου ενός κανονικού δωδεκάγωνου.
     *
     * @param float $side <English> Length of a side of the dodecagon
     *                    <Greek> Μήκος μιας πλευράς του δωδεκάγωνου
     * @return float <English> Length of the diagonal
     *               <Greek> Μήκος της διαγωνίου
     *
     * @formula d = 2 * side * (1 + √3)
     *
     * @version 25.0.0
     */
    public function diagonalOfRegularDodecagon(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return 2 * $side * (1 + sqrt(3));
    }


    /**
     * Calculate the length of a diagonal of a regular nonagon.
     *
     * @desc <English> Calculate the length of a diagonal of a regular nonagon.
     * @desc <Greek> Υπολογίστε το μήκος της διαγωνίου ενός κανονικού εννεαγώνου.
     *
     * @param float $side <English> Length of a side of the nonagon
     *                    <Greek> Μήκος μιας πλευράς του εννεαγώνου
     * @return float <English> Length of the diagonal
     *               <Greek> Μήκος της διαγωνίου
     *
     * @formula d = side * √(5 + 2√5)
     *
     * @version 25.0.0
     */
    public function diagonalOfRegularNonagon(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return $side * sqrt(5 + 2 * sqrt(5));
    }


    /**
     * Calculate the length of a diagonal of a regular octagon.
     *
     * @desc <English> Calculate the length of a diagonal of a regular octagon.
     * @desc <Greek> Υπολογίστε το μήκος της διαγωνίου ενός κανονικού οκταγώνου.
     *
     * @param float $side <English> Length of a side of the octagon
     *                    <Greek> Μήκος μιας πλευράς του οκταγώνου
     * @return float <English> Length of the diagonal
     *               <Greek> Μήκος της διαγωνίου
     *
     * @formula d = side * √(4 + 2√2)
     *
     * @version 25.0.0
     */
    public function diagonalOfRegularOctagon(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return $side * sqrt(4 + 2 * sqrt(2));
    }

    
    /**
     * Calculate the diagonal of a square.
     *
     * @desc <English> Calculate the diagonal of a square.
     * @desc <Greek> Υπολογίστε τη διαγώνιο ενός τετραγώνου.
     *
     * @param float $side <English> Length of the side of the square
     *                    <Greek> Μήκος της πλευράς του τετραγώνου
     * @return float <English> Diagonal of the square
     *               <Greek> Διαγώνιος του τετραγώνου
     *
     * @formula d = side * √2
     *
     * @version 25.0.0
     */
    public function diagonalOfSquare(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return $side * sqrt(2);
    }


    /**
     * Calculate the distance between two points in a plane.
     *
     * @desc <English> Calculate the distance between two points in a plane.
     * @desc <Greek> Υπολογίστε την απόσταση μεταξύ δύο σημείων στο επίπεδο.
     *
     * @param float $x1 <English> X-coordinate of the first point
     *                  <Greek> Χ-συντεταγμένη του πρώτου σημείου
     * @param float $y1 <English> Y-coordinate of the first point
     *                  <Greek> Υ-συντεταγμένη του πρώτου σημείου
     * @param float $x2 <English> X-coordinate of the second point
     *                  <Greek> Χ-συντεταγμένη του δεύτερου σημείου
     * @param float $y2 <English> Y-coordinate of the second point
     *                  <Greek> Υ-συντεταγμένη του δεύτερου σημείου
     * @return float <English> Distance between the points
     *               <Greek> Απόσταση μεταξύ των σημείων
     *
     * @formula d = √((x2 - x1)^2 + (y2 - y1)^2)
     *
     * @version 25.0.0
     */
    public function distanceBetweenPoints(float $x1, float $y1, float $x2, float $y2): float
    {
        if ($x1 < 0 || $y1 < 0 || $x2 < 0 || $y2 < 0) {
            throw new InvalidArgumentException("The coordinates must be positive.");
        }

        return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    }


    /**
     * Evaluate a polynomial at a given point.
     *
     * @desc <English> Evaluate a polynomial at a given point.
     * @desc <Greek> Αξιολογήστε ένα πολυώνυμο σε ένα δεδομένο σημείο.
     *
     * @param array $coefficients <English> Coefficients of the polynomial
     *                            <Greek> Συντελεστές του πολυωνύμου
     * @param float $x <English> The point at which to evaluate the polynomial
     *                 <Greek> Το σημείο στο οποίο θα αξιολογηθεί το πολυώνυμο
     * @return float <English> The value of the polynomial at the given point
     *               <Greek> Η τιμή του πολυωνύμου στο δεδομένο σημείο
     *
     * @formula P(x) = Σ (a_i * x^i)
     *
     * @version 25.0.0
     */
    public function evaluatePolynomial(array $coefficients, float $x): float
    {
        $result = 0;
        foreach ($coefficients as $i => $coefficient) {
            $result += $coefficient * pow($x, count($coefficients) - $i - 1);
        }
        return $result;
    }


    /**
     * Evaluate the derivative of a polynomial at a given point.
     *
     * @desc <English> Evaluate the derivative of a polynomial at a given point.
     * @desc <Greek> Αξιολογήστε την παράγωγο ενός πολυωνύμου σε ένα δεδομένο σημείο.
     *
     * @param array $coefficients <English> Coefficients of the polynomial
     *                            <Greek> Συντελεστές του πολυωνύμου
     * @param float $x <English> The point at which to evaluate the derivative
     *                 <Greek> Το σημείο στο οποίο θα αξιολογηθεί η παράγωγος
     * @return float <English> The value of the derivative at the given point
     *               <Greek> Η τιμή της παραγώγου στο δεδομένο σημείο
     *
     * @formula P'(x) = Σ (i * a_i * x^(i-1))
     *
     * @version 25.0.0
     */
    public function evaluatePolynomialDerivative(array $coefficients, float $x): float
    {
        $result = 0;
        foreach ($coefficients as $i => $coefficient) {
            $exponent = count($coefficients) - $i - 1;
            if ($exponent > 0) {
                $result += $coefficient * $exponent * pow($x, $exponent - 1);
            }
        }
        return $result;
    }
   

    /**
     * Calculate the exponential function.
     *
     * @desc <English> Calculate the exponential function.
     * @desc <Greek> Υπολογίστε την εκθετική συνάρτηση.
     *
     * @param float $x <English> The exponent
     *                 <Greek> Ο εκθέτης
     * @param float $base <English> The base of the exponential function (default is e)
     *                    <Greek> Η βάση της εκθετικής συνάρτησης (προεπιλογή είναι το e)
     * @return float <English> The value of the exponential function
     *               <Greek> Η τιμή της εκθετικής συνάρτησης
     *
     * @formula y = base^x
     *
     * @version 25.0.0
     */
    public function exponentialFunction(float $x, float $base = M_E): float
    {
        return pow($base, $x);
    }


    /**
     * Calculate the factorial of a number.
     *
     * @desc <English> Calculate the factorial of a number.
     * @desc <Greek> Υπολογίστε το παραγοντικό ενός αριθμού.
     *
     * @param int $n <English> The number to calculate the factorial for
     *               <Greek> Ο αριθμός για τον οποίο θα υπολογιστεί το παραγοντικό
     * @return int <English> The factorial of the number
     *             <Greek> Το παραγοντικό του αριθμού
     *
     * @formula n! = n * (n-1) * ... * 1
     *
     * @version 25.0.0
     */
    public function factorial(int $n): int
    {
        if ($n < 0) {
            throw new InvalidArgumentException("The number must be non-negative.");
        }

        if ($n === 0) {
            return 1;
        }

        return $n * $this->factorial($n - 1);
    }


    /**
     * Calculate the factorial of a number using iteration.
     *
     * @desc <English> Calculate the factorial of a number using iteration.
     * @desc <Greek> Υπολογίστε το παραγοντικό ενός αριθμού χρησιμοποιώντας επανάληψη.
     *
     * @param int $n <English> The number to calculate the factorial for
     *               <Greek> Ο αριθμός για τον οποίο θα υπολογιστεί το παραγοντικό
     * @return int <English> The factorial of the number
     *             <Greek> Το παραγοντικό του αριθμού
     *
     * @formula n! = n * (n-1) * ... * 1
     *
     * @version 25.0.0
     */
    public function factorialIterative(int $n): int
    {
        if ($n < 0) {
            throw new InvalidArgumentException("The number must be non-negative.");
        }

        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
        }

        return $result;
    }


    /**
     * Find the roots of a polynomial.
     *
     * @desc <English> Find the roots of a polynomial.
     * @desc <Greek> Βρείτε τις ρίζες ενός πολυωνύμου.
     *
     * @param array $coefficients <English> Coefficients of the polynomial
     *                            <Greek> Συντελεστές του πολυωνύμου
     * @return array <English> Roots of the polynomial
     *               <Greek> Ρίζες του πολυωνύμου
     *
     * @formula P(x) = Σ (a_i * x^i) = 0
     *
     * @version 25.0.0
     */
    public function findPolynomialRoots(array $coefficients): array
    {
        $degree = count($coefficients) - 1;
        $roots = [];
        $maxIter = 100;
        $tol = 1e-6;

        for ($i = 0; $i < $degree; $i++) {
            $x = 0; // initial guess
            for ($j = 0; $j < $maxIter; $j++) {
                $fx = $this->evaluatePolynomial($coefficients, $x);
                $fpx = $this->evaluatePolynomialDerivative($coefficients, $x);
                $xNew = $x - $fx / $fpx;
                if (abs($xNew - $x) < $tol) {
                    break;
                }
                $x = $xNew;
            }
            $roots[] = $x;
            $coefficients = $this->deflatePolynomial($coefficients, $x);
        }

        return $roots;
    }

    
    /**
     * Solve a system of linear equations using the Gauss-Seidel iterative method.
     *
     * @desc <English> Solve a system of linear equations using the Gauss-Seidel iterative method.
     * @desc <Greek> Λύστε ένα σύστημα γραμμικών εξισώσεων χρησιμοποιώντας τη μέθοδο Gauss-Seidel.
     *
     * @param array $A <English> Coefficient matrix
     *                 <Greek> Πίνακας συντελεστών
     * @param array $b <English> Constant terms vector
     *                 <Greek> Διάνυσμα σταθερών όρων
     * @param array $x0 <English> Initial guess for the solution
     *                  <Greek> Αρχική προσέγγιση για τη λύση
     * @param float $tol <English> Tolerance level
     *                   <Greek> Επίπεδο ανοχής
     * @param int $max_iter <English> Maximum number of iterations
     *                      <Greek> Μέγιστος αριθμός επαναλήψεων
     * @return array <English> Approximate solution vector
     *               <Greek> Προσεγγιστικό διάνυσμα λύσης
     *
     * @version 25.0.0
     */
    public function gaussSeidel(array $A, array $b, array $x0, float $tol = 1e-7, int $max_iter = 100): array
    {
        $n = count($A);
        $x = $x0;

        for ($k = 0; $k < $max_iter; $k++) {
            $x_new = $x;
            for ($i = 0; $i < $n; $i++) {
                $sum = $b[$i];
                for ($j = 0; $j < $n; $j++) {
                    if ($i !== $j) {
                        $sum -= $A[$i][$j] * $x_new[$j];
                    }
                }
                $x_new[$i] = $sum / $A[$i][$i];
            }

            if (max(array_map('abs', array_map(function($a, $b) { return $a - $b; }, $x_new, $x))) < $tol) {
                return $x_new;
            }

            $x = $x_new;
        }

        throw new Exception("Maximum number of iterations reached.");
    }


    /**
     * Calculate the greatest common divisor (GCD) of two numbers.
     *
     * @desc <English> Calculate the greatest common divisor (GCD) of two numbers.
     * @desc <Greek> Υπολογίστε τον μέγιστο κοινό διαιρέτη (ΜΚΔ) δύο αριθμών.
     *
     * @param int $a <English> The first number
     *               <Greek> Ο πρώτος αριθμός
     * @param int $b <English> The second number
     *               <Greek> Ο δεύτερος αριθμός
     * @return int <English> The GCD of the two numbers
     *             <Greek> Ο ΜΚΔ των δύο αριθμών
     *
     * @formula gcd(a, b) = gcd(b, a % b) until b == 0
     *
     * @version 25.0.0
     */
    public function gcd(int $a, int $b): int
    {
        if ($a < 0 || $b < 0) {
            throw new InvalidArgumentException("The numbers must be positive.");
        }

        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }

        return $a;
    }


    /**
     * Generate submatrices of a given size from a matrix.
     *
     * @desc <English> Generate submatrices of a given size from a matrix.
     * @desc <Greek> Δημιουργήστε υποπίνακες ενός δεδομένου μεγέθους από έναν πίνακα.
     *
     * @param array $A <English> The matrix
     *                 <Greek> Ο πίνακας
     * @param int $size <English> The size of the submatrices
     *                  <Greek> Το μέγεθος των υποπινάκων
     * @return array <English> The array of submatrices
     *               <Greek> Ο πίνακας των υποπινάκων
     *
     * @version 25.0.0
     */
    public function generateSubmatrices(array $A, int $size): array
    {
        $submatrices = [];
        $rows = range(0, count($A) - 1);
        $cols = range(0, count($A[0]) - 1);
        $rowCombinations = $this->combinations($rows, $size);
        $colCombinations = $this->combinations($cols, $size);

        foreach ($rowCombinations as $rowCombo) {
            foreach ($colCombinations as $colCombo) {
                $submatrix = [];
                foreach ($rowCombo as $i => $row) {
                    foreach ($colCombo as $j => $col) {
                        $submatrix[$i][$j] = $A[$row][$col];
                    }
                }
                $submatrices[] = $submatrix;
            }
        }

        return $submatrices;
    }


    /**
     * Calculate the geometric mean of an array of numbers.
     *
     * @desc <English> Calculate the geometric mean of an array of numbers.
     * @desc <Greek> Υπολογίστε τη μέση γεωμετρική τιμή ενός πίνακα αριθμών.
     *
     * @param array $nums <English> Array of numbers
     *                    <Greek> Πίνακας αριθμών
     * @return float <English> Geometric mean of the numbers
     *               <Greek> Μέση γεωμετρική τιμή των αριθμών
     *
     * @formula GM = (Π x_i)^(1/n)
     *
     * @version 25.0.0
     */
    public function geometricMean(array $nums): float
    {
        foreach ($nums as $num) {
            if ($num <= 0) {
                throw new InvalidArgumentException("All numbers in the table must be positive.");
            }
        }

        $product = array_product($nums);
        return pow($product, 1 / count($nums));
    }


    /**
     * Calculate the harmonic mean of an array of numbers.
     *
     * @desc <English> Calculate the harmonic mean of an array of numbers.
     * @desc <Greek> Υπολογίστε τον αρμονικό μέσο ενός πίνακα αριθμών.
     *
     * @param array $nums <English> Array of numbers
     *                    <Greek> Πίνακας αριθμών
     * @return float <English> The harmonic mean of the numbers
     *               <Greek> Ο αρμονικός μέσος των αριθμών
     *
     * @formula harmonicMean(x) = n / (Σ (1 / x_i))
     *
     * @version 25.0.0
     */
    public function harmonicMean(array $nums): float
    {
        foreach ($nums as $num) {
            if ($num <= 0) {
                throw new InvalidArgumentException("All numbers in the table must be positive.");
            }
        }

        $n = count($nums);
        $sum = array_sum(array_map(fn($x) => 1 / $x, $nums));
        return $n / $sum;
    }


    /**
     * Calculate the hypotenuse of a right triangle using the Pythagorean theorem.
     *
     * @desc <English> Calculate the hypotenuse of a right triangle using the Pythagorean theorem.
     * @desc <Greek> Υπολογίστε την υποτείνουσα ενός ορθογωνίου τριγώνου χρησιμοποιώντας το Πυθαγόρειο θεώρημα.
     *
     * @param float $a <English> Length of side a
     *                 <Greek> Μήκος της πλευράς a
     * @param float $b <English> Length of side b
     *                 <Greek> Μήκος της πλευράς b
     * @return float <English> Hypotenuse of the triangle
     *               <Greek> Υποτείνουσα του τριγώνου
     *
     * @formula c = √(a^2 + b^2)
     *
     * @version 25.0.0
     */
    public function hypotenuse(float $a, float $b): float
    {
        if ($a <= 0 || $b <= 0) {
            throw new InvalidArgumentException("The lengths of the sides should be positive.");
        }

        return sqrt(pow($a, 2) + pow($b, 2));
    }


    /**
     * Calculate the radius of a circle inscribed in a square.
     *
     * @desc <English> Calculate the radius of a circle inscribed in a square.
     * @desc <Greek> Υπολογίστε την ακτίνα ενός κύκλου που εγγράφεται σε τετράγωνο.
     *
     * @param float $side <English> Length of the side of the square
     *                    <Greek> Μήκος της πλευράς του τετραγώνου
     * @return float <English> Radius of the inscribed circle
     *               <Greek> Ακτίνα του εγγεγραμμένου κύκλου
     *
     * @formula r = side / 2
     *
     * @version 25.0.0
     */
    public function inscribedCircleInSquare(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return $side / 2;
    }


    /**
     * Calculate the radius of the circle inscribed in a triangle.
     *
     * @desc <English> Calculate the radius of the circle inscribed in a triangle.
     * @desc <Greek> Υπολογίστε την ακτίνα του κύκλου που είναι εγγεγραμμένος σε τρίγωνο.
     *
     * @param float $a <English> Length of side a
     *                 <Greek> Μήκος της πλευράς a
     * @param float $b <English> Length of side b
     *                 <Greek> Μήκος της πλευράς b
     * @param float $c <English> Length of side c
     *                 <Greek> Μήκος της πλευράς c
     * @return float <English> Radius of the inscribed circle
     *               <Greek> Ακτίνα του εγγεγραμμένου κύκλου
     *
     * @formula r = A / s, όπου A είναι η περιοχή του τριγώνου και s είναι το ημίπεριμετρο
     *
     * @version 25.0.0
     */
    public function inscribedCircleRadius(float $a, float $b, float $c): float
    {
        if ($a <= 0 || $b <= 0 || $c <= 0) {
            throw new InvalidArgumentException("The lengths of the sides should be positive.");
        }

        if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
            throw new InvalidArgumentException("The sum of any two sides must be greater than the third side.");
        }

        $s = ($a + $b + $c) / 2;
        $area = $this->areaOfTriangleHeron($a, $b, $c);
        return $area / $s;
    }


    /**
     * Calculate the integral of a function over an interval using the trapezoidal rule.
     *
     * @desc <English> Calculate the integral of a function over an interval using the trapezoidal rule.
     * @desc <Greek> Υπολογίστε το ολοκλήρωμα μιας συνάρτησης σε ένα διάστημα χρησιμοποιώντας τον κανόνα των τραπεζοειδών.
     *
     * @param callable $f <English> Function to integrate
     *                    <Greek> Συνάρτηση για ολοκλήρωση
     * @param float $a <English> Start of the interval
     *                 <Greek> Έναρξη του διαστήματος
     * @param float $b <English> End of the interval
     *                 <Greek> Τέλος του διαστήματος
     * @param int $n <English> Number of subintervals
     *               <Greek> Αριθμός υποδιαιρέσεων
     * @return float <English> Approximate integral value
     *               <Greek> Προσεγγιστική τιμή ολοκληρώματος
     *
     * @formula ∫_a^b f(x) dx ≈ (b - a) / n * [0.5 * (f(a) + f(b)) + Σ f(a + i * (b - a) / n)]
     *
     * @version 25.0.0
     */
    public function integrate(callable $f, float $a, float $b, int $n = 1000): float
    {
        if ($n <= 0) {
            throw new InvalidArgumentException("The number of subdivisions must be positive.");
        }
        if ($a >= $b) {
            throw new InvalidArgumentException("The beginning of the interval should be less than the end of the interval.");
        }

        $h = ($b - $a) / $n;
        $sum = 0.5 * ($f($a) + $f($b));
        
        for ($i = 1; $i < $n; $i++) {
            $sum += $f($a + $i * $h);
        }
    
        return $sum * $h;
    }
    

    /**
     * Calculate the integral of a function over an interval using Simpson's rule.
     *
     * @desc <English> Calculate the integral of a function over an interval using Simpson's rule.
     * @desc <Greek> Υπολογίστε το ολοκλήρωμα μιας συνάρτησης σε ένα διάστημα χρησιμοποιώντας τον κανόνα του Simpson.
     *
     * @param callable $f <English> Function to integrate
     *                    <Greek> Συνάρτηση για ολοκλήρωση
     * @param float $a <English> Start of the interval
     *                 <Greek> Έναρξη του διαστήματος
     * @param float $b <English> End of the interval
     *                 <Greek> Τέλος του διαστήματος
     * @param int $n <English> Number of subintervals (must be even)
     *               <Greek> Αριθμός υποδιαιρέσεων (πρέπει να είναι άρτιος)
     * @return float <English> Approximate integral value
     *               <Greek> Προσεγγιστική τιμή ολοκληρώματος
     *
     * @formula ∫_a^b f(x) dx ≈ (b - a) / (3 * n) * [f(a) + 4 * Σ f(a + (2i - 1)h) + 2 * Σ f(a + 2ih) + f(b)]
     *          where h = (b - a) / n and i ranges from 1 to n/2
     *
     * @version 25.0.0
     */
    public function integrateSimpson(callable $f, float $a, float $b, int $n = 1000): float
    {
        if ($n <= 0) {
            throw new InvalidArgumentException("The number of subdivisions must be positive.");
        }
        if ($a >= $b) {
            throw new InvalidArgumentException("The beginning of the interval should be less than the end of the interval.");
        }
        if ($n % 2 !== 0) {
            throw new InvalidArgumentException("The number of divisions must be even.");
        }

        $h = ($b - $a) / $n;
        $sum = $f($a) + $f($b);

        for ($i = 1; $i < $n; $i += 2) {
            $sum += 4 * $f($a + $i * $h);
        }

        for ($i = 2; $i < $n; $i += 2) {
            $sum += 2 * $f($a + $i * $h);
        }

        return $h * $sum / 3;
    }


    /**
     * Calculate the integral of a function over an interval using the trapezoidal rule.
     *
     * @desc <English> Calculate the integral of a function over an interval using the trapezoidal rule.
     * @desc <Greek> Υπολογίστε το ολοκλήρωμα μιας συνάρτησης σε ένα διάστημα χρησιμοποιώντας τον κανόνα των τραπεζοειδών.
     *
     * @param callable $f <English> Function to integrate
     *                    <Greek> Συνάρτηση για ολοκλήρωση
     * @param float $a <English> Start of the interval
     *                 <Greek> Έναρξη του διαστήματος
     * @param float $b <English> End of the interval
     *                 <Greek> Τέλος του διαστήματος
     * @param int $n <English> Number of subintervals
     *               <Greek> Αριθμός υποδιαιρέσεων
     * @return float <English> Approximate integral value
     *               <Greek> Προσεγγιστική τιμή ολοκληρώματος
     *
     * @formula ∫_a^b f(x) dx ≈ (b - a) / (2 * n) * [f(a) + 2 * Σ f(a + i * h) + f(b)]
     *          where h = (b - a) / n and i ranges from 1 to n-1
     *
     * @version 25.0.0
     */
    public function integrateTrapezoidal(callable $f, float $a, float $b, int $n = 1000): float
    {
        if ($n <= 0) {
            throw new InvalidArgumentException("The number of subdivisions must be positive.");
        }
        if ($a >= $b) {
            throw new InvalidArgumentException("The beginning of the interval should be less than the end of the interval.");
        }

        $h = ($b - $a) / $n;
        $sum = ($f($a) + $f($b)) / 2;

        for ($i = 1; $i < $n; $i++) {
            $sum += $f($a + $i * $h);
        }

        return $h * $sum;
    }


    /**
     * Check if a number is a prime number.
     *
     * @desc <English> Check if a number is a prime number.
     * @desc <Greek> Ελέγξτε αν ένας αριθμός είναι πρώτος αριθμός.
     *
     * @param int $n <English> The number to check
     *               <Greek> Ο αριθμός που θα ελεγχθεί
     * @return bool <English> True if the number is prime, false otherwise
     *              <Greek> True αν ο αριθμός είναι πρώτος, false διαφορετικά
     *
     * @formula isPrime(n) = True if n is only divisible by 1 and itself
     *
     * @version 25.0.0
     */
    public function isPrime(int $n): bool
    {
        if ($n <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i === 0) {
                return false;
            }
        }
        return true;
    }


    /**
     * Solve a system of linear equations using the Jacobi iterative method.
     *
     * @desc <English> Solve a system of linear equations using the Jacobi iterative method.
     * @desc <Greek> Λύστε ένα σύστημα γραμμικών εξισώσεων χρησιμοποιώντας τη μέθοδο της επανάληψης Jacobi.
     *
     * @param array $A <English> Coefficient matrix
     *                 <Greek> Πίνακας συντελεστών
     * @param array $b <English> Constant terms vector
     *                 <Greek> Διάνυσμα σταθερών όρων
     * @param array $x0 <English> Initial guess for the solution
     *                  <Greek> Αρχική προσέγγιση για τη λύση
     * @param float $tol <English> Tolerance level
     *                   <Greek> Επίπεδο ανοχής
     * @param int $max_iter <English> Maximum number of iterations
     *                      <Greek> Μέγιστος αριθμός επαναλήψεων
     * @return array <English> Approximate solution vector
     *               <Greek> Προσεγγιστικό διάνυσμα λύσης
     *
     * @version 25.0.0
     */
    public function jacobiIteration(array $A, array $b, array $x0, float $tol = 1e-7, int $max_iter = 100): array
    {
        $n = count($A);
        $x = $x0;
        $x_new = array_fill(0, $n, 0);

        for ($k = 0; $k < $max_iter; $k++) {
            for ($i = 0; $i < $n; $i++) {
                $sum = $b[$i];
                for ($j = 0; $j < $n; $j++) {
                    if ($i !== $j) {
                        $sum -= $A[$i][$j] * $x[$j];
                    }
                }
                $x_new[$i] = $sum / $A[$i][$i];
            }

            if (max(array_map('abs', array_map(function($a, $b) { return $a - $b; }, $x_new, $x))) < $tol) {
                return $x_new;
            }

            $x = $x_new;
        }

        throw new Exception("Maximum number of iterations reached.");
    }


    /**
     * Calculate the length of a side of a triangle using the law of cosines.
     *
     * @desc <English> Calculate the length of a side of a triangle using the law of cosines.
     * @desc <Greek> Υπολογίστε το μήκος μιας πλευράς ενός τριγώνου χρησιμοποιώντας τον νόμο των συνημιτόνων.
     *
     * @param float $a <English> Length of side a
     *                 <Greek> Μήκος της πλευράς a
     * @param float $b <English> Length of side b
     *                 <Greek> Μήκος της πλευράς b
     * @param float $angleC <English> Angle opposite side c (in radians)
     *                      <Greek> Γωνία απέναντι από την πλευρά c (σε ακτίνια)
     * @return float <English> Length of side c
     *               <Greek> Μήκος της πλευράς c
     *
     * @formula c^2 = a^2 + b^2 - 2ab * cos(C)
     *
     * @version 25.0.0
     */
    public function lawOfCosines(float $a, float $b, float $angleC): float
    {
        if ($a <= 0 || $b <= 0) {
            throw new InvalidArgumentException("The lengths of the sides should be positive.");
        }
        if ($angleC <= 0 || $angleC >= pi()) {
            throw new InvalidArgumentException("The angle should be between 0 and π.");
        }

        return sqrt($a**2 + $b**2 - 2 * $a * $b * cos($angleC));
    }


    /**
     * Calculate the logarithmic function.
     *
     * @desc <English> Calculate the logarithmic function.
     * @desc <Greek> Υπολογίστε τη λογαριθμική συνάρτηση.
     *
     * @param float $x <English> The number
     *                 <Greek> Ο αριθμός
     * @param float $base <English> The base of the logarithm (default is e)
     *                    <Greek> Η βάση του λογαρίθμου (προεπιλογή είναι το e)
     * @return float <English> The value of the logarithmic function
     *               <Greek> Η τιμή της λογαριθμικής συνάρτησης
     *
     * @formula y = log_base(x)
     *
     * @version 25.0.0
     */
    public function logarithmicFunction(float $x, float $base = M_E): float
    {
        return log($x, $base);
    }


    /**
     * Calculate the least common multiple (LCM) of two numbers.
     *
     * @desc <English> Calculate the least common multiple (LCM) of two numbers.
     * @desc <Greek> Υπολογίστε το ελάχιστο κοινό πολλαπλάσιο (ΕΚΠ) δύο αριθμών.
     *
     * @param int $a <English> The first number
     *               <Greek> Ο πρώτος αριθμός
     * @param int $b <English> The second number
     *               <Greek> Ο δεύτερος αριθμός
     * @return int <English> The LCM of the two numbers
     *             <Greek> Το ΕΚΠ των δύο αριθμών
     *
     * @formula lcm(a, b) = abs(a * b) / gcd(a, b)
     *
     * @version 25.0.0
     */
    public function lcm(int $a, int $b): float|int
    {
        if ($a <= 0 || $b <= 0) {
            throw new InvalidArgumentException("The numbers must be positive.");
        }

        return abs($a * $b) / $this->gcd($a, $b);
    }


    /**
     * Calculate the adjugate of a matrix.
     *
     * @desc <English> Calculate the adjugate of a matrix.
     * @desc <Greek> Υπολογίστε τον επιγραμμικό ενός πίνακα.
     *
     * @param array $A <English> The matrix
     *                 <Greek> Ο πίνακας
     * @return array <English> The adjugate of the matrix
     *               <Greek> Ο επιγραμμικός του πίνακα
     *
     * @formula adj(A) = transpose(cofactor(A))
     *
     * @version 25.0.0
     */
    public function matrixAdjoint(array $A): array
    {
        $n = count($A);
        $adjoint = [];
        for ($i = 0; $i < $n; $i++) {
            $adjointRow = [];
            for ($j = 0; $j < $n; $j++) {
                $minor = $this->matrixMinor($A, $i, $j);
                $adjointRow[] = pow(-1, $i + $j) * $this->matrixDeterminant($minor);
            }
            $adjoint[] = $adjointRow;
        }

        return $this->matrixTranspose($adjoint);
    }


    /**
     * Calculate the adjugate of a matrix.
     *
     * @desc <English> Calculate the adjugate of a matrix.
     * @desc <Greek> Υπολογίστε τον επιγραμμικό ενός πίνακα.
     *
     * @param array $A <English> The matrix
     *                 <Greek> Ο πίνακας
     * @return array <English> The adjugate of the matrix
     *               <Greek> Ο επιγραμμικός του πίνακα
     *
     * @formula adj(A) = transpose(cofactor(A))
     *
     * @version 25.0.0
     */
    public function matrixAdjugate(array $A): array
    {
        $n = count($A);
        $adjugate = [];
        for ($i = 0; $i < $n; $i++) {
            $adjugateRow = [];
            for ($j = 0; $j < $n; $j++) {
                $minor = $this->matrixMinor($A, $i, $j);
                $adjugateRow[] = pow(-1, $i + $j) * $this->matrixDeterminant($minor);
            }
            $adjugate[] = $adjugateRow;
        }

        return $this->matrixTranspose($adjugate);
    }


    /**
     * Calculate the cofactor of a matrix.
     *
     * @desc <English> Calculate the cofactor of a matrix.
     * @desc <Greek> Υπολογίστε τον συμπαράγοντα ενός πίνακα.
     *
     * @param array $A <English> The matrix
     *                 <Greek> Ο πίνακας
     * @return array <English> The cofactor of the matrix
     *               <Greek> Ο συμπαράγοντας του πίνακα
     *
     * @formula cofactor(A) = (-1)^(i+j) * det(minor(A, i, j))
     *
     * @version 25.0.0
     */
    public function matrixCofactor(array $A): array
    {
        $n = count($A);
        $cofactor = [];
        for ($i = 0; $i < $n; $i++) {
            $cofactorRow = [];
            for ($j = 0; $j < $n; $j++) {
                $minor = $this->matrixMinor($A, $i, $j);
                $cofactorRow[] = pow(-1, $i + $j) * $this->matrixDeterminant($minor);
            }
            $cofactor[] = $cofactorRow;
        }

        return $cofactor;
    }


    /**
     * Calculate the determinant of a matrix.
     *
     * @desc <English> Calculate the determinant of a matrix.
     * @desc <Greek> Υπολογίστε τον προσδιοριστή ενός πίνακα.
     *
     * @param array $A <English> The matrix
     *                 <Greek> Ο πίνακας
     * @return float <English> The determinant of the matrix
     *               <Greek> Ο προσδιοριστής του πίνακα
     *
     * @formula det(A) = Σ (-1)^i * a_{1i} * det(A_{1i})
     *
     * @version 25.0.0
     */
    public function matrixDeterminant(array $A): float
    {
        $n = count($A);
        if ($n == 1) {
            return $A[0][0];
        }
        if ($n == 2) {
            return $A[0][0] * $A[1][1] - $A[0][1] * $A[1][0];
        }

        $det = 0;
        for ($i = 0; $i < $n; $i++) {
            $minor = $this->matrixMinor($A, 0, $i);
            $det += pow(-1, $i) * $A[0][$i] * $this->matrixDeterminant($minor);
        }

        return $det;
    }


    /**
     * Calculate the eigenvalues of a matrix.
     *
     * @desc <English> Calculate the eigenvalues of a matrix.
     * @desc <Greek> Υπολογίστε τις ιδιοτιμές ενός πίνακα.
     *
     * @param array $A <English> The matrix
     *                 <Greek> Ο πίνακας
     * @return array <English> The eigenvalues of the matrix
     *               <Greek> Οι ιδιοτιμές του πίνακα
     *
     * @formula det(A - λI) = 0
     *
     * @version 25.0.0
     */
    public function matrixEigenvalues(array $A): array
    {
        $n = count($A);
        $eigenvalues = [];
        $maxIter = 100;
        $tol = 1e-6;

        // Convert matrix to upper Hessenberg form using Householder transformation
        $H = $this->toHessenberg($A);

        for ($i = 0; $i < $n; $i++) {
            $lambda = $H[$i][$i]; // initial guess
            for ($j = 0; $j < $maxIter; $j++) {
                $Q = $this->qrDecomposition($H);
                $R = $this->matrixMultiplication($this->matrixTranspose($Q), $H);
                $H = $this->matrixMultiplication($R, $Q);
                $lambdaNew = $H[$i][$i];
                if (abs($lambdaNew - $lambda) < $tol) {
                    break;
                }
                $lambda = $lambdaNew;
            }
            $eigenvalues[] = $lambda;
        }

        return $eigenvalues;
    }


    /**
     * Calculate the inverse of a matrix.
     *
     * @desc <English> Calculate the inverse of a matrix.
     * @desc <Greek> Βρείτε το αντίστροφο ενός πίνακα.
     *
     * @param array $A <English> The matrix
     *                 <Greek> Ο πίνακας
     * @return array <English> The inverse of the matrix
     *               <Greek> Το αντίστροφο του πίνακα
     *
     * @formula A^-1 = adj(A) / det(A)
     *
     * @version 25.0.0
     */
    public function matrixInverse(array $A): array
    {
        $det = $this->matrixDeterminant($A);
        if ($det == 0) {
            throw new InvalidArgumentException("Matrix is singular and cannot be inverted.");
        }

        $n = count($A);
        $adjoint = $this->matrixAdjoint($A);

        $inverse = [];
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $inverse[$i][$j] = $adjoint[$i][$j] / $det;
            }
        }

        return $inverse;
    }


    /**
     * Calculate the minor of an element in a matrix.
     *
     * @desc <English> Calculate the minor of an element in a matrix.
     * @desc <Greek> Υπολογίστε τον συμπαράγοντα ενός στοιχείου σε έναν πίνακα.
     *
     * @param array $A <English> The matrix
     *                 <Greek> Ο πίνακας
     * @param int $row <English> The row of the element
     *                 <Greek> Η γραμμή του στοιχείου
     * @param int $col <English> The column of the element
     *                 <Greek> Η στήλη του στοιχείου
     * @return array <English> The minor of the element
     *               <Greek> Ο συμπαράγοντας του στοιχείου
     *
     * @version 25.0.0
     */
    public function matrixMinor(array $A, int $row, int $col): array
    {
        $minor = [];
        for ($i = 0; $i < count($A); $i++) {
            if ($i != $row) {
                $minorRow = [];
                for ($j = 0; $j < count($A[$i]); $j++) {
                    if ($j != $col) {
                        $minorRow[] = $A[$i][$j];
                    }
                }
                $minor[] = $minorRow;
            }
        }
        return $minor;
    }


    /**
     * Multiply two matrices.
     *
     * @desc <English> Multiply two matrices.
     * @desc <Greek> Πολλαπλασιάστε δύο πίνακες.
     *
     * @param array $A <English> The first matrix
     *                 <Greek> Ο πρώτος πίνακας
     * @param array $B <English> The second matrix
     *                 <Greek> Ο δεύτερος πίνακας
     * @return array <English> The product of the two matrices
     *               <Greek> Το γινόμενο των δύο πινάκων
     *
     * @formula C[i][j] = Σ (A[i][k] * B[k][j])
     *
     * @version 25.0.0
     */
    public function matrixMultiplication(array $A, array $B): array
    {
        $rowsA = count($A);
        $colsA = count($A[0]);
        $colsB = count($B[0]);

        $result = [];
        for ($i = 0; $i < $rowsA; $i++) {
            for ($j = 0; $j < $colsB; $j++) {
                $result[$i][$j] = 0;
                for ($k = 0; $k < $colsA; $k++) {
                    $result[$i][$j] += $A[$i][$k] * $B[$k][$j];
                }
            }
        }

        return $result;
    }


    /**
     * Calculate the rank of a matrix.
     *
     * @desc <English> Calculate the rank of a matrix.
     * @desc <Greek> Υπολογίστε την τάξη ενός πίνακα.
     *
     * @param array $A <English> The matrix
     *                 <Greek> Ο πίνακας
     * @return int <English> The rank of the matrix
     *             <Greek> Η τάξη του πίνακα
     *
     * @formula rank(A) = max(r | det(A_r) ≠ 0)
     *
     * @version 25.0.0
     */
    public function matrixRank(array $A): int
    {
        $rank = 0;
        $n = count($A);

        for ($size = $n; $size > 0; $size--) {
            $submatrices = $this->generateSubmatrices($A, $size);
            foreach ($submatrices as $submatrix) {
                if ($this->matrixDeterminant($submatrix) != 0) {
                    return $size;
                }
            }
        }

        return $rank;
    }


    /**
     * Calculate the trace of a matrix.
     *
     * @desc <English> Calculate the trace of a matrix.
     * @desc <Greek> Υπολογίστε το ίχνος ενός πίνακα.
     *
     * @param array $A <English> The matrix
     *                 <Greek> Ο πίνακας
     * @return float <English> The trace of the matrix
     *               <Greek> Το ίχνος του πίνακα
     *
     * @formula trace(A) = Σ A[i][i]
     *
     * @version 25.0.0
     */
    public function matrixTrace(array $A): float
    {
        $trace = 0;
        for ($i = 0; $i < count($A); $i++) {
            $trace += $A[$i][$i];
        }
        return $trace;
    }


    /**
     * Transpose a matrix.
     *
     * @desc <English> Transpose a matrix.
     * @desc <Greek> Υπολογίστε τον συζυγή ενός σύνθετου αριθμού.
     *
     * @param array $A <English> The matrix
     *                 <Greek> Ο πίνακας
     * @return array <English> The transpose of the matrix
     *               <Greek> Η μετατροπή του πίνακα
     *
     * @formula A^T[i][j] = A[j][i]
     *
     * @version 25.0.0
     */
    public function matrixTranspose(array $A): array
    {
        $transpose = [];
        for ($i = 0; $i < count($A); $i++) {
            for ($j = 0; $j < count($A[0]); $j++) {
                $transpose[$j][$i] = $A[$i][$j];
            }
        }
        return $transpose;
    }


    /**
     * Calculate the mean of an array of numbers.
     *
     * @desc <English> Calculate the mean of an array of numbers.
     * @desc <Greek> Υπολογίστε τη μέση τιμή ενός πίνακα αριθμών.
     *
     * @param array $nums <English> Array of numbers
     *                    <Greek> Πίνακας αριθμών
     * @return float <English> Mean of the numbers
     *               <Greek> Μέση τιμή των αριθμών
     *
     * @formula mean(x) = (Σ x_i) / n
     *
     * @version 25.0.0
     */
    public function mean(array $nums): float
    {
        if (count($nums) === 0) {
            throw new InvalidArgumentException("The array cannot be empty.");
        }

        return array_sum($nums) / count($nums);
    }
   

    /**
     * Calculate the median of an array of numbers.
     *
     * @desc <English> Calculate the median of an array of numbers.
     * @desc <Greek> Υπολογίστε τη διάμεσο ενός πίνακα αριθμών.
     *
     * @param array $nums <English> Array of numbers
     *                    <Greek> Πίνακας αριθμών
     * @return float <English> The median of the numbers
     *               <Greek> Η διάμεσος των αριθμών
     *
     * @formula median(x) = x_(n/2) if n is odd; (x_(n/2 - 1) + x_(n/2)) / 2 if n is even
     *
     * @version 25.0.0
     */
    public function median(array $nums): float
    {
        if (count($nums) === 0) {
            throw new InvalidArgumentException("The array cannot be empty.");
        }

        sort($nums);
        $count = count($nums);
        $mid = (int) ($count / 2);
        
        return ($count % 2 === 0) ? ($nums[$mid - 1] + $nums[$mid]) / 2 : $nums[$mid];
    }


    /**
     * Calculate the natural logarithm of a number.
     *
     * @desc <English> Calculate the natural logarithm of a number.
     * @desc <Greek> Υπολογίστε τον φυσικό λογάριθμο ενός αριθμού.
     *
     * @param float $x <English> The number to calculate the logarithm for
     *                 <Greek> Ο αριθμός για τον οποίο θα υπολογιστεί ο λογάριθμος
     * @return float <English> The natural logarithm of the number
     *               <Greek> Ο φυσικός λογάριθμος του αριθμού
     *
     * @formula ln(x)
     *
     * @version 25.0.0
     */
    public function naturalLogarithm(float $x): float
    {
        if ($x <= 0) {
            throw new InvalidArgumentException("The number must be positive.");
        }

        return log($x);
    }


    /**
     * Find the roots of a function using the Newton-Raphson method.
     *
     * @desc <English> Find the roots of a function using the Newton-Raphson method.
     * @desc <Greek> Βρείτε τις ρίζες μιας συνάρτησης χρησιμοποιώντας τη μέθοδο Newton-Raphson.
     *
     * @param callable $f <English> Function whose root is to be found
     *                    <Greek> Συνάρτηση της οποίας θα βρεθεί η ρίζα
     * @param callable $df <English> Derivative of the function
     *                     <Greek> Παράγωγος της συνάρτησης
     * @param float $x0 <English> Initial guess for the root
     *                  <Greek> Αρχική εκτίμηση για τη ρίζα
     * @param int $maxIter <English> Maximum number of iterations
     *                     <Greek> Μέγιστος αριθμός επαναλήψεων
     * @param float $tol <English> Tolerance for convergence
     *                   <Greek> Ανοχή για τη σύγκλιση
     * @return float <English> Approximate root of the function
     *               <Greek> Προσεγγιστική ρίζα της συνάρτησης
     *
     * @formula x_{n+1} = x_n - f(x_n) / f'(x_n)
     *
     * @version 25.0.0
     */
    public function newtonRaphson(callable $f, callable $df, float $x0, int $maxIter = 100, float $tol = 1e-5): float
    {
        if ($tol <= 0) {
            throw new InvalidArgumentException("Tolerance should be positive.");
        }
        
        $x = $x0;

        for ($i = 0; $i < $maxIter; $i++) {
            $dx = $f($x) / $df($x);
            $x -= $dx;

            if (abs($dx) < $tol) {
                return $x;
            }
        }

        throw new Exception("The method did not converge.");
    }


    /**
     * Solve a system of nonlinear equations using the Newton-Raphson method.
     *
     * @desc <English> Solve a system of nonlinear equations using the Newton-Raphson method.
     * @desc <Greek> Λύστε ένα σύστημα μη γραμμικών εξισώσεων χρησιμοποιώντας τη μέθοδο Newton-Raphson.
     *
     * @param callable $F <English> Function that returns the vector of functions F(x)
     *                    <Greek> Συνάρτηση που επιστρέφει το διάνυσμα των συναρτήσεων F(x)
     * @param callable $J <English> Function that returns the Jacobian matrix of the system
     *                    <Greek> Συνάρτηση που επιστρέφει τον Ιακωβιανό πίνακα του συστήματος
     * @param array $x0 <English> Initial guess for the solution
     *                  <Greek> Αρχική προσέγγιση για τη λύση
     * @param float $tol <English> Tolerance level
     *                   <Greek> Επίπεδο ανοχής
     * @param int $max_iter <English> Maximum number of iterations
     *                      <Greek> Μέγιστος αριθμός επαναλήψεων
     * @return array <English> Approximate solution vector
     *               <Greek> Προσεγγιστικό διάνυσμα λύσης
     *
     * @version 25.0.0
     */
    public function newtonRaphsonSystem(callable $F, callable $J, array $x0, float $tol = 1e-7, int $max_iter = 100): array
    {
        if ($tol <= 0) {
            throw new InvalidArgumentException("Tolerance should be positive.");
        }

        $x = $x0;
        for ($i = 0; $i < $max_iter; $i++) {
            $Fx = $F($x);
            $Jx = $J($x);
            $delta = $this->solveLinearSystem($Jx, array_map(function($v) { return -$v; }, $Fx));
            for ($j = 0; $j < count($x); $j++) {
                $x[$j] += $delta[$j];
            }
            if (max(array_map('abs', $delta)) < $tol) {
                return $x;
            }
        }
        throw new Exception("Maximum number of iterations reached.");
    }


    /**
     * Calculate the root of a function using Newton's method.
     *
     * @desc <English> Calculate the root of a function using Newton's method.
     * @desc <Greek> Υπολογίστε τη ρίζα μιας συνάρτησης χρησιμοποιώντας τη μέθοδο του Newton.
     *
     * @param callable $f <English> Function whose root is to be found
     *                    <Greek> Συνάρτηση της οποίας θέλουμε να βρούμε τη ρίζα
     * @param callable $f_prime <English> Derivative of the function
     *                          <Greek> Παράγωγος της συνάρτησης
     * @param float $x0 <English> Initial guess
     *                  <Greek> Αρχική προσέγγιση
     * @param float $tol <English> Tolerance level
     *                   <Greek> Επίπεδο ανοχής
     * @param int $max_iter <English> Maximum number of iterations
     *                      <Greek> Μέγιστος αριθμός επαναλήψεων
     * @return float <English> Approximate root
     *               <Greek> Προσεγγιστική ρίζα
     *
     * @formula x_{n+1} = x_n - f(x_n) / f'(x_n)
     *
     * @version 25.0.0
     */
    public function newtonsMethod(
        callable $f, callable $f_prime, float $x0, 
        float $tol = 1e-7, int $max_iter = 100
    ): float {
        if (!is_callable($f) || !is_callable($f_prime)) {
            throw new InvalidArgumentException("Functions must be callable.");
        }
        if (!is_float($x0) || !is_float($tol) || !is_int($max_iter)) {
            throw new InvalidArgumentException("Invalid parameter types.");
        }
        $x = $x0;
        for ($i = 0; $i < $max_iter; $i++) {
            $fx = $f($x);
            $fpx = $f_prime($x);
            if (abs($fpx) < $tol) {
                throw new Exception("Derivative is too small, causing numerical instability.");
            }
            $x_new = $x - $fx / $fpx;
            if (abs($x_new - $x) < $tol) {
                return $x_new;
            }
            $x = $x_new;
        }
        throw new Exception("Maximum number of iterations reached.");
    }


    /**
     * Calculate the perimeter of a polygon given an array of side lengths.
     *
     * @desc <English> Calculate the perimeter of a polygon given an array of side lengths.
     * @desc <Greek> Υπολογίστε την περίμετρο ενός πολυγώνου δεδομένου ενός πίνακα με τα μήκη των πλευρών.
     *
     * @param array $sides <English> Array of side lengths of the polygon
     *                     <Greek> Πίνακας με τα μήκη των πλευρών του πολυγώνου
     * @return float <English> Perimeter of the polygon
     *               <Greek> Περίμετρος του πολυγώνου
     *
     * @version 25.0.0
     */
    public function perimeterOfPolygon(array $sides): float
    {
        // Έλεγχος για έγκυρες παραμέτρους
        foreach ($sides as $side) {
            if ($side <= 0) {
                throw new InvalidArgumentException("All lengths of sides must be greater than zero.");
            }
        }

        // Υπολογισμός της περιμέτρου
        return array_sum($sides);
    }


    /**
     * Calculate the perimeter of a regular polygon given the number of sides and the length of each side.
     *
     * @desc <English> Calculate the perimeter of a regular polygon given the number of sides and the length of each side.
     * @desc <Greek> Υπολογίστε την περίμετρο ενός κανονικού πολυγώνου δεδομένου του αριθμού των πλευρών και του μήκους κάθε πλευράς.
     *
     * @param int $numSides <English> Number of sides of the polygon
     *                      <Greek> Αριθμός πλευρών του πολυγώνου
     * @param float $side <English> Length of each side of the polygon
     *                    <Greek> Μήκος κάθε πλευράς του πολυγώνου
     * @return float <English> Perimeter of the polygon
     *               <Greek> Περίμετρος του πολυγώνου
     *
     * @formula P = numSides * side
     *
     * @version 25.0.0
     */
    public function perimeterOfRegularPolygon(int $numSides, float $side): float
    {
        // Έλεγχος για έγκυρες παραμέτρους
        if ($numSides <= 0 || $side <= 0) {
            throw new InvalidArgumentException("The parameters $numSides and $side must be greater than zero.");
        }

        return $numSides * $side;
    }


    /**
     * Calculate the perimeter of a regular polygon given its radius.
     *
     * @desc <English> Calculate the perimeter of a regular polygon given its radius.
     * @desc <Greek> Υπολογίστε την περίμετρο ενός κανονικού πολυγώνου δεδομένης της ακτίνας του.
     *
     * @param float $radius <English> Radius of the circumscribed circle
     *                      <Greek> Ακτίνα του περιγεγραμμένου κύκλου
     * @param int $numSides <English> Number of sides of the polygon
     *                      <Greek> Αριθμός πλευρών του πολυγώνου
     * @return float <English> Perimeter of the polygon
     *               <Greek> Περίμετρος του πολυγώνου
     *
     * @formula P = n * s, όπου s είναι το μήκος της πλευράς
     *
     * @version 25.0.0
     */
    public function perimeterOfRegularPolygonByRadius(float $radius, int $numSides): float
    {
        if ($radius <= 0) {
            throw new InvalidArgumentException("Radius must be greater than zero.");
        }
        if ($numSides < 3) {
            throw new InvalidArgumentException("A polygon must have at least 3 sides.");
        }
        
        $sideLength = $this->sideLengthOfPolygon($radius, $numSides);
        return $numSides * $sideLength;
    }


    /**
     * Calculate the perimeter of a triangle given its three sides.
     *
     * @desc <English> Calculate the perimeter of a triangle given its three sides.
     * @desc <Greek> Υπολογίστε την περίμετρο ενός τριγώνου δεδομένων των τριών πλευρών του.
     *
     * @param float $a <English> Length of side a
     *                 <Greek> Μήκος της πλευράς a
     * @param float $b <English> Length of side b
     *                 <Greek> Μήκος της πλευράς b
     * @param float $c <English> Length of side c
     *                 <Greek> Μήκος της πλευράς c
     * @return float <English> Perimeter of the triangle
     *               <Greek> Περίμετρος του τριγώνου
     *
     * @formula P = a + b + c
     *
     * @version 25.0.0
     */
    public function perimeterOfTriangle(float $a, float $b, float $c): float
    {
        if ($a <= 0 || $b <= 0 || $c <= 0) {
            throw new InvalidArgumentException("Side lengths must be greater than zero.");
        }
        return $a + $b + $c;
    }


    /**
     * Calculate the number of permutations of n items taken r at a time.
     *
     * @desc <English> Calculate the number of permutations of n items taken r at a time.
     * @desc <Greek> Υπολογίστε τον αριθμό των διατάξεων n στοιχείων που λαμβάνονται ανά r.
     *
     * @param int $n <English> The number of items
     *               <Greek> Ο αριθμός των στοιχείων
     * @param int $r <English> The number of choices
     *               <Greek> Ο αριθμός των επιλογών
     * @return int <English> The number of permutations
     *             <Greek> Ο αριθμός των διατάξεων
     *
     * @formula P(n, r) = n! / (n - r)!
     *
     * @version 25.0.0
     */
    public function permutation(int $n, int $r): int
    {
        if ($n < 0 || $r < 0) {
            throw new InvalidArgumentException("n and r must be non-negative integers.");
        }
        if ($r > $n) {
            throw new InvalidArgumentException("r must be less than or equal to n.");
        }
        
        return (int)($this->factorial($n) / $this->factorial($n - $r));
    }
 

    /**
     * Calculate the exponential of a number.
     *
     * @desc <English> Calculate the exponential of a number.
     * @desc <Greek> Υπολογίστε το εκθετικό ενός αριθμού.
     *
     * @param float $x <English> The base number
     *                 <Greek> Ο βασικός αριθμός
     * @param int $n <English> The exponent
     *               <Greek> Ο εκθέτης
     * @return float <English> The result of the exponential calculation
     *               <Greek> Το αποτέλεσμα του εκθετικού υπολογισμού
     *
     * @formula x^n = x * x * ... * x (n times)
     *
     * @version 25.0.0
     */
    public function power(float $x, int $n): float
    {
        if (!is_float($x)) {
            throw new InvalidArgumentException("Base number must be a float.");
        }
        if (!is_int($n)) {
            throw new InvalidArgumentException("Exponent must be an integer.");
        }
        
        return pow($x, $n);
    }


    /**
     * Perform QR decomposition of a matrix.
     *
     * @desc <English> Perform QR decomposition of a matrix.
     * @desc <Greek> Εκτελέστε QR αποσύνθεση ενός πίνακα.
     *
     * @param array $A <English> The matrix
     *                 <Greek> Ο πίνακας
     * @return array <English> An array containing matrices Q and R
     *               <Greek> Ένας πίνακας που περιέχει τους πίνακες Q και R
     *
     * @formula A = QR
     *
     * @version 25.0.0
     */
    public function qrDecomposition(array $A): array
    {
        $n = count($A);
        $Q = [];
        $R = $A;

        for ($i = 0; $i < $n; $i++) {
            $norm = 0;
            for ($j = 0; $j < $n; $j++) {
                $norm += $R[$j][$i] * $R[$j][$i];
            }
            $norm = sqrt($norm);
            for ($j = 0; $j < $n; $j++) {
                $Q[$j][$i] = $R[$j][$i] / $norm;
            }
            for ($k = $i; $k < $n; $k++) {
                $dot = 0;
                for ($j = 0; $j < $n; $j++) {
                    $dot += $Q[$j][$i] * $R[$j][$k];
                }
                for ($j = 0; $j < $n; $j++) {
                    $R[$j][$k] -= $dot * $Q[$j][$i];
                }
            }
        }

        return [$Q, $R];
    }


    /**
     * Calculate the quadratic mean (root mean square) of an array of numbers.
     *
     * @desc <English> Calculate the quadratic mean (root mean square) of an array of numbers.
     * @desc <Greek> Υπολογίστε τον τετραγωνικό μέσο (root mean square) ενός πίνακα αριθμών.
     *
     * @param array $nums <English> Array of numbers
     *                    <Greek> Πίνακας αριθμών
     * @return float <English> The quadratic mean of the numbers
     *               <Greek> Ο τετραγωνικός μέσος των αριθμών
     *
     * @formula RMS = sqrt((Σ x_i^2) / n)
     *
     * @version 25.0.0
     */
    public function quadraticMean(array $nums): float
    {
        if (empty($nums)) {
            throw new InvalidArgumentException("The array of numbers must not be empty.");
        }
        
        $sumOfSquares = array_reduce($nums, function ($carry, $item) {
            if (!is_numeric($item)) {
                throw new InvalidArgumentException("All elements in the array must be numbers.");
            }
            return $carry + pow($item, 2);
        }, 0);

        return sqrt($sumOfSquares / count($nums));
    }


    /**
     * Calculate the root mean square (RMS) of an array of numbers.
     *
     * @desc <English> Calculate the root mean square (RMS) of an array of numbers.
     * @desc <Greek> Υπολογίστε την τετραγωνική ρίζα του μέσου όρου των τετραγώνων ενός πίνακα αριθμών.
     *
     * @param array $nums <English> Array of numbers
     *                    <Greek> Πίνακας αριθμών
     * @return float <English> The RMS of the numbers
     *               <Greek> Η RMS των αριθμών
     *
     * @formula RMS = sqrt((Σ x_i^2) / n)
     *
     * @version 25.0.0
     */
    public function rootMeanSquare(array $nums): float
    {
        if (empty($nums)) {
            throw new InvalidArgumentException("The array of numbers must not be empty.");
        }
        
        $sumOfSquares = array_reduce($nums, function ($carry, $item) {
            if (!is_numeric($item)) {
                throw new InvalidArgumentException("All elements in the array must be numbers.");
            }
            return $carry + pow($item, 2);
        }, 0);

        return sqrt($sumOfSquares / count($nums));
    }


    /**
     * Calculate the secant of an angle.
     *
     * @desc <English> Calculate the secant of an angle.
     * @desc <Greek> Υπολογίστε την τέμνουσα μιας γωνίας.
     *
     * @param float $angle <English> Angle in radians
     *                     <Greek> Γωνία σε ακτίνια
     * @return float <English> Secant of the angle
     *               <Greek> Τέμνουσα της γωνίας
     *
     * @formula sec(angle) = 1 / cos(angle)
     *
     * @version 25.0.0
     */
    public function sec(float $angle): float
    {
        if (!is_float($angle)) {
            throw new InvalidArgumentException("Angle must be a float.");
        }
        
        return 1 / cos($angle);
    }


    /**
     * Calculate the second derivative of a function at a given point.
     *
     * @desc <English> Calculate the second derivative of a function at a given point.
     * @desc <Greek> Υπολογίστε την παράγωγο δεύτερης τάξης μιας συνάρτησης σε ένα δεδομένο σημείο.
     *
     * @param callable $f <English> Function to derive
     *                    <Greek> Συνάρτηση για παράγωγο
     * @param float $x <English> Point at which to evaluate the second derivative
     *                 <Greek> Σημείο στο οποίο θα αξιολογηθεί η παράγωγος δεύτερης τάξης
     * @param float $h <English> Small interval for calculating the derivative
     *                 <Greek> Μικρό διάστημα για τον υπολογισμό της παραγώγου
     * @return float <English> Second derivative value at point x
     *               <Greek> Τιμή παραγώγου δεύτερης τάξης στο σημείο x
     *
     * @formula f''(x) ≈ (f(x + h) - 2 * f(x) + f(x - h)) / h^2
     *
     * @version 25.0.0
     */
    public function secondDerivative(callable $f, float $x, float $h = 1e-5): float
    {
        if (!is_callable($f)) {
            throw new InvalidArgumentException("Function must be callable.");
        }
        if (!is_float($x) || !is_float($h)) {
            throw new InvalidArgumentException("Point and interval must be floats.");
        }
        if ($h <= 0) {
            throw new InvalidArgumentException("Interval must be greater than zero.");
        }
        
        return ($f($x + $h) - 2 * $f($x) + $f($x - $h)) / pow($h, 2);
    }


    /**
     * Calculate the side length of a regular hexagon given its area.
     *
     * @desc <English> Calculate the side length of a regular hexagon given its area.
     * @desc <Greek> Υπολογίστε το μήκος της πλευράς ενός κανονικού εξαγώνου δεδομένης της επιφάνειάς του.
     *
     * @param float $area <English> Area of the hexagon
     *                    <Greek> Επιφάνεια του εξαγώνου
     * @return float <English> Side length of the hexagon
     *               <Greek> Μήκος της πλευράς του εξαγώνου
     *
     * @formula s = √(2A / (3√3))
     *
     * @version 25.0.0
     */
    public function sideLengthOfHexagonFromArea(float $area): float
    {
        if ($area <= 0) {
            throw new InvalidArgumentException("Area must be greater than zero.");
        }
        
        return sqrt(2 * $area / (3 * sqrt(3)));
    }


    /**
     * Calculate the side length of a regular polygon given its radius.
     *
     * @desc <English> Calculate the side length of a regular polygon given its radius.
     * @desc <Greek> Υπολογίστε το μήκος της πλευράς ενός κανονικού πολυγώνου δεδομένης της ακτίνας του.
     *
     * @param float $radius <English> Radius of the circumscribed circle
     *                      <Greek> Ακτίνα του περιγεγραμμένου κύκλου
     * @param int $numSides <English> Number of sides of the polygon
     *                      <Greek> Αριθμός πλευρών του πολυγώνου
     * @return float <English> Side length of the polygon
     *               <Greek> Μήκος της πλευράς του πολυγώνου
     *
     * @formula s = 2 * r * sin(π / n)
     *
     * @version 25.0.0
     */
    public function sideLengthOfPolygon(float $radius, int $numSides): float
    {
        if ($radius <= 0) {
            throw new InvalidArgumentException("Radius must be greater than zero.");
        }
        if ($numSides < 3) {
            throw new InvalidArgumentException("A polygon must have at least 3 sides.");
        }
        
        return 2 * $radius * sin(M_PI / $numSides);
    }


     /**
     * Calculate the hyperbolic sine of an angle.
     *
     * @desc <English> Calculate the hyperbolic sine of an angle.
     * @desc <Greek> Υπολογίστε το υπερβολικό ημίτονο μιας γωνίας.
     *
     * @param float $angle <English> The angle in radians
     *                     <Greek> Η γωνία σε ακτίνια
     * @return float <English> The hyperbolic sine of the angle
     *               <Greek> Το υπερβολικό ημίτονο της γωνίας
     *
     * @formula sinh(x) = (e^x - e^(-x)) / 2
     *
     * @version 25.0.0
     */
    public function sinh(float $angle): float
    {
        if (!is_float($angle)) {
            throw new InvalidArgumentException("Angle must be a float.");
        }
        
        return (exp($angle) - exp(-$angle)) / 2;
    }


    /**
     * Solve a first-order differential equation using Euler's method.
     *
     * @desc <English> Solve a first-order differential equation using Euler's method.
     * @desc <Greek> Λύστε μια διαφορική εξίσωση πρώτης τάξης χρησιμοποιώντας τη μέθοδο του Euler.
     *
     * @param callable $f <English> Function representing the differential equation (dy/dx = f(x, y))
     *                    <Greek> Συνάρτηση που αντιπροσωπεύει τη διαφορική εξίσωση (dy/dx = f(x, y))
     * @param float $x0 <English> Initial x value
     *                  <Greek> Αρχική τιμή x
     * @param float $y0 <English> Initial y value
     *                  <Greek> Αρχική τιμή y
     * @param float $h <English> Step size
     *                 <Greek> Μέγεθος βήματος
     * @param int $n <English> Number of steps
     *               <Greek> Αριθμός βημάτων
     * @return array <English> Array of [x, y] pairs representing the solution
     *               <Greek> Πίνακας ζευγών [x, y] που αντιπροσωπεύουν τη λύση
     *
     * @formula y_{n+1} = y_n + h * f(x_n, y_n)
     *
     * @version 25.0.0
     */
    public function solveFirstOrderODE(callable $f, float $x0, float $y0, float $h, int $n): array
    {
        if (!is_callable($f)) {
            throw new InvalidArgumentException("Function must be callable.");
        }
        if (!is_float($x0) || !is_float($y0) || !is_float($h) || !is_int($n)) {
            throw new InvalidArgumentException("Invalid parameter types.");
        }
        if ($h <= 0) {
            throw new InvalidArgumentException("Step size must be greater than zero.");
        }
        if ($n <= 0) {
            throw new InvalidArgumentException("Number of steps must be greater than zero.");
        }
        
        $result = [];
        $x = $x0;
        $y = $y0;

        for ($i = 0; $i < $n; $i++) {
            $result[] = [$x, $y];
            $y += $h * $f($x, $y);
            $x += $h;
        }

        return $result;
    }

   
    /**
     * Solve a system of linear equations using Gaussian elimination.
     *
     * @desc <English> Solve a system of linear equations using Gaussian elimination.
     * @desc <Greek> Λύστε ένα σύστημα γραμμικών εξισώσεων χρησιμοποιώντας τη μέθοδο του Gauss.
     *
     * @param array $A <English> Coefficient matrix
     *                 <Greek> Πίνακας συντελεστών
     * @param array $b <English> Constant terms vector
     *                 <Greek> Διάνυσμα σταθερών όρων
     * @return array <English> Solution vector
     *               <Greek> Διάνυσμα λύσεων
     *
     * @version 25.0.0
     */
    public function solveLinearSystem(array $A, array $b): array
    {
        $n = count($A);
        
        // Έλεγχοι εγκυρότητας
        if ($n != count($b)) {
            throw new InvalidArgumentException("Matrix A and vector b must have compatible dimensions.");
        }
        foreach ($A as $row) {
            if (count($row) != $n) {
                throw new InvalidArgumentException("Matrix A must be square.");
            }
        }
        
        // Gaussian elimination
        for ($i = 0; $i < $n; $i++) {
            $max = $i;
            for ($j = $i + 1; $j < $n; $j++) {
                if (abs($A[$j][$i]) > abs($A[$max][$i])) {
                    $max = $j;
                }
            }
            [$A[$i], $A[$max]] = [$A[$max], $A[$i]];
            [$b[$i], $b[$max]] = [$b[$max], $b[$i]];

            for ($j = $i + 1; $j < $n; $j++) {
                $factor = $A[$j][$i] / $A[$i][$i];
                $b[$j] -= $factor * $b[$i];
                for ($k = $i; $k < $n; $k++) {
                    $A[$j][$k] -= $factor * $A[$i][$k];
                }
            }
        }
        
        // Back substitution
        $x = array_fill(0, $n, 0);
        for ($i = $n - 1; $i >= 0; $i--) {
            $sum = 0;
            for ($j = $i + 1; $j < $n; $j++) {
                $sum += $A[$i][$j] * $x[$j];
            }
            $x[$i] = ($b[$i] - $sum) / $A[$i][$i];
        }
        
        return $x;
    }


    /**
     * Solve a quadratic equation ax^2 + bx + c = 0.
     *
     * @desc <English> Solve a quadratic equation ax^2 + bx + c = 0.
     * @desc <Greek> Λύστε μια δευτεροβάθμια εξίσωση ax^2 + bx + c = 0.
     *
     * @param float $a <English> Coefficient of x^2
     *                 <Greek> Συντελεστής του x^2
     * @param float $b <English> Coefficient of x
     *                 <Greek> Συντελεστής του x
     * @param float $c <English> Constant term
     *                 <Greek> Σταθερός όρος
     * @return array <English> Array of roots
     *               <Greek> Πίνακας με τις ρίζες
     *
     * @formula x = (-b ± √(b^2 - 4ac)) / (2a)
     *
     * @version 25.0.0
     */
    public function solveQuadratic(float $a, float $b, float $c): array
    {
        if ($a == 0) {
            throw new InvalidArgumentException("Coefficient 'a' must not be zero.");
        }
        
        $discriminant = $b**2 - 4 * $a * $c;
    
        if ($discriminant < 0) {
            return []; // No real roots
        }
    
        $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
    
        return [$root1, $root2];
    }


    /**
     * Solve a second-order differential equation using Euler's method.
     *
     * @desc <English> Solve a second-order differential equation using Euler's method.
     * @desc <Greek> Λύστε μια διαφορική εξίσωση δεύτερης τάξης χρησιμοποιώντας τη μέθοδο του Euler.
     *
     * @param callable $f <English> Function representing the second-order differential equation (d^2y/dx^2 = f(x, y, dy/dx))
     *                    <Greek> Συνάρτηση που αντιπροσωπεύει τη διαφορική εξίσωση δεύτερης τάξης (d^2y/dx^2 = f(x, y, dy/dx))
     * @param float $x0 <English> Initial x value
     *                  <Greek> Αρχική τιμή x
     * @param float $y0 <English> Initial y value
     *                  <Greek> Αρχική τιμή y
     * @param float $dy0 <English> Initial derivative value dy/dx
     *                   <Greek> Αρχική τιμή παραγώγου dy/dx
     * @param float $h <English> Step size
     *                 <Greek> Μέγεθος βήματος
     * @param int $n <English> Number of steps
     *               <Greek> Αριθμός βημάτων
     * @return array <English> Array of [x, y, dy/dx] pairs representing the solution
     *               <Greek> Πίνακας ζευγών [x, y, dy/dx] που αντιπροσωπεύουν τη λύση
     *
     * @formula y_{n+1} = y_n + h * dy_n
     *          dy_{n+1} = dy_n + h * f(x_n, y_n, dy_n)
     *
     * @version 25.0.0
     */
    public function solveSecondOrderODE(callable $f, float $x0, float $y0, float $dy0, float $h, int $n): array
    {
        if (!is_callable($f)) {
            throw new InvalidArgumentException("Function must be callable.");
        }
        if (!is_float($x0) || !is_float($y0) || !is_float($dy0) || !is_float($h) || !is_int($n)) {
            throw new InvalidArgumentException("Invalid parameter types.");
        }
        if ($h <= 0) {
            throw new InvalidArgumentException("Step size must be greater than zero.");
        }
        if ($n <= 0) {
            throw new InvalidArgumentException("Number of steps must be greater than zero.");
        }

        $result = [];
        $x = $x0;
        $y = $y0;
        $dy = $dy0;

        for ($i = 0; $i < $n; $i++) {
            $result[] = [$x, $y, $dy];
            $dy += $h * $f($x, $y, $dy);
            $y += $h * $dy;
            $x += $h;
        }

        return $result;
    }


    /**
     * Calculate the standard deviation of an array of numbers.
     *
     * @desc <English> Calculate the standard deviation of an array of numbers.
     * @desc <Greek> Υπολογίστε την τυπική απόκλιση ενός πίνακα αριθμών.
     *
     * @param array $nums <English> Array of numbers
     *                    <Greek> Πίνακας αριθμών
     * @return float <English> Standard deviation of the numbers
     *               <Greek> Τυπική απόκλιση των αριθμών
     *
     * @formula standardDeviation(x) = sqrt((Σ (x_i - mean(x))^2) / n)
     *
     * @version 25.0.0
     */
    public function standardDeviation(array $nums): float
    {
        if (empty($nums)) {
            throw new InvalidArgumentException("The array of numbers must not be empty.");
        }

        foreach ($nums as $num) {
            if (!is_numeric($num)) {
                throw new InvalidArgumentException("All elements in the array must be numbers.");
            }
        }

        return sqrt($this->variance($nums));
    }


    /**
     * Calculate the surface area of a cone.
     *
     * @desc <English> Calculate the surface area of a cone.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός κώνου.
     *
     * @param float $radius <English> Radius of the base
     *                      <Greek> Ακτίνα της βάσης
     * @param float $slantHeight <English> Slant height of the cone
     *                           <Greek> Κεκλιμένο ύψος του κώνου
     * @return float <English> Surface area of the cone
     *               <Greek> Επιφάνεια του κώνου
     *
     * @formula A = π * r * (r + l), όπου l είναι το κεκλιμένο ύψος
     *
     * @version 25.0.0
     */
    public function surfaceAreaOfCone(float $radius, float $slantHeight): float
    {
        if ($radius <= 0) {
            throw new InvalidArgumentException("Radius must be greater than zero.");
        }
        if ($slantHeight <= 0) {
            throw new InvalidArgumentException("Slant height must be greater than zero.");
        }

        return M_PI * $radius * ($radius + $slantHeight);
    }


    /**
     * Calculate the surface area of a cylinder.
     *
     * @desc <English> Calculate the surface area of a cylinder.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός κυλίνδρου.
     *
     * @param float $radius <English> Radius of the base
     *                      <Greek> Ακτίνα της βάσης
     * @param float $height <English> Height of the cylinder
     *                      <Greek> Ύψος του κυλίνδρου
     * @return float <English> Surface area of the cylinder
     *               <Greek> Επιφάνεια του κυλίνδρου
     *
     * @formula A = 2 * π * r * (r + h)
     *
     * @version 25.0.0
     */
    public function surfaceAreaOfCylinder(float $radius, float $height): float
    {
        if ($radius <= 0) {
            throw new InvalidArgumentException("Radius must be greater than zero.");
        }
        if ($height <= 0) {
            throw new InvalidArgumentException("Height must be greater than zero.");
        }

        return 2 * M_PI * $radius * ($radius + $height);
    }


    /**
     * Calculate the surface area of an ellipsoid.
     *
     * @desc <English> Calculate the surface area of an ellipsoid.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός ελλειψοειδούς.
     *
     * @param float $a <English> Semi-major axis
     *                 <Greek> Ημιμείζων άξονας
     * @param float $b <English> Semi-minor axis
     *                 <Greek> Ημιελάσσων άξονας
     * @param float $c <English> Polar radius
     *                 <Greek> Πολικός ακτίνας
     * @return float <English> Surface area of the ellipsoid
     *               <Greek> Επιφάνεια του ελλειψοειδούς
     *
     * @formula A ≈ 4π * ( ((a^p * b^p) + (a^p * c^p) + (b^p * c^p)) / 3 )^(1/p)
     *           (where p ≈ 1.6075)
     *
     * @version 25.0.0
     */
    public function surfaceAreaOfEllipsoid(float $a, float $b, float $c): float
    {
        if ($a <= 0 || $b <= 0 || $c <= 0) {
            throw new InvalidArgumentException("All axes must be greater than zero.");
        }
        
        $p = 1.6075;
        return 4 * M_PI * pow((pow($a*$b, $p) + pow($a*$c, $p) + pow($b*$c, $p)) / 3, 1/$p);
    }


    /**
     * Calculate the surface area of a regular decagon.
     *
     * @desc <English> Calculate the surface area of a regular decagon.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός κανονικού δεκαέδρου.
     *
     * @param float $side <English> Length of a side of the decagon
     *                    <Greek> Μήκος μιας πλευράς του δεκαέδρου
     * @return float <English> Surface area of the decagon
     *               <Greek> Επιφάνεια του δεκαέδρου
     *
     * @formula A = (5 / 2) * side^2 * √5
     *
     * @version 25.0.0
     */
    public function surfaceAreaOfRegularDecagon(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("Side length must be greater than zero.");
        }

        return (5 / 2) * pow($side, 2) * sqrt(5);
    }


    /**
     * Calculate the surface area of a regular icosahedron.
     *
     * @desc <English> Calculate the surface area of a regular icosahedron.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός κανονικού εικοσάεδρου.
     *
     * @param float $side <English> Length of a side of the icosahedron
     *                    <Greek> Μήκος μιας πλευράς του εικοσάεδρου
     * @return float <English> Surface area of the icosahedron
     *               <Greek> Επιφάνεια του εικοσάεδρου
     *
     * @formula A = 5 * √3 * side^2
     *
     * @version 25.0.0
     */
    public function surfaceAreaOfRegularIcosahedron(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("Side length must be greater than zero.");
        }

        return 5 * sqrt(3) * pow($side, 2);
    }


    /**
     * Calculate the surface area of a regular icosahedron given its circumscribed radius.
     *
     * @desc <English> Calculate the surface area of a regular icosahedron given its circumscribed radius.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός κανονικού εικοσάεδρου δεδομένης της ακτίνας του περιγεγραμμένου κύκλου.
     *
     * @param float $radius <English> Radius of the circumscribed circle
     *                      <Greek> Ακτίνα του περιγεγραμμένου κύκλου
     * @return float <English> Surface area of the icosahedron
     *               <Greek> Επιφάνεια του εικοσάεδρου
     *
     * @formula A = 20 * √(3 * radius^2)
     *
     * @version 25.0.0
     */
    public function surfaceAreaOfRegularIcosahedronFromRadius(float $radius): float
    {
        if ($radius <= 0) {
            throw new InvalidArgumentException("Radius must be greater than zero.");
        }

        return 20 * sqrt(3 * pow($radius, 2));
    }


    /**
     * Calculate the surface area of a regular pentadecagon.
     *
     * @desc <English> Calculate the surface area of a regular pentadecagon.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός κανονικού δεκαπεντάεδρου.
     *
     * @param float $side <English> Length of a side of the pentadecagon
     *                    <Greek> Μήκος μιας πλευράς του δεκαπεντάεδρου
     * @return float <English> Surface area of the pentadecagon
     *               <Greek> Επιφάνεια του δεκαπεντάεδρου
     *
     * @formula A = (15 / 4) * side^2 * cot(π / 15)
     *
     * @version 25.0.0
     */
    public function surfaceAreaOfRegularPentadecagon(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("Side length must be greater than zero.");
        }

        return (15 / 4) * pow($side, 2) * $this->cot(M_PI / 15);
    }


    /**
     * Calculate the surface area of a sphere.
     *
     * @desc <English> Calculate the surface area of a sphere.
     * @desc <Greek> Υπολογίστε την επιφάνεια μιας σφαίρας.
     *
     * @param float $radius <English> Radius of the sphere
     *                      <Greek> Ακτίνα της σφαίρας
     * @return float <English> Surface area of the sphere
     *               <Greek> Επιφάνεια της σφαίρας
     *
     * @formula A = 4 * π * r^2
     *
     * @version 25.0.0
     */
    public function surfaceAreaOfSphere(float $radius): float
    {
        if ($radius <= 0) {
            throw new InvalidArgumentException("Radius must be greater than zero.");
        }

        return 4 * M_PI * pow($radius, 2);
    }

   
    /**
     * Calculate the surface area of a sphere given its radius.
     *
     * @desc <English> Calculate the surface area of a sphere given its radius.
     * @desc <Greek> Υπολογίστε την επιφάνεια μιας σφαίρας δεδομένης της ακτίνας της.
     *
     * @param float $radius <English> Radius of the sphere
     *                      <Greek> Ακτίνα της σφαίρας
     * @return float <English> Surface area of the sphere
     *               <Greek> Επιφάνεια της σφαίρας
     *
     * @formula A = 4 * π * radius^2
     *
     * @version 25.0.0
     */
    public function surfaceAreaOfSphereFromRadius(float $radius): float
    {
        if ($radius <= 0) {
            throw new InvalidArgumentException("Radius must be greater than zero.");
        }

        return 4 * M_PI * pow($radius, 2);
    }


    /**
     * Calculate the surface area of a regular tetrahedron.
     *
     * @desc <English> Calculate the surface area of a regular tetrahedron.
     * @desc <Greek> Υπολογίστε την επιφάνεια ενός κανονικού τετραέδρου.
     *
     * @param float $side <English> Length of a side of the tetrahedron
     *                    <Greek> Μήκος μιας πλευράς του τετραέδρου
     * @return float <English> Surface area of the tetrahedron
     *               <Greek> Επιφάνεια του τετραέδρου
     *
     * @formula A = √3 * side^2
     *
     * @version 25.0.0
     */
    public function surfaceAreaOfTetrahedron(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("Side length must be greater than zero.");
        }

        return sqrt(3) * pow($side, 2);
    }


    /**
     * Calculate the Taylor series expansion of a function at a given point.
     *
     * @desc <English> Calculate the Taylor series expansion of a function at a given point.
     * @desc <Greek> Υπολογίστε την ανάπτυξη της σειράς Taylor μιας συνάρτησης σε ένα δεδομένο σημείο.
     *
     * @param callable $f <English> Function to expand
     *                    <Greek> Συνάρτηση για ανάπτυξη
     * @param float $x <English> Point at which to evaluate the Taylor series
     *                 <Greek> Σημείο στο οποίο θα αξιολογηθεί η σειρά Taylor
     * @param int $n <English> Number of terms in the Taylor series
     *               <Greek> Αριθμός όρων στη σειρά Taylor
     * @param float $h <English> Small interval for calculating derivatives
     *                 <Greek> Μικρό διάστημα για τον υπολογισμό των παραγώγων
     * @return array <English> Coefficients of the Taylor series
     *               <Greek> Συντελεστές της σειράς Taylor
     *
     * @formula f(x + h) ≈ Σ (f^(k)(x) / k!) * h^k
     *
     * @version 25.0.0
     */
    public function taylorSeries(callable $f, float $x, int $n, float $h = 1e-5): array
    {
        if (!is_callable($f)) {
            throw new InvalidArgumentException("Function must be callable.");
        }
        if ($h <= 0) {
            throw new InvalidArgumentException("Interval must be greater than zero.");
        }
        if ($n < 0) {
            throw new InvalidArgumentException("Number of terms must be non-negative.");
        }

        $coefficients = [];
        for ($k = 0; $k <= $n; $k++) {
            $factorial = $this->factorial($k);
            $derivative = $this->nthDerivative($f, $x, $k, $h);
            $coefficients[] = $derivative / $factorial;
        }
        return $coefficients;
    }


    /**
     * Calculate the hyperbolic tangent of an angle.
     *
     * @desc <English> Calculate the hyperbolic tangent of an angle.
     * @desc <Greek> Υπολογίστε την υπερβολική εφαπτομένη μιας γωνίας.
     *
     * @param float $angle <English> The angle in radians
     *                     <Greek> Η γωνία σε ακτίνια
     * @return float <English> The hyperbolic tangent of the angle
     *               <Greek> Η υπερβολική εφαπτομένη της γωνίας
     *
     * @formula tanh(x) = sinh(x) / cosh(x)
     *
     * @version 25.0.0
     */
    public function tanh(float $angle): float
    {
        if (!is_float($angle)) {
            throw new InvalidArgumentException("Angle must be a float.");
        }
        
        return $this->sinh($angle) / $this->cosh($angle);
    }


    /**
     * Calculate the third derivative of a function at a given point.
     *
     * @desc <English> Calculate the third derivative of a function at a given point.
     * @desc <Greek> Υπολογίστε την παράγωγο τρίτης τάξης μιας συνάρτησης σε ένα δεδομένο σημείο.
     *
     * @param callable $f <English> Function to derive
     *                    <Greek> Συνάρτηση για παράγωγο
     * @param float $x <English> Point at which to evaluate the third derivative
     *                 <Greek> Σημείο στο οποίο θα αξιολογηθεί η παράγωγος τρίτης τάξης
     * @param float $h <English> Small interval for calculating the derivative
     *                 <Greek> Μικρό διάστημα για τον υπολογισμό της παραγώγου
     * @return float <English> Third derivative value at point x
     *               <Greek> Τιμή παραγώγου τρίτης τάξης στο σημείο x
     *
     * @formula f'''(x) ≈ (f(x + 2h) - 2 * f(x + h) + 2 * f(x - h) - f(x - 2h)) / (2 * h^3)
     *
     * @version 25.0.0
     */
    public function thirdDerivative(callable $f, float $x, float $h = 1e-5): float
    {
        if (!is_callable($f)) {
            throw new InvalidArgumentException("Function must be callable.");
        }
        if ($h <= 0) {
            throw new InvalidArgumentException("Interval must be greater than zero.");
        }
        
        return ($f($x + 2 * $h) - 2 * $f($x + $h) + 2 * $f($x - $h) - $f($x - 2 * $h)) / (2 * pow($h, 3));
    }


    /**
     * Calculate the variance of an array of numbers.
     *
     * @desc <English> Calculate the variance of an array of numbers.
     * @desc <Greek> Υπολογίστε τη διασπορά ενός πίνακα αριθμών.
     *
     * @param array $nums <English> Array of numbers
     *                    <Greek> Πίνακας αριθμών
     * @return float <English> Variance of the numbers
     *               <Greek> Διασπορά των αριθμών
     *
     * @formula variance(x) = (Σ (x_i - mean(x))^2) / n
     *
     * @version 25.0.0
     */
    public function variance(array $nums): float
    {
        if (empty($nums)) {
            throw new InvalidArgumentException("The array of numbers must not be empty.");
        }

        foreach ($nums as $num) {
            if (!is_numeric($num)) {
                throw new InvalidArgumentException("All elements in the array must be numbers.");
            }
        }

        $mean = $this->mean($nums);
        $squaredDifferences = array_map(fn($x) => ($x - $mean) ** 2, $nums);
        return array_sum($squaredDifferences) / count($nums);
    }


    /**
     * Calculate the volume of a cone.
     *
     * @desc <English> Calculate the volume of a cone.
     * @desc <Greek> Υπολογίστε τον όγκο ενός κώνου.
     *
     * @param float $radius <English> Radius of the base
     *                      <Greek> Ακτίνα της βάσης
     * @param float $height <English> Height of the cone
     *                      <Greek> Ύψος του κώνου
     * @return float <English> Volume of the cone
     *               <Greek> Όγκος του κώνου
     *
     * @formula V = (1/3) * π * r^2 * h
     *
     * @version 25.0.0
     */
    public function volumeOfCone(float $radius, float $height): float
    {
        if ($radius <= 0) {
            throw new InvalidArgumentException("Radius must be greater than zero.");
        }
        if ($height <= 0) {
            throw new InvalidArgumentException("Height must be greater than zero.");
        }

        return (1/3) * M_PI * pow($radius, 2) * $height;
    }


    /**
     * Calculate the volume of a cylinder.
     *
     * @desc <English> Calculate the volume of a cylinder.
     * @desc <Greek> Υπολογίστε τον όγκο ενός κυλίνδρου.
     *
     * @param float $radius <English> Radius of the base
     *                      <Greek> Ακτίνα της βάσης
     * @param float $height <English> Height of the cylinder
     *                      <Greek> Ύψος του κυλίνδρου
     * @return float <English> Volume of the cylinder
     *               <Greek> Όγκος του κυλίνδρου
     *
     * @formula V = π * r^2 * h
     *
     * @version 25.0.0
     */
    public function volumeOfCylinder(float $radius, float $height): float
    {
        if ($radius <= 0) {
            throw new InvalidArgumentException("Radius must be greater than zero.");
        }
        if ($height <= 0) {
            throw new InvalidArgumentException("Height must be greater than zero.");
        }

        return M_PI * pow($radius, 2) * $height;
    }


    /**
     * Calculate the volume of a pyramid.
     *
     * @desc <English> Calculate the volume of a pyramid.
     * @desc <Greek> Υπολογίστε τον όγκο μιας πυραμίδας.
     *
     * @param float $baseArea <English> Area of the base
     *                        <Greek> Εμβαδόν της βάσης
     * @param float $height <English> Height of the pyramid
     *                      <Greek> Ύψος της πυραμίδας
     * @return float <English> Volume of the pyramid
     *               <Greek> Όγκος της πυραμίδας
     *
     * @formula V = (1/3) * baseArea * height
     *
     * @version 25.0.0
     */
    public function volumeOfPyramid(float $baseArea, float $height): float
    {
        if ($baseArea <= 0) {
            throw new InvalidArgumentException("Base area must be greater than zero.");
        }
        if ($height <= 0) {
            throw new InvalidArgumentException("Height must be greater than zero.");
        }

        return (1/3) * $baseArea * $height;
    }


    /**
     * Calculate the volume of a rectangular prism (cuboid).
     *
     * @desc <English> Calculate the volume of a rectangular prism (cuboid).
     * @desc <Greek> Υπολογίστε τον όγκο ενός ορθογωνίου παραλληλεπιπέδου.
     *
     * @param float $length <English> Length of the prism
     *                      <Greek> Μήκος του παραλληλεπιπέδου
     * @param float $width <English> Width of the prism
     *                     <Greek> Πλάτος του παραλληλεπιπέδου
     * @param float $height <English> Height of the prism
     *                      <Greek> Ύψος του παραλληλεπιπέδου
     * @return float <English> Volume of the prism
     *               <Greek> Όγκος του παραλληλεπιπέδου
     *
     * @formula V = length * width * height
     *
     * @version 25.0.0
     */
    public function volumeOfRectangularPrism(float $length, float $width, float $height): float
    {
        if ($length <= 0) {
            throw new InvalidArgumentException("Length must be greater than zero.");
        }
        if ($width <= 0) {
            throw new InvalidArgumentException("Width must be greater than zero.");
        }
        if ($height <= 0) {
            throw new InvalidArgumentException("Height must be greater than zero.");
        }

        return $length * $width * $height;
    }


    /**
     * Calculate the volume of a regular dodecahedron.
     *
     * @desc <English> Calculate the volume of a regular dodecahedron.
     * @desc <Greek> Υπολογίστε τον όγκο ενός κανονικού δωδεκάεδρου.
     *
     * @param float $side <English> Length of a side of the dodecahedron
     *                    <Greek> Μήκος μιας πλευράς του δωδεκάεδρου
     * @return float <English> Volume of the dodecahedron
     *               <Greek> Όγκος του δωδεκάεδρου
     *
     * @formula V = (15 + 7√5) / 4 * side^3
     *
     * @version 25.0.0
     */
    public function volumeOfRegularDodecahedron(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return ((15 + 7 * sqrt(5)) / 4) * pow($side, 3);
    }


    /**
     * Calculate the volume of a regular dodecahedron given its circumscribed radius.
     *
     * @desc <English> Calculate the volume of a regular dodecahedron given its circumscribed radius.
     * @desc <Greek> Υπολογίστε τον όγκο ενός κανονικού δωδεκάεδρου δεδομένης της ακτίνας του περιγεγραμμένου κύκλου.
     *
     * @param float $radius <English> Radius of the circumscribed circle
     *                      <Greek> Ακτίνα του περιγεγραμμένου κύκλου
     * @return float <English> Volume of the dodecahedron
     *               <Greek> Όγκος του δωδεκάεδρου
     *
     * @formula V = (15 + 7√5) / 4 * (2r / √3)^3
     *
     * @version 25.0.0
     */
    public function volumeOfRegularDodecahedronFromRadius(float $radius): float
    {
        if ($radius <= 0) {
            throw new InvalidArgumentException("Radius must be greater than zero.");
        }

        return ((15 + 7 * sqrt(5)) / 4) * pow((2 * $radius / sqrt(3)), 3);
    }


    /**
     * Calculate the volume of a regular heptagon.
     *
     * @desc <English> Calculate the volume of a regular heptagon.
     * @desc <Greek> Υπολογίστε τον όγκο ενός κανονικού επταγώνου.
     *
     * @param float $side <English> Length of a side of the heptagon
     *                    <Greek> Μήκος μιας πλευράς του επταγώνου
     * @return float <English> Volume of the heptagon
     *               <Greek> Όγκος του επταγώνου
     *
     * @formula V = (7/3) * √3 * side^3 * tan(π/7)
     *
     * @version 25.0.0
     */
    public function volumeOfRegularHeptagon(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return (7 / 3) * sqrt(3) * pow($side, 3) * tan(M_PI / 7);
    }


    /**
     * Calculate the volume of a regular icosahedron.
     *
     * @desc <English> Calculate the volume of a regular icosahedron.
     * @desc <Greek> Υπολογίστε τον όγκο ενός κανονικού εικοσάεδρου.
     *
     * @param float $side <English> Length of a side of the icosahedron
     *                    <Greek> Μήκος μιας πλευράς του εικοσάεδρου
     * @return float <English> Volume of the icosahedron
     *               <Greek> Όγκος του εικοσάεδρου
     *
     * @formula V = (5 * (3 + √5) / 12) * side^3
     *
     * @version 25.0.0
     */
    public function volumeOfRegularIcosahedron(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return (5 * (3 + sqrt(5)) / 12) * pow($side, 3);
    }


    /**
     * Calculate the volume of a regular icosahedron given its inradius.
     *
     * @desc <English> Calculate the volume of a regular icosahedron given its inradius.
     * @desc <Greek> Υπολογίστε τον όγκο ενός κανονικού εικοσάεδρου δεδομένου της εγγεγραμμένης ακτίνας του.
     *
     * @param float $inradius <English> Inradius of the icosahedron
     *                        <Greek> Εγγεγραμμένη ακτίνα του εικοσάεδρου
     * @return float <English> Volume of the icosahedron
     *               <Greek> Όγκος του εικοσάεδρου
     *
     * @formula V = (5 / 12) * (3 + √5) * inradius^3
     *
     * @version 25.0.0
     */
    public function volumeOfRegularIcosahedronFromInradius(float $inradius): float
    {
        if ($inradius <= 0) {
            throw new InvalidArgumentException("Inradius must be greater than zero.");
        }

        return (5 / 12) * (3 + sqrt(5)) * pow($inradius, 3);
    }


    /**
     * Calculate the volume of a regular octahedron.
     *
     * @desc <English> Calculate the volume of a regular octahedron.
     * @desc <Greek> Υπολογίστε τον όγκο ενός κανονικού οκταέδρου.
     *
     * @param float $side <English> Length of a side of the octahedron
     *                    <Greek> Μήκος μιας πλευράς του οκταέδρου
     * @return float <English> Volume of the octahedron
     *               <Greek> Όγκος του οκταέδρου
     *
     * @formula V = (√2/3) * side^3
     *
     * @version 25.0.0
     */
    public function volumeOfRegularOctahedron(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return (sqrt(2) / 3) * pow($side, 3);
    }


    /**
     * Calculate the volume of a regular pentadecagon.
     *
     * @desc <English> Calculate the volume of a regular pentadecagon.
     * @desc <Greek> Υπολογίστε τον όγκο ενός κανονικού δεκαπεντάεδρου.
     *
     * @param float $side <English> Length of a side of the pentadecagon
     *                    <Greek> Μήκος μιας πλευράς του δεκαπεντάεδρου
     * @return float <English> Volume of the pentadecagon
     *               <Greek> Όγκος του δεκαπεντάεδρου
     *
     * @formula V = (15 / 4) * side^3 * (1 / tan(π / 15))
     *
     * @version 25.0.0
     */
    public function volumeOfRegularPentadecagon(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("The length of the side should be positive.");
        }

        return (15 / 4) * pow($side, 3) * ($this->cot(M_PI / 15));
    }


    /**
     * Calculate the volume of a sphere.
     *
     * @desc <English> Calculate the volume of a sphere.
     * @desc <Greek> Υπολογίστε τον όγκο μιας σφαίρας.
     *
     * @param float $radius <English> Radius of the sphere
     *                      <Greek> Ακτίνα της σφαίρας
     * @return float <English> Volume of the sphere
     *               <Greek> Όγκος της σφαίρας
     *
     * @formula V = 4/3 * π * r^3
     *
     * @version 25.0.0
     */
    public function volumeOfSphere(float $radius): float
    {
        if ($radius <= 0) {
            throw new InvalidArgumentException("Radius must be greater than zero.");
        }

        return (4 / 3) * M_PI * pow($radius, 3);
    }


    /**
     * Calculate the volume of a sphere given its surface area.
     *
     * @desc <English> Calculate the volume of a sphere given its surface area.
     * @desc <Greek> Υπολογίστε τον όγκο μιας σφαίρας δεδομένης της επιφάνειάς της.
     *
     * @param float $surfaceArea <English> Surface area of the sphere
     *                           <Greek> Επιφάνεια της σφαίρας
     * @return float <English> Volume of the sphere
     *               <Greek> Όγκος της σφαίρας
     *
     * @formula V = √(A^3 / (6 * π^2))
     *
     * @version 25.0.0
     */
    public function volumeOfSphereFromSurfaceArea(float $surfaceArea): float
    {
        if ($surfaceArea <= 0) {
            throw new InvalidArgumentException("Surface area must be greater than zero.");
        }

        return sqrt(pow($surfaceArea, 3) / (6 * pow(M_PI, 2)));
    }


    /**
     * Calculate the volume of a regular tetrahedral pyramid.
     *
     * @desc <English> Calculate the volume of a regular tetrahedral pyramid.
     * @desc <Greek> Υπολογίστε τον όγκο μιας κανονικής τετραγωνικής πυραμίδας.
     *
     * @param float $side <English> Length of a side of the base
     *                    <Greek> Μήκος μιας πλευράς της βάσης
     * @return float <English> Volume of the pyramid
     *               <Greek> Όγκος της πυραμίδας
     *
     * @formula V = (1/3) * baseArea * height
     *
     * @version 25.0.0
     */
    public function volumeOfTetrahedralPyramid(float $side): float
    {
        if ($side <= 0) {
            throw new InvalidArgumentException("Side length must be greater than zero.");
        }

        $baseArea = pow($side, 2) * sqrt(3) / 4;
        $height = sqrt(pow($side, 2) - pow($side / sqrt(2), 2));
        return (1/3) * $baseArea * $height;
    }



    /**
     * ............... Private TMathsHandler methods  .................
     */   
   

     private function nthDerivative(callable $f, float $x, int $n, float $h): float
     {
         if (!is_callable($f)) {
             throw new InvalidArgumentException("Function must be callable.");
         }
         if ($h <= 0) {
             throw new InvalidArgumentException("Step size must be greater than zero.");
         }
         if ($n < 0) {
             throw new InvalidArgumentException("Derivative order must be non-negative.");
         }
         
         if ($n === 0) {
             return $f($x);
         } else {
             return ($this->nthDerivative($f, $x + $h, $n - 1, $h) - $this->nthDerivative($f, $x - $h, $n - 1, $h)) / (2 * $h);
         }
     }
    

     private function toHessenberg(array $A): array
     {
         // Implement Householder transformation to convert A to upper Hessenberg form
         // This function is a placeholder and needs to be implemented.
         return $A; // Placeholder
     }


    /**
     * ............... End Private TMathsHandler methods  .................
     */ 


    // __________________________________________________________________________________________
    // ............... Others methods and properties of TMathsHandler Class  .................
    // __________________________________________________________________________________________

}
/******************************************************************************
 * @endcode TMathsHandler
 *****************************************************************************/

?>