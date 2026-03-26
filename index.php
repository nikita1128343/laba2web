<?php
header('HTTP/1.1 404 Not Found');
header('Content-Type: text/html; charset=UTF-8');

echo "Array (\n";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment = substr($_POST['comment'] ?? '', 0, 4);
    echo "    [comment] => " . $comment . "\n";
} else {
    echo "    [0] => Привет, мир!\n";
}
echo ")\n\nПривет, мир!";
?>