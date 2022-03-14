<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  @livewireStyles
  <style>
    /*
  Common invoice styles. These styles will work in a browser or using the HTML
  to PDF anvil endpoint.
*/

    body {
      font-size: 16px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table tr td {
      padding: 0;
    }

    table tr td:last-child {
      text-align: right;
    }

    .bold {
      font-weight: bold;
    }

    .right {
      text-align: right;
    }

    .large {
      font-size: 1.75em;
    }

    .total {
      font-weight: bold;
      color: #fb7578;
    }

    .logo-container {
      margin: 20px 0 70px 0;
    }

    .invoice-info-container {
      font-size: 0.875em;
    }

    .invoice-info-container td {
      padding: 4px 0;
    }

    .client-name {
      font-size: 1.5em;
      vertical-align: top;
    }

    .line-items-container {
      margin: 70px 0;
      font-size: 0.875em;
    }

    .line-items-container th {
      text-align: left;
      color: #999;
      border-bottom: 2px solid #ddd;
      padding: 10px 0 15px 0;
      font-size: 0.75em;
      text-transform: uppercase;
    }

    .line-items-container th:last-child {
      text-align: right;
    }

    .line-items-container td {
      padding: 15px 0;
    }

    .line-items-container tbody tr:first-child td {
      padding-top: 25px;
    }

    .line-items-container.has-bottom-border tbody tr:last-child td {
      padding-bottom: 25px;
      border-bottom: 2px solid #ddd;
    }

    .line-items-container.has-bottom-border {
      margin-bottom: 0;
    }

    .line-items-container th.heading-quantity {
      width: 50px;
    }

    .line-items-container th.heading-price {
      text-align: right;
      width: 100px;
    }

    .line-items-container th.heading-subtotal {
      width: 100px;
    }

    .payment-info {
      width: 38%;
      font-size: 0.75em;
      line-height: 1.5;
    }

    .footer {
      margin-top: 100px;
    }

    .footer-thanks {
      font-size: 1.125em;
    }

    .footer-thanks img {
      display: inline-block;
      position: relative;
      top: 1px;
      width: 16px;
      margin-right: 4px;
    }

    .footer-info {
      float: right;
      margin-top: 5px;
      font-size: 0.75em;
      color: #ccc;
    }

    .footer-info span {
      padding: 0 5px;
      color: black;
    }

    .footer-info span:last-child {
      padding-right: 0;
    }

    .page-container {
      display: none;
    }
  </style>
</head>

<body class="font-sans antialiased">
  <table class="line-items-containe table-auto w-full border-collapse border border-gray-900 line-items-containe">
    <thead class="text-xs font-semibold uppercase text-gray-900 bg-rose-50">
      <tr>
        <th class="p-2 whitespace-nowrap border border-gray-900">
          <div class="text-gray-900 font-bold text-center content-center ">Tipo Malformación</div>
        </th>
        <th class="p-2 whitespace-nowrap border border-gray-900">
          <div class="text-gray-900 font-bold text-center content-center ">Cantidad Tipo Malformación</div>
        </th>
        <th class="p-2 whitespace-nowrap border border-gray-900">
          <div class="text-gray-900 font-bold text-center content-center  ">Nombre Enfermedad + Cantidad</div>
        </th>
      </tr>
    </thead>
    <tbody class="text-sm divide-y divide-gray-100 border border-gray-900">
      <tr>
        @if($enfermedades->isEmpty())

        <div class="border-gray-500 font-semibold text-center content-center ">Sin resultado</div>

        @else

        <td class="p-2 whitespace-nowrap border border-gray-700 text-center content-center">
          @foreach($enfermedades as $key => $dataaaw)
          <div class="flex items-center border border-gray-700 text-center content-center">
            <div class="border-gray-500 font-semibold  content-center items-center">{{$key}}</div>
          </div>
          @endforeach
        </td>
        <td class=" border border-gray-700">
          @foreach($enfermedades as $key => $dataaaw)
          <div class="border-solid border-2 border-gray-500 font-semibold text-justify  content-center  ">{{$dataaaw }}</div>
          @endforeach

        </td>
        <td class="p-2 whitespace-nowrap border border-gray-700">
          @foreach($malfomarcion as $key => $dataaaw)

          <div class="border-solid border-2 border-gray-500 text-center content-center ">{{$key}}: <b>{{$dataaaw}}</b>
          </div>
          @endforeach
        </td>
      </tr>
      @endif
    </tbody>
  </table>
</body>

</html>