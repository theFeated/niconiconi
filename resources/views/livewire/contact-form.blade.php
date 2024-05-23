@extends('layouts.app')

@section('title', '')

@section('contents')

<style>
#loading-indicator {
  display: flex;
  justify-content: center;
  align-items: center;
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  z-index: 9999;
}

.lds-hourglass {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
  border-radius: 50%;
}

.lds-hourglass:after {
  content: " ";
  display: block;
  border-radius: 50%;
  width: 0;
  height: 0;
  margin: 6px;
  box-sizing: border-box;
  border: 26px solid #fff;
  border-color: #fff transparent #fff transparent; 
  animation: lds-hourglass 1.2s infinite;
}

@keyframes lds-hourglass {
  0% {
    transform: rotate(0);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
  }
  50% {
    transform: rotate(900deg);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  100% {
    transform: rotate(1800deg);
  }
}

</style>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="portfolio_assets/img/breadcrumb-bg.jpg">
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif

        @if(Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Me</h2>
                        <div class="breadcrumb__links">
                            <a href="{{ route('index') }}">Home</a>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Widget Section Begin -->
    <section class="contact-widget spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Address</h4>
                            <p>Agdao, Davao City, Phillipines, 8000l</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Hotline</h4>
                            <p>09127620870 • 09268363978</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Email</h4>
                            <p>nicoeslawan15@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Widget Section End -->

    <!-- Call To Action Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__map">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.6141682413883!2d125.62529481542547!3d7.093204614895013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32ff3057e4a24a91%3A0xf230e91920bc2b8a!2sYour%20Current%20Location!5e0!3m2!1sen!2sbd!4v1642209747116!5m2!1sen!2sbd"
                        height="450" style="border:0;"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <h3>Get in touch</h3>
                        <div>
                            <form wire:submit.prevent="send" method="post">
                                <input wire:model="name" class="form-control" id="name" type="text" placeholder="Enter your name..." required />
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror

                                <input wire:model="email" class="form-control" id="email" type="email" placeholder="Enter your email..." required />
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror

                                <input wire:model="website" class="form-control" id="website" type="text" placeholder="Enter your website..." required />
                                @error('website') <span class="text-danger">{{ $message }}</span> @enderror

                                <textarea wire:model="message" class="form-control" id="message" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                                @error('message') <span class="text-danger">{{ $message }}</span> @enderror

                                <button type="submit" class="site-btn">
                                    <span wire:loading.remove>Submit</span>
                                    <span wire:loading>
                                    <div id="loading-indicator" style="background: linear-gradient(to right, #ff9966, #ff5e62);">
                                        <div class="lds-hourglass" style="color: white;"></div>
                                    </div>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

@endsection

