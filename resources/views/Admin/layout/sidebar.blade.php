<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <div class="d-flex sidebar-profile">
            <div class="sidebar-profile-image">
                <img src="{{ asset('public/Admin/images/faces/face29.png')}}" alt="image">
                <span class="sidebar-status-indicator"></span>
            </div>
            <div class="sidebar-profile-name">
                <p class="sidebar-name">{{__('messages.laravel_new_topic')}}</p>
                <p class="sidebar-designation">{{__('messages.new')}}</p>
            </div>
            </div>
            <div class="nav-search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Type to search..." aria-label="search" aria-describedby="search">
                <div class="input-group-append">
                <span class="input-group-text" id="search">
                    <i class="typcn typcn-zoom"></i>
                </span>
                </div>
            </div>
            </div>
            <p class="sidebar-menu-title">Dash menu</p>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=" {{ route('dashboard') }} ">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">{{__('messages.dashboard')}}<span class="badge badge-primary ml-3">{{__('messages.new')}}</span></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('xlsxTable') }}">
            <i class="typcn typcn-document-text menu-icon"></i>
            <span class="menu-title">{{__('messages.excel').' '.__('messages.table')}}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('component') }}">
            <i class="typcn typcn-document-text menu-icon"></i>
            <span class="menu-title">{{__('messages.component')}}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('language') }}">
            <i class="typcn typcn-document-text menu-icon"></i>
            <span class="menu-title">{{__('messages.language')}}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dependentIndex') }}">
            <i class="typcn typcn-document-text menu-icon"></i>
            <span class="menu-title">{{__('messages.dependent')}}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="typcn typcn-briefcase menu-icon"></i>
            <span class="menu-title">UI Elements</span>
            <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
            </ul>
            </div>
        </li>
    </ul>
</nav>
