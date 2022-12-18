

<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="background-color: #e3e9f1; border-radius: 25px;">
        <div class="">
                <br>
                <h3>Confirma tu correo electrónico</h3>
                <div class="h-decor"></div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <br>
                    <br>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-hover-fill">
                        <i
                                        class="icon-right-arrow"></i><span>{{ __('click here to request another') }}</span><i
                                        class="icon-right-arrow"></i></button>.
                    </form>
                </div>
                <br>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>
