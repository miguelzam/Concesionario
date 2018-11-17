function myFunction() {

    var text;
    var horario = document.getElementById("servicio_afectado").value;

    switch(horario) {
        case "1":
            text = "VER HORARIO DE ATENCIÓN  AL PÚBLICO";
        break;

        case "Orange":
        text = "I am not a fan of orange.";
        break;

        case "Apple":
        text = "How you like them apples?";
        break;

        default:
        text = "Parece que este servicio no posee horario.";
    }

    document.getElementById("demo").innerHTML = text;
}