@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-1.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Contact Us</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="vs-contact-wrapper space-top space-negative-bottom">
        <div class="container">
            <div class="title-area text-center">
                <div class="sec-icon"><img src="assets/img/icon/sec-icon.png" alt="Section Title"></div>
                <h2 class="sec-title mb-1">Get Your Next Look</h2>
                <p class="sec-desc">Contact us online, we’ll be in touch as soon as possible…</p>
            </div>
            <div class="row gx-30">
                <div class="col-lg-6 mb-30">
                    @if (session('success'))
                        <script>
                            alert("{{ session('success') }}");
                        </script>
                    @endif
                    <form action="{{ route('contact.store') }}" method="POST" class="">
                        @csrf
                        <div class="row gx-20">
                            <div class="form-group col-6">
                                <input type="text" class="form-control style3" name="first_name"
                                    placeholder="First Name *" required>
                            </div>
                            <div class="form-group col-6">
                                <input type="text" class="form-control style3" name="last_name" placeholder="Last Name *"
                                    required>
                            </div>
                            <div class="form-group col-12">
                                <input type="email" class="form-control style3" name="email" placeholder="Your Email *"
                                    required>
                            </div>
                            <div class="form-group col-12">
                                <input type="tel" class="form-control style3" name="phone" placeholder="Phone No *"
                                    required>
                            </div>
                            <div class="form-group col-12">
                                <select name="subject" class="form-select style3" required>
                                    <option value="" disabled selected hidden>Service *</option>
                                    <option value="Hair Cut">Hair Cut</option>
                                    <option value="Hair Clean">Hair Clean</option>
                                    <option value="Head Massage">Head Massage</option>
                                    <option value="Classic Style">Classic Style</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" cols="30" rows="3" class="form-control style3" placeholder="Message *" required></textarea>
                            </div>
                            <div class="form-btn col-12">
                                <button type="submit" class="vs-btn">Send Message</button>
                            </div>
                        </div>
                        {{-- success / error messages --}}
                        @if (session('success'))
                            <p class="form-messages mt-3 text-success">{{ session('success') }}</p>
                        @endif
                        @if ($errors->any())
                            <p class="form-messages mt-3 text-danger">{{ $errors->first() }}</p>
                        @endif
                    </form>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="vs-info-table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Address:</td>
                                    <td>{{ $appConfig->address }}</td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td><a href="tel:91{{ $appConfig->phone }}"
                                            class="text-reset d-inline">{{ $appConfig->phone }}</a></td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td><a href="mailto:{{ $appConfig->email }}"
                                            class="text-reset d-inline">{{ $appConfig->email }}</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="vs-map-wrapper space-bottom">
        <div class="container">
            <div class="google-map ratio ratio-16x9">
            <iframe
                    src="https://www.google.com/maps/embed/v1/place?q=https%3A%2F%2Fwww.google.com%2Fmaps%2Fplace%2FFountain%2BChowk%2C%2BNehru%2BColony%2C%2BDharampur%2C%2BDehradun%2C%2BUttarakhand%2B248001%2F%4030.3018806%2C78.0534354%2C17z%2Fdata%3D!4m10!1m2!2m1!1sNehru%2BColony%2C%2Bnear%2BFountain%2BChowk%2C%2BDehradun!3m6!1s0x390929a9b591b525%3A0x2ff6020c9ec07b65!8m2!3d30.3022668!4d78.0568796!15sCitOZWhydSBDb2xvbnksIG5lYXIgRm91bnRhaW4gQ2hvd2ssIERlaHJhZHVukgERY29tcG91bmRfYnVpbGRpbmfgAQA!16s%252Fg%252F11lmpb9zs5%3Fentry%3Dttu%26g_ep%3DEgoyMDI1MDkyOC4wIKXMDSoASAFQAw%253D%253D&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
                    width="800" height="565" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
        </div>
    </div>
    @include('layouts.components.gallery')
    @include('layouts.components.testimonials')
@endsection
