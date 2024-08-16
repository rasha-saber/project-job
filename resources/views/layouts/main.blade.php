<!DOCTYPE html>
<html lang="en">

@include('includes_index.head')

<body>

<div class="container-xxl bg-white p-0">


    @include('includes_index.Spinner')


    @include('includes_index.navbar')


    

    @yield('content')
    @yield('contentabout')

    @include('includes_index.Footer')

 <!-- Back to Top-->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
 </div>


    @include('includes_index.Footerjs')
</div>

</body>

</html>