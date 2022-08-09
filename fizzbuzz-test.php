<?php

for ($i = 1; $i <= 100; $i++) {
    if (($i % 3 == 0) && ($i % 5 == 0)) {
        echo "<p>$i = FizzBuzz</p>";
    } elseif ($i % 3 == 0) {
        echo "<p>$i = Fizz</p>";
    } elseif ($i % 5 == 0) {
        echo "<p>$i = Buzz</p>";
    } else {
        echo "<p>$i = $i</p>";
    }
}
