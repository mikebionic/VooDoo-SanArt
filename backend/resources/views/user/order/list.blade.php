@extends('layouts.user')

@section('content_inner')
    <div class="dashboard_content mt-50">
        <div class="post_title">
            <h5 class="title">Şahsy otag</h5>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="single_dashboard_box d-flex">
                    <div class="box_icon">
                        <i class="fal fa-file-alt"></i>
                    </div>
                    <div class="box_content media-body">
                        <h6 class="title"><a href="#">Jemi harytlar</a></h6>
                        <p>480 sany</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single_dashboard_box d-flex">
                    <div class="box_icon">
                        <i class="fal fa-file-plus"></i>
                    </div>
                    <div class="box_content media-body">
                        <h6 class="title"><a href="#">Jemi girdeji</a></h6>
                        <p>45 350 TMT</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single_dashboard_box d-flex">
                    <div class="box_icon">
                        <i class="fal fa-envelope-open-text"></i>
                    </div>
                    <div class="box_content media-body">
                        <h6 class="title"><a href="#">Satyn alynan harytlar</a></h6>
                        <p>90 sany</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
