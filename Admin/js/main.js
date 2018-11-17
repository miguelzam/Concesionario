// FUNCION PARA BUSCAR LOS MUNICIPIOS PERTENECIENTES A UN ESTADO
var $jQuery_1_12_2 = jQuery.noConflict();

$jQuery_1_12_2(document).ready(function() {
   $('#estado').change(function() {
      if ($(this).val() == 0) {
         $('#municipio').attr('disabled', true);
         $('#municipio').val('0');
      } else {
         $('#municipio').attr('disabled', false);
         var codestado = $(this).val();
         $.post('municipio.php', {codestado: codestado}).done(function(response) {
            $('#municipio').html(response);
            //alert(response);
         });
      };
   });
});
// FUNCION PARA BUSCAR LOS MUNICIPIOS PERTENECIENTES A UN ESTADO


// FUNCION PARA BUSCAR LAS PARROQUIAS PERTENECIENTES A UN MUNICIPIO
$jQuery_1_12_2(document).ready(function() {
   $('#municipio').change(function() {
      if ($(this).val() == 0) {
         $('#parroquia').attr('disabled', true);
         $('#parroquia').val('0');
      } else {
         $('#parroquia').attr('disabled', false);
         var codmunicipio = $(this).val();
         $.post('parroquia.php', {codmunicipio: codmunicipio}).done(function(response) {
            $('#parroquia').html(response);
            //alert(response);
         });
      };
   });
});
// FUNCION PARA BUSCAR LAS PARROQUIAS PERTENECIENTES A UN MUNICIPIO

 function swalAlert(title,text,type,time){
   swal({title:title, text:text,type:type,confirmButtonColor: "#3992e6",timer:time})
   }