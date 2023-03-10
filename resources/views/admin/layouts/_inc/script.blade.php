<!-- bundle -->
<script src="{{ asset('/') }}admin/assets/js/vendor.min.js"></script>
<script src="{{ asset('/') }}admin/assets/js/app.min.js"></script>

<!-- third party js -->
<script src="{{ asset('/') }}admin/assets/js/vendor/apexcharts.min.js"></script>
<script src="{{ asset('/') }}admin/assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ asset('/') }}admin/assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="{{ asset('/') }}admin/assets/js/pages/demo.dashboard.js"></script>

<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'editor1' );
</script>

<!-- end demo js-->
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

