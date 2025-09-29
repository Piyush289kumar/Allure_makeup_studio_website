 <div class="vs-gallery-wrapper my-5">
     <div class="container-fluid px-xxl-0 overflow-hidden">
         <div class="row gallery-cutted-slide">

             @foreach ($galleries as $gallery)
                 <div class="col-auto">
                     <div class="gallery-cutted gallery-thumb">
                     {{-- <a href="assets/img/gallery/gal-3-1.jpg"
                             class="icon-thumb popup-image"><i class="fab fa-instagram"></i></a> --}}

                         <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gallery image" class="w-100">

                     </div>
                 </div>
             @endforeach

         </div>
         <div class="pt-40 d-flex justify-content-center gap-4"><button data-slick-prev=".gallery-cutted-slide"
                 class="slick-arrow slick-prev default"><span class="long-arrow"></span></button> <button
                 data-slick-next=".gallery-cutted-slide" class="slick-arrow slick-next default"><span
                     class="long-arrow"></span></button></div>
     </div>
 </div>
