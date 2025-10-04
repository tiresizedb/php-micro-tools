<?php

function getProgressBar(int $percent, int $totalLength = 20): string
{
    $percent = max(0, min(100, $percent));
    $filledLength = (int)round($totalLength * $percent / 100);

    $filled = str_repeat('█', $filledLength);
    $empty = str_repeat('░', $totalLength - $filledLength);

    return sprintf("%s%s %3d%%", $filled, $empty, $percent);
}
