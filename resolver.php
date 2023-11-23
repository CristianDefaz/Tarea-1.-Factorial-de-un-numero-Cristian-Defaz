<?php
// Definición de la clase FactorialCalculator
class FactorialCalculator {
    private $number;
    private $multiplications;

    // Constructor que recibe el número
    public function __construct($number) {
        $this->number = $number;
        $this->multiplications = [];
    }

    // Método para calcular el factorial
    public function calculateFactorial() {
        // Verificar si el número es negativo
        if ($this->number < 0) {
            return "No se puede calcular el factorial de un número negativo. Ingrese un número positivo.";
        }

        // Inicializar el resultado
        $result = 1;

        // Calculo el factorial utilizando un bucle for
        for ($i = 1; $i <= $this->number; $i++) {
            $result *= $i;
            // Almacenar cada multiplicación en el array
            $this->multiplications[] = $result;
        }

        // Devolver el resultado y las multiplicaciones
        return ['factorial' => $result, 'multiplicaciones' => $this->multiplications];
    }
}

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el número ingresado por el usuario (si está presente)
    $numero = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;

    // Crear una instancia de la clase FactorialCalculator con el número ingresado
    $calculadora = new FactorialCalculator($numero);
    // Calcular el factorial y obtener el resultado y las multiplicaciones
    $resultado = $calculadora->calculateFactorial();

    // Mostrar el resultado debajo del formulario
    echo "<p>El factorial de $numero es: " . $resultado['factorial'] . "</p>";

    // Mostrar las multiplicaciones
    echo "<p>Multiplicaciones:</p>";
    echo "<ul>";
    foreach ($resultado['multiplicaciones'] as $index => $multiplicacion) {
        echo "<li> * " . ($index + 1) . " = $multiplicacion</li>";
    }
    echo "</ul>";
}
?>
