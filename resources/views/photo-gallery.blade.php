@php($title = "Photo Gallery | Bombay Hospital Indore")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!-- BREADCRUMB
			============================================= -->
<div id="breadcrumb" class="division">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class=" breadcrumb-holder">

                    <!-- Breadcrumb Nav -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Photo Gallery</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Photo Gallery</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<div id="gallery-3" class="gallery-section division">
    <div class="container-fluid">


        <!-- GALLERY FILTERING BUTTONS -->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="gallery-filter mb-60">

                    <button data-filter="*" class="is-checked">All</button>
                    <button data-filter=".diagnostic">Diagnostic Facilities</button>
                    <button data-filter=".icu">Operation Theatre & ICU</button>
                    <button data-filter=".therapeutic">Therapeutic</button>
                    <button data-filter=".round">Round the Clock</button>
                    <button data-filter=".support">Support Services</button>
                    <button data-filter=".patient">Patient Care</button>
                    <button data-filter=".nursing">Nursing College</button>
                    <button data-filter=".rooms">Rooms</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row gallery-items-list">
            <div class="col-md-12 masonry-wrap grid-loaded">
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g1.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g1.jpg')}}" title=""><i
                                    class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g2.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g2.jpg')}}" title=""><i
                                    class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g3.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g3.jpg')}}" title=""><i
                                    class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g4.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g4.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g5.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g5.jpg')}}" title=""><i
                                    class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g6.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g6.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g7.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g7.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g8.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g8.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g9.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g9.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g10.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g10.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g11.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g11.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g12.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g12.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g13.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g13.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g14.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g14.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g15.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g15.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g16.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g16.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g17.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g17.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g17.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g17.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g18.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g18.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g19.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g19.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g20.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g20.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g21.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g21.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g22.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g22.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g23.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g23.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g24.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g24.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g25.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g25.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g26.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g26.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g27.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g27.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g28.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g28.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g29.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g29.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item diagnostic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g30.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/g30.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>


                <!-- ************************************************************** -->

                <!-- IMAGE #1 -->
                <div class="gallery-item icu">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/icu-1.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/icu-1.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item icu">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/icu-2.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/icu-2.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item icu">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/icu-3.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/icu-3.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item icu">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/icu-4.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/icu-4.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item icu">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/icu-5.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/icu-5.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item icu">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/icu-6.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/icu-6.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <!-- IMAGE #1 -->
                <div class="gallery-item icu">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/icu-7.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/icu-7.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item icu">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/icu-8.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/icu-8.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item icu">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/icu-9.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/icu-9.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item icu">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/icu-10.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/icu-10.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item icu">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/icu-11.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/icu-11.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item icu">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/icu-12.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/icu-12.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item icu">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/icu-13.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/icu-13.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item icu">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/icu-14.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/icu-14.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item icu">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/icu-15.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/icu-15.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item icu">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/icu-16.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/icu-16.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>

                <!-- ************************************************************** -->
                <div class="gallery-item therapeutic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/thera-1.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/thera-1.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item therapeutic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/thera-2.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/thera-2.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item therapeutic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/thera-3.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/thera-3.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item therapeutic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/thera-4.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/thera-4.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item therapeutic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/thera-5.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/thera-5.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item therapeutic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/thera-6.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/thera-6.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item therapeutic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/thera-7.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/thera-7.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item therapeutic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/thera-8.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/thera-8.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item therapeutic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/thera-9.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/thera-9.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item therapeutic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/thera-10.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/thera-10.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item therapeutic">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/thera-11.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/thera-11.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>

                <!-- ************************************************************** -->
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-1.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-1.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-2.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-2.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-3.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-3.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-4.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-4.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-5.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-5.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-6.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-6.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-7.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-7.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-8.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-8.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-9.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-9.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-10.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-10.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-11.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-11.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-12.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-12.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-13.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-13.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-14.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-14.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-15.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-15.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-16.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-16.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-17.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-17.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-18.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-18.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item round">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-19.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/round-19.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>


                <!-- ************************************************************** -->
                <div class="gallery-item support">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/support-1.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/support-1.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item support">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/support-2.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/support-2.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item support">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/support-3.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/support-3.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item support">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/support-4.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/support-4.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item support">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/support-5.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/support-5.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item support">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/support-6.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/support-6.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item support">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/support-7.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/support-7.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item support">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/support-8.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/support-8.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>

                <!-- ************************************************************** -->
                <div class="gallery-item patient">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/patient-1.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/patient-1.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item patient">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/patient-2.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/patient-2.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item patient">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/patient-3.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/patient-3.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item patient">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/patient-4.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/patient-4.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item patient">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/patient-5.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/patient-5.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>


                <!-- ************************************************************** -->
                <div class="gallery-item nursing">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/nursing-1.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/nursing-1.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item nursing">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/nursing-2.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/nursing-2.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item nursing">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/nursing-3.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/nursing-3.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item nursing">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/nursing-4.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/nursing-4.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item nursing">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/nursing-5.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/nursing-5.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item nursing">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/nursing-6.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/nursing-6.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item nursing">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/nursing-7.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/nursing-7.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item nursing">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/nursing-8.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/nursing-8.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item nursing">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/nursing-9.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/nursing-9.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item nursing">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/nursing-10.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/nursing-10.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item nursing">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/nursing-11.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/nursing-11.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item nursing">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/nursing-12.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/nursing-12.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item nursing">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/nursing-13.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/nursing-13.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item nursing">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/nursing-14.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/nursing-14.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>


                <!-- ************************************************************** -->
                <div class="gallery-item rooms">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/rooms-1.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/rooms-1.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item rooms">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/rooms-2.jfif')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/rooms-2.jfif')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item rooms">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/rooms-3.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/rooms-3.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item rooms">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/rooms-4.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/rooms-4.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item rooms">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/rooms-5.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/rooms-5.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item rooms">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/rooms-6.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/rooms-6.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item rooms">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/rooms-7.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/rooms-7.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item rooms">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/rooms-8.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/rooms-8.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
                <div class="gallery-item rooms">
                    <div class="hover-overlay">

                        <!-- Gallery Image -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/rooms-9.jpg')}}"
                            alt="galley-image">
                        <div class="item-overlay"></div>

                        <!-- Image Zoom -->
                        <div class="image-zoom">
                            <a class="image-link" href="{{ asset('/resources/assets/images/gallery/rooms-9.jpg')}}"
                                title=""><i class="fas fa-search-plus"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div> <!-- End container -->
</div>


@stop