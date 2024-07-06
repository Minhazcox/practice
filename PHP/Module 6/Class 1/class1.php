<!-- <?php
        echo "Hello PHP!"

        ?> -->

<!-- <?php
        $a = 40;
        $b = 20;
        $c = $a + $b;

        echo $c;

        ?> -->

<!-- <?php

        function greet()
        {
                $message = "Hello, World!";
                echo $message;
        }

        greet();

        ?> -->

<!-- <?php
        $name = "Minhaz";

        function greet1()
        {
                global $name;
                echo "Hello, $name";
        }

        greet1();

        ?> -->


<!-- <?php
        define('BATCH', '3');
        define('SITE_NAME', 'http://ostad.app');

        echo SITE_NAME;
        echo BATCH;

        ?> -->

<!-- <?php

        $name = "Mukibul Minhaz";
        $age = 34;

        printf("Name is %s, Age is %d", $name, $age);

        ?> -->

<?php

$name = "Mukibul Minhaz";
$age = 34;

echo sprintf("Name is %s, Age is %d", $name, $age);

?>