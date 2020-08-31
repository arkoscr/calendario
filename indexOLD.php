<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/calendar.css">
    <title>Calendario</title>
</head>
<body>
    <div class="container">
        <div class="page-header">
        <div class="pull-right form-inline">
        <div class="btn-group">
        <button class="btn btn-primary" data-calendar-nav="prev"><< Anterior</button>
        <button class="btn btn-default" data-calendar-nav="today">Hoy</button>
        <button class="btn btn-primary" data-calendar-nav="next">Siguiente >></button>
        </div>
        <div class="btn-group">
        <button class="btn btn-warning" data-calendar-view="year">Año</button>
        <button class="btn btn-warning active" data-calendar-view="month">Mes</button>
        <button class="btn btn-warning" data-calendar-view="week">Semana</button>
        <button class="btn btn-warning" data-calendar-view="day">Día</button>
        </div>
        </div>
        <h3></h3>
        <small>To see example with events navigate to Februray 2018</small>
        </div>
        <div class="row">
        <div class="col-md-9">
        <div id="showEventCalendar"></div>
        </div>
        <div class="col-md-3">
        <h4>Todas las reservas</h4>
        <ul id="eventlist" class="nav nav-list"></ul>
        </div>
        </div>
        </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script type="text/javascript" src="js/calendar.js"></script>
    <script type="text/javascript" src="js/events.js"></script>
</body>
</html>