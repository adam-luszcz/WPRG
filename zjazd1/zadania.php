<?php
    function zad1() {
        echo '<h4>Zadanie 1.1</h4>';
        echo '<p>Witaj w świecie PHP!!!</p>';
    }

    function zad2($a, $b) {
        echo '<h4>Zadanie 1.2</h4>';
        echo($a*$b);
        echo nl2br("\n");
    }

    function zad3() {
        echo '<h4>Zadanie 1.3</h4>';
        echo round(sqrt(pi()), 2);
    }

    function zad4($a, $b) {
        echo '<h4>Zadanie 1.4</h4>';
        echo '<p>'.($a+$b).'</p>';
        echo '<p>'.($a-$b).'</p>';
        echo '<p>'.$a*$b.'</p>';
        echo '<p>'.$a/$b.'</p>';
        echo '<p>'.$a%$b.'</p>';
    }

    function zad5($napis1, $napis2) {
        // “%napis2 napis1%$#”
        echo '<h4>Zadanie 1.5</h4>';
        echo '"%'.$napis2.' '.$napis1.'%$#"';
    }

    function zad6($a, $b, $c) {
        // a+b>c, a+c>b, b+c>a
        echo '<h4>Zadanie 1.6</h4>';
        if (!(is_numeric($a) && is_numeric($b) && is_numeric($c))) {
            echo '<p>BŁĄD</p>';
            return;
        }
        echo sprintf('<p>a=%d, b=%d, c=%d</p>', $a, $b, $c);
        if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
            echo '<p>Z podanych boków można utworzyć trójkąt</p>';
        } else {
            echo '<p>Z podanych boków nie można utworzyć trójkąta</p>';
        }
    }

    function zad7($month) {
        echo '<h4>Zadanie 1.7</h4>';
        if (!is_numeric($month)) {
            echo '<p>BŁĄD</p>';
            return;
        }
        switch ($month) {
            case 1:
                echo '<p>Styczeń: 31 dni</p>';
                break;
            case 2:
                echo '<p>Luty: 28 dni</p>';
                break;
            case 3:
                echo '<p>Marzec: 31 dni</p>';
                break;
            case 4:
                echo '<p>Kwiecień: 30 dni</p>';
                break;
            case 5:
                echo '<p>Maj: 31 dni</p>';
                break;
            case 6:
                echo '<p>Czerwiec: 30 dni</p>';
                break;
            case 7:
                echo '<p>Lipiec: 31 dni</p>';
                break;
            case 8:
                echo '<p>Sierpień: 31 dni</p>';
                break;
            case 9:
                echo '<p>Wrzesień: 30 dni</p>';
                break;
            case 10:
                echo '<p>Październik: 31 dni</p>';
                break;
            case 11:
                echo '<p>Listopad: 30 dni</p>';
                break;
            case 12:
                echo '<p>Grudzień: 31 dni</p>';
                break;
        }
    }

    function zad8($a, $b, $c) {
        echo '<h4>Zadanie 1.8</h4>';
        if ($a > $c) {
            $temp = $a;
            $a = $c;
            $c = $temp;
        }

        if ($a > $b) {
            $temp = $a;
            $a = $b;
            $b = $temp;
        }

        if ($b > $c) {
            $temp = $b;
            $b = $c;
            $c = $temp;
        }

        echo sprintf('<p>%.1f, %.1f, %.1f</p>', $a, $b, $c);
        echo sprintf('<p>%.1f, %.1f, %.1f</p>', $c, $b, $a);
    }

    function zad9($a, $b) {
        echo '<h4>Zadanie 1.9</h4>';
        $result = 0;
        if (!(is_array($a) && is_array($b) || count($a) != count($b))) {
            echo '<p>BŁĄD</p>';
            return;
        }

        $allNumbersA = $a == array_filter($a, 'is_numeric');
        $allNumbersB = $b == array_filter($b, 'is_numeric');

        if (!($allNumbersA && $allNumbersB)) {
            echo '<p>BŁĄD</p>';
            return;
        }

        echo '<p>A[]: '.implode($a, ', ').'</p>';
        echo '<p>B[]: '.implode($b, ', ').'</p>';

        for ($i = 0; $i < count($a); $i++) {
            $result += $a[$i] * $b[$i];
        }

        echo '<p>Iloczyn skalarny tablic: '.$result.'</p>';
    }

    function zad10($a) {
        echo '<h4>Zadanie 1.10</h4>';
        if (!is_numeric($a)) {
            echo '<p>BŁĄD</p>';
            return;
        }

        for ($i = 1; $i < $a + 1; $i++) {
            echo str_repeat('*', $i);
            echo nl2br("\n");
        }
        
        for ($i = $a; $i > 0; $i--) {
            echo str_repeat('*', $i);
            echo nl2br("\n");
        }

        for ($i = 0; $i < $a; $i++) {
            echo str_repeat('&nbsp;', $i * 2).str_repeat('*', $a - $i);
            echo nl2br("\n");
        }

        for ($i = $a - 1; $i >= 0; $i--) {
            echo str_repeat('&nbsp;', $i * 2).str_repeat('*', $a - $i);
            echo nl2br("\n");
        }
    }

    function zad11($sentence) {
        echo '<h4>Zadanie 1.11</h4>';
        echo '<p>Zdanie: '.$sentence.'</p>';
        $letters = range('a', 'z');
        $sentence = strtolower(trim($sentence));

        foreach ($letters as $letter) {
            if (!strstr($sentence, $letter)) {
                echo 'false';
                return;
            }
        }
        echo 'true';
    }

    function zad12() {
        echo '<h4>Zadanie 1.12</h4>';

        $arr = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9],
            [8, 8, 9]
        ];

        foreach ($arr as $el) {
            foreach ($el as $i) {
                echo $i.'&nbsp';
            }
            echo nl2br("\n");
        }
        echo nl2br("\n");

        for ($i = 0; $i < count($arr[0]); $i++) {
            for ($j = 0; $j < count($arr); $j++) {
                echo $arr[$j][$i].'&nbsp;';
            }
            echo nl2br("\n");
        }

    }

    zad1();
    zad2(5, 20);
    zad3();
    zad4(20, 3);
    zad5("napis1", "napis2");
    zad6(3, 4, 6);
    zad7(2);
    zad8(5, 3, 2.3);
    zad9([3, 4], [1, 2]);
    zad10(3);
    zad11('The quick brown fox jumps over the lazy dog');
    zad12();

?>