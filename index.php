<?php
require_once __DIR__ . '/Classes/Premium.php';
require_once __DIR__ . '/Classes/Products.php';

$user1 = new User('Paolo', 'Cannistraro', 'cannistraro@gmail.com');
$user2 = new User('Giulia', 'Fazzio', 'fazzio@gmail.com');
$user3 = new User('Aldo', 'Baglio', 'aldo@gmail.com');
$premiumUser1 = new Premium('Marco', 'Carta', 'cartam@gmail.com');
$premiumUser2 = new Premium('Giacomo', 'Poretti', 'porettini@gmail.com');


$product1 = new Product('Purina', 'Ciotola', 'Gatto/Cane', 15, 'https://www.prodottibergamaschi.it/wp-content/uploads/2021/06/set-ciotole-legno-1.jpg');

$product2 = new Product('Royal Canin', 'Cibo secco', 'Cane', 30, 'http://luxurypetshop.it/img/cms/Cibo_secco_cani.jpg');

$product3 = new Product('Bridle', 'Collare', 'Cane', 80, 'https://cdn.shopify.com/s/files/1/0552/6323/2053/products/FMPET0001L0002_960_FLS_10_800x.jpg?v=1644320897');

$product4 = new Product('Friskies', 'Gioco', 'Canarino', 12, 'https://cdn.shopify.com/s/files/1/0552/6323/2053/products/FMPET0001L0002_960_FLS_10_800x.jpg?v=1644320897');

$product4 = new Product('Devert', 'Gioco', 'Cane', 34, 'https://m.media-amazon.com/images/I/71qPpaEidEL._AC_SY355_.jpg');

$premiumUser1->setProdottiScontati($product1);
$premiumUser1->setProdottiScontati($product2);

$premiumUser2->setProdottiScontati($product2);
$premiumUser2->setProdottiScontati($product4);

$card1 = new Credit_Card('5234', 'Paolo', 'Cannistraro', 4, 2025);
$premiumUser1->setCreditCard($card1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Animal Shop</title>
</head>

<body>

    <header>
        <nav>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Animal Shop</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <h1>Prodotti: </h1>

                <div class="col-5">
                    <img class="img-fluid" src="<?php echo $product1->getImage() ?>" alt="">
                    <h5><?php echo $product1->getName() ?></h5>
                    <ul>
                        <li>Per -> <?php echo $product1->getAnimal() ?></li>
                        <li>Brand: <strong><?php echo $product1->getBrand() ?></strong> </li>
                        <li>Prezzo: <s>15€</s> <?php echo $product1->getPrice() ?>€ (Solo per utenti registrati)</li>
                    </ul>
                </div>
                <div class="col-5">
                    <img class="img-fluid" src="<?php echo $product2->getImage() ?>" alt="">
                    <h5><?php echo $product2->getName() ?></h5>
                    <ul>
                        <li>Per -> <?php echo $product2->getAnimal() ?></li>
                        <li>Brand: <strong><?php echo $product2->getBrand() ?></strong> </li>
                        <li>Prezzo: <s>30€</s> <?php echo $product2->getPrice() ?>€ (Solo per utenti registrati)</li>
                    </ul>
                </div>
                <div class="col-5">
                    <img class="img-fluid" src="<?php echo $product3->getImage() ?>" alt="">
                    <h5><?php echo $product3->getName() ?></h5>
                    <ul>
                        <li>Per -> <?php echo $product3->getAnimal() ?></li>
                        <li>Brand: <strong><?php echo $product3->getBrand() ?></strong> </li>
                        <li>Prezzo: <s>15€</s> <?php echo $product3->getPrice() ?>€ (Solo per utenti registrati)</li>
                    </ul>
                </div>
                <div class="col-5">
                    <img class="img-fluid" src="<?php echo $product4->getImage() ?>" alt="">
                    <h5><?php echo $product4->getName() ?></h5>
                    <ul>
                        <li>Per -> <?php echo $product4->getAnimal() ?></li>
                        <li>Brand: <strong><?php echo $product4->getBrand() ?></strong> </li>
                        <li>Prezzo: <s>15€</s> <?php echo $product4->getPrice() ?>€ (Solo per utenti registrati)</li>
                    </ul>
                </div>

                <ul>
                    <p>Prodotti scontati utente 1</p>
                    <?php foreach ($premiumUser1->getProdottiScontati() as $product) { ?>
                    <li><?php echo $product->getName() . ' ' . $product->getPrice() ?></li>
                    <?php } ?>
                </ul>
                <ul>
                    <p>Prodotti scontati utente 2</p>
                    <?php foreach ($premiumUser2->getProdottiScontati() as $product) { ?>
                    <li><?php echo $product->getName() . ' ' . $product->getPrice() ?></li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </main>
</body>

</html>