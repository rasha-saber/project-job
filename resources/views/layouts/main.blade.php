<!DOCTYPE html>
<html lang="en">
includes_index
@include('includes_index.head')

<body>



            
    @include('includes_index.Spinner')

    
@include('includes_index.navbar')


 

@yield('content')


@include('includes_index.Footer')




@include('includes_index.Footerjs') 

 
 </body>

</html> 

