<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valor = $_POST['valor'];

    $mensajes = [
        "esfuerzo" => [
            "mensaje" => "superar los limites, energia. ",
            "clase" => "alert-success"
        ],
        
            "inclusion" => [
                "mensaje" => "grupo, zoom, reunion, igualdad",
                "clase" => "alert-warning"
            ],
        
        
            "compañia" => [
                "mensaje" => "amistad, compasion, empatia entre compañeros ",
                "clase" => "alert-primary"
            ],
        
        
            "bienestar" => [
                "mensaje" => "feliz con uno mismo, autotisma, relacion, salud",
                "clase" => "alert-danger"
            ],

            "consentimiento" => [
                "mensaje" => "no hay lugar para el acoso, permiso, libertad de decision",
                "clase" => "alert-dark"
            ]
        
    ];

    if (array_key_exists($valor, $mensajes)) {
        $mensaje = $mensajes[$valor]["mensaje"];
        $clase = $mensajes[$valor]["clase"];
    } else {
        $mensaje = "por favor seleccione una palabra";
        $clase = "text-muted";
    }
}

?>

<?php require "partials/header.php"  ?>


<div class="container mt-5">
    <div class="col-5 mx-auto">
        <h1 class="mb-4 fs-3">mensaje de la palabra: <?= $valor ?></h1>
        <div class="alert alert <?= $clase ?>" role="alert">
            <?= $mensaje ?>
        </div>
        <a href="index.php" class="btn btn-<? $clase  ?>">Volver</a>

    </div>


</div>


<? require "partials/footer.php"  ?>