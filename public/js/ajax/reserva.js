document.getElementById('fecha').addEventListener('change',mostrar,true);


function mostrar(e) {
    let xhr = new XMLHttpRequest();
    xhr.addEventListener("readystatechange", estadoIdeal);

    xhr.open('GET', '/reserva/create/date', true);
    xhr.send();

    function estadoIdeal() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let contenedor = document.getElementById('contenedor');
            let respuesta = xhr.responseText;
            var rta = " ";
            for( let x of respuesta){
               rta += '<option value="1">' + x.inicio +'</option>'

            }
            console.log(rta);
            contenedor.innerHTML = rta;
        
        }
    }
}
