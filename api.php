<?php
require_once './_includes/functions.php';
require_once './_includes/url.php';
require_once './_includes/_dbCo.php';

// checkCSRF('/index.php');



header('content-type:application/json');



    $query = $dbCo->prepare("SELECT id_product as id, name_product as name, description_product as composition, img FROM product");
    $isQueryOk = $query->execute();
    $products = $query->fetchAll();

    $query = $dbCo->prepare("SELECT id_product as id, size_product as size, price_product as price FROM have JOIN size USING (id_size)");
    $isQueryOk = $query->execute();
    $options = $query->fetchAll();

    $query = $dbCo->prepare("SELECT class_product as className, id_class as id FROM class ORDER BY priority");
    $isQueryOk = $query->execute();
    $class = $query->fetchAll();

    $query = $dbCo->prepare("SELECT id_class as idClass, id_product as idProduct FROM class  JOIN possess USING (id_class);");
    $isQueryOk = $query->execute();
    $possess = $query->fetchAll();


    if($isQueryOk) {
    echo json_encode(['products' => $products,
                      'options' => $options,
                      'class' => $class,
                      'possess' => $possess
                    ]);
    }
    ?>










