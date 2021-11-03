<!--TOP NAVIGATION-->
<div class="navigation-wrap bg-light start-header start-style">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-light">

                    <a class="navbar-brand" href="{{ url('/') }}"><img
                            src="{{ asset('assets/img/logo/logo_takeuchi.png') }}" alt=""></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto py-4 py-md-0">
                            {{-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route('home') }}" role="button"
                                    aria-haspopup="true" aria-expanded="false">Trang chủ</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </div>
                            </li> --}}
                            @if ($active == 'home')
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                    <a class="nav-link" href="{{ route('home') }}">Trang chủ</a>
                                </li>
                            @else
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="{{ route('home') }}">Trang chủ</a>
                                </li>
                            @endif

                            @if ($active == 'info')
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                <a class="nav-link" href="{{ route('info') }}">Giới thiệu</a>
                            </li>
                            @else
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="{{ route('info') }}">Giới thiệu</a>
                            </li>
                            @endif

                            @if ($active == 'tnf')
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                <a class="nav-link" href="{{ route('tnf') }}">Công nghệ TNF</a>
                            </li>
                            @else
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="{{ route('tnf') }}">Công nghệ TNF</a>
                            </li>
                            @endif

                            @if ($active == 'tbags')
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                <a class="nav-link" href="{{ route('tbags') }}">Công nghệ T-BAGS</a>
                            </li>
                            @else
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="{{ route('tbags') }}">Công nghệ T-BAGS</a>
                            </li>
                            @endif

                            @if ($active == 'recruitment')
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                <a class="nav-link" href="{{ route('recruitment') }}">Tuyển dụng</a>
                            </li>
                            @else
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="{{ route('recruitment') }}">Tuyển dụng</a>
                            </li>
                            @endif

                            @if ($active == 'contact')
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                <a class="nav-link" href="{{ route('contact') }}">Liên hệ</a>
                            </li>
                            @else
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="{{ route('contact') }}">Liên hệ</a>
                            </li>
                            @endif
                        </ul>
                    </div>

                </nav>
            </div>
        </div>
    </div>
</div>
