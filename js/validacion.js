function validar() {
    console.log("Entre a la funcion");
    var nombre, correo, contra, telefono;
    nombre = document.getElementById("nombre").value;
    correo = document.getElementById("correoReg").value;
    contra = document.getElementById("contraReg").value;
    telefono = document.getElementById("tel").value;
    console.log(nombre + correo + contra + telefono);
    var expresion = new RegExp('[A-Za-z0-9]+@+[A-Za-z0-9]+\.+[a-z]');
    var expresionContra = new RegExp('^[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\^&\*\?_~\/]{4,8}$');
    var expresionNumero = new RegExp('[0-9]{10}');
    if (nombre === "" || correo === "" || contra === "" || telefono === "") {
        alert("Todos los campos son obligatorios");
        return false;
    } else if (nombre.length > 120) {
        alert("El nombre es muy largo");
        return false;
    } else if (correo.length > 200) {
        alert("El correo es muy largo");
        return false;
    } else if (!expresion.test(correo)) {
        alert("El correo no es valido");
        return false;
    } else if (!expresionContra.test(contra)) {
        alert("La clave debe tener unicamente 8 caracteres");
        return false;
    } else if (!expresionNumero.test(telefono)) {
        alert("El telefono debe tener 10 numeros");
        return false;
    } else if (isNaN(telefono)) {
        alert("El telefono debe contener solamente numeros");
        return false;
    }
}