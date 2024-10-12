<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit"
                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
@extends('auth.app')

@section('title')
    Verify Your Account
@endsection


@push('headScripts')
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
@endpush

@section('main')
    <main class="main" id="top">
        <div class="container">
            <div class="row flex-center min-vh-100 py-5">
                <div class="col-sm-10 col-md-8 col-lg-5 col-xxl-4"><a class="d-flex flex-center text-decoration-none mb-4"
                        href="../../../index-2.html">
                        <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img
                                src="../../../assets/img/icons/logo.png" alt="phoenix" width="58" /></div>
                    </a>
                    <div class="px-xxl-5">
                        <div class="text-center mb-6">
                            <h4 class="text-body-highlight">Verify Your Account</h4>
                            <p class="text-body-tertiary mb-0">Thank you for signing up! To get started, please verify your
                                email address by clicking the link we just sent you. If you didn’t receive the email, just
                                let us know, and we’ll be happy to send another one your way.</p>
                            {{-- <P class="fs-10 mb-5">Don’t have access? <a href="#!">Use another method</a></P> --}}
                            <form class="verification-form mt-5" method="POST" action="{{ route('verification.send') }}"
                                data-2fa-form="data-2fa-form">
                                @csrf
                                <Button class="btn btn-primary w-100 mb-5" type="submit">Resend Verification Email</Button>
                                <a class="fs-9" id="logoutButton">Sign Out</a>
                            </form>

                            <form id="logoutForm" class="verification-form" data-2fa-form="data-2fa-form" method="POST"
                                action="{{ route('logout') }}">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@push('scripts')
    <script>
        $(document).ready(() => {
            console.log('tushar');
            
        })
    </script>

@endpush
