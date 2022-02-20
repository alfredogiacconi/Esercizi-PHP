<?php
//esercizio 2
//valorizzare un array nominato $servizi con 3 elementi ciascuno formato da un array
//ogni elemento avrà gli indici:nome, icona (font awesome), descrizione
//visualizzare i servizi 3 colonne su desktop / 1 colonna su mobile
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Esercizio 2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <h1 class="text-center display-4">Servizi</h1>
    <div class="container">
        <div class="row">
            <?php
            $servizi = [
                ['nome' => 'Website',
                 'icona' => 'fa-brands fa-chrome', 'descrizione' => "Some quick example text to build on the card title and make up the bulk of the card's content."],
                ['nome' => 'Web App', 'icona' => 'fa-brands fa-figma', 'descrizione' => "Some quick example text to build on the card title and make up the bulk of the card's content."],
                ['nome' => 'Software', 'icona' => 'fa-brands fa-uncharted', 'descrizione' => "Some quick example text to build on the card title and make up the bulk of the card's content."]
            ];
            print creaCard($servizi[0]);
            print creaCard($servizi[1]);
            print creaCard($servizi[2]);
            ?>
        </div>
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
function creaCard($servizio) {
    return <<<EOD
        <div class="col-min-12 col-lg-4">
            <div class="card d-flex align-items-center">
                <i class="{$servizio['icona']} fa-4x"></i>
                <div class="card-body">
                    <h5 class="card-title">{$servizio['nome']}</h5>
                    <p class="card-text">{$servizio['descrizione']}</p>
                </div>
            </div>
        </div>
EOD;
}
?>