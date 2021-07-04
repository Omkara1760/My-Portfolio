$(document).ready(function () {  
    $('.ques-1-p').hide();
    $('.ques-2-p').hide();
 
   $('.ques-1').click(
     function () {
       $('.ques-1-p').show(1000);
     } 
   )

   $('.ques-2').click(
     function () {
       $('.ques-2-p').show(1000);
     } 
   )

  
    });