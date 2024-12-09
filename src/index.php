<?php
namespace Rachaelhogan\HelloWorldPHP;

require __DIR__ . '/../vendor/autoload.php';

$hello = new HelloWorld();

while (true) {
    echo("Please enter your name:\n");

    // Get input from the user
    $input = trim(fgets(STDIN));

    // Break the loop if 'end' is entered
    if ($input === 'end') {
        break;
    }

    // Print the result of sayHello and continue the loop
    echo $hello->sayHello($input) . "\n";
}

//Pass arguments into command line
//if ($argc > 1) {
//    $helloWorld = new HelloWorld();
//    echo($helloWorld->sayHello($argv[1]));
//} else {
//    echo("Please enter your name:\n");
//}
