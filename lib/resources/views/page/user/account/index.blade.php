@extends('layout_user.main')

@section('page_title')
    Home
@endsection

@section('css')
    <link href="{{asset('assets/css_user/page/account.css')}}" rel="stylesheet">
@endsection

@section('page_content')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>truong160196</h2>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <div class="body-account">
        <div class="container">
            <div class="tabs">
                <button class="btn btn-tab active" data-index="0">Dashboard</button>
                <button class="btn btn-tab " data-index="1">Deposit</button>
                <button class="btn btn-tab " data-index="2">Withdraw</button>
                <button class="btn btn-tab " data-index="3">Setting</button>
            </div>
            <div class="tab-content">
                <div class="blog-sidebar dashboard row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="widget card">
                            <div class="card-title">
                                <label>Account Balance</label>
                                <select class="form-control balance-type" id="balanceType" name="balanceType">
                                    <option value="BTC">BTC</option>
                                    <option value="ETH">ETH</option>
                                    <option value="QTN">QTN</option>
                                </select>
                            </div>
                            <div class="card-body">
                                <h3>0.3256</h3>
                                <h4>BTC</h4></div>
                            <div class="card-title">
                                <label>Estimated Value</label>
                            </div>
                            <div class="card-body">
                                <h5>~ 3,652</h5>
                                <h5>USD</h5></div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="ticket-title">
                                <label>History</label>
                            </div>
                            <div class="ticket">
                                <table class="table table-lottery">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Action</th>
                                        <th>Detail</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>5</td>
                                        <td>Donate</td>
                                        <td>0xkjdsankc023kjjcakdj</td>
                                        <td><span class="loss">Fail</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
{{--    <script src="{{asset('assets/js_user/page/faq.js')}}"></script>--}}
@endsection

