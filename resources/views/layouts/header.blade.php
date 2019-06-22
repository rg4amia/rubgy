<!-- BEGIN: Header-->
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>

<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto">
                            <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                                <i class="ficon feather icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                        <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                        <!--     i.ficon.feather.icon-menu-->

                    </ul>

                </div>

                <ul class="nav navbar-nav float-right">

                    @if (Route::has('login'))

                        @auth

                            <div class="col float-left">
                                <div class="form-group">
                                    <label for="name">Année Acedemic</label>
                                    {{ Form::select('active', list_academic(),null, ['id' => 'academic','class'=>'form-control', 'required' => 'required']) }}
                                    {{--{{ Form::select('active', list_academic() != null ? list_academic() : null, ['class'=>'form-control col-md-12', 'required'=>true ]) }}--}}
                                </div>
                            </div>
                            <li class="dropdown dropdown-user nav-item">
                                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <div class="user-nav d-sm-flex d-none">
                                        <span class="user-name text-bold-600">{{ Auth::user()->name }}</span>
                                        <span class="user-status">Available</span>
                                    </div>
                                    <span>
                                <img class="round" src="{{ asset('app-assets/images/portrait/small/avatar-s-11.png') }}"
                                     alt="avatar" height="40" width="40"/>
                            </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">
                                        <i class="feather icon-user"></i> Profile
                                    </a>

                                    <a class="dropdown-item" href="#">
                                        <i class="feather icon-user-plus"></i> Manage Users
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="feather icon-shield"></i> Manage Roles
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <i class="feather icon-power"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="#" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>

                                </div>
                            </li>

                        @else
                            <li class="nav-item d-none d-lg-block">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>

                            @if (Route::has('register'))

                                <li class="nav-item d-none d-lg-block">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>

                            @endif

                        @endauth

                    @endif

                </ul>
            </div>
        </div>
    </div>
</nav>
@section('js')
    <script>
        $(document).ready(function () {
            $("#academic").on('change',function() {
                var val = $(this).val();
                console.log(val);
                if(val != ''){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ route('set.acedemic') }}",
                        method: 'post',
                        data:{id:val},
                        dataType: 'json',
                        success: function(result){

                            location.reload(true);

                        },error:function(jqXHR, textStatus){
                            alert('Error.\n'+ jqXHR.responseText);
                        }
                    });
                }
            });
        });

    </script>
@endsection
<!-- END: Header-->

