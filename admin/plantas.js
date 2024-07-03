document.addEventListener('DOMContentLoaded', async () => {
    const dispositivosContainer = document.getElementById('dispositivos');

    try {
        const responseDataFake = await fetch('http://localhost:3000/api/datafake');
        const sensorData = await responseDataFake.json();

        const responseDispositivos = await fetch(`http://localhost:3000/api/plantas/${id}`);
        const dispositivosData = await responseDispositivos.json();

        if (!dispositivosData.success) {
            throw new Error('Error al cargar dispositivos');
        }

        const responseTodasPlantas = await fetch('http://localhost:3000/api/nombreplantas');
        const todasPlantasData = await responseTodasPlantas.json();

        if (!todasPlantasData.success) {
            throw new Error('Error al cargar nombres de plantas');
        }

        if (!Array.isArray(dispositivosData.dispositivos)) {
            throw new Error('Los datos de los dispositivos no están en formato de array');
        }

        dispositivosData.dispositivos.forEach((dispositivo, index) => {
            const deviceCard = document.createElement('div');
            deviceCard.className = 'device-card';
            deviceCard.style = "background-color: rgba(0, 0, 0, 0.65); padding: 15px; border-radius: 10px; color: white;";
            
            let opcionesPlantas = todasPlantasData.plantas.map(planta => `<option value="${planta.nombre}">${planta.nombre}</option>`).join('');

            deviceCard.innerHTML = `
                <h3>${dispositivo.nombre}</h3>
                <p>ID Dispositivo: ${dispositivo.codigo_dispositivo}</p>
                <p>Temp Ideal: ${dispositivo.temperatura}°C</p>
                <p>Temp Sensada: ${sensorData.temperatura}°C</p>
                <p>Humedad Suelo Ideal: ${dispositivo.humedad_suelo}</p>
                <p>Humedad Suelo Sensada: ${sensorData.humedad_suelo}</p>
                <p>Humedad Aire Ideal: ${dispositivo.humedad_aire}%</p>
                <p>Humedad Aire Sensada: ${sensorData.humedad_aire}%</p>
                <form id="form-${dispositivo.codigo_dispositivo}">
                    <input type="text" placeholder="Ubicación" class="form-control mb-2" name="ubicacion" value="${dispositivo.ubicacion}">
                    <select class="form-select mb-2" name="nombrePlanta">
                        ${opcionesPlantas}
                    </select>
                    <button type="button" class="btn btn-primary" onclick="actualizarPlanta()">Actualizar</button>
                    <button type="button" class="btn btn-danger" onclick="desvincularDispositivo()">Desvincular</button>
                </form>
                <a href="detalles.php?codigo_disp=${dispositivo.codigo_dispositivo}">Detalles</a>
            `;

            dispositivosContainer.appendChild(deviceCard);
        });
    } catch (error) {
        console.error('Error:', error.message);
    }
});

function actualizarPlanta() {
    const form = document.querySelector('.device-card form');
    const formData = new FormData(form);
    const ubicacion = formData.get('ubicacion');
    const nombrePlanta = formData.get('nombrePlanta');
    const codigoDisp = form.id.split('-')[1];

    console.log('Actualizar planta con código dispositivo:', codigoDisp);
    console.log('Ubicación:', ubicacion);
    console.log('Nombre de la planta:', nombrePlanta);

    fetch('http://localhost:3000/api/actualizarplanta', {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            id: codigoDisp,
            nuevoNombre: nombrePlanta,
            ubicacion: ubicacion
        })
    })
    .then(response => response.json())
    .then(data => {
        console.log('Éxito', data);
        alert('Planta actualizada');
        window.location.reload();
    })
    .catch(error => {
        console.error('Error', error);
        alert('Error al actualizar');
    });
}
function desvincularDispositivo() {
    const form = document.querySelector('.device-card form');
    const codigo_disp = form.id.split('-')[1];
    if(confirm("¿Está seguro de querer desvincular este dispositivo?")) {
        fetch(`http://localhost:3000/api/desvincular/${codigo_disp}`, {
            method: 'DELETE' // 
        })
        .then(response => response.json())
        .then(data => {
            console.log('Desvinculado con éxito', data);
            alert('Dispositivo desvinculado exitosamente');
            window.location.reload();
        })
        .catch(error => {
            console.error('Error al desvincular dispositivo', error);
            alert('Error al desvincular el dispositivo');
        });
    }
}
