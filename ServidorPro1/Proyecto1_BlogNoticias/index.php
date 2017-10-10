<html>
    <head>
        <title>title</title>
        <link rel="stylesheet" href="bootstrap.min.css">
        <style>
            
            header {
                text-align: center;
                background-color: #900C3F;
                padding: 10px;
                box-shadow: 0px 5px; 
               
            }
          
            footer{
                text-align: center;
                background-color: #900C3F;
                padding: 10px;
                box-shadow: 0px 5px; 
            }
            body{
                background-color: #DAC8B8;
                
                
            }
            .container{
                background-color: white;
                 
            }
            img{
                padding:4px;
                
            }
            
            a{
                color: black;
            }
            tr:nth-child(odd){
                background-color: #F0EBE7;
            }
            table{
                width: 100%;
            }
            
        </style>
    </head>
    <header><h1>BLOG DE NOTICIAS</h1></header>
    
    <hr/>
    <body>
        <div class="container">
            <hr/>
            <a href="BaseDatos_FormCrear.php"><img style="width:50px; height:50px" src="blog/crear.png"></a><b>  AÑADIR ENTRADA AL BLOG</b>
            <hr/>
            <?php
            include("BaseDatos.php");
            $db = new BDD();
            $query = "SELECT post_id, post_title, post_abstract, post_image FROM gnr_post";
            $result = $db->consultar($query);

            echo "<table  style='text-align:center'>";
            
            
            
            while ($fila = mysqli_fetch_array($result)) {
                $id = $fila["post_id"];
                echo "<tr>";
                
                echo "<td> <a href='BaseDatos_BlogDetalle.php?id=$id'>" . $fila["post_title"] . "</a></td>";
                echo "<th/>";
                echo "<td><img style='width:200px; height:100px' src='blog/" . $fila["post_image"] . "'></td>";
                echo "<th/>";
                echo "<td> <a href='BaseDatos_Editar.php?id=$id'><img style='width:50px; height:50px' src='blog/editar.png'></a></td>";
                echo "<th/>";
                echo "<td> <a href='BaseDatos_Borrar.php?id=$id'><img style='width:50px; height:50px' src='blog/borrar.png'></a></td> ";
                echo "<th/>";
                echo "</tr>";
            }
            echo "</table>";
            ?>
        </div>
        <hr/>
        <footer><h4>Activitat del alumne: Jesus Lloret Quero</h4></footer>
    </body>
    
</html>