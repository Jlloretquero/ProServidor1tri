<h2>Crear Noticia</h2>

<form action="<?php echo site_url('index.php/news/set_news')?>" method="post">
    Titulo :<input type="text" name="titulo" value="" /><br>
    Slug :<input type="text" name="slug" value="" /><br>
    Texto :<textarea name="texto" rows="4" cols="20">
    </textarea><br>
    <hr>
    <input type="submit" value="Crear Menu" name="submit"/>
</form>