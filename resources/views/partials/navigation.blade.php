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
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="true" aria-expanded="false">Trang chủ</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </div>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="{{ route('info') }}">Giới thiệu</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="{{ route('tnf') }}">Công nghệ TNF</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route('tbags') }}" role="button"
                                    aria-haspopup="true" aria-expanded="false">Công nghệ T-BAGS</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </div>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="{{ route('hiring') }}">Tuyển dụng</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="{{ route('contact') }}">Liên hệ</a>
                            </li>
                        </ul>
                    </div>

                </nav>
            </div>
        </div>
    </div>
</div>
{{-- {{-- <div class="section full-height">
</div> --}}
{{-- <div class="my-5 py-5">
</div> --}}

<!-- Link to page
================================================== -->
{{-- <a href="https://front.codes/" class="logo" target="_blank">
		<img src="https://assets.codepen.io/1462889/fcy.png" alt="">
	</a> --}}
