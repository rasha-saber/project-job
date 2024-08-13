 @extends('layouts.main')

 <div class="container-xxl bg-white p-0">
 </div>
         
@include('includes_index.Carousel')

   @section('content')






   @include('includes_index.Search')


   @include('includes_index.Category')


   @include('includes_index.About')


   @include('includes_index.Jobs')


   @include('includes_index.Testimonial')
       
   @endsection
   <!-- Back to Top-->
   <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> 
</div>