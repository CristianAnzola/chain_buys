$(document).ready(function() {

    $id = $("id");
    $empresa = $("empresa");
    $codigo = $("#codigo");
    $usuario = $("#usuario");
    $cliente = $("#cliente");
    $producto = $("#producto");
    $telefono = $("#telefono");
    $fecha = $("#fecha");
    $subtotal = $("#subtotal");
    $total = $("total");

    $ingresar.on("click", function(e) {
        e.preventDefault();

        $.ajax({
            url: "",
            method: "POST",
            dataType: "json",
            data: {
                'id': $id.val(),
                'empresa': $empresa.val(),
                'codigo': $codigo.val(),
                'usuario': $usuario.val(),
                'cliente': $cliente.val(),
                'producto': $producto.val(),
                'telefono': $telefono.val(),
                'fecha': $fecha.val(),
                'subtotal': $subtotal.val(),
                'total': $total.val(),
                method: "facturas"
            },
            error: function(error) {
                console.log(error);
            },
            success: function(response) {
                if (response == 200) {
                    alert("Los datos se guardaron correctamente");

                    $id.val("");
                    $empresa.val("");
                    $usuario.val("");
                    $cliente.val("");
                    $producto.val("");
                    $telefono.val("");
                    $fecha.val("");
                    $subtotal.val("");
                    $total.val("");

                } else {
                    alert("Los datos no se guardaron correctamente");
                }
            }
        });
    });





});