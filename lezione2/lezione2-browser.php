<?php
$arMenu = [
    ['nome' => 'Azienda', 'url' => '#azienda'],
    ['nome' => 'Storia', 'url' => '#storia'],
    ['nome' => 'Contatti', 'url' => '#contatti'],
];
$nomeSito = "Esercitazioni PHP";
$nomeSito = "Pippo";
define("NOME_SITO", "Esercitazioni PHP:");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- <title><?= $nomeSito ?>Esercizio Menù</title> -->
    <title><?= NOME_SITO ?> Esercizio Menù</title>
</head>

<body>
    <h1 class="text-center display-5">Sezione Menù</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php scriviUrlMenu($arMenu[0]); ?>
                    <?php scriviUrlMenu($arMenu[1]); ?>
                    <?php scriviUrlMenu($arMenu[2]); ?>
                </ul>
            </div>
        </div>
    </nav>
    <pre>
        <?php print defined("NOME_SITO") . "\n"; ?>
        <?php print defined("NOME_SITO2") . "\n"; ?>
        <?php echo "stiamo lavorando nel file: ", __FILE__ . "\n"; ?>
        <?php echo "stiamo lavorando nella directory: ", __DIR__ . "\n"; ?>
        <?php echo "stiamo lavorando nella riga: ", __LINE__ . "\n"; ?>
    </pre>
    <h2 class="text-center display-7">Le espressioni</h2>
    <div class="container">
        <?php
        // assegnazione
        $risultato = 28 % 5; // modulo = restituisce il resto della divisione
        print "il resto di 28 / 5 è " . ($risultato) . "<br>";
        if (6 > 5) {
            print "l'espressione è maggiore";
        }
        print "<br>";
        $a = 0;
        $b = 5;
        // sommare b + a
        // modalità estesa
        // $a = $a + $b;
        // operatori combinati
        print "a ha valore $a";
        $a = $a += $b;
        print "<br>";
        // . = operatore di concatenazione stringhe
        print "primo" . "secondo" . $a . "<br>";
        ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>

<?php
function scriviUrlMenu($elemento) {
    $nome = $elemento['nome'];
    $url = $elemento['url'];
    print <<<EOD
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="$url">$nome</a>
        </li>
EOD;
}
?>