@extends('layouts.user')

@section('content_inner')
    <div class="post_form mt-50">
        <div class="post_title">
            <h5 class="title">Men barada üýtgetmek</h5>
        </div>
        <form action="profile-settings.html#">
            <div class="row">
                <div class="col-md-6">
                    <div class="single_form">
                        <input type="text" placeholder="Adym">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single_form">
                        <select>
                            <option value="">Ýerleşýän ýerim</option>
                            @foreach(\App\Models\Location::all() as $item)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single_form">
                        <input type="email" placeholder="E-poçta">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single_form">
                        <input type="text" placeholder="Telefon belgi">
                    </div>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="single_form">
                        <button class="main-btn">Ýatda sakla</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <div class="post_form mt-50">
        <div class="post_title">
            <h5 class="title">Açar sözi üýtgetmek</h5>
        </div>
        <form action="#">
            <div class="row">
                <div class="col-md-6">
                    <div class="single_form">
                        <input type="password" placeholder="Häzirki açar söz">
                    </div>
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <div class="single_form">
                        <input type="password" placeholder="Täze açar söz">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single_form">
                        <input type="password" placeholder="Täze açar söz gaýtala">
                    </div>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="single_form">
                        <button class="main-btn">Üýtget</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
