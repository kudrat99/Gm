@extends('layouts.app')
@section('content')


</head>

<body>
  
   <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Таб №</th>
                    <th scope="col">Ф.И.О</th>
                    <th scope="col">Должн</th>
                    <th class="th-15" scope="col"> 1/15</th>
                    <th class="th-15" scope="col"> 2/15</th>
                    <th class="th-15" scope="col"> 3/15</th>
                    <th class="th-15" scope="col"> 4/15</th>
                    <th class="th-15"  scope="col"> 5/15</th>
                    <th class="th-15" scope="col"> 6/15</th>
                    <th class="th-15" scope="col"> 7/15</th>
                    <th class="th-15" scope="col"> 8/15</th>
                    <th class="th-15"  scope="col"> 9/15</th>
                    <th class="th-15" scope="col"> 10/15</th>
                    <th class="th-15" scope="col"> 11/15</th>
                    <th class="th-15" scope="col"> 12/15</th>
                    <th class="th-15" scope="col"> 13/15</th>
                    <th class="th-15" scope="col"> 14/15</th>
                    <th class="th-15" scope="col"> 15/15</th>
                    <th  scope="col">Факт Раб</th>
                    <th scope="col">Отпуск</th>
                    <th scope="col">Болезнь</th>
                    <th scope="col">Разрад М</th>
                    <th scope="col">Прогул</th>
                    <th scope="col">Выходн</th>
                    <th scope="col">Гособяз</th>
                    <th scope="col">Команд</th>
                    <th scope="col">Всего дн</th>
                    <th scope="col">Основан</th>
                    <th scope="col">Сверчур</th>
                    <th scope="col">Всего ч</th>
                  </tr>
                </thead>
                @foreach ($datas as $data)
                <tbody>   
                  <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->tabel }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->doljn }}</td>
                    <td>{{ $data->d1 }}</td>
                    <td>{{ $data->d2 }}</td>
                    <td>{{ $data->d3 }}</td>
                    <td>{{ $data->d4 }}</td>
                    <td>{{ $data->d5 }}</td>
                    <td>{{ $data->d6 }}</td>
                    <td>{{ $data->d7 }}</td>
                    <td>{{ $data->d8 }}</td>
                    <td>{{ $data->d9 }}</td>
                    <td>{{ $data->d10 }}</td>
                    <td>{{ $data->d11 }}</td>
                    <td>{{ $data->d12 }}</td>
                    <td>{{ $data->d13 }}</td>
                    <td>{{ $data->d14 }}</td>
                    <td>{{ $data->d15 }}</td>
                    <td>{{ $data->fakt }}</td>
                    <td>{{ $data->otpusk }}</td>
                    <td>{{ $data->bolezn }}</td>
                    <td>{{ $data->razrad }}</td>
                    <td>{{ $data->progul }}</td>
                    <td>{{ $data->vixodn }}</td>
                    <td>{{ $data->gosob }}</td>
                    <td>{{ $data->komand }}</td>
                    <td>{{ $data->vsego }}</td>
                    <td>{{ $data->osnovan }}</td>
                    <td>{{ $data->sverxuroch }}</td>
                    <td>{{ $data->vsegoch}}</td>                    
                  </tr>
                 
                </tbody>
 
                @endforeach
                <a href="{{ route('create') }} " class="btn btn-dark">Create</a>
                   
              </table>
 

 
 



  </div>
</div>
</div>

<!-- jQuery -->
<script src="/examples/vendors/jquery/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="/examples/vendors/bootstrap-4/js/bootstrap.bundle.js"></script>
@endsection