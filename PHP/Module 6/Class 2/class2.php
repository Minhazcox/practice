<!-- <?php

        //if else
        $username = "minhaz";
        $pass = "1234";

        if ($username == "minhaz" && $pass == "123") {
            echo "Login is Successful";
        } else {
            echo "Login is failed";
        }
        ?> -->

<!-- <?php
        // if else ladder

        $score = 92;

        if ($score >= 90) {
            echo "Golden A+";
        } elseif ($score >= 80) {
            echo "A+";
        } elseif ($score >= 70) {
            echo "A";
        } elseif ($score >= 60) {
            echo "A-";
        } elseif ($score >= 50) {
            echo "B+";
        } elseif ($score >= 40) {
            echo "C";
        } elseif ($score >= 33) {
            echo "D";
        } else {
            echo "F";
        }
        ?> -->


<!-- <?php
        // Nested if else

        $score = 33;
        $grade = "....";

        if ($score >= 90) {
            $grade = "Golden A+";
        } else {
            if ($score >= 80) {
                $grade = "A+";
            } else {
                if ($score >= 70) {
                    $grade = "A";
                } else {
                    if ($score >= 60) {
                        $grade = "A-";
                    } else {
                        if ($score >= 50) {
                            $grade = "B";
                        } else {
                            if ($score >= 40) {
                                $grade = "C";
                            } else {
                                if ($score >= 33) {
                                    $grade = "D";
                                } else {
                                    $grade = "F";
                                }
                            }
                        }
                    }
                }
            }
        }
        echo "Your final grade is : $grade";

        ?> -->

<!-- <?php
        // short hand if else / Ternary Operators
        // if = ?  else = :
        $age = 20;
        $msg = "";

        // if ($age >= 19) {
        //     $msg = "You are adult";
        // } else {
        //     $msg = "You are child";
        // }
        // echo $msg;
        $age >= 19 ? ($msg = "You are adult") : ($msg = "You are child");
        echo $msg;

        ?> -->

<!-- <?php

        // Nested Ternary Operator
        $score = 20;
        $grade = "";

        $score >= 90 ? ($grade = "Golden A+") : (
            $score >= 80 ? ($grade = "A+") : (
                $score >= 70 ? ($grade = "A") : (
                    $score >= 60 ? ($grade = "B+") : (
                        $score >= 50 ? ($grade = "B") : (
                            $score >= 40 ? ($grade = "C") : ($score >= 33 ? ($grade = "D") : ($grade = "F")
                            )
                        )
                    )
                )
            )
        );
        echo "Your final grade is $grade";
        ?> -->

<!-- <?php

        // Nested Ternary Operator

        $score = 90;
        $grade = ($score >= 90 ? "A" : ($score >= 80 ? "B" : ($score >= 70 ? "C" : ($score >= 60 ? "D" : "F"))));
        echo "Your grade is: $grade";

        ?> -->

<!-- <?php

        $dayofweek = 1;

        switch ($dayofweek) {
            case 1:
                echo "Monday";
                break;

            case 2:
                echo "Tuesday";
                break;

            case 3:
                echo "Wednesday";
                break;

            case 4:
                echo "Thursday";
                break;

            case 5:
                echo "Friday";
                break;

            case 6:
                echo "Saturday";
                break;

            case 7:
                echo "Sunday";
                break;

            default:
                echo "Invalid day";
        }

        ?> -->