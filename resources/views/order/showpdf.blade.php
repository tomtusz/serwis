<!DOCTYPE html>
<html>
  <head>
    <title>Zgłoszenie serwisowe Nr: {{$order->uniqid}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
      body{
        font-family: firefly, DejaVu Sans, sans-serif;
      }
      p{
        border: 2px solid black;
        border-radius: 16px;
        padding-top: 0.01em;
        padding-right: 16px;
        padding-bottom: 0.01em;
        padding-left: 16px;
      }
    </style>
  </head>
  <body>
    <div style="text-align:center;display:block;">
      <span >
        <img src="img/logo-500px.jpg" alt="logo" ><br>
      </span>
      <span>
        <b>T&T KOMPUTERY Tomasz Roszko</b> ul. Św. Kazimierza 1; 15 - 817 Białystok
      </span>
      <span>
        Telefon kontaktowy/Fax: 85 654 06 66, Adres e-mail: biuro@ttkomputery.pl
      </span>
    </div>
    <div>
      <h3 style="background-color:{{$order->status->color}}">
        Zgłoszenie serwisowe Nr: {{$order->uniqid}} z dnia {{$order->added_at->format('d-m-Y')}}
      </h3>
      {!! DNS1D::getBarcodeHTML("$order->uniqid", "C128")!!}
    </div>
    <p>
            <i>Rodzaj sprzętu:</i>
            {{$order->type->name}}<br>
            <i>Producent:</i>
            {{$order->brand->name}}<br>
            <i>Model:</i><br>
            @if ($order->model)
                {{$order->model}}

              @else
                --------

            @endif
            <br>
            <i>Nr seryjny:</i>
            @if ($order->sn)
                {{$order->sn}}

              @else
                --------

            @endif
          <br>
            <i>Planowany czas naprawy:</i>
            {{$order->readyOn->format('d-m-Y')}}
      </p>
        <div class="col-md-8">
          <p>
            <i>Opis usterki</i><br>
            {{$order->description}}
          </p>
          <p>
            <i>Uwagi</i><br>
            @if ($order->comment)
                {{$order->comment}}

              @else
                Brak uwag.

            @endif
          </p>
        </div>
  </body>
</html>
