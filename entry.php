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

$contenido = "

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam est ex, ultricies sit amet erat sit amet, convallis consequat nisl. Nunc faucibus ultricies euismod. Nullam varius tristique vehicula. Duis fringilla, est et condimentum molestie, nisi arcu congue urna, nec pretium odio elit non enim. Vestibulum hendrerit mauris non mollis tristique. Duis molestie, arcu ut tincidunt pharetra, enim purus bibendum libero, a lobortis risus libero vitae nunc. Proin ornare turpis vitae ornare tristique. Donec sit amet suscipit diam. Nulla maximus eros sed magna convallis, ut dapibus ante consequat.

Nunc pulvinar diam risus, vitae venenatis justo ultrices et. Quisque et nisl scelerisque nibh vestibulum mollis. Duis non venenatis enim. Aliquam euismod rutrum sapien a eleifend. Fusce vel maximus nulla. Integer egestas ultricies ante at scelerisque. Curabitur consequat a odio vitae malesuada. Integer enim quam, tempus in lacus eu, cursus mattis ante.

In ligula odio, pharetra quis lacus nec, rutrum vulputate orci. Maecenas quis lacus eget purus laoreet pulvinar eget sed dui. Aliquam eu pharetra nisl, vitae pulvinar tortor. Morbi eget tortor sit amet ligula facilisis dignissim eget dictum mauris. Nullam et libero dolor. Vestibulum ut euismod nunc. Quisque auctor eleifend lacus, nec blandit odio dapibus quis. Fusce tempus, nisi eget consequat pulvinar, diam diam consectetur nunc, quis porttitor augue tortor quis ex. Donec lacinia imperdiet scelerisque. Nullam dignissim orci nec bibendum tincidunt.

Nulla malesuada turpis sed fringilla tincidunt. Praesent auctor ac risus id finibus. Praesent arcu metus, accumsan sed magna vel, vestibulum lacinia libero. Nam nec tellus porttitor leo laoreet sollicitudin at sed nunc. Cras pretium vehicula purus, non tempor libero malesuada ac. Sed pretium mattis eros non auctor. Praesent sollicitudin nisi non lacinia cursus.

Aliquam mattis id metus vel ornare. Donec semper finibus eros, eu condimentum augue sollicitudin in. Nulla facilisi. Nullam accumsan tellus erat, non faucibus enim malesuada ut. Nullam vestibulum velit lacus, quis ultricies nisl dapibus at. Integer hendrerit, metus quis volutpat consequat, turpis ex tincidunt mi, eget luctus enim sem nec nisl. Morbi id vehicula turpis, ut lobortis urna. Ut varius porttitor ante, nec volutpat nunc tempor sit amet. Ut egestas tempus mi, vel luctus libero venenatis ac. Curabitur iaculis libero eget interdum viverra. Sed ligula arcu, pellentesque sed massa eu, mollis suscipit est. Sed volutpat aliquam neque vitae feugiat. Vivamus vestibulum felis non velit aliquet aliquet. Curabitur imperdiet congue maximus. Suspendisse eleifend magna sit amet nibh dictum, non dapibus diam lacinia. Phasellus et molestie elit, a mattis eros.";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $entrada = null;
    foreach ($entradas as $e) {
        if ($e['id'] == $id) {
            $entrada = $e;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mi Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <script>
        function init_form() {
            document.getElementById("pdf_form_input").value = document.documentElement.outerHTML;
        }
    </script>
</head>
<body onload="init_form()">
    <section class="section">
        <div class="container">
            <h1 class="title">Mi Blog</h1>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-three-quarters">
                    <div class="card">
                        <div class="card-content">
                            <div class="columns">
                                <div class="column is-four-fifths">
                                    <p class="title">
                                        <?php echo $entrada['titulo'];?>
                                    </p>
                                </div>
                                <div class="column">
                                    <form action="/html2pdf.php" method="POST">
                                        <input name="html_content" id="pdf_form_input" hidden></input>
                                        <button class="button is-primary">Generar PDF</button>
                                    </form>
                                </div>
                            </div>
                        <p class="subtitle">Fecha: 12 de octubre de 2023</p>
                        <p><?php echo $contenido; ?></p>
                        </div>
                    </div>
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