@extends('layouts.base')

@section('javascripts')
    @parent

    <script>
        var time = $("#timer").text();
        setInterval(() => {
            time--;
            if (time < 1){
                time = 0;
            }
            $("#timer").text(time)
        }, 1000);
    </script>

@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="single_dashboard_box">
                <div class="row d-flex" style="align-items: center; justify-content: center; margin: 0 auto;">

                    <div class="col-sm-4" style="padding: 1rem;">
                        <img src="./assets/user.png" style="max-width: 130px; border-radius: 100%;">
                    </div>

                    <div class="col-sm-4" style="padding: 1rem;">
                        <img src="./assets/Keshde.png" style="max-width:130px">
                    </div>

                    <div class="col-sm-4" style="padding: 1rem;">
                        <div class="box_content media-body">
                            <h6 class="title" style="font-size:25px">Turkmen Keshde</h6>
                        </div>
                    </div>
                </div>

                <div class="d-flex" style="padding: 1rem; align-items: center; justify-content: space-between;">

                    <div style="border-radius: 30%; border-color: #dc3545; border-style: outset;">
                        <div style=" margin: 1rem;">
                            <h6 class="title" style="font-size:25px">Başlangyç baha</h6>
                            <div class="table_price" style="color:#dc3545; font-size: 35px;">
                                <span>299TMT</span>
                            </div>
                        </div>
                    </div>


                    <div>
                        <h6 class="title" style="font-size:22px">Timer</h6>
                        <h4 class="title" id="timer" style="color:#dc3545; font-size: 35px;">180</h4>
                    </div>

                </div>

                <div style="padding: 2rem">
                    <img src="./assets/users/m1.png" style="max-width: 80px ;border-radius: 100%; padding: .3rem">
                    <img src="./assets/users/m2.jpeg" style="max-width: 80px ;border-radius: 100%; padding: .3rem">
                    <img src="./assets/users/m3.jpeg" style="max-width: 80px ;border-radius: 100%; padding: .3rem">
                    <img src="./assets/users/m4.jpeg" style="max-width: 80px ;border-radius: 100%; padding: .3rem">
                    <img src="./assets/users/m5.jpeg" style="max-width: 80px ;border-radius: 100%; padding: .3rem">
                    <img src="./assets/users/m6.jpeg" style="max-width: 80px ;border-radius: 100%; padding: .3rem">
                    <img src="./assets/images/author-1.jpg" style="max-width: 80px ;border-radius: 100%; padding: .3rem">
                    <img src="./assets/images/author-1.jpg" style="max-width: 80px ;border-radius: 100%; padding: .3rem">
                    <img src="./assets/images/author-1.jpg" style="max-width: 80px ;border-radius: 100%; padding: .3rem">
                    <img src="./assets/images/author-1.jpg" style="max-width: 80px ;border-radius: 100%; padding: .3rem">
                    <img src="./assets/images/author-1.jpg" style="max-width: 80px ;border-radius: 100%; padding: .3rem">
                    <img src="./assets/images/author-1.jpg" style="max-width: 80px ;border-radius: 100%; padding: .3rem">
                    <img src="./assets/images/author-1.jpg" style="max-width: 80px ;border-radius: 100%; padding: .3rem">
                    <img src="./assets/images/author-1.jpg" style="max-width: 80px ;border-radius: 100%; padding: .3rem">
                </div>
            </div>
        </div>
    </div>
@endsection
