<?php
	include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/estilo.css">
    <link href="src/bootstrap.css" rel="stylesheet">		
    <link href="src/personalizado.css" rel="stylesheet">
    <link rel="shortcut icon" href="src/logo.jpg" type="image/jpg">
    <title>PÁGINA INICIAL</title>
</head>
<br> 
<body>
		<!-- Inicio Menu -->
        <nav class="navbar navbar-inverse navbar-fixed-top header-menu">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="imagens/logo-site.png" width="160"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
						<li><a href="src/login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Fim Menu -->
		
		
		<div class="espaco-topo">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
				<ol class="carousel-indicators">
					<?php
						$controle_ativo = 2;		
						$controle_num_slide = 1;
						$result_carousel = "SELECT * FROM carrouses ORDER BY id ASC";
						$resultado_carousel = mysqli_query($conn, $result_carousel);
						while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){ 
							if($controle_ativo == 2){ ?>
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li><?php
								$controle_ativo = 1;
							}else{ ?>
								<li data-target="#carousel-example-generic" data-slide-to="<?php echo $controle_num_slide; ?>"></li><?php
								$controle_num_slide++;
							}
						}
					?>						
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<?php
						$controle_ativo = 2;						
						$result_carousel = "SELECT * FROM carrouses ORDER BY id ASC";
						$resultado_carousel = mysqli_query($conn, $result_carousel);
						while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){ 
							if($controle_ativo == 2){ ?>
								<div class="item active">
									<img src="imagens/carousel/<?php echo $row_carousel['imagen_carousel']; ?>" alt="<?php echo $row_carousel['nome']; ?>">
								</div><?php
								$controle_ativo = 1;
							}else{ ?>
								<div class="item">
									<img src="imagens/carousel/<?php echo $row_carousel['imagen_carousel']; ?>" alt="<?php echo $row_carousel['nome']; ?>">
								</div> <?php
							}
						}
					?>					
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>        
    </body>

 

        <style>
.glow-on-hover {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #FF4500;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
    padding: 90px 0px 30px 20 ;
   

}
.glow-on-hover:before {
    content: '';
    background:  #000;
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;  
}

.glow-on-hover:hover:before {
    opacity: 1;
}
.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background:  #FF4500;;
    left: 0;
    top: 0;
    border-radius:10px;
    
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
    </style>
			<ul>
          
    </div>
</body>
   
    
   
</section>

    <br>
<h2 class="aluno"> Nossos Destaques disponíveis! </h2>
<br>
<br>

<div class="tabela-preco">

		
		<div class="card-preco">
			<h3 class="card-preco-header">A Cabana</h3>
            <div class="item"> <img src="src/cabana.jpg"> </div>
      

			
			
		</div>


		<div class="card-preco">
			<h3 class="card-preco-header">A Empregada</h3>
            <div class="item"> <img src="src/empregada.jpg"></div>
			

			
			
		</div>


		<div class="card-preco">
			<h3 class="card-preco-header">As Musas</h3>
			<div class="item"> <img src="src/musas.jpg"></div>
    

			
		</div>
		
	</div>




    
</div>
</body>
</html>



<!-----------FOOTERRR------------------>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Estilo para o rodapé */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        /* Estilo para a logo à esquerda */
        .logo {
            margin-right: 2000px;
            position: relative;
            top: 7px;
            
        }
        /* Estilo para os ícones de redes sociais */
        .social-icons {
            list-style: none;
            padding: 0;
        }

        .social-icons li {
            display: inline;
            margin-right: 10px;
        }

        /* Estilo para os ícones de redes sociais */
        .social-icons a {
            color: #fff;
            text-decoration: none;
            font-size: 20px;
        }
    </style>
<style>
h3{
    color:#808080;
    font-size:11px;
    position: relative;

}
.none{
    position: relative;
    left:-5px;
    top:28px;
    font-size:14px;
    
    
}

</style>
    <footer>
    <h3>@Nosso site surgiu para o acesso da nossa Biblioteca Virtual. Como forma de poder espalhar um pouco mais sobre o conhecimento dos livros!</h3>
    <div class="none"> 
    <p> Redes Sociais     </p>
</div>

<br>
        <ul class="social-icons">
        <li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a></li>
        </ul>
    </footer>
</body>
</html>

</body>
</html>
