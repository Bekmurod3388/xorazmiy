<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item {{  request()->routeIs('admin.users.index') ? 'active' : '' }}">
                    <a href="{{route('admin.users.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Foydalanuvchilar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.posts.index') ? 'active' : '' }}">
                    <a href="{{route('admin.posts.index')}}">
                        <i class="fas fa-newspaper"></i>
                        <p>Yangiliklar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.photo.index') ? 'active' : '' }}">
                    <a href="{{route('admin.photo.index')}}">
                        <i class="fas fa-images"></i>
                        <p>Foto Galereya</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.certificate.index') ? 'active' : '' }}">
                    <a href="{{route('admin.certificate.index')}}">
                        <i class="fas fa-images"></i>
                        <p>Faxriy yorliqlar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.veteran.index') ? 'active' : '' }}">
                    <a href="{{route('admin.veteran.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Faxriylar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.teacher.index') ? 'active' : '' }}">
                    <a href="{{route('admin.teacher.index')}}">
                        <i class="fas fa-user"></i>
                        <p>O'qituvchilar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.olimpic.index') ? 'active' : '' }}">
                    <a href="{{route('admin.olimpic.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Olimpiadachilar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.active.index') ? 'active' : '' }}">
                    <a href="{{route('admin.active.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Faol o'quvchilar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.messages.index') ? 'active' : '' }}">
                    <a href="{{route('admin.messages.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Xabarlar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.circle.index') ? 'active' : '' }}">
                    <a href="{{route('admin.circle.index')}}">
                        <i class="fas fa-user"></i>
                        <p>To'garaklar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.parent.index') ? 'active' : '' }}">
                    <a href="{{route('admin.parent.index')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                        <p> Ota - onalar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.circle.index') ? 'active' : '' }}">
                    <a href="{{route('admin.electroniclibrary.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Elektron kutubxona</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


