<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Molisana @yield('title')</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="{{asset('css/layout-style.css')}}">
  @yield('mainStyle')
</head>
<body>
  <div class="wrapper">
    <header>
      <div class="logo">
        <a href="/">
          <img src="{{URL::asset('/img/marchio-sito-test.png')}}" alt="Molisana Logo">
        </a>
      </div>

      <nav>
        <ul>
          <li>
            Home
          </li>

          <li class="active">
            Prodotti
          </li>

          <li>
            News
          </li>
        </ul>
      </nav>

    </header>

    @yield('main')

    <footer>
      <div class="container">
        <div class="contacts">
          <div class="logo">
            <img src="{{URL::asset('/img/marchio-sito-test.png')}}" alt="Molisana Logo">
          </div>

          <ul>
            <li>
              RAGIONE SOCIALE: LA MOLISANA S.P.A.
            </li>

            <li>
              CONTRADA COLLE DELLE API, <br> 100/A - 86100 - CAMPOBASSO (CB)
            </li>

            <li>
              PEC: LAMOLISANA@PEC.IT
            </li>

            <li>
              TEL: +39 0874 4981
            </li>

            <li>
              FAX: +39 0874 629584
            </li>

            <li>
              INFO@LAMOLISANA.IT
            </li>

            <li>
              COMMERCIALE@LAMOLISANA.IT
            </li>

            <li>
              EXPORT@LAMOLISANA.IT
            </li>

            <li>
              DATI AZIENDALI: LEGGI DI PIÙ
            </li>

            <li>
              NUMERO VERDE 800818081
            </li>

            <li>
              TELEFONO 3801292455
            </li>
          </ul>
        </div>

        <nav>
          <div>
            <h3>PASTIFICIO</h3>

            <ul>
              <li>Il Pastificio</li>
              <li>Grano decorticato a pietra</li>
              <li>Il Molise c’è</li>
              <li>Filiera Integrata</li>
              <li>100 anni di pasta</li>
              <li>Sartoria della pasta</li>
              <li>Spaghetto Quadrato</li>
              <li>Le Persone</li>
            </ul>
          </div>

          <div>
            <h3>COLLEZIONE DA CHEF</h3>

            <ul>
              <li>Collezione da Chef</li>
              <li>Grandi Cucine</li>
              <li>Biologiche</li>
              <li>Quadrate</li>
            </ul>
          </div>

          <div>
            <h3>PRODOTTI</h3>

            <ul>
              <li>Le Classiche</li>
              <li>Le Integrali</li>
              <li>Le Speciali</li>
              <li>Le Biologiche</li>
              <li>Le Gluten-Free</li>
              <li>Le Semole</li>
              <li>Le Extra di Lusso</li>
            </ul>
          </div>
        </nav>
      </div>
    </footer>
  </div>
</body>
</html>
