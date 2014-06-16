<h1>Informe de Ventas</h1>

<head>
	<meta charset="utf-8">
	<style>
	.primero,.segundo {
		display:none;
		padding:5px;
		border:1px solid #ccc;
		background-color:#f1f1f1;
		position:relative;
		width:200px;
	}
	#segundo {
		position:absolute;
		top:100px;
	}
	/* Al pasar el mouse por encima del div mostramos el div con la
		clase ".primero". Esta clase, tiene que estar dentro del id
		"primero" para que pueda funcionar
	 */
	#primero:hover .primero {
		display:block;
	}
	#segundo:hover .segundo {
		display:block;
	}
	</style>
	<br></br>
</head>
<br></br>
<body>
	<ul>
		<li id="primero">mostrar el primer div oculto
			<div class="primero">Contenido del primer div
				<label>Label name</label>
    			<input type="text" placeholder="Type something…">
			</div>
		</li>
		<li id="segundo">mostrar el segundo div oculto
			<div class="segundo">Contenido del segundo div
				<label>Label name</label>
    			<input type="text" placeholder="Type something…">
			</div>
		</li>
	</ul>
</body>

