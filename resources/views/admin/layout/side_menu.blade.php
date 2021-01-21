<div class="page-sidebar">
    <div class="sidebar custom-scrollbar">

        <ul class="sidebar-menu">
            <li>
                <a class="sidebar-header" href="/admin">
                    <i data-feather="home"></i>
                    <span> الرئيسية </span>
                </a>
            </li>
            <li  class="active">
                <a class="sidebar-header" href="{{ action('Admin\SectionsController@index')  }}">
                    <i data-feather="home"></i>
                    <span>أقسام الموقع</span>
                </a>
            </li>
            <li>
                <a class="sidebar-header" href="{{ action('Admin\SettingsController@edit') }}">
                    <i data-feather="settings"></i>
                    <span>الاعدادات</span>
                </a>
            </li>

        </ul>
    </div>
</div>
