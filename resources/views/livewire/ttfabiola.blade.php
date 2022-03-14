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



</head>

<body class="font-sans antialiased bg-gray-100">
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
        <td class="p-2 whitespace-nowrap border border-gray-700">
          @foreach($enfermedades as $key => $dataaaw)
          <div class="flex items-center border border-gray-700 text-center content-cente">
            <div class="border-gray-500 font-semibold text-center content-center ">{{$key}}</div>
          </div>
          @endforeach
        </td>
        <td class="p-2 whitespace-nowrap border border-gray-700">
          @foreach($enfermedades as $key => $dataaaw)
          <div class="border-solid border-2 border-gray-500 font-semibold text-center content-center  ">{{$dataaaw}}</div>
          @endforeach

        </td>
        <td class="p-2 whitespace-nowrap border border-gray-700">
          @foreach($enfermedades as $key => $dataaaw)

          <div class="border-solid border-2 border-gray-500 text-center content-center ">{{$key}}: <b>{{$dataaaw}}</b>
          </div>
          @endforeach
        </td>
      </tr>
    </tbody>
  </table>

  <div class="flex w-full h-full justify-center content-center items-center py-4">
    <a class="bg-blue-600 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded inline-flex items-center" title="inicio" href="{{ route('dashboard') }}">
      Volver
    </a>
  </div>

</body>

</html>