<?php
/**
 * Textfilter.
 */

/**
 * Displays textfilter functions.
 */
$app->router->get("textfilter", function () use ($app) {
    $tf = new Rasb14\Util\TextFilter();

    $link = "https://google.com";
    $bb = "[url=https://google.com]Google[/url]";
    $md = "[Google](https://google.com)";
    $nl = "Google\nhttps://google.com";
    $esc = "<a href=\"https://google.com\">Google</a>";
    $strip = "<a href=\"https://google.com\">Google</a>";
    $parse = "[url=https://google.com]Google[/url]\n[Yahoo](https://yahoo.com)";
    $escbb = "[b]<script>alert('rekt')</script>[/b]";

    $data = [
        "title" => "TextFilter",
        "linkOrig" => $link,
        "link" => $tf->makeClickable($link),
        "bbOrig" => $bb,
        "bb" => $tf->bbcode2html($bb),
        "mdOrig" => $md,
        "md" => $tf->markdown($md),
        "nlOrig" => $nl,
        "nl" => $tf->nl2br($nl),
        "escOrig" => $esc,
        "esc" => $tf->esc($esc),
        "stripOrig" => $strip,
        "strip" => $tf->strip($strip),
        "parseOrig" => $parse,
        "parse" => $tf->parse($parse, ["bbcode", "markdown", "nl2br"]),
        "escbbOrig" => htmlentities($escbb),
        "escbb" => $tf->parse($escbb, ["escaped", "bbcode"])
    ];

    $app->view->add("textfilter/index", $data);
    $app->page->render($data);
});
