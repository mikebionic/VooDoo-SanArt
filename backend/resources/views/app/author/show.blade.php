@extends('layouts.base')

@section('javascripts')
    @parent
    <script src="https://api-maps.yandex.ru/2.1/?apikey=2486014f-5aa5-4ac7-a8b8-048d24bde293&lang=ru_RU" type="text/javascript">
    </script>
    <script>
        $(document).ready(function(){

            function init(lat, long){
                // Создание карты.
                var myMap = new ymaps.Map("map", {
                        center: [lat, long],
                        zoom: 15
                    }),
                    myGeoObject = new ymaps.GeoObject({
                        geometry: {
                            type: "Point",
                            coordinates: [lat, long]
                        },
                        properties: {
                            iconContent: 'Awtor şu ýerde'
                        }
                    },{
                        preset: 'islands#blackStretchyIcon',
                        draggable: true
                    });
                myMap.geoObjects
                    .add(myGeoObject)
            }
            var hardcoded = [37.929770, 58.367451]
            $('#latitude').val(hardcoded[0])
            $('#longitude').val(hardcoded[1])
            setTimeout(() => {
                init(hardcoded[0], hardcoded[1])
            }, 3000);

        });

    </script>

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single_locations mt-30">
                    <div class="locations_image">
                        <img src="{{ asset($author->avatar_path) }}" alt="Locations">
                    </div>
                    <div class="locations_content">
                        <h5 class="title">
                            <a href="javascript:void(0)">
                                {{ $author->name }}
                            </a>
                        </h5>
                        <p>{{ $author->title ?? 'Suratçy' }}</p>
                    </div>
                </div>
                <div class="product_sidebar_map mt-30">
                    <div class="product_details_title">
                        <h5 class="title">Geolokasiýasy:</h5>
                    </div>
                    <div class="gmap_canvas">
                        <div id="map" style="width:100%; height:250px"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">

                <div class="row justify-content-center">
                    <div class="section_title text-center pb-15">
                        <h3 class="title">Awtoryň harytlary</h3>
                    </div>
                </div>
                <div class="row">

                    @foreach($author->products as $item)
                        @include('app.product._block', ['product' => $item, 'col' => 'col-md-6 col-sm-12'])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
