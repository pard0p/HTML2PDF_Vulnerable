<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['html_content'])) {
    $htmlContent = $_POST['html_content'];

    // Genera un nombre de archivo aleatorio
    $randomFileName = md5(uniqid(rand(), true));

    // Ruta donde se guardará el archivo (ajusta la ruta según tus necesidades)
    $filePath = 'PDF/' . $randomFileName;

    // Intenta abrir el archivo en modo escritura
    if ($file = fopen($filePath . '.html', 'w')) {
        // Escribe el texto en el archivo
        fwrite($file, $htmlContent);

        // Cierra el archivo
        fclose($file);
    }

    // Comando para convertir el HTML a PDF usando wkhtmltopdf
    $command = "wkhtmltopdf PDF/'$randomFileName'.html PDF/'$randomFileName'.pdf";
    // Ejecuta el comando
    shell_exec($command);

    // Establece las cabeceras para forzar la descarga del PDF
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . $randomFileName . '"');

    // Muestra el PDF generado
    readfile('PDF/' . $randomFileName . '.pdf');

    unlink("PDF/$randomFileName.html");
    unlink("PDF/$randomFileName.pdf");
    exit;
}
?>