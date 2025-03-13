<?php
function displayPDFLink($link, $title, $type)
{
    if ($type === 'lecture')
        echo '<li><a href="https://www.bard.edu/library/pdfs/bluecher/' . $link . '.pdf" target="_blank">' . $title . '</a></li>';
    else
        echo '<p><a href="https://www.bard.edu/library/pdfs/bluecher/' . $link . '.pdf" target="_blank">' . $title . '</a></p>';
}
