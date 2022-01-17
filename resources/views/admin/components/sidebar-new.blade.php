<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-mini">
                CP
            </a>
            <a href="javascript:void(0)" class="simple-text logo-normal">
                Coldplay
            </a>
        </div>
        <ul class="nav">
            <li class="{{ (request()->is('admin')) ? 'active' : '' }}">
                <a href="./">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ (request()->is('admin/albums')) ? 'active' : '' }}">
                <a href="./admin/albums">
                    <i class="tim-icons icon-headphones"></i>
                    <p>Albums Management</p>
                </a>
            </li>
            <li class="{{ (request()->is('admin/events')) ? 'active' : '' }}">
                <a href="/admin/events">
                    <i class="tim-icons icon-pin"></i>
                    <p>Events Management</p>
                </a>
            </li>
            <li>
                <a href="./admin/logout">
                    <i class="tim-icons icon-button-power"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>
