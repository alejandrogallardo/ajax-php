
let btn = document.getElementById('btn_cargar_usuarios');

let loader = document.getElementById('loader');

btn.addEventListener('click', function(){
	let peticion = new XMLHttpRequest();
	// peticion.open('GET', 'http://www.json-generator.com/api/json/get/cgdIxIxAGG?indent=2');
	peticion.open('GET', 'php/usuarios.php');

	loader.classList.add('active');

	// Permite ejecutar una funion cuando la peticion ya cargo
	peticion.onload = function(){
		// console.log(JSON.parse(peticion.responseText)[0].nombre);
		let datos = JSON.parse(peticion.responseText);


		for (let i = 0; i < 5; i++) {
			let elemento = document.createElement('tr');
			elemento.innerHTML += ("<td>" + datos[i].id_usuario + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].nombre + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].edad + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].pais + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].correo + "</td>");
			document.getElementById('tabla').appendChild(elemento);
		}


		// datos.forEach( persona => {
			// let elemento = document.createElement('tr');
			// elemento.innerHTML += ("<td>" + persona.id + "</td>");
			// elemento.innerHTML += ("<td>" + persona.nombre + "</td>");
			// elemento.innerHTML += ("<td>" + persona.edad + "</td>");
			// elemento.innerHTML += ("<td>" + persona.pais + "</td>");
			// elemento.innerHTML += ("<td>" + persona.correo + "</td>");
			// document.getElementById('tabla').appendChild(elemento);
		// })

	}

	peticion.onreadystatechange = function(){
		if(peticion.readyState == 4 && peticion.status == 200){
			loader.classList.remove('active');
		}
	}
	peticion.send();
}) 