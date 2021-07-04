$(document).ready(function () {  
    $('.education').hide();
 
   $('.edu_head').click(
     function () {
       $('.education').show(3000);
     }
     
   )

   $('.skill-card').mouseover(
     function () {
       $('.skill-card').css("background-color","black")
       $('.skill-card').css("color","white")
     }
   )

   $('.skill-card').mouseout(
    function () {
      $('.skill-card').css("background-color","white")
      $('.skill-card').css("color","black")
    }
  )

  $('.ide-card').mouseover(
    function () {
      $('.ide-card').css("background-color","black")
      $('.ide-card').css("color","white")
    }
  )

  $('.ide-card').mouseout(
   function () {
     $('.ide-card').css("background-color","white")
     $('.ide-card').css("color","black")
   }
 )

 $('.certificate-card').mouseover(
  function () {
    $('.certificate-card').css("background-color","black")
    $('.certificate-card').css("color","white")
  }
)

$('.certificate-card').mouseout(
 function () {
   $('.certificate-card').css("background-color","white")
   $('.certificate-card').css("color","black")
 }
)
 
   $()
    
 });