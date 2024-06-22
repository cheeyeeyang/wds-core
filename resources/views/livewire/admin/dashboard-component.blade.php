<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-sm-12"></div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title"><b>ລາຍຮັບປະຈຳປີ</b></h3>
                                <!-- <a href="javascript:void(0);">View Report</a> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10"></div>
                                <div class="col-md-2">
                                    <select name="" id="" class="form-control">
                                        <option value="">ລາຍຮັບ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-row justify-content-start">
                                <span class="mr-2">
                                    <i class="fas fa-square text-primary"></i> ສາຍ ທ.ເລັນ
                                </span>

                                <span>
                                    <i class="fas fa-square text-success"></i> ສາຍ ທ.ຕິ
                                </span>
                            </div>

                            <!-- <div class="position-relative mb-4">
                                <canvas id="visitors-chart" height="200"></canvas>
                            </div> -->

                            <!-- solid sales graph -->
                            <div class="card bg-gradient-info">
                                <div class="card-header border-0">
                                    <h3 class="card-title">
                                        <i class="fas fa-th mr-1"></i>
                                        Sales Graph
                                    </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas class="chart" id="line-chart" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer bg-transparent">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">

                                            <div class="text-white">Mail-Orders</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-4 text-center">
                                            <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">

                                            <div class="text-white">Online</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-4 text-center">
                                            <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">

                                            <div class="text-white">In-Store</div>
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.card End-->
                </div>
            </div>
        </div>
    </section>
</div>
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('line-chart').getContext('2d');
        var lineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Sample Data',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    fill: true // You can toggle fill between true and false
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Months'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        display: true,
                        title: {
                            display: true,
                            text: 'Value'
                        }
                    }
                }
            }
        });
    });
</script>
@endpush