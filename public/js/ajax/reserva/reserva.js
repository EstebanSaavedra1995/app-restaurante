

/* document.getElementById('fecha').addEventListener('change',mostrar,true);
function mostrar(e) {
    let xhr = new XMLHttpRequest();
    xhr.addEventListener("readystatechange", estadoIdeal);

    xhr.open('GET', '/reserva/create/date', true);
    xhr.send();

    function estadoIdeal() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let contenedor = document.getElementById('contenedor');
            const respuesta = xhr.responseText;
            var rta = " ";

            respuesta.Map(x => {
                rta += '<option value="1">' + x.inicio +'</option>';
            });
            console.log(rta);
            contenedor.innerHTML = rta;
        
        }
    }
} */

/* document.getElementById('fecha').addEventListener('change', function (e) {
    e.preventDefault(); //para evitar que se recargue la pagina
    const datos = new FormData(document.getElementById('form'));
    fetch('/reserva/create/date', {
        method: 'POST', 
        body: datos,
    })
        .then(res => res.json())
        .then(data => {
            let contenedor = document.getElementById('contenedor');
            let combo = `<label for="hora" class="form-label">Seleccione la hora</label>`;
            combo += `<select class="form-control" id="hora">`;
            data.map(m => {
                combo += `<option value="${m.id}">${m.hora}</option>`
            })
            combo+=`</select>`
            contenedor.innerHTML = combo;
        })
}, true) */
