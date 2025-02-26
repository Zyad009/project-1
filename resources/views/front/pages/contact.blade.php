@extends('front.layouts.app')
@section('title', 'Contact')
@section('contact-active', 'active')



@section('panner-head')
    @include('front.layouts.sub-header' ,["pageName" => "Contact"])
@endsection

@push("front-cdn")
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@section('front-content')
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Contact Us<span></span></p>
                    <h1 class="text-center mb-5">Contact For Any Query</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <p class="text-center mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                            <livewire:front.components.livewire.message>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @push("front-js")
        <script>
            window.addEventListener("sendSuccess", () => {
                    Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "sended success",
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        </script>
        @endpush
@endsection