@extends('layouts.app')

@section('content')

 <div class="create">
   @if (count($errors)>0)
       
   
   <div class="alert alert-danger">
     <ul>
       @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
       @endforeach
     </ul>
   </div>
   @endif

  <form action="{{ route('store') }}" method="POST" >
    @csrf
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
          <th scope="row">id</th>
         <td> <input class="input1 @error('tabel') is-invalid @enderror" type="text" name="tabel" value="{{ old('tabel',$data->tabel) }}"  required autocomplete="tabel">
          @error('tabel')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td> 

         <td> <input class="input2 @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name',$data->name) }}"  required autocomplete="name">
          @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        
        </td> 
         <td> <input class="input3 @error('doljn') is-invalid @enderror" type="text" name="doljn" value="{{ old('doljn',$data->doljn) }}"  required autocomplete="doljn">
          @error('doljn')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td> 
         <td> <input class="input4 @error('d1') is-invalid @enderror" type="text" name="d1" value="{{ old('d1') }}"  required autocomplete="d1">
          @error('d1')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>
        <td> <input class="input4 @error('d2') is-invalid @enderror" type="text" name="d2" value="{{ old('d2') }}"  required autocomplete="d2">
          @error('d2')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>
        <td> <input class="input4 @error('d3') is-invalid @enderror" type="text" name="d3" value="{{ old('d3') }}"  required autocomplete="d3">
          @error('d3')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>
        <td> <input class="input4 @error('d4') is-invalid @enderror" type="text" name="d4" value="{{ old('d4') }}"  required autocomplete="d4">
          @error('d4')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>
        <td> <input class="input4 @error('d5') is-invalid @enderror" type="text" name="d5" value="{{ old('d5') }}"  required autocomplete="d5">
          @error('d5')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>
        <td> <input class="input4 @error('d6') is-invalid @enderror" type="text" name="d6" value="{{ old('d6') }}"  required autocomplete="d6">
          @error('d6')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>
        <td> <input class="input4 @error('d7') is-invalid @enderror" type="text" name="d7" value="{{ old('d7') }}"  required autocomplete="d7">
          @error('d7')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>
        <td> <input class="input4 @error('d8') is-invalid @enderror" type="text" name="d8" value="{{ old('d8') }}"  required autocomplete="d8">
          @error('d8')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>
        <td> <input class="input4 @error('d9') is-invalid @enderror" type="text" name="d9" value="{{ old('d9') }}"  required autocomplete="d9">
          @error('d9')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>
        <td> <input class="input4 @error('d10') is-invalid @enderror" type="text" name="d10" value="{{ old('d10') }}"  required autocomplete="d10">
          @error('d10')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>
        <td> <input class="input4 @error('d11') is-invalid @enderror" type="text" name="d11" value="{{ old('d11') }}"  required autocomplete="d11">
          @error('d11')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>
        <td> <input class="input4 @error('d12') is-invalid @enderror" type="text" name="d12" value="{{ old('d12') }}"  required autocomplete="d12">
          @error('d12')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>
        <td> <input class="input4 @error('d13') is-invalid @enderror" type="text" name="d13" value="{{ old('d13') }}"  required autocomplete="d13">
          @error('d13')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>
        <td> <input class="input4 @error('d14') is-invalid @enderror" type="text" name="d14" value="{{ old('d14') }}"  required autocomplete="d14">
          @error('d14')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>
        <td> <input class="input4 @error('d15') is-invalid @enderror" type="text" name="d15" value="{{ old('d15') }}"  required autocomplete="d15">
          @error('d15')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>

         <td> <input class="input @error('fakt') is-invalid @enderror" type="text" name="fakt" value="{{ old('fakt') }}" required autocomplete="fakt">
          @error('fakt')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td> 
         <td> <input class="input @error('otpusk') is-invalid @enderror" type="text" name="otpusk" value="{{ old('otpusk') }}"  required autocomplete="otpusk">
          @error('otpusk')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>
         <td> <input class="input @error('bolezn') is-invalid @enderror" type="text" name="bolezn" value="{{ old('bolezn') }}"  required autocomplete="bolezn">
          @error('bolezn')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td> 
         <td> <input class="input @error('razrad') is-invalid @enderror" type="text" name="razrad" value="{{ old('razrad') }}"  required autocomplete="razrad">
          @error('razrad')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>
         <td> <input class="input @error('progul') is-invalid @enderror" type="text" name="progul" value="{{ old('progul') }}"  required autocomplete="progul">
          @error('progul')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td> 
         <td><input class="input @error('vixodn') is-invalid @enderror" type="text" name="vixodn" value="{{ old('vixodn') }}"  required autocomplete="vixodn">
          @error('vixodn')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

        </td>
         <td> <input class="input @error('gosob') is-invalid @enderror" type="text" name="gosob" value="{{ old('gosob') }}"  required autocomplete="gosob">
          @error('gosob')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td> 
         <td> <input class="input @error('komand') is-invalid @enderror" type="text" name="komand" value="{{ old('komand') }}"  required autocomplete="komand">
          @error('komand')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>
         <td><input class="input @error('vsego') is-invalid @enderror" type="text" name="vsego" value="{{ old('vsego') }}"  required autocomplete="vsego">
          @error('vsego')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </td> 
         <td> <input class="input @error('osnovan') is-invalid @enderror" type="text" name="osnovan" value="{{ old('osnovan') }}" required autocomplete="osnovan">
          @error('osnovan')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>
         <td> <input class="input @error('sverxuroch') is-invalid @enderror" type="text" name="sverxuroch" value="{{ old('sverxuroch') }}"  required autocomplete="sverxuroch">
          @error('sverxuroch')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td> 
         <td> <input class=" input @error('vsegoch') is-invalid @enderror" type="text" name="vsegoch" value="{{ old('vsegoch') }}" required autocomplete="vsegoch">
          @error('vsegoch')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </td>                  
        </tr>
            
@endforeach
      

























        
        
       
   
  </form>
  
</div>
<button class="btn btn-dark" type="submit">SEND</button>




@endsection
