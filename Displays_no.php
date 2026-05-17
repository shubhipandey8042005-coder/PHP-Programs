<html>
<head>
    <title>Display Numbers 1-10</title>
</head>
<body>
    <h2>Display 1-2-3-4-5-6-7-8-9-10</h2>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i < 10) {
            echo $i . "-";
        } else {
            echo $i;
        }
    }
    ?>
</body>
</html>

