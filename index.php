<?php
$entradas = [
    [
        'id' => 1,
        'titulo' => 'Título de la Entrada 1'
    ],
    [
        'id' => 2,
        'titulo' => 'Título de la Entrada 2'
    ],
    [
        'id' => 3,
        'titulo' => 'Título de la Entrada 3'
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mi Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Mi Blog</h1>
        </div>
    </section>
    
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-three-quarters">
                    <?php foreach ($entradas as $entrada) { ?>
                      <div class="card">
                          <div class="card-content">
                            <p class="title">
                                <a href="entry.php?id=<?php echo $entrada['id']; ?>">
                                  <?php echo $entrada['titulo']; ?>
                                </a>
                            </p>
                            <p class="subtitle">Fecha: 12 de octubre de 2023</p>
                            <p><?php echo $entrada['contenido']; ?></p>
                          </div>
                      </div>
                    <?php } ?>
                </div>
                <div class="column">
                    <!-- Barra lateral -->
                    <div class="box">
                        <h2 class="subtitle">Categorías</h2>
                        <ul>
                            <li><a href="#">Categoría 1</a></li>
                            <li><a href="#">Categoría 2</a></li>
                            <li><a href="#">Categoría 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
