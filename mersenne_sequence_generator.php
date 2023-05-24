<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the 'n' parameter is provided
    if (!isset($_POST['n'])) {
        http_response_code(400);
        echo "Missing 'n' parameter.";
        exit;
    }

    $n = intval($_POST['n']);
    if ($n <= 0) {
        http_response_code(400);
        echo "Invalid value for 'n'.";
        exit;
    }

    $sequence = generateMersenneSequence($n);
    echo json_encode($sequence);
}

/**
 * Generates the Mersenne sequence of length n.
 *
 * @param int $n Length of the Mersenne sequence
 * @return array Mersenne sequence
 */
function generateMersenneSequence($n)
{
    $sequence = [];
    $count = 0;
    $number = 2;

    while ($count < $n) {
        $mersenne = pow(2, $number) - 1;
        if (isPrime($mersenne)) {
            $sequence[] = $mersenne;
            $count++;
        }
        $number++;
    }

    return $sequence;
}

/**
 * Checks if a number is prime.
 *
 * @param int $number Number to check
 * @return bool Whether the number is prime
 */
function isPrime($number)
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
