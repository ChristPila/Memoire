@extends("layouts.master")
@section("contenu")
<form action="{{route("lpta_rec")}}" method="post" enctype="multipart/form-data" class="dropzone">
    @csrf
    <select name="yearac" required class="form-control w-25 mt-4">
      @foreach ($ac as $annee )
      <option value="{{$annee->id}}">{{$annee->nom}}</option>
      @endforeach
    </select>
      <div class="input-group mb-3 mt-5">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
        </div>
        <div class="custom-file">
          <input required type="file" class="custom-file-input" id="inputGroupFile01" name="file"
            aria-describedby="inputGroupFileAddon01">
          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
      </div>
      @if (isset($id))  
        <input type="hidden" value="{{$id}}" name="promotions_id">
      @endif
      <input type="submit" class="btn btn-success mb-4" value="Envoyer" name="envoyer">
</form>

@if ($liste->count()>0)


<div class="table-responsive mt-8">
    <table class="table" id="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Postnom</th>
            <th scope="col">Promotion</th>

          </tr>
        </thead>

        <tbody>
          @foreach ($liste as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->nom}}</td>
            <td>{{$item->postnom}}</td>
            <td>{{$item->promotions_id}}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>

@else
<div class="container-fluid">
  <h1 class="text-black-50">Aucune information disponible </h1>
</div>
@endif   
@endsection