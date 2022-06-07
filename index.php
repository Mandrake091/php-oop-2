<?php
require_once __DIR__ . '/Classes/Premium.php';
require_once __DIR__ . '/Classes/Products.php';

$user1 = new User('Paolo', 'Cannistraro', 'cannistraro@gmail.com');
$user2 = new User('Giulia', 'Fazzio', 'fazzio@gmail.com');
$user3 = new User('Aldo', 'Baglio', 'aldo@gmail.com');
$premiumUser1 = new Premium('Marco', 'Carta', 'cartam@gmail.com');
$premiumUser2 = new Premium('Giacomo', 'Poretti', 'porettini@gmail.com');


$product1 = new Product('Purina', 'Ciotola', 'Gatto', 15, 'https://www.prodottibergamaschi.it/wp-content/uploads/2021/06/set-ciotole-legno-1.jpg');

$product2 = new Product('Royal Canin', 'Cibo secco', 'Cane', 30, 'http://luxurypetshop.it/img/cms/Cibo_secco_cani.jpg');

$product3 = new Product('Bridle', 'Collare', 'Cane', 80, 'https://cdn.shopify.com/s/files/1/0552/6323/2053/products/FMPET0001L0002_960_FLS_10_800x.jpg?v=1644320897');

$product4 = new Product('Friskies', 'Gioco', 'Canarino', 12, 'https://cdn.shopify.com/s/files/1/0552/6323/2053/products/FMPET0001L0002_960_FLS_10_800x.jpg?v=1644320897');

$product4 = new Product('Devert', 'Farmaco', 'Criceto', 34, 'https://cdn.shopify.com/s/files/1/0552/6323/2053/products/FMPET0001L0002_960_FLS_10_800x.jpg?v=1644320897');

$premiumUser1->setProdottiScontati($product1);
$premiumUser1->setProdottiScontati($product2);

$premiumUser2->setProdottiScontati($product2);
$premiumUser2->setProdottiScontati($product4);




$card1 = new Credit_Card('5234', 'Paolo', 'Cannistraro', 4,2025);
$premiumUser1->setCreditCard($card1);
var_dump($premiumUser1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>
</head>

<body>
    <div>
        <h1><?php echo $user1->getNome() . ' ' . $user1->getCognome() ?></h1>
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
</body>

</html>