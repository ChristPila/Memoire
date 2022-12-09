<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
        data-accordion="false">

        <li class="nav-item">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Tableau de bord
                </p>
            </a>
        </li>

        <li class="nav-item menu-open">
            <a href="#" class="nav-link">
                <i class="fas fa-user-graduate"></i>
                <p>
                    LPTA1
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('lpta',["id"=>1])}}" class="nav-link active">
                        <i class="fas fa-upload ml-2"></i>
                        <p>Importer</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-window-close ml-2"></i>
                        <p>Non validé</p>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="nav-item menu-open">
            <a href="#" class="nav-link">
                <i class="fas fa-user-graduate"></i>
                <p>
                    LPTA2
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('lpta',["id"=>2])}}" class="nav-link">
                        <i class="fas fa-upload ml-2"></i>
                        <p>Importer</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-window-close ml-2"></i>
                        <p>Non validé</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item menu-open">
            <a href="#" class="nav-link">
                <i class="fas fa-user-graduate"></i>
                <p>
                    LPTA3
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('lpta',["id"=>3])}}" class="nav-link">
                        <i class="fas fa-upload ml-2"></i>
                        <p>Importer</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-window-close ml-2"></i>
                        <p>Non validé</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item menu-open">
            <a href="#" class="nav-link">
                <i class="fas fa-user-graduate"></i>
                <p>
                    LPTA4
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('lpta',["id"=>4])}}" class="nav-link">
                        <i class="fas fa-upload ml-2"></i>
                        <p>Importer</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-window-close ml-2"></i>
                        <p>Non validé</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>