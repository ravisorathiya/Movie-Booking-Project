<!-- Script -->

<script src="{{  asset('public/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{  asset('public/assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{  asset('public/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script> 
<script src="{{  asset('public/assets/vendor/easy -responsive -tabs/easy -responsive -tabs.js')}}"></script>
<script src="{{  asset('public/assets/js/theme.js')}}"></script> 
<script src="{{  asset('public/assets/js/tab.js')}}"></script>

<script src="{{  asset('public/assets/js/grt-youtube-popup.js')}}" type="text/javascript"></script>
<script> $(".youtube-link").grtyoutube(); </script>
    <script> $(".youtube-link").grtyoutube({ autoPlay:false }); </script>   
    <script> $(".youtube-link").grtyoutube({ theme:"dark" }); </script>

<script>
    $(document).ready(function () {
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
        });
    });
    var token='{{csrf_token()}}';
</script>

<script src="{{ asset('public/assets/js/set.js') }}" type="text/javascript"></script>"