window.onload = function() {
    const editarBtn = document.getElementById('editarBtn');
    const guardarBtn = document.getElementById('guardarBtn');
    const cancelarBtn = document.getElementById('cancelarBtn');
    const editForm = document.getElementById('editForm');
    const modoVista = document.getElementById('modoVista');
    const modoEditor = document.getElementById('modoEditor');

    editarBtn.addEventListener('click', function() {
        mostrarModoEditor();
    });

    guardarBtn.addEventListener('click', function() {
        guardarCambios();
    });

    cancelarBtn.addEventListener('click', function() {
        mostrarModoVista();
    });

    function mostrarModoEditor() {
        // Obtener valores actuales
        const nombre = document.getElementById('nombre').textContent;
        const profesion = document.getElementById('profesion').textContent;
        const telefono = document.getElementById('telefono').textContent;
        const email = document.getElementById('email').textContent;
        const descripcion = document.getElementById('descripcion').textContent;

        // Rellenar el formulario de edición
        document.getElementById('editNombre').value = nombre;
        document.getElementById('editProfesion').value = profesion;
        document.getElementById('editTelefono').value = telefono;
        document.getElementById('editEmail').value = email;
        document.getElementById('editDescripcion').value = descripcion;

        // Ocultar modo vista y mostrar modo editor
        modoVista.classList.add('hidden');
        modoEditor.classList.remove('hidden');
    }

    function guardarCambios() {
        // Obtener valores del formulario
        const nombre = document.getElementById('editNombre').value;
        const profesion = document.getElementById('editProfesion').value;
        const telefono = document.getElementById('editTelefono').value;
        const email = document.getElementById('editEmail').value;
        const descripcion = document.getElementById('editDescripcion').value;

        // Actualizar valores en modo vista
        document.getElementById('nombre').textContent = `Nombre: ${nombre}`;
        document.getElementById('profesion').textContent = `Profesión: ${profesion}`;
        document.getElementById('telefono').textContent = `Teléfono: ${telefono}`;
        document.getElementById('email').textContent = `Correo electrónico: ${email}`;
        document.getElementById('descripcion').textContent = `Descripción: ${descripcion}`;

        // Ocultar modo editor y mostrar modo vista
        modoEditor.classList.add('hidden');
        modoVista.classList.remove('hidden');
    }

    function mostrarModoVista() {
        // Mostrar modo vista y ocultar modo editor
        modoVista.classList.remove('hidden');
        modoEditor.classList.add('hidden');
    }
};
