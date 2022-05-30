<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <a target="_balnk" href="{{ route('home') }}" class="brand-logo">
            <img alt="Logo" style="max-height: 45px" src="{{ asset(settings()->logo) }}" />
        </a>
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
            <span class="svg-icon svg-icon svg-icon-xl">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path
                            d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                            fill="#000000" fill-rule="nonzero"
                            transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                        <path
                            d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                            fill="#000000" fill-rule="nonzero" opacity="0.3"
                            transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                    </g>
                </svg>
            </span>
        </button>
    </div>
    <!--end::Brand-->

    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
            data-menu-dropdown-timeout="500">
            <ul class="menu-nav">
                <li class="menu-item menu-item-active" aria-haspopup="true">
                    <a href="{{ route('dashboard') }}" class="menu-link">
                        <span class="svg-icon menu-icon">
                            @include('admin.components.square_icon')
                        </span>
                        <span class="menu-text">@lang('general.home')</span>
                    </a>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">{{ trans('general.aside.page') }}</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>

                @can('categories.index')
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                @include('admin.components.dot_icon')
                            </span>
                            <span class="menu-text">{{ trans('general.aside.categories') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item">
                                    <a href="{{ route('categories.index') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{ trans('general.aside.create_categories') }}</span>
                                    </a>
                                </li>
                                @can('slider.edit')
                                <li class="menu-item">
                                    <a href="{{ route('slider.edit') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{ trans('general.aside.slider_page') }}</span>
                                    </a>
                                </li>
                            @endcan
                            </ul>
                        </div>
                    </li>
                @endcan

                @can('services.index')
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                @include('admin.components.dot_icon')
                            </span>
                            <span class="menu-text">{{ trans('general.aside.services') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @can('service_page')
                                    <li class="menu-item">
                                        <a href="{{ route('service_page') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ trans('general.aside.service_page') }}</span>
                                        </a>
                                    </li>
                                @endcan


                                <li class="menu-item">
                                    <a href="{{ route('services.index') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{ trans('general.aside.create_services') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endcan

                @can('statistics.index')
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                @include('admin.components.dot_icon')
                            </span>
                            <span class="menu-text">{{ trans('general.aside.statistics') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                @can('statistic_page')
                                    <li class="menu-item">
                                        <a href="{{ route('statistic_page') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ trans('general.aside.statistic_page') }}</span>
                                        </a>
                                    </li>
                                @endcan

                                <li class="menu-item">
                                    <a href="{{ route('statistics.index') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span
                                            class="menu-text">{{ trans('general.aside.create_statistics') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endcan


                @can('properties.index')
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                @include('admin.components.dot_icon')
                            </span>
                            <span class="menu-text">{{ trans('general.aside.properties') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                @can('blog_page')
                                    <li class="menu-item">
                                        <a href="{{ route('blog_page') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ trans('general.aside.blog_page') }}</span>
                                        </a>
                                    </li>
                                @endcan
                                <li class="menu-item">
                                    <a href="{{ route('properties.index') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span
                                            class="menu-text">{{ trans('general.aside.create_properties') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endcan

                @can('partners.index')
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                @include('admin.components.dot_icon')
                            </span>
                            <span class="menu-text">{{ trans('general.aside.partners') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item">
                                    <a href="{{ route('partners.index') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{ trans('general.aside.create_partners') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endcan
                {{-- @can('teams.index')
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                @include('admin.components.dot_icon')
                            </span>
                            <span class="menu-text">{{ trans('general.aside.teams') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                @can('blog_page')
                                    <li class="menu-item">
                                        <a href="{{ route('team_page') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ trans('general.aside.team_page') }}</span>
                                        </a>
                                    </li>
                                @endcan
                                <li class="menu-item">
                                    <a href="{{ route('teams.index') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{ trans('general.aside.create_teams') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endcan

                @can('testimonials.index')
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                @include('admin.components.dot_icon')
                            </span>
                            <span class="menu-text">{{ trans('general.aside.testimonials') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                @can('testimonial.edit')
                                    <li class="menu-item">
                                        <a href="{{ route('testimonial.edit') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">{{ trans('general.aside.testimonial_page') }}</span>
                                        </a>
                                    </li>
                                @endcan
                                <li class="menu-item">
                                    <a href="{{ route('testimonials.index') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span
                                            class="menu-text">{{ trans('general.aside.create_testimonials') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endcan --}}






                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            @include('admin.components.dot_icon')
                        </span>
                        <span class="menu-text">{{ trans('general.pages') }}</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            @can('how_we_are')
                                <li class="menu-item">
                                    <a href="{{ route('how_we_are') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{ trans('general.aside.how_we_are') }}</span>
                                    </a>
                                </li>
                            @endcan
                            @can('about.edit')
                                <li class="menu-item">
                                    <a href="{{ route('about.edit') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{ trans('general.aside.about') }}</span>
                                    </a>
                                </li>
                            @endcan
                            @can('mission.edit')
                                <li class="menu-item">
                                    <a href="{{ route('mission.edit') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{ trans('general.aside.mission') }}</span>
                                    </a>
                                </li>
                            @endcan

                            @can('vision.edit')
                                <li class="menu-item">
                                    <a href="{{ route('vision.edit') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{ trans('general.aside.vision') }}</span>
                                    </a>
                                </li>
                            @endcan
                            @can('contact_page')
                                <li class="menu-item">
                                    <a href="{{ route('contact_page') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{ trans('general.aside.contact_page') }}</span>
                                    </a>
                                </li>
                            @endcan
                            @can('start_page')
                                <li class="menu-item">
                                    <a href="{{ route('start_page') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{ trans('general.aside.chalange') }}</span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </li>
                {{-- @can('roles.index')
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            @include('admin.components.dot_icon')
                        </span>
                        <span class="menu-text">{{ trans('general.aside.roles') }}</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item">
                                <a href="{{ route('roles.index') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">{{ trans('general.aside.create_roles') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endcan
                @can('permissions.index')
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            @include('admin.components.dot_icon')
                        </span>
                        <span class="menu-text">{{ trans('general.aside.permissions') }}</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item">
                                <a href="{{ route('permissions.index') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">{{ trans('general.aside.create_permissions') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endcan
                @can('users.index')
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            @include('admin.components.dot_icon')
                        </span>
                        <span class="menu-text">{{ trans('general.aside.users') }}</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item">
                                <a href="{{ route('users.index') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">{{ trans('general.aside.create_users') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endcan

                <li class="menu-item">
                    <a href="{{ route('property_request') }}" class="menu-link">
                        <span class="svg-icon menu-icon">
                            @include('admin.components.dot_icon')
                        </span>
                        <span class="menu-text">{{ trans('general.aside.property_request') }}</span>
                    </a>
                </li> --}}



                @can('requests')
                    <li class="menu-item">
                        <a href="{{ route('requests') }}" class="menu-link">
                            <span class="svg-icon menu-icon">
                                @include('admin.components.dot_icon')
                            </span>
                            <span class="menu-text">{{ trans('general.aside.requests') }}</span>
                        </a>
                    </li>
                @endcan


                @can('contact.index')
                    <li class="menu-item">
                        <a href="{{ route('contact.index') }}" class="menu-link">
                            <span class="svg-icon menu-icon">
                                @include('admin.components.dot_icon')
                            </span>
                            <span class="menu-text">{{ trans('general.aside.contact') }}</span>
                        </a>
                    </li>
                @endcan
                @can('settings.edit')
                    <li class="menu-item">
                        <a href="{{ route('settings.edit') }}" class="menu-link">
                            <span class="svg-icon menu-icon">
                                @include('admin.components.dot_icon')
                            </span>
                            <span class="menu-text">{{ trans('general.aside.settings') }}</span>
                        </a>
                    </li>
                @endcan
            </ul>
        </div>
    </div>
</div>
