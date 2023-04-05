@php
    $url = $_SERVER['REQUEST_URI'];
    $slug = explode("/", $url);
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{url('/')}}" class="brand-link">
        <img src="{{ asset("dist/img/AdminLTELogo.png")}}" alt="{{ config('app.name') }}"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link @if($slug['1'] == 'admin') active @endif">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Admins</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('manager.index') }}" class="nav-link @if($slug['1'] == 'manager') active @endif">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Managers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('accounting.index') }}" class="nav-link @if($slug['1'] == 'accounting') active @endif">
                        <i class="nav-icon fas fa-coins"></i>
                        <p>Accounting</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-plane"></i>
                        <p>Tours</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-suitcase"></i>
                        <p>Traveler</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('chat') }}" class="nav-link @if($slug['1'] == 'chat') active @endif">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>Chat</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-history"></i>
                        <p>History</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
