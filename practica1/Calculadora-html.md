```html

<!DOCTYPE html>
<html lang="en">
    <style type="text/css">
    body.cuerpo {
		  background-color:rgb(172, 125, 182);
	 } 
    div.solid {
				background-color: #BBBBBB;
				padding:10px 10px;margin:50px 50px;
				border-style: solid;
				border-color: rgb(107, 62, 150);
				border-width: 5px 5px;
				width:600px; height: 300px;
    }
	h1.titulo {
            text-align:center;
    }
    form.opciones {
        text-align: center;
    }
    select.boton1 {
        background-color: #d5cddb;
        color: rgb(48, 15, 87);
        border-color: rgb(86, 26, 110);
    }
    select.boton2 {
        background-color: #84cec1;
    }
    h5.operaciones {
        padding-left: 186px;
        font-family: 'Lucida Sans Unicode';
    }
     
    </style>
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="cuerpo">
    <div class="solid" >
    <h1 class="titulo"> CALCULADORA: </h1>
    <br>
    <h5 class="operaciones"> Elegir operación: </h5>
    <form class="opciones" action="registro.php" method="POST">
		<input type="text" name="numero1">
		<select class="boton1" name="operacion">
			<option class="sumacentrar" value="suma">Sumar (+)
			</option>
			<option value="resta">Restar (-)
			</option>
			<option value="multiplicacion">Multiplicar (*)
			</option>
			<option value="division">Dividir (/)
			</option>
		</select>
		<input type="text" name="numero2">
		<input class="boton2" type="submit" value="Mostrar resultado">
	</form>
    </div>

</body>
</html>


```