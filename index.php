<?php

// Repertoires à ignorer dans les projets
$projectsListIgnore = array(
    '.',
    '..',
    '_h5ai',
);

// Liste des nom de variables pour les images ci-dessous
$images = array(
    'pngEmptyFolder',
);

// Images (encodée en base64)
$pngEmptyFolder = <<< EOFILE
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
EOFILE;


// Affichage des images (rendu en base64 des image encodées ci-dessus)
if(isset($_GET['img'])){
    if(in_array($_GET['img'], $images)){
        header("Content-type: image/" . ( substr($_GET['img'], 0, 3) == 'png' ? 'png' : 'x-icon' ));
        echo base64_decode(${$_GET['img']});
    }
    exit();
}
/*********************************************************************************************************************************************************************/

// Recuperation des projets
$handle = opendir(".");
$projectContents = '';
while ($file = readdir($handle)) {
    if (is_dir($file) && !in_array($file,$projectsListIgnore)) 
    {
        // Si c'est un projet Symfony2, on rajoute /web/ dans l'adresse
        $subdir = is_dir($file.'/web') ? '/web' : '';
        
        $url_img = (is_file($url_img)) ? $url_img : 'index.php?img=pngEmptyFolder';
        $projectContents .= '
            <div class="file-group flex">
                <img src="'.$url_img.'" alt="file">
                <a href="'.$file.'">'.$file.'</a>
            </div>
        ';
    }
}
closedir($handle);
if (!isset($projectContents)) $projectContents = 'Aucun projet.<br /> Pour en ajouter un nouveau, créez simplement un répertoire dans \'dev\'.';


// Tout le CSS
$css = "
    :root {
        --gray-800: #343a40: --gray-900: #212529;
    }

    *,
    *:after,
    *:before {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #e9ecef;
        color: var(--gray-900);

        font-family: 'Poppins', sans-serif;
        font-size: 1em;
        font-weight: 400;
    }

    .page {
        display: flex;
        align-items: center;
        min-height: 100vh;
        width: 100%;
    }

    .card {
        margin-left: auto;
        margin-right: auto;
        padding: 40px;
        width: 1028px;
        max-width: calc(100% - 20px);
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        margin-bottom: 30px;
        padding-bottom: 8px;
        color: var(--gray-900);
        border-bottom: 2px solid #d7dbdf;
        font-size: 24px;
        font-weight: 700;
    }

    .flex {
        display: flex;
    }

    .flex>*+* {
        margin-left: 8px;
    }

    .flex-end {
        justify-content: flex-end;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-column-gap: 30px;
        grid-row-gap: 30px;
        align-items: stretch;
    }

    @media only screen and (max-width: 600px) {
        .card {
            padding: 24px;
        }

        .grid {
            grid-template-columns: 1fr;
        }
    }

    .grid .full {
        grid-column: 1 / -1;
    }

    .full p {
        color: var(--gray-800);
        font-weight: 500;
    }

    .file-group {
        align-items: center;
        flex-direction: column;
        justify-content: center;
        padding: 1em 2em;
        background-color: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
        transition: color 0.3s, box-shadow 0.3s;
    }

    .file-group:hover {
        cursor: pointer;
        box-shadow: 0px 6px 6px rgba(0, 0, 0, 0.2);
        transition: color 0.3s, box-shadow 0.3s;
    }

    .file-group img {
        height: 70px;
        width: 70px;
        transition: transform 0.3s;
    }

    .file-group a {
        padding: 1em 2em;
        margin-top: 8px;
        background-color: #e9ecef;
        color: #3d5a80;
        text-decoration: none;
        border-radius: 6px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s, color 0.3s, box-shadow 0.3s, transform 0.3s;
    }

    .file-group:hover a {
        background-color: #dee2e6;
        color: #293241;
        box-shadow: 0px 6px 6px rgba(0, 0, 0, 0.2);
        transform: rotate(3deg) scale(1.2, 1.2);
        transition: background-color 0.3s, color 0.3s, box-shadow 0.3s, transform 0.3s;
    }

    .file-group:hover img {
        transform: rotate(3deg) scale(1.2, 1.2) translate3d(5px, -5px, 0);
        transition: transform 0.3s;
    }
";

$pageContents = <<< EOPAGE
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker LAMP</title>
</head>
<style>
    ${css}
</style>
<body>
    <main class="page">
        <div class="card">
            <h1 class="card-title">Docker LAMP</h1>
            <div class="grid">
                ${projectContents}
                <div class="full flex flex-end">
                    <p>Apache 2.4</p>
                    <p>MariaDB</p>
                    <p>PHP-fpm 8.0</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
EOPAGE;

echo $pageContents;