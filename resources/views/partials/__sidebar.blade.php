<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation"></div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{currentRouteActive('home', 'poubelle.show', 'departement.poub', 'departement.list')}}">
                <a href="{{route('home')}}">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu {{ menuOpen('zones.index', 'zones.create', 'zones.edit')}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Zones</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    @can('zone-list')
                            <li class="{{currentRouteActive('zones.index')}}">
                                <a href="{{route('zones.index')}}">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext"
                                          data-i18n="nav.basic-components.alert">Liste des zones</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                    @endcan
                    @can('zone-create')
                        <li class="{{currentRouteActive('zones.create')}}">
                            <a href="{{route('zones.create')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext"
                                      data-i18n="nav.basic-components.alert">Ajouter une zone</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>

            <li class="pcoded-hasmenu {{ menuOpen('agences.index', 'agences.create', 'agences.edit')}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-headphone-alt"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Agences</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    @can('agence-list')
                        <li class="{{currentRouteActive('agences.index')}}">
                            <a href="{{route('agences.index')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext"
                                      data-i18n="nav.basic-components.alert">Liste des agences</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    @endcan
                    @can('agence-create')
                        <li class="{{currentRouteActive('agences.create')}}">
                            <a href="{{route('agences.create')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext"
                                      data-i18n="nav.basic-components.alert">Ajouter une agence</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>

            <li class="pcoded-hasmenu {{ menuOpen('poubelles.index', 'poubelles.create', 'poubelles.edit')}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-trash"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Poubelles</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    @can('poubelle-list')
                        <li class="{{currentRouteActive('poubelles.index')}}">
                            <a href="{{route('poubelles.index')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext"
                                      data-i18n="nav.basic-components.alert">Liste des poubelles</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    @endcan
                    @can('poubelle-create')
                        <li class="{{currentRouteActive('poubelles.create')}}">
                            <a href="{{route('poubelles.create')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext"
                                      data-i18n="nav.basic-components.alert">Ajouter une poubelle</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>

            <li class="pcoded-hasmenu {{ menuOpen('programmations.index', 'programmations.create', 'programmations.edit', 'messages.create')}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-calendar"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Programmation</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    @can('programmation-list')
                        <li class="{{currentRouteActive('programmations.index')}}">
                            <a href="{{route('programmations.index')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext"
                                      data-i18n="nav.basic-components.alert">Liste</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    @endcan
                    @can('programmation-create')
                        <li class="{{currentRouteActive('programmations.create')}}">
                            <a href="{{route('programmations.create')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext"
                                      data-i18n="nav.basic-components.alert">Ajouter programme</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    @endcan
                    <li class="{{currentRouteActive('messages.create')}}">
                        <a href="{{route('messages.create')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"
                                  data-i18n="nav.basic-components.alert">Envoyer message</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>

            @role('Admin')
                <li class="pcoded-hasmenu {{ menuOpen('users.index','roles.index','autorisations.edit','autorisations.create','roles.edit','roles.create','autorisations.index','users.create')}}">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="ti-settings"></i></span>
                        <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Administrer</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{currentRouteActive('users.index', 'users.edit', 'users.create')}}">
                            <a href="{{route('users.index')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext"
                                      data-i18n="nav.basic-components.alert">Les comptes</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class="{{currentRouteActive('autorisations.index', 'autorisations.edit', 'autorisations.create')}}">
                            <a href="{{route('autorisations.index')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext"
                                      data-i18n="nav.basic-components.alert">Les autorisations</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class="{{currentRouteActive('roles.index', 'roles.edit', 'roles.create')}}">
                            <a href="{{route('roles.index')}}">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext"
                                      data-i18n="nav.basic-components.alert">Les rôles</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endrole
        </ul>
    </div>
</nav>