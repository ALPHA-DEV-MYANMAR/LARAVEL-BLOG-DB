<div class="row header mb-4">
    <div class="col-12">
        <div class="p-2 bg-primary d-flex justify-content-between align-items-center rounded">
            <button class="show-sidebar-btn btn btn-primary d-block d-lg-none">
                <i class="fas fa-list-alt"></i>
            </button>
            <form action="" method="post" class="d-none d-md-block">
                <div class="form-inline d-flex">
                    <input type="text" class="form-control mr-2" placeholder="Search Everything">
                    <button class="btn btn-light">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
