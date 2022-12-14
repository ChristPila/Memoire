@php
  $state =  App\Models\Promotion::all();
  $ap =   new  App\Models\AnneePromo();
@endphp
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
        data-accordion="false">

        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Tableau de bord
                </p>
            </a>
        </li>
@if ($state->count() < 1)
    
@else 
@foreach ($state as  $item)
<li class="nav-item menu-close">
    <a href="#" class="nav-link">
        <i class="fas fa-user-graduate"></i>
        <p>
            {{$item->nom}}
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('lpta',["id"=>$item->id])}}" class="nav-link active">
                <i class="fas fa-upload ml-2"></i>
                <p>Importer</p>
            </a>
        </li>

        @foreach ($ap->where("promotions_id",$item->id)->get() as $ay)
            <li class="nav-item">
                <a href="{{route("credit",["id"=>$ay->id])}}" class="nav-link">
                    <i class="fas fa-window-close ml-2"></i>
                    <p>Non validé  {{ ((App\Models\Annee ::where("id",$ay->annees_id))->first())->nom}}</p>
                </a>
            </li>
        @endforeach
    </ul>
</li> 
@endforeach

@endif
    </ul>
</nav>