$(document).ready(function(){
   $("#cargar_datos").click(function () {

      let name_h = $("#fname").val();
      let lastname_h = $("#lname").val();

      if(name_h.toString() == "" || lastname_h.toString() == ""){
         $.get('/gdatos', function (data) {
            if($('p').length == 0){
               data.forEach(task => {
                  let content = "<p> Nombre: "+ task.name + " - Apellido: " + task.lastname +"</p>";
                  $("#result").append(content);
               });
            }else{
               $('p').remove();
            }

         });
      }else{
         $.ajax({
            url: '/cdatos',
            data: {
               name:name_h,
               lastname:lastname_h
            },
            type: 'POST',
            beforeSend: function (){
               $("#charge").text('En proceso');
            },

            success: function (data){
               $("#fname").val("");
               $("#lname").val("");
               $("#charge").text(data);
            }
         });
      }
   });
});