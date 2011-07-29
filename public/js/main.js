$(function() {
   $('#modal').css({ opacity: 0.5 });
   $('input[name$="class"]').each(function() {
       if($(this).is(':checked')) {
           switch_image($(this).attr('value'));
       }
   });
});

function switch_image(image) {
    $('#reg_image_holder').attr('src', '/images/classes/'+image+'.gif');
}

function registrationCheck() {
      var data = $(":input").serializeArray();
      $.get('/ajax/register', { data:data, action:"check" }, function(data) {
         if(data != "") {
             $('#modal_content').html('<ul>'+data+'</ul>');
             $('#modal').fadeIn("slow");
             $('#modal_container').fadeIn("slow");
         } else {
             var data = $(":input").serializeArray();
             var html = '<h1 style="margin-left:20px;">Registration completed successfully!</h1>\
                         <p style="width:500px; margin-left:20px;">When you are able to login we\
                         will send out an email notifying you that you may login with the details\
                         that you have provided.</p><p style="width:500px; margin-left:20px;">Thank\
                         you for choosing Classic Wars and we are happy to have you!</p>';
             $.get('/ajax/register', { data: data, action:"submit" }, function(data) {
                 $('#main_content').html(html);
                 alert(data);
             });
         }
      });
}

function open_chat(e) {
    var left = $('#chat').css('left');
    if(left != "0px") {
        $('#chat').animate({left:0});
        $('#chat_button').animate({left:500});
    } else {
        $('#chat').animate({left:-468});
        $('#chat_button').animate({left:0});
    }
}