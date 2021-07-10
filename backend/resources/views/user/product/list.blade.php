@extends('layouts.user')

@section('content_inner')
    <div class="dashboard_content mt-50">
        <div class="post_title">
            <h5 class="title">Harytlarym</h5>
        </div>
        <br>
        <div class="row">
            <div class="col-12 text-right">
                <a href="{{ route('user.product_create') }}" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Haryt goş
                </a>
            </div>
        </div>
        <div class="ads_table table-responsive mt-30">
            <table class="table">
                <thead>
                <tr>
                    <th class="photo">Surat</th>
                    <th class="title">Ady</th>
                    <th class="category">Bölüm</th>
                    <th class="status">Ýagdaýy</th>
                    <th class="price">Baha</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $item)
                    <tr>
                        <td class="photo">
                            <div class="table_photo">
                                <img src="{{ asset($item->cover_path) }}" alt="ads">
                            </div>
                        </td>
                        <td class="title">
                            <div class="table_title">
                                <a href="{{ route('user.product_edit', ['product' => $item]) }}">
                                    <h6 class="titles">{{ $item->title }}</h6>
                                </a>
                            </div>
                        </td>
                        <td class="category">
                            <div class="table_category">
                                <p>
                                        {{ $item->category->title }}
                                </p>
                            </div>
                        </td>
                        <td class="status">
                            <div class="table_status">
                                <span class="active">active</span>
                            </div>
                        </td>
                        <td class="price">
                            <div class="table_price">
                                <span>
                                    {{ $item->priceText() }}
                                </span>
                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
