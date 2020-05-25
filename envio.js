$(document).ready(function(){
    $('#enviar-form').click(function(e){
        e.preventDefault();

        var dataForm = $( "#formulario" ).serialize();
        console.log(dataForm);
        
        $.ajax({
            url: 'mail.php',
            type: 'POST',
            data: dataForm,
          }).done(function(data) {
            console.log(data);
            alert("datos enviados correctamente");
          }).fail(function() {
            alert("Algo salio mal");
          });
    });
});    


