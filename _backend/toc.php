<?php
if ($toc_nav) {
    echo '<div id="nav">';
}

echo "<h4>${locale['toc']}</h4>";
echo "<span style=\"font-size:80%\"><a href=\"#top\">" . 
     "${locale['top']}</a></span>";
echo '<hr>';

$has_zero = false;
foreach ($nav as $h) {
    if ($h['level'] == 0) {
        $has_zero = true;
    }
}

if ($has_zero) {
    echo '<ol style="list-style-type:lower-roman;">';
    $level = 0;
} else {
    echo '<ol>';
    $level = 1;
}
foreach ($nav as $h) {
    if ($h['level'] > $level) {
        echo (($h['level'] > 1)? '<ul>':'<ol>');
        $level = $h['level'];
    } elseif ($h['level'] < $level) {
        echo (($level > 1)? '</ul>':'</ol>');
        $level = $h['level'];
    }
    echo "<a href=\"${h['href']}\">";
    echo "<li>${h['name']}</li>";
    echo '</a>';
}
while ($level) {
    echo ($level > 1)? '</ul>':'</ol>';
    $level -= 1;
}
echo '</ol>';

if ($toc_nav) {
    echo '</div>';
}
?>
