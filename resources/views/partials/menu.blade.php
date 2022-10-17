<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route('admin.home') }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('contact_us_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.contactuses.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/contactuses') || request()->is('admin/contactuses/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-phone c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.contactUs.title') }}
                </a>
            </li>
        @endcan
        @can('country_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.countries.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/countries') || request()->is('admin/countries/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-flag c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.country.title') }}
                </a>
            </li>
        @endcan
        @can('in_the_press_access')
            <li
                class="c-sidebar-nav-dropdown {{ request()->is('admin/in-the-news*') ? 'c-show' : '' }} {{ request()->is('admin/in-the-media*') ? 'c-show' : '' }} {{ request()->is('admin/quotes*') ? 'c-show' : '' }} {{ request()->is('admin/media-resources*') ? 'c-show' : '' }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw far fa-newspaper c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.inThePress.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('in_the_new_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.in-the-news.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/in-the-news') || request()->is('admin/in-the-news/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-newspaper c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.inTheNew.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('in_the_medium_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.in-the-media.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/in-the-media') || request()->is('admin/in-the-media/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-camera c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.inTheMedium.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('quote_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.quotes.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/quotes') || request()->is('admin/quotes/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-quote-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.quote.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('media_resource_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.media-resources.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/media-resources') || request()->is('admin/media-resources/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-cloud-download-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.mediaResource.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('newsletter_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.newsletters.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/newsletters') || request()->is('admin/newsletters/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-newspaper c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.newsletter.title') }}
                </a>
            </li>
        @endcan
        @can('newsletter_email_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.newsletter-emails.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/newsletter-emails') || request()->is('admin/newsletter-emails/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-at c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.newsletterEmail.title') }}
                </a>
            </li>
        @endcan
        @can('partner_access')
            <li
                class="c-sidebar-nav-dropdown {{ request()->is('admin/partner-categories*') ? 'c-show' : '' }} {{ request()->is('admin/mkwc-partners*') ? 'c-show' : '' }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-user-cog c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.partner.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('partner_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.partner-categories.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/partner-categories') || request()->is('admin/partner-categories/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-pencil-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.partnerCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('mkwc_partner_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.mkwc-partners.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/mkwc-partners') || request()->is('admin/mkwc-partners/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fab fa-affiliatetheme c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.mkwcPartner.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('gallery_management_access')
            <li
                class="c-sidebar-nav-dropdown {{ request()->is('admin/gallery-categories*') ? 'c-show' : '' }} {{ request()->is('admin/galleries*') ? 'c-show' : '' }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-images c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.galleryManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('gallery_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.gallery-categories.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/gallery-categories') || request()->is('admin/gallery-categories/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-align-justify c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.galleryCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('gallery_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.galleries.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/galleries') || request()->is('admin/galleries/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-images c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.gallery.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('user_management_access')
            <li
                class="c-sidebar-nav-dropdown {{ request()->is('admin/users*') ? 'c-show' : '' }} {{ request()->is('admin/roles*') ? 'c-show' : '' }} {{ request()->is('admin/permissions*') ? 'c-show' : '' }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.users.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.roles.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.permissions.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}"
                        href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link"
                onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>
