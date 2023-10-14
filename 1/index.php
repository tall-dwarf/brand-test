<?php

function shortDescription($articleText): string
{
    $littleArticleText = substr($articleText, 0, 250);
    $replacement = '<a href="/article/1">${1} ...<a>';
    return preg_replace('/(\w+ \w+ \w+)$/i', $replacement, $littleArticleText);
}

print_r(shortDescription("Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid sint tempora impedit unde quis nulla. Aliquam magni deserunt quis sit, modi, animi accusamus amet repellendus
nihil dolorem fuga quidem! Velit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid sint tempora impedit unde quis nulla. Aliquam magni deserunt quis sit, 
modi, animi accusamus amet repellendus nihil dolorem fuga quidem! Velit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid sint tempora impedit unde quis 
nulla. Aliquam magni deserunt quis sit, modi, animi accusamus amet repellendus nihil dolorem fuga quidem! Velit. Lorem ipsum dolor sit amet consectetur adipisicing elit.
Aliquid sint tempora impedit unde quis nulla. Aliquam magni deserunt quis sit, modi, animi accusamus amet repellendus nihil dolorem fuga quidem! Velit."));
?>

