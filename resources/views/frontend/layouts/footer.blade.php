<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
    <h4>Companybox</h4>
    <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>Lên đầu trang</a>
    <div class="w3-xlarge w3-section">
        <a href="{{config('companybase.facebook')}}" target="_brank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
        <a href="{{config('companybase.instagram')}}"><i class="fa fa-instagram w3-hover-opacity"></i></a>
        <a href="{{config('companybase.twitter')}}"><i class="fa fa-twitter w3-hover-opacity"></i></a>
        <a href="{{config('companybase.youtube')}}"><i class="fa fa-youtube w3-hover-opacity"></i></a>
    </div>
    <p>Được cung cấp bởi <a href="abc.com" title="Companybox" class="w3-hover-text-green">Companybox</a></p>
</footer>



<script src="{{asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script>

<script type="text/javascript" src="{{asset('admin/assets/plugins/toastr/toastr.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/plugins/toastr/toastr.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/plugins/toastr/toastr.css')}}">

<script type="text/javascript">
    @if(Session::has('success'))
    var type = "{{ Session::get('alert-type', 'success') }}";
    switch (type) {
        case 'success':
            toastr.success("{{ Session::get('success') }}", {
                timeOut: 2000
            });
            break;
    }
    @endif

    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'message') }}";
    switch (type) {
        case 'message':
            toastr.info("{{ Session::get('message') }}", {
                timeOut: 2000
            });
            break;
    }
    @endif

    @if(Session::has('error'))
    var type = "{{ Session::get('alert-type', 'error') }}";
    switch (type) {
        case 'error':
            toastr.error("{{ Session::get('error') }}", {
                timeOut: 2000
            });
            break;
    }
    @endif

    @if(Session::has('status'))
    var type = "{{ Session::get('alert-type', 'status') }}";
    switch (type) {
        case 'status':
            toastr.info("{{ Session::get('status') }}", {
                timeOut: 2000
            });
            break;
    }
    @endif

</script>


<script  type="text/javascript">
    // Slideshow
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demodots");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        };
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " w3-white";
    }

</script>
