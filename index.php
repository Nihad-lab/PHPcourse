<?php
$seconds = 0;
$running = true;
while ($running) {
    $seconds++;
    echo "Seconds: {$seconds}<br>";
    if ($seconds >= 10) { // Условный выход из цикла
        $running = false;
    }
}
?>



