<?php

$score = 80;
$grade = $score >= 90 ? ("Golden A+") : ($score >= 80 ? ("A+") : ($score >= 70 ? ("A") : ($score >= 60 ? ("B+") : ($score >= 50 ? ("B") : ($score >= 40 ? ("C") : ($score >= 33 ? ("D") : ("F")))))));
echo "Your final grade is $grade";
