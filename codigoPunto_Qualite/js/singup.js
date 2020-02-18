$().ready(function () {


    $("#formregister").validate({
        rules: {
            email: {
                required: true,
                noSpace: true,
                email: true
            },
            password1: {
                required: true,
                minlength: 8
            },
            password2: {
                required: true,
                equalTo: "#password1"
            },
            nombre: {
                required: true
            },
            ciudad: {
                required: true
            },
            direccion: {
                required: true
            }

        },

        messages: {
            nombre: {
                required: "Introduzca un nombre completo"
            },
            email: {
                required: "Introduzca un mail",
                email: "Introduzca un mail valido"
            },
            password1: {
                required: "Introduzca una contraseña",
                minlength: "La clave debe contener mínimo 8 caracteres",
            },
            password2: {
                required: "Confirme la contraseña",
                equalTo: "Las contraseñas no coinciden"
            },
            ciudad: {
                required: "Elija una ciudad"
            },
            direccion: {
                required: "Ponga su direccion"
            }
        }
    })
});