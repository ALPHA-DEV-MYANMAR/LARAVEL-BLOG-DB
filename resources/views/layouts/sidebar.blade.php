<div class="col-12 col-lg-3 col-xl-2 vh-100 sidebar">
    <div class="d-flex justify-content-between align-items-center py-2 mt-3 nav-brand">
        <div class="d-flex align-items-center">
            <span class="font-weight-bolder h4 mb-0 text-uppercase text-primary">
                <i class="fas fa-shopping-bag"></i>
                My Shop
            </span>
        </div>
        <button class="hide-sidebar-btn btn btn-light d-block d-lg-none btn btn-close">
        </button>
    </div>
    <div class="nav-menu">
        <ul>
            <li class="menu-spacer"></li>

            <x-menu-item link="home" icon="fas fa-home" name="Dashboard"></x-menu-item>

            <x-menu-title title="category menu"></x-menu-title>

            <x-menu-item link="category.index" icon="fas fa-list-alt" name="category lists"></x-menu-item>

            <x-menu-item link="category.create" icon="fas fa-plus-circle" name="new category"></x-menu-item>

            <x-menu-title title="Item menu"></x-menu-title>

            <x-menu-item link="post.index" icon="fas fa-list-alt" name="item lists"></x-menu-item>

            <x-menu-item link="post.create" icon="fas fa-plus-circle" name="new item"></x-menu-item>

            <li class="menu-spacer"></li>

            <li>
                <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-outline-primary w-100">
                    <i class="fas fa-unlock"></i> Log Out
                </a>
            </li>

        </ul>
    </div>
</div>
