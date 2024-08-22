<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>

<div class="container-xxl bg-white p-0">


    <!-- @include('includes.Spinner') -->


    @include('includes.navbar')


    

    @yield('content')
    @yield('contentabout')
    @yield('contentjob-list')
    @yield('contentjob-detail')
    @yield('contentcategory')
    @yield('contentTestimonial')
    @yield('contentContact')

    @include('includes.Footer')
   
 <!-- Back to Top-->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
 </div>


    @include('includes.Footerjs')
</div>

</body>

</html>