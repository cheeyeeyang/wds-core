<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-3 ml-2 mr-2">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <button wire:click="setIndex(0)" type="button" class="btn btn-info btn-block">
                                <h4>ຂາຍໜ້າໂຮງງານ</h4>
                            </button>
                        </div>

                        <div class="col-md-6">
                            <button wire:click="setIndex(1)" type="button" class="btn btn-outline-info btn-block">
                                <h4>ຊຳລະໜີ້</h4>
                            </button>
                        </div>
                    </div>
                    <style>
                        .shiayang {
                            overflow-y: auto;
                            max-height: 60vh;
                        }

                        .shiayang::-webkit-scrollbar {
                            width: 0px;
                        }

                        @media (max-width: 580px) {

                            .scroll-shiayang-box {
                                grid-template-columns: repeat(3, 1fr);
                            }

                            .shiayang {
                                margin-top: -2rem;
                                overflow-y: auto;
                                max-height: 60vh;
                            }

                            /* #pos-content {
                                height: 90vh;
                            } */
                        }
                    </style>

                    <!-- card-product -->
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="search...">
                                </div>
                                <div class="col-md-8"></div>
                            </div>
                            <div class=" row shiayang scroll-shiayang-box mt-3">
                                @foreach($products as $item)
                                <div class="col-sx-14 col-sm-6 col-md-4 mt-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="show-image-buy text-center">
                                                <div class="card" style="border: 5px; color: secondary;">
                                                    <img src="{{ asset('image/water.jpg') }}" alt="" class="mx-auto d-block" style="width: 100px;">
                                                </div>
                                                <div class="pation">
                                                    <h6>{{$item->product_name}}</h6>
                                                    <h6 class="text-primary"> ລາຄາ: {{number_format($item->price_cost)}} ₭</h6>
                                                    <p class="holder"><a href="#" wire:click="addToCart(' {{$item->id}} ')" class="btn btn-primary btn-sm btn-block"> ເພີ່ມ</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>

                <!--add to card-->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-light">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 style="border-radius: 20%;" class="text-center"><b>ລວມໃບບິນ</b></h5>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>ວັນທີ</p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <p>
                                        @php echo date("d/m/Y") @endphp
                                    </p>
                                </div>
                                <!--  -->
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <p> ນໍ້າຕຸກໃຫ່ຍ 18ລີດ</p>
                                </div>
                                <div class="col-md-2">
                                    <p>5x</p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <p><b> 100,000,000</b></p>
                                </div>
                                <div class="col-md-6">
                                    <p> ນໍ້າຕຸກໃຫ່ຍ 18ລີດ</p>
                                </div>
                                <div class="col-md-2">
                                    <p>5x</p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <p><b> 100,000,000</b></p>
                                </div>
                            </div>
                            <!--  -->
                            
                            <br>
                            <div class="row">
                                <div class="col-md-7">
                                    <h6><b>ຍອດລວມທັງໝົດ :</b></h6>
                                </div>
                                <div class="col-md-5 text-right">
                                    <h5 class="text-success"><b> ₭ 200,000,000</b></h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <p>ຮັບເງີນ</p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <p><b> ₭100,000,000</b></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>ຖອນເງີນ</p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <p><b>₭100,000,000</b></p>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-outline-info btn-block">ຮັບເງີນ</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-light"><i class="fa fa-money" aria-hidden="true"></i> ເງິນສົດ</button>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-light"><i class="fa fa-credit-card" aria-hidden="true"></i> ເງິນໂອນ</button>
                                </div>
                            </div>


                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-success btn-block">ພິມໃບບິນ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end-add to card -->

                <div class="col-md-12">
                    <div class="card mt-5">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>
                                        <b>ລາຍການຂາຍ</b>
                                    </h5>
                                </div>
                                <div class="col-md-3"></div>
                                <div class="col-md-2">
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" placeholder="search">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table">
                                        <thead class="table-secondary">
                                            <tr>
                                                <th>ລຳດັບ</th>
                                                <th>ເລກທີ</th>
                                                <th>ເວລາ</th>
                                                <th>ວັນທີ</th>
                                                <th>ລາຍລະອຽດ</th>
                                                <th>ຈຳນວນເງິນ</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>0001</td>
                                                <td>13:57</td>
                                                <td>
                                                    8/6/2024
                                                </td>
                                                <td>ນໍ້າຕຸກໃຫ່ຍ 18ລີດ : 244</td>
                                                <td>150,000</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm">ລາຍລະອຽດ</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>0001</td>
                                                <td>13:57</td>
                                                <td>
                                                    8/6/2024
                                                </td>
                                                <td>ນໍ້າຕຸກໃຫ່ຍ 18ລີດ : 244</td>
                                                <td>150,000</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm">ລາຍລະອຽດ</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="5"><b>ຍອດລວມ:</b></td>
                                                <td colspan="1" width="20%">
                                                    <input type="text" class="form-control">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>

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
    </section>
</div>