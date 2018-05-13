<?php

namespace Anax\View;

?>
<h3>Link (makeClickable)</h3>
<p><?= $linkOrig ?></p>
<p><?= $link ?></p>

<h3>BBCode (bbcode2html)</h3>
<p><?= $bbOrig ?></p>
<p><?= $bb ?></p>

<h3>Markdown (markdown)</h3>
<p><?= $mdOrig ?></p>
<p><?= $md ?></p>

<h3>NewLine (nl2br)</h3>
<p><?= $nlOrig ?></p>
<p><?= $nl ?></p>

<h3>HtmlEscaped (esc)</h3>
<p><?= $escOrig ?></p>
<p><?= $esc ?></p>

<h3>Strip Tags (strip)</h3>
<p><?= $stripOrig ?></p>
<p><?= $strip ?></p>

<h3>Parse (parse(bbcode, markdown, nl2br))</h3>
<p><?= $parseOrig ?></p>
<p><?= $parse ?></p>

<h3>Parse (parse(escaped, bbcode))</h3>
<p><?= $escbbOrig ?></p>
<p><?= $escbb ?></p>
