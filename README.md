# MersennePrimes
.

The is_prime() function checks whether a given number is prime. It iterates from 2 to the square root of the number and checks if any number divides the given number evenly. If it finds a divisor, it returns False, indicating that the number is not prime. Otherwise, it returns True.

The mersenne_sequence() function generates the Mersenne sequence. It takes an integer n as input and generates n Mersenne primes. It initializes an empty list called sequence to store the Mersenne primes. It starts with count as 0 and num as 2. It checks if num is a Mersenne prime by calculating 2 ** num - 1 and verifying whether it is prime using the is_prime() function. If it is prime, it appends it to the sequence list and increments count by 1. The process continues until count reaches n.

The program prompts the user to enter the number of Mersenne primes they want to generate. It then calls the mersenne_sequence() function with the given input and displays the generated Mersenne sequence on the console.

Note: Generating Mersenne primes can be computationally intensive for large values of n. The program may take some time to complete for large inputs.
