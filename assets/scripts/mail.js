 $(function () {
        $('#submit').click(function (event) {
          event.preventDefault();
            if( !$('#name').val() || !$('#email').val() || !$('#message').val()  )  {
       alert('All fileds must be completed!');
       return false;
      }
    
          $.ajax({
            type: 'POST',
            url: 'sendmail.php',
            data: $('#mail').serialize(),
            success: function () {
              alert('Your message has been sent!');
                $("#mail")[0].reset();
            }
          });
          return false;
         });
      });
     