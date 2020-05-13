$(function() {
  load(1);
});
function load(page){
  var query=$("#q").val();
  var per_page=10;
  var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
  $("#loader").fadeIn('slow');
  $.ajax({
    url:'listar.php',
    data: parametros,
     beforeSend: function(objeto){
    $("#loader").html("Cargando...");
    },
    success:function(data){
      $(".outer_div").html(data).fadeIn('slow');
      $("#loader").html("");
    }
  })
}
$('#editModal').on('show.bs.modal', function (event) {

		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var code = button.data('id')
		  $('#id').val(code)
      $('#edit_id').val(code)
		  var name = button.data('name')
		  $('#nombre').val(name)
		  var category = button.data('apellido')
		  $('#apellidos').val(category)
		  var sueldo = button.data('sueldo')
		  $('#sueldoEdit').val(sueldo)
		  var price = button.data('puesto')
		  $('#puesto').val(price)


		})


$('#deleteModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id')
  $('#delete_id').val(id)

})


$( "#edit_empleado" ).submit(function( event ) {
  var parametros = $(this).serialize();
  $.ajax({
      type: "POST",
      url: "editar.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#resultados").html("Enviando...");
        },
      success: function(datos){
      $("#resultados").html(datos);
      load(1);
      $('#editModal').modal('hide');
      }
  });
  event.preventDefault();
});


$( "#add_empleado" ).submit(function( event ) {
  var parametros = $(this).serialize();
  $.ajax({
      type: "POST",
      url: "agregar.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#resultados").html("Enviando...");
        },
      success: function(datos){
      $("#resultados").html(datos);
      load(1);
      $('#addModal').modal('hide');
      }
  });
  event.preventDefault();
});

$( "#delete_empleado" ).submit(function( event ) {
  var parametros = $(this).serialize();
  $.ajax({
      type: "POST",
      url: "eliminar.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#resultados").html("Enviando...");
        },
      success: function(datos){
      $("#resultados").html(datos);
      load(1);
      $('#deleteModal').modal('hide');
      }
  });
  event.preventDefault();
});
