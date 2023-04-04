<?php

    $fahrenheit = floatval($_POST["f-temp"]);

    // converting fahrenheit to celsius
    $celsius = (5/9) * ($fahrenheit - 32);

    echo "<h3>Results:</h3>";
    echo "The temperature in Celsius is " . number_format($celsius, 1) . "C°.";
?>