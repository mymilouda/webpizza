<?php
/**
 * Fichier qui gère la page d'accueil
 */

/**
 * Pizzas
 */
function products_pizzas() 
{
    // Intégration du model
    include_once "../private/src/models/products.php";
    
    $pageTitle = "Nos Pizzas";
    $products = getPizzas();

    // Intégration de la vue
    // include_once "../private/src/views/products/pizzas.php";
    include_once "../private/src/views/products/read.php";
}

/**
 * Salads
 */
function products_salads() 
{
    global $db;

    $pageTitle = "Nos Salades";

    // Récupération de la liste des produits de type "Salades"
    $query = $db['main']->query( "SELECT t1.id, t1.name, t1.price, t3.name FROM products AS t1 INNER JOIN product_ingredients AS t2 ON t2.id_product = t1.id INNER JOIN ingredients AS t3 ON t3.id = t2.id_ingredient WHERE t1.type='salads' ORDER BY t1.name ASC, t3.name ASC" );
    $products = $query->fetchAll();
    
    // Intégration de la vue
    // include_once "../private/src/views/products/salads.php";
    include_once "../private/src/views/products/read.php";
}

/**
 * Desserts
 */
function products_desserts() 
{
    // Code 
    // ...
    $pageTitle = "Nos Desserts";
    $products = getDesserts();
    
    // Intégration de la vue
    include_once "../private/src/views/products/read.php";
}

/**
 * Drinks
 */
function products_drinks() 
{
    // Code 
    // ...
    $pageTitle = "Nos Drinks";
    $products = getDrinks();
    
    
    // Intégration de la vue
    include_once "../private/src/views/products/read.php";
}

/**
 * Menus
 */
function products_menus() 
{
    // Code 
    // ...
    $pageTitle = "Nos Menus";
    $products = getMenus();
    
    
    // Intégration de la vue
    include_once "../private/src/views/products/read.php";
}


// PRODUCTS CRUD

/**
 * Création d'un produit
 */
function products_create() 
{
    global $db;

    // Données du fomulaire par défaut
    $name = null;
    $description = null;
    $illustration = null;
    $price = null;

    // Traitement du formulaire
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $isValid = true;

        // Recup des données du formulaire
        $name           = isset($_POST['name']) ? trim($_POST['name']) : null;
        $description    = isset($_POST['description']) ? trim($_POST['description']) : null;
        $illustration   = isset($_POST['illustration']) ? trim($_POST['illustration']) : null;
        $price          = isset($_POST['price']) ? trim($_POST['price']) : null;

        // Controle du form



        // print_r( $_POST );
    }

    // Affichage du Formulaire
    include_once "../private/src/views/products/crud/create.php";
}

/**
 * MAJ d'un produit
 */
function products_update() 
{
    echo "MAJ #".$_GET['id'];
}

/**
 * Suppression d'un produit
 */
function products_delete() 
{
    // 
}