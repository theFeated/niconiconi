<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

@unless (Route::currentRouteName() == 'contact')
    @include('layouts.preloader')
@endunless

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" class="min-vh-100">

        <!-- Topbar -->
        @include('layouts.navbar')
        <!-- End of Topbar -->

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
          </div>

            @yield('contents')

          <!-- Content Row -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      
      <!-- Footer -->
      @include('layouts.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

    <script src="{{ asset('portfolio_assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('portfolio_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('portfolio_assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('portfolio_assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('portfolio_assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('portfolio_assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('portfolio_assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('portfolio_assets/js/main.js') }}"></script>
</body>
</html>
