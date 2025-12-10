<?php
declare(strict_types=1);

function kebabCase(string $text):string {
    $text = mb_convert_case($text, MB_CASE_LOWER, "UTF-8");
    $text = str_replace(" ", "-", $text);

    return $text;
}

echo kebabCase("En vanlig text");
echo "<br>";
echo kebabCase("Åbor blir våta om fötterna");