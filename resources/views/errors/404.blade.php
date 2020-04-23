<!DOCTYPE html>
<html lang="en">
@section('page-name', '404')

@include('layouts.header')

<body>
    <div class="container min-vh-100 vh-100">
        <div class="d-flex align-items-center h-100">
            <div class="row mx-auto">
                <div class="col-6 text-right">
                    <img src="assets/icons/404-illustration.svg" alt="" srcset="" class="img img-fluid img-responsive">
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col">
                            <img src="assets/icons/404.svg" alt="" srcset="" class="img img-fluid img-responsive">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <a href="{{ url('/beranda')}}">
                                <button type="button" name="" id="" class="btn btn-border mx-auto mt-5">kembali ke beranda</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>