<div>
    <section class="content">
        <div class="container">
            <div class="row mt-3">
                <div class="col-sm-12">
                    <h4><b>ຈັດການຂໍ້ມູນພື້ນຖານ</b></h4>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <!-- card-1 -->
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button wire:click="show_DataProducts" type="button" class="btn btn btn-block"><i class="fa fa-graduation-cap" aria-hidden="true"></i> ຂໍ້ມູນສິນຄ້າ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button wire:click="show_DataUnits" type="button" class="btn btn btn-block"><i class="fa fa-graduation-cap" aria-hidden="true"></i> ຂໍ້ມູນຫົວໜ່ອຍ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button wire:click="show_DataPosition" type="button" class="btn btn btn-block"><i class="fa fa-address-card"></i> ຂໍ້ມູນຕຳແໜ່ງ</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card-2 -->
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button wire:click="show_DataStaff" type="button" class="btn btn btn-block"><i class="fa fa-user" aria-hidden="true"></i> ຂໍ້ມູນພະນັກງານ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button wire:click="show_DataBranch_regularCustomer" type="button" class="btn btn btn-block"><i class="fa fa-users" aria-hidden="true"></i> ຂໍ້ມູນສາຂາ ແລະ ລູກຄ້າປະຈຳ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button wire:click="show_DataPrice" type="button" class="btn btn btn-block"><i class="fa fa-credit-card" aria-hidden="true"></i> ຂໍ້ມູນລາຄາ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card-3 -->
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button wire:click="show_DataCustomer" type="button" class="btn btn btn-block"><i class="fa fa-users" aria-hidden="true"></i> ຂໍ້ມູນລູກຄ້າ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button wire:click="show_DataWater" type="button" class="btn btn btn-block"><i class="fa fa-list" aria-hidden="true"></i> ຂໍ້ມູນສາຍນໍ້າ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button wire:click="show_DataWaterInformation" type="button" class="btn btn btn-block"><i class="fa fa-bus" aria-hidden="true"></i> ຂໍ້ມູນທີມສົ່ງນໍ້າ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card-4 -->
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button wire:click="show_DataVillage" type="button" class="btn btn btn-block"><i class="fa fa-bars" aria-hidden="true"></i> ຂໍ້ມູນບ້ານ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button wire:click="show_DataDistrict" type="button" class="btn btn btn-block"><i class="fa fa-bars" aria-hidden="true"></i> ຂໍ້ມູນເມືອງ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button wire:click="show_DataProvince" type="button" class="btn btn btn-block"><i class="fa fa-bars" aria-hidden="true"></i> ຂໍ້ມູນແຂວງ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card-5 -->
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button wire:click="show_CriteriaForAccumulatingPoints" type="button" class="btn btn btn-block"><i class="fa fa-share-alt" aria-hidden="true"></i> ເງື່ອນໄຂການສະສົມຄະແນນ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button wire:click="show_ManageSalaryInformation" type="button" class="btn btn btn-block">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                        ຈັດການຂໍ້ມູນເງີນເດືອນ
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button wire:click="show_TukMoventType" type="button" class="btn btn btn-block"><i class="fa fa-share-alt" aria-hidden="true"></i> ປະເພດການເຄື່ອນໄຫວຕຸກ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- show ເພີ່ມຂໍ້ມູນ ສິນຄ້າ -->
    <div wire:ignore.self class="modal fabe" id="modal-data-products">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b class="text-center">ຈັດການຂໍ້ມູນສິນຄ້າ</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <label for="">ເພີ່ມຂໍ້ມູນ</label>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <input type="hidden" wire:model="hiidenId_product" hidden="{{ $hiidenId_product }}">
                                        <div class="col-md-12">
                                            <label>ຊື່ສິນຄ້າ <span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input wire:model="product_name" type="text" class="form-control @error('product_name') is-invalid @enderror" placeholder="ຊື່ສິນຄ້າ">
                                                @error('product_name')
                                                <span class="error text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label>ຫົວໜ່ອຍ <span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <select wire:model="unit_id" name="" id="" class="form-control @error('unit_id') is-invalid @enderror">
                                                    <option value="">ເລືອກຫົວໜ່ອຍ</option>
                                                    @foreach($selectUnits as $unit)
                                                    <option value="{{$unit->id}}">{{$unit->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('unit_id')
                                                <span class="error text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label>ລາຄາຕົ້ນທືນ <span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input wire:model="price_cost" type="text" class="form-control money @error('price_cost') is-invalid @enderror" placeholder="0.00" onkeypress='validate(event)'>
                                                @error('price_cost')
                                                <span class="error text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-between">
                                        <button wire:click="resetForm_product" class="btn btn-primary"><i class="fa fa-refresh" aria-hidden="true"></i> ຣີເຊັດ</button>
                                        <button wire:click="Store_products" class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i>ບັນທືກ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h6><b>ຂໍ້ມູນສາຂາ ແລະ ລູກຄ້າປະຈຳ</b></h6>
                                        </div>
                                        <div class="col-md-4">
                                            <input wire:model="search" type="text" class="form-control" placeholder="search...">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table">
                                            <thead class="table-secondary">
                                                <tr class="text-center">
                                                    <th>ລຳດັບ</th>
                                                    <th>ຊື່ສິນຄ້າ</th>
                                                    <th>ຫົວໜ່ອຍ</th>
                                                    <th>ລາຄາຕົ້ນທືນ</th>
                                                    <th>ການຈັດການ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $i = 1; @endphp
                                                @foreach($products as $item)
                                                <tr class="text-center">
                                                    <td>{{$i++}}</td>
                                                    <td>{{$item->product_name}}</td>
                                                    <td>
                                                        {{!empty($item->units->name) ? $item->units->name : ''}}
                                                    </td>
                                                    <td>{{number_format($item->price_cost)}}</td>
                                                    <td>
                                                        <a href="#" wire:click="show_product('{{$item->id}}')" class="mr-3"><i class="fa fa-edit"></i> ແກ້ໄຂ</a>
                                                        <a href="#" wire:click="showDetory_product('{{$item->id}}')" class="text-red"><i class="fa fa-trash"></i> ລືບ</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="float-center">
                                            {{$products->links()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- show-delete ຂໍ້ມູນ ສິນຄ້າ -->
    <div wire:ignore.self class="modal fabe" id="modal-data-products-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title">ລືບຂໍ້ມູນ</h4>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" wire:model="hiidenId_product" hidden="{{$hiidenId_product}}">
                    <p class="text-center">ທ່ານຕ້ອງການລືບຂໍ້ມູນນີ້ ຫືຼ ບໍ? <i class="fa fa-trash text-danger"></i></p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button wire:click="get_backproduct" class="btn btn-sm btn-primary">ກັບຄືນ</button>
                    <button wire:click="delete_Products" class="btn btn-sm btn-success">ຕົກລົງ</button>
                </div>
            </div>
        </div>
    </div>

    <!-- show ຂໍ້ມູນຫົວໜ່ອຍ -->
    <div wire:ignore.self class="modal fabe" id="modal-data-units">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>ຈັດການຂໍ້ມູນຫົວໜ່ອຍ</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <label for="">ເພີ່ມຂໍ້ມູນ</label>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <input type="hidden" wire:model="hiidenId_units" hidden="{{ $hiidenId_units }}">
                                                <div class="col-md-12">
                                                    <label>ຊື່ຫົວໜ່ອຍ <span class="text-red">*</span></label>
                                                    <div class="form-group">
                                                        <input wire:model="name_units" type="text" class="form-control @error('name_units') is-invaluid @enderror" placeholder="ຊື່ຫົວໜ່ອຍ">
                                                        @error('name_units')
                                                        <span class="error text-red"> {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button wire:click="resetFiledUnits" type="button" class="btn btn-primary">ຣີເຊັດ</button>
                                            <button wire:click="Store_units()" type="button" class="btn btn-success">
                                                <i class="fa fa-download"></i> ບັນທືກ
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h6><b>ຂໍ້ມູນຫົວໜ່ອຍ</b></h6>
                                            </div>
                                            <div class="col-md-4">
                                                <input wire:model="search" type="text" class="form-control" placeholder="search...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table">
                                                <thead class="table-secondary">
                                                    <tr class="text-center">
                                                        <th>ລຳດັບ</th>
                                                        <th>ຊື່ຫົວໜ່ອຍ</th>
                                                        <th>ການຈັດການ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $i = 1; @endphp
                                                    @foreach($units as $item)
                                                    <tr class="text-center">
                                                        <td>{{$i++}}</td>
                                                        <td>{{$item->name}}</td>
                                                        <td>
                                                            <a href="#" wire:click="showEdit('{{$item->id}}')" class="mr-3"><i class="fa fa-edit"></i> ແກ້ໄຂ</a>
                                                            <a href="#" wire:click="showDetory('{{$item->id}}')" class="text-danger"><i class="fa fa-trash"></i> ລືບ</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="float-center">
                                                {{ $units->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- show-delete ຂໍ້ມູນຫົວໜ່ອຍ -->
    <div wire:ignore.self class="modal fabe" id="modal-data-units-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">ລືບຂໍ້ມູນ</h4>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" wire:model="hiidenId_units" hidden="{{$hiidenId_units}}">
                    <p class="text-center">ທ່ານຕ້ອງການລືບຂໍ້ມູນນີ້ ຫືຼ ບໍ? <i class="fa fa-trash text-danger"></i></p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button wire:click="get_backunits" class="btn btn-sm btn-primary">ກັບຄືນ</button>
                    <button wire:click="delete_Units" class="btn btn-sm btn-success">ຕົກລົງ</button>
                </div>
            </div>
        </div>
    </div>

    <!-- show ຂໍ້ມູນຕຳແໜ່ງ -->
    <div wire:ignore.self class="modal fabe" id="modal-data-position">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>ຈັດການຂໍ້ມູນຕຳແໜ່ງ</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <label for="">ເພີ່ມຂໍ້ມູນ</label>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>ຊື່ຕຳແໜ່ງ</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="ຊື່ຕຳແໜ່ງ">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary">ຣີເຊັດ</button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-download"></i> ບັນທືກ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h6><b>ຂໍ້ມູນຕຳແໜ່ງ</b></h6>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="search...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table">
                                                <thead class="table-secondary">
                                                    <tr class="text-center">
                                                        <th>ລຳດັບ</th>
                                                        <th>ຊື່ຕຳແໜ່ງ</th>
                                                        <th>ການຈັດການ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>01</td>
                                                        <td>ພະນັກງານຫ້ອງການ</td>
                                                        <td>
                                                            <a href="" class="mr-3"><i class="fa fa-edit"></i> edit</a>
                                                            <a href="" class=""><i class="fa fa-trash text-red"></i> delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- show ຂໍ້ມູນພະນັກງານ -->
    <div wire:ignore.self class="modal fabe" id="modal-data-staff">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>ຈັດການຂໍ້ມູນພະນັກງານ</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <label for="">ເພີ່ມຂໍ້ມູນ</label>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>ຊື່ພະນັກງານ</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="ຊື່ພະນັກງານ">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>ເບີໂທ</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="ເບີໂທ">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="">ຕຳແໜ່ງ</label>
                                                    <div class="form-group">
                                                        <select name="" id="" class="form-control">
                                                            <option value="">ເລືອກຕຳແໜ່ງ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary">ຣີເຊັດ</button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-download"></i> ບັນທືກ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h6><b>ຂໍ້ມູນພະນັກງານ</b></h6>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="search...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table">
                                                <thead class="table-secondary">
                                                    <tr class="text-center">
                                                        <th>ລຳດັບ</th>
                                                        <th>ຊື່ ແລະ ນາມສະກຸມ</th>
                                                        <th>ເບີໂທ</th>
                                                        <th>ຕຳແໜ່ງ</th>
                                                        <th>ການຈັດການ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>01</td>
                                                        <td>shia yang</td>
                                                        <td>020 59143473</td>
                                                        <td>Google.com</td>
                                                        <td>
                                                            <a href="" class="mr-3"><i class="fa fa-edit"></i> edit</a>
                                                            <a href="" class=""><i class="fa fa-trash text-red"></i> delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- show ຂໍ້ມູນສາຂາ ແລະ ລູກຄ້າປະຈຳ -->
    <div wire:ignore.self class="modal fabe" id="modal-data-branch-regular-customer">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>ຈັດການຂໍ້ມູນສາຂາ ແລະ ລູກຄ້າປະຈຳ</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <label for="">ເພີ່ມຂໍ້ມູນ</label>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>ຊື່ ແລະ ນາມສະກຸມ</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="ຊື່ ແລະ ນາມສະກຸມ">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>ເບີໂທ</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="ເບີໂທ">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="">ລາຄາ</label>
                                                    <div class="form-group">
                                                        <select name="" id="" class="form-control">
                                                            <option value="">ເລືອກລາຄາ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>ລາຍລະອຽດ</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="ລາຍລະອຽດ">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary">ຣີເຊັດ</button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-download"></i> ບັນທືກ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h6><b>ຂໍ້ມູນສາຂາ ແລະ ລູກຄ້າປະຈຳ</b></h6>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="search...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table">
                                                <thead class="table-secondary">
                                                    <tr class="text-center">
                                                        <th>ລຳດັບ</th>
                                                        <th>ຊື່ ແລະ ນາມສະກຸມ</th>
                                                        <th>ເບີໂທ</th>
                                                        <th>ລາຄາ</th>
                                                        <th>ລາຍລະອຽດ</th>
                                                        <th>ການຈັດການ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>01</td>
                                                        <td>shia yang</td>
                                                        <td>020 59143473</td>
                                                        <td>120,000,000</td>
                                                        <td>ສາຂາຮັບໄປຂາຍ</td>
                                                        <td>
                                                            <a href="" class="mr-3"><i class="fa fa-edit"></i> edit</a>
                                                            <a href="" class=""><i class="fa fa-trash text-red"></i> delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- show ຂໍ້ມູນລາຄາ -->
    <div wire:ignore.self class="modal fabe" id="modal-data-price">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>ຈັດການຂໍ້ມູນລາຄາ</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <label for="">ເພີ່ມຂໍ້ມູນ</label>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="">ເລືອກສິນຄ້າ</label>
                                                    <div class="form-group">
                                                        <select name="" id="" class="form-control">
                                                            <option value="">ເລືອກສິນຄ້າ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>ລາຄາ</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="ລາຄາ">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary">ຣີເຊັດ</button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-download"></i> ບັນທືກ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h6><b>ຂໍ້ມູນລາຄາ</b></h6>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="search...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table">
                                                <thead class="table-secondary">
                                                    <tr class="text-center">
                                                        <th>ລຳດັບ</th>
                                                        <th>ຊື່ສິນຄ້າ</th>
                                                        <th>ລາຄາ</th>
                                                        <th>ການຈັດການ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>01</td>
                                                        <td>ຕຸກໃຫ່ຍ 18ລີດ</td>
                                                        <td>120,000,000</td>
                                                        <td>
                                                            <a href="" class="mr-3"><i class="fa fa-edit"></i> edit</a>
                                                            <a href="" class=""><i class="fa fa-trash text-red"></i> delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- show ຂໍ້ມູນລູກຄ້າ -->
    <div wire:ignore.self class="modal fabe" id="modal-data-customer">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>ຈັດການຂໍ້ມູນລູກຄ້າ</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <select name="" id="" class="form-control">
                                                    <option value="">ທ່ານ ເລັບ</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <select name="" id="" class="form-control">
                                                    <option value="">ສາຍນໍ້າ</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="search...">
                                            </div>
                                            <div class="col-md-2">
                                                <a href="#" class="btn btn-primary btn-sm" id="print"><i class="fa fa-print"></i> ພີມອອກ</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table">
                                                <thead class="table-secondary">
                                                    <tr class="text-center">
                                                        <th>ລຳດັບ</th>
                                                        <th>ທີ່ຢູ່</th>
                                                        <th>ສາຍນໍ້າ</th>
                                                        <th>ລະຫັດ</th>
                                                        <th>ຊື່ ແລະ ນາມສະກຸມ</th>
                                                        <th>ຮ່ອມ</th>
                                                        <th>ເລກເຮືອນ</th>
                                                        <th>ບ້ານ</th>
                                                        <th>ເບີໂທ</th>
                                                        <th>ຕຸກປະຈຳ</th>
                                                        <th>ການຈັດການ</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>01</td>
                                                        <td>
                                                            <a href=""><i class="fa fa-address"></i></a>
                                                        </td>
                                                        <td>ວັນຈັນ</td>
                                                        <td>00061</td>
                                                        <td>ແມ່ຍັນ</td>
                                                        <td>01</td>
                                                        <td>201</td>
                                                        <td>ລາດຄວາຍ</td>
                                                        <td>78578755</td>
                                                        <td>04</td>
                                                        <td>
                                                            <a href="" class="mr-3"><i class="fa fa-edit"></i> edit</a>
                                                            <a href="" class=""><i class="fa fa-trash text-red"></i> ລືບ</a>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> ເພີ່ມໃໝ່</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- show ຂໍ້ມູນສາຍນໍ້າ -->
    <div wire:ignore.self class="modal fabe" id="modal-data-water">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>ຈັດການຂໍ້ມູນສາຍນໍ້າ</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <label for="">ເພີ່ມຂໍ້ມູນ</label>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>ສາຍນໍ້າ</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="ສາຍນໍ້າ">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary">ຣີເຊັດ</button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-download"></i> ບັນທືກ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h6><b>ຂໍ້ມູນສາຍນໍ້າ</b></h6>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="search...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table">
                                                <thead class="table-secondary">
                                                    <tr class="text-center">
                                                        <th>ລຳດັບ</th>
                                                        <th>ສາຍນໍ້າ</th>
                                                        <th>ການຈັດການ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>01</td>
                                                        <td>ວັນຈັນ/ວັນພະຫັດ</td>
                                                        <td>
                                                            <a href="" class="mr-3"><i class="fa fa-edit"></i> edit</a>
                                                            <a href="" class=""><i class="fa fa-trash text-red"></i> delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- show ຂໍ້ມູນທີມສົ່ງນໍ້າ -->
    <div wire:ignore.self class="modal fabe" id="modal-water-delivery-team-information">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>ຈັດການຂໍ້ມູນທີມສົ່ງນໍ້າ</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <label for="">ເພີ່ມຂໍ້ມູນ</label>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>ເລືອກພະນັກງານ</label>
                                                    <div class="form-group">
                                                        <select name="" id="" class="form-control">
                                                            <option value="">ເລືອກພະນັກງານ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>ສາຍນໍ້າ</label>
                                                    <div class="form-group">
                                                        <select name="" id="" class="form-control">
                                                            <option value="">ເລືອກສາຍນໍ້າ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="">ລາຍລະອຽດ</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="ລາຍລະອຽດ">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary">ຣີເຊັດ</button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-download"></i> ບັນທືກ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h6><b>ຂໍ້ມູນທີມສົ່ງນໍ້າ</b></h6>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="search...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table">
                                                <thead class="table-secondary">
                                                    <tr class="text-center">
                                                        <th>ລຳດັບ</th>
                                                        <th>ຊື່ ແລະ ນາມສະກຸມ</th>
                                                        <th>ສາຍນໍ້າ</th>
                                                        <th>ລາຍລະອຽດ</th>
                                                        <th>ການຈັດການ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>01</td>
                                                        <td>ທ້າວ ບັນຍາ ລໍລະບັດ</td>
                                                        <td>ວັນຈັນ/ວັນພະຫັດ</td>
                                                        <td>ບ ນາສາລາ ໂພນຕ້ອງ</td>
                                                        <td>
                                                            <a href="" class="mr-3"><i class="fa fa-edit"></i> edit</a>
                                                            <a href="" class=""><i class="fa fa-trash text-red"></i> delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- show ຂໍ້ມູນບ້ານ -->
    <div wire:ignore.self class="modal fabe" id="modal-village">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>ຈັດການຂໍ້ມູນບ້ານ</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <label for="">ເພີ່ມຂໍ້ມູນ</label>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>ເລືອກແຂວງ</label>
                                                    <div class="form-group">
                                                        <select name="" id="" class="form-control">
                                                            <option value="">ເລືອກແຂວງ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>ເລືອກເມືອງ</label>
                                                    <div class="form-group">
                                                        <select name="" id="" class="form-control">
                                                            <option value="">ເລືອກເມືອງ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="">ຊື່ບ້ານ</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="ຊື່ບ້ານ">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary">ຣີເຊັດ</button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-download"></i> ບັນທືກ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h6><b>ຂໍ້ມູນບ້ານ</b></h6>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="search...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table">
                                                <thead class="table-secondary">
                                                    <tr class="text-center">
                                                        <th>ລຳດັບ</th>
                                                        <th>ບ້ານ</th>
                                                        <th>ເມືອງ</th>
                                                        <th>ແຂວງ</th>
                                                        <th>ການຈັດການ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>01</td>
                                                        <td>ໂພນສີວິໄລ</td>
                                                        <td>ເມືອງໝື່ນ</td>
                                                        <td>ແຂວງວຽງຈັນ</td>
                                                        <td>
                                                            <a href="" class="mr-3"><i class="fa fa-edit"></i> edit</a>
                                                            <a href="" class=""><i class="fa fa-trash text-red"></i> delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- show ຂໍ້ມູນເມືອງ -->
    <div wire:ignore.self class="modal fabe" id="modal-district">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>ຈັດການຂໍ້ມູນເມືອງ</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <label for="">ເພີ່ມຂໍ້ມູນ</label>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>ເລືອກແຂວງ</label>
                                                    <div class="form-group">
                                                        <select name="" id="" class="form-control">
                                                            <option value="">ເລືອກແຂວງ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="">ຊື່ເມືອງ</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="ຊື່ເມືອງ">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary">ຣີເຊັດ</button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-download"></i> ບັນທືກ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h6><b>ຂໍ້ມູນເມືອງ</b></h6>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="search...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table">
                                                <thead class="table-secondary">
                                                    <tr class="text-center">
                                                        <th>ລຳດັບ</th>
                                                        <th>ເມືອງ</th>
                                                        <th>ແຂວງ</th>
                                                        <th>ການຈັດການ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>01</td>
                                                        <td>ເມືອງໝື່ນ</td>
                                                        <td>ແຂວງວຽງຈັນ</td>
                                                        <td>
                                                            <a href="" class="mr-3"><i class="fa fa-edit"></i> edit</a>
                                                            <a href="" class=""><i class="fa fa-trash text-red"></i> delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- show ຂໍ້ມູນແຂວງ -->
    <div wire:ignore.self class="modal fabe" id="modal-province">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>ຈັດການຂໍ້ມູນແຂວງ</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <label for="">ເພີ່ມຂໍ້ມູນ</label>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="">ຊື່ແຂວງ</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="ຊື່ແຂວງ">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary">ຣີເຊັດ</button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-download"></i> ບັນທືກ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h6><b>ຂໍ້ມູນແຂວງ</b></h6>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="search...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table">
                                                <thead class="table-secondary">
                                                    <tr class="text-center">
                                                        <th>ລຳດັບ</th>
                                                        <th>ແຂວງ</th>
                                                        <th>ການຈັດການ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>01</td>
                                                        <td>ແຂວງວຽງຈັນ</td>
                                                        <td>
                                                            <a href="" class="mr-3"><i class="fa fa-edit"></i> edit</a>
                                                            <a href="" class=""><i class="fa fa-trash text-red"></i> delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- show ເງື່ອນໄຂການສະສົມຄະແນນ -->
    <div wire:ignore.self class="modal fabe" id="modal-criteria-for-accumulating-points">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>ຈັດການເງື່ອນໄຂການສະສົມຄະແນນ</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <label for="">ເພີ່ມຂໍ້ມູນ</label>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="">ເງື່ອນໄຂ</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="ເງື່ອນໄຂ">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="">ຄະແນນ</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="ຄະແນນ">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary">ຣີເຊັດ</button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-download"></i> ບັນທືກ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h6><b>ຂໍ້ມູນການສະສົມຄະແນນ</b></h6>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="search...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table">
                                                <thead class="table-secondary">
                                                    <tr class="text-center">
                                                        <th>ລຳດັບ</th>
                                                        <th>ເງື່ອນໄຂ</th>
                                                        <th>ຄະແນນ</th>
                                                        <th>Action</th>
                                                        <th>ການຈັດການ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>01</td>
                                                        <td>1 ຕຸກ</td>
                                                        <td>1 ຄະແນນ</td>
                                                        <td>

                                                        </td>
                                                        <td>
                                                            <a href="" class="mr-3"><i class="fa fa-edit"></i> edit</a>
                                                            <a href="" class=""><i class="fa fa-trash text-red"></i> delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- show ຈັດການຂໍ້ມູນເງີນເດືອນ -->
    <div wire:ignore.self class="modal fabe" id="modal-manage-salary-information">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>ຈັດການຈັດການຂໍ້ມູນເງີນເດືອນ</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <label for="">ເພີ່ມຂໍ້ມູນ</label>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="">ເລືອກຕຳແໜ່ງ</label>
                                                    <div class="form-group">
                                                        <select name="" id="" class="form-control">
                                                            <option value="">ເລືອກ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="">ເງິນເດືອນ</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="ຈຳນວນ">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary">ຣີເຊັດ</button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-download"></i> ບັນທືກ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h6><b>ຂໍ້ມູນເງີນເດືອນ</b></h6>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="search...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table">
                                                <thead class="table-secondary">
                                                    <tr class="text-center">
                                                        <th>ລຳດັບ</th>
                                                        <th>ຕຳແໜ່ງ</th>
                                                        <th>ເງິນເດືອນ</th>
                                                        <th>ການຈັດການ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>01</td>
                                                        <td>ຂັບລົດ+ບັນຊີ</td>
                                                        <td>2,500,000 ກີບ</td>
                                                        <td>
                                                            <a href="" class="mr-3"><i class="fa fa-edit"></i> edit</a>
                                                            <a href="" class=""><i class="fa fa-trash text-red"></i> delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- show ປະເພດການເຄື່ອນໄຫວຕຸກ -->
    <div wire:ignore.self class="modal fabe" id="modal-tuk-movement-type">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>ຈັດການປະເພດການເຄື່ອນໄຫວຕຸກ</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <label for="">ເພີ່ມຂໍ້ມູນ</label>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="">ຊື່ ປະເພດ</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="ປະເພດ">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary">ຣີເຊັດ</button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-download"></i> ບັນທືກ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h6><b>ຂໍ້ມູນປະເພດການເຄື່ອນໄຫວຕຸກ</b></h6>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="search...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table">
                                                <thead class="table-secondary">
                                                    <tr class="text-center">
                                                        <th>ລຳດັບ</th>
                                                        <th>ຊື່</th>
                                                        <th>ການຈັດການ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>01</td>
                                                        <td>ຕຸກຖອນ</td>
                                                        <td>
                                                            <a href="" class="mr-3"><i class="fa fa-edit"></i> edit</a>
                                                            <a href="" class=""><i class="fa fa-trash text-red"></i> delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')

<script type="text/javascript">
    // $('.money').simpleMoneyFormat();
    $(document).ready(function() {
        $('.money').simpleMoneyFormat();
    });

    function validate(evt) {
        var theEvent = evt || window.event;
        // Handle paste
        if (theEvent.type === 'paste') {
            key = event.clipboardData.getData('text/plain');
        } else {
            // Handle key press
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
        }
        var regex = /[0-9]|\./;
        if (!regex.test(key)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>

<script>
    // add ຂໍ້ມູນສິນຄ້າ
    window.addEventListener('show-modal-data-products', event => {
        $('#modal-data-products').modal('show');
    })
    window.addEventListener('hide-modal-data-products', event => {
        $('#modal-data-products').modal('hide');
    })
     // delete ຂໍ້ມູນສິນຄ້າ
     window.addEventListener('show-modal-data-products-delete', event => {
        $('#modal-data-products-delete').modal('show');
    })
    window.addEventListener('hide-modal-data-products-delete', event => {
        $('#modal-data-products-delete').modal('hide');
    })

    // show add ຂໍ້ມູນຫົວໜ່ອຍ
    window.addEventListener('show-modal-data-units', event => {
        $('#modal-data-units').modal('show');
    })
    window.addEventListener('hide-modal-data-units', event => {
        $('#modal-data-units').modal('hide');
    })
    // show delete ຂໍ້ມູນຫົວໜ່ອຍ
    window.addEventListener('show-modal-data-units-delete', event => {
        $('#modal-data-units-delete').modal('show');
    })
    window.addEventListener('hide-modal-data-units-delete', event => {
        $('#modal-data-units-delete').modal('hide');
    })

    // ຂໍ້ມູນຕຳແໜ່ງ
    window.addEventListener('show-modal-data-position', event => {
        $('#modal-data-position').modal('show');
    })
    window.addEventListener('hide-modal-data-position', event => {
        $('#modal-data-position').modal('hide');
    })
    // ຂໍ້ມູນພະນັກງານ
    window.addEventListener('show-modal-data-staff', event => {
        $('#modal-data-staff').modal('show');
    })
    window.addEventListener('hide-modal-data-staff', event => {
        $('#modal-data-staff').modal('hide');
    })
    // ຂໍ້ມູນສາຂາ ແລະ ລູກຄ້າປະຈຳ
    window.addEventListener('show-modal-data-branch-regular-customer', event => {
        $('#modal-data-branch-regular-customer').modal('show');
    })
    window.addEventListener('hide-modal-data-branch-regular-customer', event => {
        $('#modal-data-branch-regular-customer').modal('hide');
    })
    // ຂໍ້ມູນລາຄາ
    window.addEventListener('show-modal-data-price', event => {
        $('#modal-data-price').modal('show');
    })
    window.addEventListener('hide-modal-data-price', event => {
        $('#modal-data-price').modal('hide');
    })
    // ຂໍ້ມູນລູກຄ້າ
    window.addEventListener('show-modal-data-customer', event => {
        $('#modal-data-customer').modal('show');
    })
    window.addEventListener('hide-modal-data-customer', event => {
        $('#modal-data-customer').modal('hide');
    })
    // ຂໍ້ມູນສາຍນໍ້າ
    window.addEventListener('show-modal-data-water', event => {
        $('#modal-data-water').modal('show');
    })
    window.addEventListener('hide-modal-data-water', event => {
        $('#modal-data-water').modal('hide');
    })
    // ຂໍ້ມູນທີມສົ່ງນໍ້າ
    window.addEventListener('show-modal-water-delivery-team-information', event => {
        $('#modal-water-delivery-team-information').modal('show');
    })
    window.addEventListener('hide-modal-water-delivery-team-information', event => {
        $('#modal-water-delivery-team-information').modal('hide');
    })
    // ຂໍ້ມູນບ້ານ
    window.addEventListener('show-modal-village', event => {
        $('#modal-village').modal('show');
    })
    window.addEventListener('hide-modal-village', event => {
        $('#modal-village').modal('hide');
    })
    // ຂໍ້ມູນເມືອງ
    window.addEventListener('show-modal-district', event => {
        $('#modal-district').modal('show');
    })
    window.addEventListener('hide-modal-district', event => {
        $('#modal-district').modal('hide');
    })
    // ຂໍ້ມູນແຂວງ
    window.addEventListener('show-modal-province', event => {
        $('#modal-province').modal('show');
    })
    window.addEventListener('hide-modal-province', event => {
        $('#modal-province').modal('hide');
    })
    // ເງື່ອນໄຂການສະສົມຄະແນນ
    window.addEventListener('show-modal-criteria-for-accumulating-points', event => {
        $('#modal-criteria-for-accumulating-points').modal('show');
    })
    window.addEventListener('hide-modal-criteria-for-accumulating-points', event => {
        $('#modal-criteria-for-accumulating-points').modal('hide');
    })
    // ຈັດການຂໍ້ມູນເງີນເດືອນ
    window.addEventListener('show-modal-manage-salary-information', event => {
        $('#modal-manage-salary-information').modal('show');
    })
    window.addEventListener('hide-modal-manage-salary-information', event => {
        $('#modal-manage-salary-information').modal('hide');
    })
    // ປະເພດການເຄື່ອນໄຫວຕຸກ
    window.addEventListener('show-modal-tuk-movement-type', event => {
        $('#modal-tuk-movement-type').modal('show');
    })
    window.addEventListener('hide-modal-tuk-movement-type', event => {
        $('#modal-tuk-movement-type').modal('hide');
    })
</script>
@endpush