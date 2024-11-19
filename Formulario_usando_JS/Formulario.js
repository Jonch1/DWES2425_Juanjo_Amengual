class Persona {
    constructor(nombre, edad, dni) {
        this.nom = nombre;
        this.edat = edad;
        this.dni = dni;
    }
}
document.getElementById('personaForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const nombre = document.getElementById('nombre').value;
    const edad = document.getElementById('edad').value;
    const dni = document.getElementById('dni').value;

    const persona = new Persona(nombre, edad, dni);

    const url = new URL('Formulario.php', window.location.href);
    url.searchParams.append('nombre', persona.nom);
    url.searchParams.append('edad', persona.edat);
    url.searchParams.append('dni', persona.dni);

    window.location.href = url;

});