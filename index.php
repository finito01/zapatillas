<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/arrow.css">
<link
	href="https://fonts.googleapis.com/css?family=Oswald|Quattrocento&display=swap"
	rel="stylesheet">
</head>

<body>
	<header>
		<h1>GALERIA DE PRODUCTOS</h1>
		<hr>
	</header>
	<section id="main">
		<ul class="galery">
       <?php
            include_once 'includes/db.php';
            $con=openCon('config/db_products.ini');
            $con->set_charset("utf8mb4");
            $sql="select s.modelo as model,s.precio as cass,s.imagen as imagen,s.observacion,c.descripcion as color,b.descripcion as brand,
            date_format(s.initial_date,'%d-%m-%Y') as time 
            from sneakers s inner join brands b on s.id_marca=b.id_marca inner join colors c on s.id_color=c.id_color 
            order by s.initial_date";     
            $result=$con->query($sql);    
            while($row=$result->fetch_assoc())
            {       
?>
<li><div class="box">
					<figure>
						<img src="<?php echo substr($row['imagen'],3)?>">
				<figcaption></figcaption>
				<h3><?php echo $row['brand'].' '.$row['model'].'<br>'.$row['color']?></h3>
				<p><?php echo '$'.' '.$row['cass']?></p>
				<time><?php echo $row['time']?></time>
					</figure>
				</div></li> 
				
				<?php 
            }
            ?>
				
		</ul>
		<!--  
        <ul class="galery">
            <li>
                <div class="box">
                    <figure>
                        <img src="images/Adidas_10K.jpg" alt="Adidas_10K">
                        <figcaption></figcaption>
                        <h3>Adidas 10K</h3>
                        <p>$4500-</p>
                        <time>16-7-2019</time>
                    </figure>
                </div>
            </li>
            <li>
                <div class="box">
                    <figure>
                        <img src="images/Converse_CTA_Street_High.jpg" alt="Converse_CTA_Street_High">
                        <figcaption></figcaption>
                        <h3>Converse CTA Street High</h3>
                        <p>$4000-</p>
                        <time>16-7-2019</time>
                    </figure>
                </div>
            </li>
            <li>
                <div class="box">
                    <figure>
                        <img src="images/Converse_Zakim.jpg" alt="Converse_Zakim">
                        <figcaption></figcaption>
                        <h3>Converse Zakim</h3>
                        <p>$3800-</p>
                        <time>16-7-2019</time>
                    </figure>
                </div>
            </li>
            <li>
                <div class="box">
                    <figure>
                        <img src="images/Fila_Revolution.jpg" alt="Fila_Revolution">
                        <figcaption></figcaption>
                        <h3>Fila Revolution</h3>
                        <p>$5300-</p>
                        <time>16-7-2019</time>
                    </figure>
                </div>
            </li>
            <li>
                <div class="box">
                    <figure>
                        <img src="images/Lacoste_Strideur_116.jpg" alt="Lacoste_Strideur_116">
                        <figcaption></figcaption>
                        <h3>Lacoste Strideur</h3>
                        <p>$5400-</p>
                        <time>16-7-2019</time>
                    </figure>
                </div>
            </li>
            <li>
                <div class="box">
                    <figure>
                        <img src="images/New_Balance_MS574CD.jpg" alt="New_Balance_MS574CD">
                        <figcaption></figcaption>
                        <h3>New Balance MS574CD</h3>
                        <p>$3800-</p>
                        <time>16-7-19</time>
                    </figure>
                </div>
            </li>
            <li>
                <div class="box">
                    <figure>
                        <img src="images/Nike_Air_Max_Advantage.jpg" alt="Nike_Air_Max_Advantage">
                        <figcaption></figcaption>
                        <h3>Nike Air Max Advantage</h3>
                        <p>$6300-</p>
                        <time>16-7-2019</time>
                    </figure>
                </div>
            </li>
            <li>
                <div class="box">
                    <figure>
                        <img src="images/Nike_Downshifter_7.jpg" alt="Nike_Downshifter_7">
                        <figcaption></figcaption>
                        <h3>Nike Downshifter</h3>
                        <p>$4300-</p>
                        <time>16-7-2019</time>
                    </figure>
                </div>
            </li>
            <li>
                <div class="box">
                    <figure>
                        <img src="images/Nike_Md_Runner_2.jpg" alt="Nike_Md_Runner">
                        <figcaption></figcaption>
                        <h3>Nike Md Runner</h3>
                        <p>$4800-</p>
                        <time>16-7-2019</time>
                    </figure>
                </div>
            </li>
        </ul>
        -->
	</section>
	<footer>
		<hr>
		<h3 id="footer-text">Copyrigth 2019</h3>
	</footer>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<div class="arrow">
		<a href="#" id="toTop"> <img src="images/backToTop.png" alt="flecha">
			<img class="top" src="images/backToTop.png" alt="flecha">
		</a>
	</div>
	<script src="js/main.js"></script>
</body>
</html>





