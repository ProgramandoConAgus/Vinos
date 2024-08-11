<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Fruitables - Vegetable Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

<?php
include ('./vendor/autoload.php');

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

$client = new Client();

if (isset($_POST['busqueda'])) {
    $busqueda = $_POST['busqueda'];
    // ID de la categoría "Alimentos y Bebidas"
    $categoria_id_alimentosybebidas = 'MLA1403';
    // ID de la categoría "Bebidas"
    $categoria_id_bebidas = 'MLA178700';
    // ID de la categoría "Vinos y espumantes"
    $categoria_id_vinosyespumantes = 'MLA194523';
    // ID de la categoría "Vinos"
    $categoria_id_vinos = 'MLA1404';
    $elementos=0;
    try {
        // Usar comillas dobles para permitir la interpolación de variables
        $response = $client->get("https://api.mercadolibre.com/sites/MLA/search?q=$busqueda&category=$categoria_id_vinos");
        $data = json_decode($response->getBody(), true);
        
        // Verificar que 'results' está definido y es un array
        if (isset($data['results']) && is_array($data['results'])) {
            if( $data['results']!=""||$data['results']!=null){
                
                foreach ($data['results'] as $product) {
                    // Usar 'title' en lugar de 'name' para obtener el nombre del producto
                    
                    if (isset($product['title'])) {
                        $title=$product['title'];
                        $image_url="";
                        if (isset($product['thumbnail'])) {
                            $image_url = $product['thumbnail'];
                            
                        } else {    
                        }
                        if($elementos%4==0){
                            ?>
                            <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                
                        <?php
                        }
                        ?>
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">     
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="<?=$image_url?>"class="img-fluid w-100 rounded-top" alt="<?=$title?>">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Wines</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4><?$title?></h4>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$<?=$product['price']?></p>
                                            <a href="<?=$image_url?>" class="btn border border-secondary rounded-pill px-3 text-primary"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
                        <?php
                        if($elementos%4==0){
                        ?>
             </div>
        </div>
    </div>
</div>
                    <?php
                    }
                    } else {
                        echo "Nombre no disponible<br>";
                    }
                    $elementos++;

                }
            }
            else{
                echo "No se encontraron resultados.";
            }
        } else {
            echo "No se encontraron resultados.";
        }
    } catch (RequestException $e) {
        echo "Error: " . $e->getMessage();
    }
}
else{
    echo "Pero busca algo, salame";
}
?>

                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                
                                        