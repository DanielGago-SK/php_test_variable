    <?php
    // ako prenášať premennú z PHP do JS
    $test = "015024100"; // PHP premenná - string 
    // string ktorý obsahje iba čísla (v mojom prípade číselný kód), to je o zábavu postarané...
    echo "<script>js_test1 = '$test'; console.log(js_test1);</script>"; // 01230123 - string - jediný originál výstup
    echo "<script>js_test2 = $test; console.log(js_test2);</script>"; // 3418176 - number
    echo "<script>js_test3 = " . $test . "; console.log(js_test3);</script>"; // 3418176 - number
    echo '<script>js_test4 = ' . $test . '; console.log(js_test4);</script>'; // 3418176 - number
    // v týchto úvodzovkách '' už žiadny iný zápis nezobrazoval $test ako premennú, vždy iba ako text v kóde!
    // nasledovné zápisy sa vôbec nevykonávajú, aj keď zápis vyzerá korektne
    echo `<script>js_test5 = $test; console.log(js_test5);</script>`; // nothing
    echo `<script>js_test6 = ` . $test . `; console.log(js_test6);</script>`; // nothing

    $test2 = "text"; // PHP premenná - string, ale tentokrát text
    echo "<script>js_test1 = '$test2'; console.log(js_test1);</script>"; // text - string
    // nasledovné 3 zapisy končia chybami - "text is not defined"
    echo "<script>js_test2 = $test2; console.log(js_test2);</script>";
    echo "<script>js_test3 = " . $test2 . "; console.log(js_test3);</script>";
    echo '<script>js_test4 = ' . $test2 . '; console.log(js_test4);</script>';
    //nasledovné 2 záppisy sa nevykonávajú vôbec, ako pri prvom pokuse hore 
    echo `<script>js_test5 = $test2; console.log(js_test5);</script>`;
    echo `<script>js_test6 = ` . $test2 . `; console.log(js_test6);</script>`;
    
    // PS: Pri žiadnom zo zápisov VS Code neprotestuje čo s týka syntaxe a premenné sú v kóde vždy "farebné", čiže sú brané ako premenné, nie ako text... Ak už boli rovno zobrazené len ako text, tak tie zápisy som sem ani nedal.
    ?>
