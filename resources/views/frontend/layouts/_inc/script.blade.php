		<!-- JS here -->
        <script src="{{ asset('/') }}frontend/assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('/') }}frontend/assets/js/bootstrap.min.js"></script>
        <script src="{{ asset('/') }}frontend/assets/js/isotope.pkgd.min.js"></script>
        <script src="{{ asset('/') }}frontend/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{ asset('/') }}frontend/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="{{ asset('/') }}frontend/assets/js/element-in-view.js"></script>
        <script src="{{ asset('/') }}frontend/assets/js/slick.min.js"></script>
        <script src="{{ asset('/') }}frontend/assets/js/ajax-form.js"></script>
        <script src="{{ asset('/') }}frontend/assets/js/wow.min.js"></script>
        <script src="{{ asset('/') }}frontend/assets/js/plugins.js"></script>
        <script src="{{ asset('/') }}frontend/assets/js/main.js"></script>
        <script src="{{ asset('/') }}frontend/assets/js/all.js"></script>
        
        {{-- toster message --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @if(Session::has('success'))
            <script>
                toastr.success("{{ Session::get('success') }}");
            </script>
            {{ Session::forget('success') }}
        @endif

        @if (Session::has('error'))
            <script>
                toastr.error("{{ Session::get('error') }}");
            </script>
            {{ Session::forget('error') }}
        @endif

        @if (Session::has('info'))
            <script>
                toastr.error("{{ Session::get('info') }}");
            </script>
            {{ Session::forget('info') }}
        @endif
        @yield('script')