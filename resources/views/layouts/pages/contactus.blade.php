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
            <div class="google-map ratio ratio-16x9"><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193602.52247371394!2d-74.06965844043218!3d40.695129602530734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1628485834355!5m2!1sen!2sbd"
                    width="800" height="565" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
        </div>
    </div>
    @include('layouts.components.gallery')
    @include('layouts.components.testimonials')
@endsection
