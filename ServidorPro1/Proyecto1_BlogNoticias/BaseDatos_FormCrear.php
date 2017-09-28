<html>
    <head>
        <title>title</title>
        <link rel="stylesheet" href="bootstrap.min.css">

    </head>
    <header><h1 style="text-align:center" >CREAR NOTICIA</h1></header>
    <body>
        <div class="container">
            <form name="FormNoticia" action="BaseDatos_DocCrear.php" method="post" enctype="multipart/form-data">
                
               <div class="form-group">
                    <label for="titol">Titol Noticia</label>
                    <input type="text" class="form-control" id="titol" rows="3" name="titol">
                </div>
                
                <div class="form-group">
                    <label for="text">Text de la noticia</label>
                    <textarea class="form-control" id="text" rows="3" name="text"></textarea>
                </div>
                <div class="form-group">
                    <label for="imagen">Selecciona una imatge</label>
                    <input type="file" class="imagen" id="imagen" aria-describedby="fileHelp" name="imagen">
                    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                </div>
              
                <button type="submit" class="btn btn-primary">Crear</button>
                <button type="reset" class="btn btn-primary">Borrar</button>
            </form>
        </div>
        <footer></footer>
    </body>

</html>