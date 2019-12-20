
<?php
//index.php




?>
<!DOCTYPE html>
<html>
 <head>
  <title>Agenda Temanggung</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

  <script>
    $(document).ready(function(){
      var calendar = $('#calendar').fullCalendar({
        editable:true,
        header:{
          left:'prev,next today',
          center:'title',
          right:'month,agendaWeek,agendaDay'
        },
        events:'{{ route("event.fetch") }}',
        selectable:true,
        selectHelper:true,
        eventClick: function(event){
          //  alert(event._id);
          Swal.fire({
                title: 'Agenda Temanggung',
                html: '<span style="font-size:17px">'+event.description+'</span>'+'<p> <a href="https://maps.google.com/?q=@'+ event.lat +','+ event.lng +'" target="_blank" >Klik Untuk Buka Maps</a> </p>',
                imageUrl: 'http://temanggung.mcity.id//files/content/'+event.images,
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
                width: '1000px',
                        customClass: {
                            html: 'swal-text',
                        }
            })
        },
        // select: function()
        // {
        //   $('#calendar').fullCalendar('clientEvents', function(ev) {
        //       console.log(ev);
        //   });

        // }

      });
    });
  </script>
 </head>
 <body>
  <br />
  <h2 align="center"><a href="#">Agenda Temanggung</a></h2>
  <br />
  <div class="container">
   <div id="calendar"></div>
  </div>
 </body>
</html>