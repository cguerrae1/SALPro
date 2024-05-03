@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu correo electronico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un link de verificacion ha sido enviado a tu correo electronico.') }}
                        </div>
                    @endif

                    {{ __('Antes de proceder, por favor revisa tu correo electronico para el link de verificacion.') }}
                    {{ __('Si no recibiste el correo') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Hacer click aca para solicitar un nuevo link') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
