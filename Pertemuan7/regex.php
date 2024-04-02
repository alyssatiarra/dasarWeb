<?php
    $pattern = '/[a-z]/';
    $text = 'This is a sample text';
    if (preg_match($pattern, $text)){
        echo "Huruf kecil ditemukan";
    } else {
        echo "Tidak ada huruf kecil";
    }

    echo "<hr>";
    $pattern = '/[0-9]+/';
    $text = 'There are 123 apple';
    if(preg_match($pattern, $text, $matches)){
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak ada yg cocok";
    }

    echo "<hr>";
    $pattern = '/apple/';
    $replacement = 'banana';
    $text = 'I like apple pie';
    $new_text = preg_replace($pattern, $replacement, $text);
    echo $new_text;

    echo "<hr>";
    $pattern = '/go*d/';
    $text = 'god id good';
    if ((preg_match($pattern, $text, $matches))){
        echo "Cocokkan: ".$matches[0];
    } else {
        echo "Tidak ada yg cocok";
    }

    // 5.5
    echo "<hr>";
    $pattern = '/go?d/';
    $text = 'god id good';
    if ((preg_match($pattern, $text, $matches))){
        echo "Cocokkan: ".$matches[0];
    } else {
        echo "Tidak ada yg cocok";
    }

    // 5.6
    echo "<hr>";
    $pattern = '/go{2, 3}d/';
    $text = 'god id good';
    if ((preg_match($pattern, $text, $matches))){
        echo "Cocokkan: ".$matches[0];
    } else {
        echo "Tidak ada yg cocok";
    }
?>