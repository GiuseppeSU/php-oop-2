<?php
require_once __DIR__ . '/Model/prodotti.php';
require_once __DIR__ . '/Model/Animali.php';


$cibi = [
    new Cibo('Cane', 'https://www.modacani.it/prodotti/big/2592.jpg', 12.00, 'Croccantini per Cani', 'Croccantini', 2.00),
    new Cibo('Gatto', 'https://spesaonline.conad.it/assets/products/conad-croccantini-con-carni-pollo-coniglio-e-verdure-400-g--401323/Angolato-Parte-anteriore-superiore.jpeg/renditions/cq5dam.web.1280.1280.jpeg', 7.00, 'Croccantini per Gatti', 'Croccantini', 0.40)
];

$giochi = [
    new Gioco('Cane', 'https://www.tradeshopitalia.com/13575-large_default/giochi-masticabili-sonori-osso-per-animali-per-cani-morbida-gomma-resistente.jpg', 5.00, 'Gioco per Cani', 'Gioco', 1.00),
    new Gioco('Gatto', 'https://www.nunziatastore.it/ProductsResources/6020/91D85082099_0_ori.jpeg', 4.00, 'Gioco per Gatti', 'Gioco', 1.5)
];


$cucce = [
    new Gioco('Cane', 'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/jackson/0/400/icon_topseller_1_85__0.jpg', 50.00, 'Cuccia per Cani', 'Cuccia', 20.00),
    new Gioco('Gatto', 'https://www.caniegattipetshop.it/13536-large_default/cuccia-mod-gatto.jpg', 15.00, 'Cuccia per Gatti', 'Cuccia', 3.00)
];


$wheigth = new Animal();
$wheigth->setWeight(20 . 'Kg');
echo $wheigth->getWeight();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>E-Commerce Animali</title>
</head>

<body>
    <h1 class='text-center mt-4 mb-4'>E-commerce Animali</h1>
    <div class='container d-flex flex-wrap justify-content-center'>


        <?php
        foreach ($cibi as $cibo) {
            ?>
            <div class="card text-center m-2" style="width: 18rem;">
                <?php echo '<img src="' . $cibo->image . '" class="card-img-top" alt="...">'; ?>
                <div class="card-body">

                    <h5 class="card-title text-center">

                        <?php echo $cibo->descrizione ?>
                        <p>
                            <?php if ($cibo->categoria == 'Cane')
                                echo '<i class="fa-solid fa-dog"></i>';
                            else
                                echo '<i class="fa-solid fa-cat"></i>'; ?>
                        </p>
                    </h5>
                    <p class="card-text text-center">
                        <?php echo $cibo->prezzo . ' euro' ?>
                    </p>
                    <a href="#" class="btn btn-primary ">Go somewhere</a>
                </div>
            </div>
        <?php } ?>



        <?php
        foreach ($giochi as $gioco) {
            ?>
            <div class="card text-center m-2" style="width: 18rem;">
                <?php echo '<img src="' . $gioco->image . '" class="card-img-top" alt="...">'; ?>
                <div class="card-body">

                    <h5 class="card-title text-center">

                        <?php echo $gioco->descrizione ?>
                        <p>
                            <?php if ($gioco->categoria == 'Cane')
                                echo '<i class="fa-solid fa-dog"></i>';
                            else
                                echo '<i class="fa-solid fa-cat"></i>'; ?>
                        </p>
                    </h5>
                    <p class="card-text text-center">
                        <?php echo $gioco->prezzo . ' euro' ?>
                    </p>
                    <a href="#" class="btn btn-primary ">Go somewhere</a>
                </div>
            </div>
        <?php } ?>


        <?php
        foreach ($cucce as $cuccia) {
            ?>
            <div class="card text-center m-2" style="width: 18rem;">
                <?php echo '<img src="' . $cuccia->image . '" class="card-img-top" alt="...">'; ?>
                <div class="card-body">

                    <h5 class="card-title text-center">

                        <?php echo $cuccia->descrizione ?>
                        <p>
                            <?php if ($cuccia->categoria == 'Cane')
                                echo '<i class="fa-solid fa-dog"></i>';
                            else
                                echo '<i class="fa-solid fa-cat"></i>'; ?>
                        </p>
                    </h5>
                    <p class="card-text text-center">
                        <?php echo $cuccia->prezzo . ' euro' ?>
                    </p>
                    <a href="#" class="btn btn-primary ">Go somewhere</a>
                </div>
            </div>
        <?php } ?>


    </div>




</body>

</html>