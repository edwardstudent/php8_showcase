<?php
$score = 40;

$status = match(true) {
    $score < 20 => 'beginner',
    $score >= 20 && $score < 80 => 'intermediate',
    $score >= 80 => 'expert'
};

echo $status;