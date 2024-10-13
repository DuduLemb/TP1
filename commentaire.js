$(document).ready(function(){
   $("#valider").click(function(){
      var nom=$("#nom").val();
      var message=$("#message").val();
      $.ajax({
         type: "GET",
         url: "commentaire.php",
         data: {
            nom:a,
            message:b,
         },
         dataType: "json",
         success: function (response){
               alert(data);
         }
      })
   })
})