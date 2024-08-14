<!DOCTYPE html>
<html lang="en">

@include('includes_index.head')

<body>

<div class="container-xxl bg-white p-0">


    @include('includes_index.Spinner')


    @include('includes_index.navbar')




    @yield('content')


    @include('includes_index.Footer')




    @include('includes_index.Footerjs')
</div>

</body>

</html>