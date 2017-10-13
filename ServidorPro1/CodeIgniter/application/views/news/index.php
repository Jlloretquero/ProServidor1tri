<h2>HOLA ESTO ES LA SECCION DE NOTICIAS</h2>

<?php
//print_r($news);

foreach ($news as $new) {
    //print_r($new);
    echo "<h2>" . $new["title"] . "</h2>";
    ?>
    <div id="main">
        <?php echo $new["text"] ?>
    </div>
    <p><a href="news/<?php echo $new["slug"] ?>">Ver noticia</a></p>
    <?php
}


