

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Podsumowanie rezerwacji</title>
</head>
<body>
    <div class="summary">
        <?php

            $amount = $_POST["amount"];
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $email = $_POST["email"];
            $address = $_POST["address"];
            $credit_card = $_POST["credit-card"];
            $date = $_POST["date"];
            $baby_bed = $_POST["baby-bed"];
            $additional_info = $_POST["additional-info"];

            echo "<h2>Podsumowanie</h2>";

            echo "<p>Ilość osób: " . $amount . "</p>";
            echo "<p>Imie i nazwisko: " . $name . " " . $surname . "</p>";
            echo "<p>Email: " . $email . "</p>";
            echo "<p>Adres: " . $address . "</p>";
            echo "<p>Karta kredytowa: " . $credit_card . "</p>";
            echo "<p>Data pobytu: " . $date . "</p>";
            echo "<p>Łóżko dla dziecka: " . $baby_bed . "</p>";
            echo "<p>Dodatkowe opcje: </p>";
            if (is_array($additional_info) || is_object($additional_info)) {
                foreach ($additional_info as $option) {
                    echo "<p> -" . $option . "</p>";
                }
            } else {
                echo "<p> -" . $additional_info . "</p>";
            }


        ?>
    </div>
</body>
</html>

