@extends('layouts.user')

@section('content_inner')
    <div class="dashboard_content mt-50">
        <div class="post_title">
            <h5 class="title">Dashboard</h5>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="single_dashboard_box d-flex">
                    <div class="box_icon">
                        <i class="fal fa-file-alt"></i>
                    </div>
                    <div class="box_content media-body">
                        <h6 class="title"><a href="dashboard.html#">Total Ad Posted</a></h6>
                        <p>480 Add Posted</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single_dashboard_box d-flex">
                    <div class="box_icon">
                        <i class="fal fa-file-plus"></i>
                    </div>
                    <div class="box_content media-body">
                        <h6 class="title"><a href="dashboard.html#">Featured Ads</a></h6>
                        <p>80 Add Posted</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single_dashboard_box d-flex">
                    <div class="box_icon">
                        <i class="fal fa-envelope-open-text"></i>
                    </div>
                    <div class="box_content media-body">
                        <h6 class="title"><a href="dashboard.html#">Offers / Messages</a></h6>
                        <p>2040 Add Posted</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ads_table table-responsive mt-30">
            <table class="table">
                <thead>
                <tr>
                    <th class="checkbox">
                        <div class="table_checkbox">
                            <input type="checkbox" id="checkbox1">
                            <label for="checkbox1"></label>
                        </div>
                    </th>
                    <th class="photo">Photo</th>
                    <th class="title">Title</th>
                    <th class="category">Category</th>
                    <th class="status">Ad Status</th>
                    <th class="price">Price</th>
                    <th class="action">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="checkbox">
                        <div class="table_checkbox">
                            <input type="checkbox" id="checkbox2">
                            <label for="checkbox2"></label>
                        </div>
                    </td>
                    <td class="photo">
                        <div class="table_photo">
                            <img src="assets/images/ads-1.png" alt="ads">
                        </div>
                    </td>
                    <td class="title">
                        <div class="table_title">
                            <h6 class="titles">8 GB DDR4 Ram, 4th Gen</h6>
                            <p>Ad ID: ng3D5hAMHPajQrM</p>
                        </div>
                    </td>
                    <td class="category">
                        <div class="table_category">
                            <p>Ram &amp; Laptop</p>
                        </div>
                    </td>
                    <td class="status">
                        <div class="table_status">
                            <span class="active">active</span>
                        </div>
                    </td>
                    <td class="price">
                        <div class="table_price">
                            <span>$299.00</span>
                        </div>
                    </td>
                    <td class="action">
                        <div class="table_action">
                            <ul>
                                <li><a href="dashboard.html#"><i class="fal fa-eye"></i></a></li>
                                <li><a href="dashboard.html#"><i class="fal fa-pencil"></i></a></li>
                                <li><a href="dashboard.html#"><i class="fal fa-trash-alt"></i></a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="checkbox">
                        <div class="table_checkbox">
                            <input type="checkbox" id="checkbox3">
                            <label for="checkbox3"></label>
                        </div>
                    </td>
                    <td class="photo">
                        <div class="table_photo">
                            <img src="assets/images/ads-2.png" alt="ads">
                        </div>
                    </td>
                    <td class="title">
                        <div class="table_title">
                            <h6 class="titles">8 GB DDR4 Ram, 4th Gen</h6>
                            <p>Ad ID: ng3D5hAMHPajQrM</p>
                        </div>
                    </td>
                    <td class="category">
                        <div class="table_category">
                            <p>Ram &amp; Laptop</p>
                        </div>
                    </td>
                    <td class="status">
                        <div class="table_status">
                            <span class="active">active</span>
                        </div>
                    </td>
                    <td class="price">
                        <div class="table_price">
                            <span>$299.00</span>
                        </div>
                    </td>
                    <td class="action">
                        <div class="table_action">
                            <ul>
                                <li><a href="dashboard.html#"><i class="fal fa-eye"></i></a></li>
                                <li><a href="dashboard.html#"><i class="fal fa-pencil"></i></a></li>
                                <li><a href="dashboard.html#"><i class="fal fa-trash-alt"></i></a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="checkbox">
                        <div class="table_checkbox">
                            <input type="checkbox" id="checkbox4">
                            <label for="checkbox4"></label>
                        </div>
                    </td>
                    <td class="photo">
                        <div class="table_photo">
                            <img src="assets/images/ads-3.png" alt="ads">
                        </div>
                    </td>
                    <td class="title">
                        <div class="table_title">
                            <h6 class="titles">8 GB DDR4 Ram, 4th Gen</h6>
                            <p>Ad ID: ng3D5hAMHPajQrM</p>
                        </div>
                    </td>
                    <td class="category">
                        <div class="table_category">
                            <p>Ram &amp; Laptop</p>
                        </div>
                    </td>
                    <td class="status">
                        <div class="table_status">
                            <span class="sold">Sold</span>
                        </div>
                    </td>
                    <td class="price">
                        <div class="table_price">
                            <span>$299.00</span>
                        </div>
                    </td>
                    <td class="action">
                        <div class="table_action">
                            <ul>
                                <li><a href="dashboard.html#"><i class="fal fa-eye"></i></a></li>
                                <li><a href="dashboard.html#"><i class="fal fa-pencil"></i></a></li>
                                <li><a href="dashboard.html#"><i class="fal fa-trash-alt"></i></a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="checkbox">
                        <div class="table_checkbox">
                            <input type="checkbox" id="checkbox5">
                            <label for="checkbox5"></label>
                        </div>
                    </td>
                    <td class="photo">
                        <div class="table_photo">
                            <img src="assets/images/ads-4.png" alt="ads">
                        </div>
                    </td>
                    <td class="title">
                        <div class="table_title">
                            <h6 class="titles">8 GB DDR4 Ram, 4th Gen</h6>
                            <p>Ad ID: ng3D5hAMHPajQrM</p>
                        </div>
                    </td>
                    <td class="category">
                        <div class="table_category">
                            <p>Ram &amp; Laptop</p>
                        </div>
                    </td>
                    <td class="status">
                        <div class="table_status">
                            <span class="expired">Expired</span>
                        </div>
                    </td>
                    <td class="price">
                        <div class="table_price">
                            <span>$299.00</span>
                        </div>
                    </td>
                    <td class="action">
                        <div class="table_action">
                            <ul>
                                <li><a href="dashboard.html#"><i class="fal fa-eye"></i></a></li>
                                <li><a href="dashboard.html#"><i class="fal fa-pencil"></i></a></li>
                                <li><a href="dashboard.html#"><i class="fal fa-trash-alt"></i></a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="checkbox">
                        <div class="table_checkbox">
                            <input type="checkbox" id="checkbox6">
                            <label for="checkbox6"></label>
                        </div>
                    </td>
                    <td class="photo">
                        <div class="table_photo">
                            <img src="assets/images/ads-5.png" alt="ads">
                        </div>
                    </td>
                    <td class="title">
                        <div class="table_title">
                            <h6 class="titles">8 GB DDR4 Ram, 4th Gen</h6>
                            <p>Ad ID: ng3D5hAMHPajQrM</p>
                        </div>
                    </td>
                    <td class="category">
                        <div class="table_category">
                            <p>Ram &amp; Laptop</p>
                        </div>
                    </td>
                    <td class="status">
                        <div class="table_status">
                            <span class="inactive">Inactive</span>
                        </div>
                    </td>
                    <td class="price">
                        <div class="table_price">
                            <span>$299.00</span>
                        </div>
                    </td>
                    <td class="action">
                        <div class="table_action">
                            <ul>
                                <li><a href="dashboard.html#"><i class="fal fa-eye"></i></a></li>
                                <li><a href="dashboard.html#"><i class="fal fa-pencil"></i></a></li>
                                <li><a href="dashboard.html#"><i class="fal fa-trash-alt"></i></a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="checkbox">
                        <div class="table_checkbox">
                            <input type="checkbox" id="checkbox7">
                            <label for="checkbox7"></label>
                        </div>
                    </td>
                    <td class="photo">
                        <div class="table_photo">
                            <img src="assets/images/ads-6.png" alt="ads">
                        </div>
                    </td>
                    <td class="title">
                        <div class="table_title">
                            <h6 class="titles">8 GB DDR4 Ram, 4th Gen</h6>
                            <p>Ad ID: ng3D5hAMHPajQrM</p>
                        </div>
                    </td>
                    <td class="category">
                        <div class="table_category">
                            <p>Ram &amp; Laptop</p>
                        </div>
                    </td>
                    <td class="status">
                        <div class="table_status">
                            <span class="expired">Expired</span>
                        </div>
                    </td>
                    <td class="price">
                        <div class="table_price">
                            <span>$299.00</span>
                        </div>
                    </td>
                    <td class="action">
                        <div class="table_action">
                            <ul>
                                <li><a href="dashboard.html#"><i class="fal fa-eye"></i></a></li>
                                <li><a href="dashboard.html#"><i class="fal fa-pencil"></i></a></li>
                                <li><a href="dashboard.html#"><i class="fal fa-trash-alt"></i></a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="checkbox">
                        <div class="table_checkbox">
                            <input type="checkbox" id="checkbox7">
                            <label for="checkbox7"></label>
                        </div>
                    </td>
                    <td class="photo">
                        <div class="table_photo">
                            <img src="assets/images/ads-7.png" alt="ads">
                        </div>
                    </td>
                    <td class="title">
                        <div class="table_title">
                            <h6 class="titles">8 GB DDR4 Ram, 4th Gen</h6>
                            <p>Ad ID: ng3D5hAMHPajQrM</p>
                        </div>
                    </td>
                    <td class="category">
                        <div class="table_category">
                            <p>Ram &amp; Laptop</p>
                        </div>
                    </td>
                    <td class="status">
                        <div class="table_status">
                            <span class="deleted">Deleted</span>
                        </div>
                    </td>
                    <td class="price">
                        <div class="table_price">
                            <span>$299.00</span>
                        </div>
                    </td>
                    <td class="action">
                        <div class="table_action">
                            <ul>
                                <li><a href="dashboard.html#"><i class="fal fa-eye"></i></a></li>
                                <li><a href="dashboard.html#"><i class="fal fa-pencil"></i></a></li>
                                <li><a href="dashboard.html#"><i class="fal fa-trash-alt"></i></a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
