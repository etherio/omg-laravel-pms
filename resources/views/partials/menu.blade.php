<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ __('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route('admin.home') }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ __('global.dashboard') }}
            </a>
        </li>

        @can('user_management_access')
            <li
                class="c-sidebar-nav-dropdown {{ request()->is('admin/permissions*') ? 'c-show' : '' }} {{ request()->is('admin/roles*') ? 'c-show' : '' }} {{ request()->is('admin/users*') ? 'c-show' : '' }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ __('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.permissions.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon"></i>
                                {{ __('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.roles.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon"></i>
                                {{ __('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.users.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon"></i>
                                {{ __('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan

        @can('product_management_access')
            <li
                class="c-sidebar-nav-dropdown {{ request()->is('admin/product-categories*') ? 'c-show' : '' }} {{ request()->is('admin/product-tags*') ? 'c-show' : '' }} {{ request()->is('admin/products*') ? 'c-show' : '' }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-shopping-cart c-sidebar-nav-icon"></i>
                    {{ __('cruds.productManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('product_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.product-categories.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/product-categories') || request()->is('admin/product-categories/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-grip-horizontal c-sidebar-nav-icon"></i>
                                {{ __('cruds.productCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('product_tag_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.product-tags.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/product-tags') || request()->is('admin/product-tags/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-tags c-sidebar-nav-icon"></i>
                                {{ __('cruds.productTag.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('product_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.products.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-box c-sidebar-nav-icon"></i>
                                {{ __('cruds.product.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan

        @can('inventory_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.inventories.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/inventories') || request()->is('admin/inventories/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.inventory.title') }}
                </a>
            </li>
        @endcan

        @can('profile_password_edit')
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}"
                    href="{{ route('profile.password.edit') }}">
                    <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                    </i>
                    {{ __('global.change_password') }}
                </a>
            </li>
        @endcan

        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link"
                onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ __('global.logout') }}
            </a>
        </li>
    </ul>

</div>
