@extends('layouts.default')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <!-- Widgets  -->
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-1">
                            <i class="pe-7s-cash"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text">Rp. <span class="count">123901212</span></div>
                                <div class="stat-heading">Penghasilan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-2">
                            <i class="pe-7s-cart"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">3435</span></div>
                                <div class="stat-heading">Penjualan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Widgets -->
    <!--  /Traffic -->
    <div class="clearfix"></div>
    <!-- Orders -->
    <div class="orders">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Pembelian Terbaru </h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="serial">1.</td>
                                        <td> #5469 </td>
                                        <td> <span class="name">Sunscreen</span> </td>
                                        <td> <span class="product">Innisfree</span> </td>
                                        <td><span class="count">1</span></td>
                                        <td>
                                            <span class="badge badge-complete">Complete</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="serial">2.</td>
                                        <td> #5468 </td>
                                        <td> <span class="name">Eyeshadow</span> </td>
                                        <td> <span class="product">Focallure</span> </td>
                                        <td><span class="count">1</span></td>
                                        <td>
                                            <span class="badge badge-complete">Complete</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="serial">3.</td>
                                        <td> #5467 </td>
                                        <td> <span class="name">Lipcream</span> </td>
                                        <td> <span class="product">Apieu</span> </td>
                                        <td><span class="count">1</span></td>
                                        <td>
                                            <span class="badge badge-complete">Complete</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="serial">4.</td>
                                        <td> #5466 </td>
                                        <td> <span class="name">Balqis</span> </td>
                                        <td> <span class="product">Shofiyah Hijab</span> </td>
                                        <td><span class="count">1</span></td>
                                        <td>
                                            <span class="badge badge-pending">Pending</span>
                                        </td>
                                    </tr>
                                    <tr class=" pb-0">
                                        <td class="serial">5.</td>
                                        <td> #5465 </td>
                                        <td> <span class="name">Toner</span> </td>
                                        <td> <span class="product">Somebymi</span> </td>
                                        <td><span class="count">1</span></td>
                                        <td>
                                            <span class="badge badge-complete">Complete</span>
                                        </td>
                                    </tr>
                                    <tr class=" pb-0">
                                        <td class="serial">5.</td>
                                        <td> #5466 </td>
                                        <td> <span class="name">Face Wash</span> </td>
                                        <td> <span class="product">COSRX</span> </td>
                                        <td><span class="count">1</span></td>
                                        <td>
                                            <span class="badge badge-complete">Complete</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                </div> <!-- /.card -->
            </div> <!-- /.col-lg-8 -->

            <div class="col-xl-4">
                <div class="row">
                    <div class="col-lg-6 col-xl-12">
                        <div class="card br-0">
                            <div class="card-body">
                                <div class="chart-container ov-h">
                                    <div id="flotPie1" class="float-chart"></div>
                                </div>
                            </div>
                        </div><!-- /.card -->
                    </div>
                </div>
            </div> <!-- /.col-md-4 -->
        </div>
    </div>
    <!-- /.orders -->
    <!-- /#add-category -->
</div>
<!-- .animated -->

@endsection
