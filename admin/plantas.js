document.addEventListener('DOMContentLoaded', function() {
    const url = `http://localhost:3000/api/plantas/${id}`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            const listadispositivos = document.getElementById('dispositivos');
            listadispositivos.innerHTML = '';

            if (data.success) {
                data.dispositivos.forEach(dispositivo => {
                    const listItem = document.createElement('li');
                    listItem.className = 'dispositivo-item';  // Clase para CSS

                    // Crear la lista desplegable de nombres
                    const selectNombres = document.createElement('select');
                    selectNombres.id = `nombre-${dispositivo.id}`;
                    selectNombres.className = 'select-nombre';  // Clase para CSS

                    // Obtener nombres de las plantas para llenar la lista desplegable
                    fetch('http://localhost:3000/api/nombreplantas')
                        .then(response => response.json())
                        .then(dataNombres => {
                            if (dataNombres.success) {
                                dataNombres.plantas.forEach(planta => {
                                    const option = document.createElement('option');
                                    option.value = planta.nombre;
                                    option.textContent = planta.nombre;
                                    selectNombres.appendChild(option);
                                });
                            }
                        });

                    // Botón para actualizar el nombre
                    const btnActualizar = document.createElement('button');
                    btnActualizar.textContent = 'Actualizar';
                    btnActualizar.className = 'btn btn-actualizar';  // Clase para CSS

                    // Añadiendo funcionalidad al botón
                    btnActualizar.onclick = function() {
                        const nuevoNombre = selectNombres.value;
                        fetch(`http://localhost:3000/api/actualizarplanta`, {
                            method: 'PUT',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({ id: dispositivo.id, nuevoNombre: nuevoNombre })
                        })
                        .then(response => response.json())
                        .then(dataUpdate => {
                            if (dataUpdate.success) {
                                console.log('Nombre actualizado correctamente');
                                alert('Nombre actualizado correctamente');
                            } else {
                                console.error('Error al actualizar el nombre');
                                alert('Error al actualizar el nombre');
                            }
                        })
                        .catch(error => {
                            console.error('Error en la solicitud:', error);
                            alert('Error en la solicitud');
                        });
                    };

                    // Botón de detalles
                    const btnDetalles = document.createElement('button');
                    btnDetalles.textContent = 'Detalles';
                    btnDetalles.className = 'btn btn-detalles';  // Clase para CSS

                    btnDetalles.onclick = function() {
                        alert('Mostrando detalles del dispositivo: ' + dispositivo.codigo_dispositivo);
                    };

                    listItem.appendChild(selectNombres);
                    listItem.appendChild(btnActualizar);
                    listItem.appendChild(btnDetalles);
                    listadispositivos.appendChild(listItem);
                });
            } else {
                listadispositivos.textContent = 'No se pudieron cargar los dispositivos.';
            }
        })
        .catch(error => console.error('Error al cargar los dispositivos:', error));
});
