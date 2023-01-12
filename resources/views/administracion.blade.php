@extends ('menu')
@section ('contenido')





<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<script src="{{ asset('dist/index.global.js') }}"></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      height: '90%',
      expandRows: true,
      slotMinTime: '08:00',
      slotMaxTime: '20:00',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      initialView: 'dayGridMonth',
      initialDate: '<?php echo $now; ?>',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      selectable: true,
      nowIndicator: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [
        <?php
            foreach($citas as $obj)
            {
                echo "{"."title: '".$obj->paciente->name."',
                start: '".$obj->Fecha."T".$obj->Hora."'},";
            }

        ?>
      ]
    });

    calendar.render();
  });

</script>
<style>

  html, body {
    overflow: hidden; /* don't do scrollbars */
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar-container {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }

  .fc-header-toolbar {
    /*
    the calendar will be butting up against the edges,
    but let's scoot in the header's buttons
    */
    padding-top: 1em;
    padding-left: 1em;
    padding-right: 1em;
  }
  .div_calendar{
    width: 80%;
    margin-right: 0;
    margin-left: 300px;
    margin-top: 100px;
  }

  .right_col{
    height: 1200px;
  }

</style>
</head>
<body>

 

  <div id='calendar-container' class="div_calendar">
    <div id='calendar'></div>
  </div>

</body>
</html>





@endsection