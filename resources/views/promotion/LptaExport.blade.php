@extends("layouts.master")
@section("contenu")

<div class="container-fluid mb-4">
  <h1 class="text-black-50">Liste des étudiants ayant des crédits </h1>
</div>

<div class="table-responsive mt-4">
  <table class="table" id="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Nom</th>
        <th scope="col">Créditer</th>
      </tr>
    </thead>
    <tbody>
  
      @php
      $i=0;
      @endphp
      @while ($i < count($stock)) <tr class="table-active">
        <th>{{$stock[$i]['id']}}</th>
        <td>{{($student->where("id",$stock[$i]['id'])->first())->nom}}</td>
        <td>{{($student->where("id",$stock[$i]['id'])->first())->postnom}}</td>
        <td>{{$stock[$i]['validation']}}</td>
        </tr>
        @php
        $i++;
        @endphp
        @endwhile
  
    </tbody>
  </table>
</div>

@endsection