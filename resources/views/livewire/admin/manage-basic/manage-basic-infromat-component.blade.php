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
                                    <button wire:click="show_DataUserwaterline" type="button" class="btn btn btn-block"><i class="fa fa-bus" aria-hidden="true"></i> ຂໍ້ມູນທີມສົ່ງນໍ້າ</button>
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
                <div class="modal-header bg-info">
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
                <div class="modal-header bg-info">
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
                                                <input type="hidden" wire:model="hiidenId_position" hidden="{{$hiidenId_position}}">
                                                <div class="col-md-12">
                                                    <label>ຊື່ຕຳແໜ່ງ <span class="text-danger">*</span></label>
                                                    <div class="form-group">
                                                        <input wire:model="name_positon" type="text" class="form-control @error('name_positon') is-invalid @enderror" placeholder="ຊື່ຕຳແໜ່ງ">
                                                        @error('name_positon')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button wire:click="resetFiled_position()" type="button" class="btn btn-primary"><i class="fa fa-refresh" aria-hidden="true"></i> ຣີເຊັດ</button>
                                            <button wire:click="Store_position()" type="button" class="btn btn-success"><i class="fa fa-download"></i> ບັນທືກ</button>
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
                                                        <th>ຊື່ຕຳແໜ່ງ</th>
                                                        <th>ການຈັດການ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $stt = 1; @endphp
                                                    @foreach($positions as $item)
                                                    <tr class="text-center">
                                                        <td>{{$stt++}}</td>
                                                        <td>{{$item->name}}</td>
                                                        <td>
                                                            <a href="#" wire:click="showEditPosition( '{{$item->id}}' )" class="mr-3"><i class="fa fa-edit"></i> ແກ້ໄຂ</a>
                                                            <a href="#" wire:click="showDetoryPosition(' {{$item->id}} ')" class="text-red"><i class="fa fa-trash"></i> ລືບ</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="float-center">
                                                {{ $positions->links() }}
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
    <!-- show-delete ຂໍ້ມູນຕຳແໜ່ງ -->
    <div wire:ignore.self class="modal fabe" id="modal-data-position-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">ລືບຂໍ້ມູນ</h4>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" wire:model="hiidenId_position" hidden="{{$hiidenId_position}}">
                    <p class="text-center">ທ່ານຕ້ອງການລືບຂໍ້ມູນນີ້ ຫືຼ ບໍ? <i class="fa fa-trash text-danger"></i></p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button wire:click="get_backPosition" class="btn btn-sm btn-primary">ກັບຄືນ</button>
                    <button wire:click="delete_Position()" class="btn btn-sm btn-success">ຕົກລົງ</button>
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
                                                    <label>ຊື່ພະນັກງານ <span class="text-danger">*</span></label>
                                                    <div class="form-group">
                                                        <input wire:model="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" placeholder="ຊື່ພະນັກງານ">
                                                        @error('fullname')
                                                        <span class="error text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>ເບີໂທ <span class="text-danger">*</span></label>
                                                    <div class="form-group">
                                                        <input wire:model="phone" type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="ເບີໂທ">
                                                        @error('phone')
                                                        <span class="error text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="">ຕຳແໜ່ງ <span class="text-danger">*</span></label>
                                                    <div class="form-group">
                                                        <select wire:model="position_id" name="" id="" class="form-control @error('position_id') is-invalid @enderror">
                                                            <option value="">ເລືອກຕຳແໜ່ງ</option>
                                                            @foreach($selectPositons as $position)
                                                            <option value="{{$position->id}}">{{ $position->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('position_id')
                                                        <span class="error text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button wire:click="resetFiledStaff()" type="button" class="btn btn-primary"><i class="fa fa-refresh" aria-hidden="true"></i> ຣີເຊັດ</button>
                                            <button wire:click="Store_Staff()" type="button" class="btn btn-success"><i class="fa fa-download"></i> ບັນທືກ</button>
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
                                                        <th>ຊື່ ແລະ ນາມສະກຸມ</th>
                                                        <th>ເບີໂທ</th>
                                                        <th>ຕຳແໜ່ງ</th>
                                                        <th>ການຈັດການ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $i = 1;@endphp
                                                    @foreach($employees as $items)
                                                    <tr class="text-center">
                                                        <td>{{$i++}}</td>
                                                        <td>{{$items->fullname}}</td>
                                                        <td>{{$items->phone}}</td>
                                                        <td>
                                                            {{!empty($items->positionname->name) ? $items->positionname->name : ''}}
                                                        </td>
                                                        <td>
                                                            <a href="#" wire:click="showEditEmplyee(' {{$items->id}} ')" class="mr-3"><i class="fa fa-edit"></i> ແກ້ໄຂ</a>
                                                            <a href="#" wire:click="showDetory_emplyee(' {{$items->id}} ')" class="text-red"><i class="fa fa-trash "></i> ລືບ</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                            {{$employees->links()}}

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
    <!-- show-delete ຂໍ້ມູນພະນັກງານ -->
    <div wire:ignore.self class="modal fabe" id="modal-data-staff-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">ລືບຂໍ້ມູນ</h4>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" wire:model="hiidenId_staff" hidden="{{$hiidenId_staff}}">
                    <p class="text-center">ທ່ານຕ້ອງການລືບຂໍ້ມູນນີ້ ຫືຼ ບໍ? <i class="fa fa-trash text-danger"></i></p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button wire:click="get_backEmployee()" class="btn btn-sm btn-primary">ກັບຄືນ</button>
                    <button wire:click="delete_Employee()" class="btn btn-sm btn-success">ຕົກລົງ</button>
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
                                                <input type="hidden" wire:model="hiidenId_branch" value="{{$hiidenId_branch}}">
                                                <div class="col-md-12">
                                                    <label>ຊື່ ແລະ ນາມສະກຸມ <span class="text-danger">*</span></label>
                                                    <div class="form-group">
                                                        <input wire:model="fullname_branch" type="text" class="form-control @error('fullname_branch') is-invalid @enderror" placeholder="ຊື່ ແລະ ນາມສະກຸມ">
                                                        @error('fullname_branch')
                                                        <span class="error text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>ເບີໂທ <span class="text-danger">*</span></label>
                                                    <div class="form-group">
                                                        <input wire:model="phone_branch" type="text" class="form-control @error('phone_branch') is-invalid @enderror" placeholder="ເບີໂທ">
                                                        @error('phone_branch')
                                                        <span class="error text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="">ລາຄາ <span class="text-danger">*</span></label>
                                                    <div class="form-group">
                                                        <select wire:model="price_id" name="" id="" class="form-control @error('price_id') is-invalid @enderror">
                                                            <option value="">ເລືອກລາຄາ</option>
                                                            @foreach($data_price as $priceValue)
                                                            <option value="{{$priceValue->id}}">{{$priceValue->price}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('price_id')
                                                        <span class="error text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>ລາຍລະອຽດ</label>
                                                    <div class="form-group">
                                                        <textarea wire:model="details_branch" name="" id="" role="4" class="form-control">
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button wire:click="resetFiledBranches()" type="button" class="btn btn-primary"><i class="fa fa-refresh" aria-hidden="true"></i> ຣີເຊັດ</button>
                                            <button wire:click="Store_Branches()" type="button" class="btn btn-success"><i class="fa fa-download"></i> ບັນທືກ</button>
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
                                                <input wire:model="search" type="text" class="form-control" placeholder="ຄົ້ນຫາ...">
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
                                                    @php $i = 1;
                                                    @endphp
                                                    @foreach($branches as $item)
                                                    <tr class="text-center">
                                                        <td>{{$i++}}</td>
                                                        <td>{{$item->fullname}}</td>
                                                        <td>{{$item->phone}}</td>
                                                        <td>
                                                            {{ !empty($item->pricename->price) ? number_format($item->pricename->price) : '' }}
                                                        </td>
                                                        <td>{{$item->detail}}</td>
                                                        <td>
                                                            <a href="#" wire:click="showEditbranches('{{$item->id}}')" class="mr-3"><i class="fa fa-edit"></i> ແກ້ໄຂ</a>
                                                            <a href="#" wire:click="showDetory_branches('{{$item->id}}')" class="text-red"><i class="fa fa-trash"></i> ລືບ</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{$branches->links()}}
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
    <!-- show-delete ຂໍ້ມູນສາຂາ ແລະ ລູກຄ້າປະຈຳ -->
    <div wire:ignore.self class="modal fabe" id="modal-data-branch-regular-customer-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">ລືບຂໍ້ມູນ</h4>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" wire:model="hiidenId_branch" hidden="{{$hiidenId_branch}}">
                    <p class="text-center">ທ່ານຕ້ອງການລືບຂໍ້ມູນນີ້ ຫືຼ ບໍ? <i class="fa fa-trash text-danger"></i></p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button wire:click="get_backBranches()" class="btn btn-sm btn-primary">ກັບຄືນ</button>
                    <button wire:click="delete_Branches()" class="btn btn-sm btn-success">ຕົກລົງ</button>
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
                                                <input type="hidden" wire:model="hiidenId_price" value="{{$hiidenId_price}}">
                                                <div class="col-md-12">
                                                    <label for="">ເລືອກສິນຄ້າ <span class="text-danger">*</span></label>
                                                    <div class="form-group">
                                                        <select wire:model="price_product_id" name="" id="" class="form-control @error('price_product_id') is-invalid @enderror">
                                                            <option value="">ເລືອກສິນຄ້າ</option>
                                                            @foreach($data_product as $proValue)
                                                            <option value="{{$proValue->id}}">{{$proValue->product_name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('price_product_id')
                                                        <span class="error text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                @push('scripts')
                                                <script>
                                                    $(document).ready(function() {
                                                        $('.money').simpleMoneyFormat();
                                                    });
                                                </script>
                                                @endpush
                                                <div class="col-md-12">
                                                    <label>ລາຄາ <span class="text-danger">*</span></label>
                                                    <div class="form-group">
                                                        <input wire:model="price_name" type="text" class="form-control money @error('price_name') is-invalid @enderror" placeholder="0.00" onkeypress="validate(event)">
                                                        @error('price_name')
                                                        <span class="error text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button wire:click="resetFiledPrice()" type="button" class="btn btn-primary"><i class="fa fa-refresh" aria-hidden="true"></i> ຣີເຊັດ</button>
                                            <button wire:click="Store_Price()" type="button" class="btn btn-success"><i class="fa fa-download"></i> ບັນທືກ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <h6><b>ຂໍ້ມູນລາຄາ</b></h6>
                                            </div>
                                            <div class="col-md-4"></div>
                                            <div class="col-md-3">
                                                <select wire:model="productId_price" name="" id="" class="form-control">
                                                    <option value="">ເລືອກຕາມສິນຄ້າ</option>
                                                    @foreach($data_product as $prosearch)
                                                    <option value="{{$prosearch->id}}">{{$prosearch->product_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!-- <div class="col-md-4"> -->
                                            <!-- <input wire:model="search" type="text" class="form-control" placeholder="search..."> -->
                                            <!-- </div> -->
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
                                                    @php $e = 1;
                                                    @endphp
                                                    @foreach($prices as $item)
                                                    <tr class="text-center">
                                                        <td>{{$e++}}</td>
                                                        <td>{{!empty($item->productname->product_name) ? $item->productname->product_name : ''}}</td>
                                                        <td>{{number_format($item->price)}}</td>
                                                        <td>
                                                            <a href="#" wire:click="showEditPrices(' {{$item->id}} ')" class="mr-3"><i class="fa fa-edit"></i> ແກ້ໄຂ</a>
                                                            <a href="#" wire:click="showDetory_Prices(' {{$item->id}} ')" class="text-red"><i class="fa fa-trash"></i> ລືບ</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{$prices->links()}}
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
    <!-- show-delete ລາຄາ -->
    <div wire:ignore.self class="modal fabe" id="modal-data-price-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">ລືບຂໍ້ມູນ</h4>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" wire:model="hiidenId_price" hidden="{{$hiidenId_price}}">
                    <p class="text-center">ທ່ານຕ້ອງການລືບຂໍ້ມູນນີ້ ຫືຼ ບໍ? <i class="fa fa-trash text-danger"></i></p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button wire:click="get_backPrices()" class="btn btn-sm btn-primary">ກັບຄືນ</button>
                    <button wire:click="delete_Prices()" class="btn btn-sm btn-success">ຕົກລົງ</button>
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
                                                <select wire:click="search_waterlineId" name="" id="" class="form-control">
                                                    <option value="">ທ່ານ ເລັບ</option>
                                                    @foreach($data_userswaterlines as $valueuser)
                                                    <option value="{{$valueuser->employee_id}}">{{$valueuser->tbemployeename->fullname}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <select name="" id="" class="form-control">
                                                    <option value="">ສາຍນໍ້າ</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <input wire:model.live="search" type="text" class="form-control" placeholder="search...">
                                            </div>
                                            <div class="col-md-2">
                                                <a href="#" class="btn btn-success btn-sm" id="print"><i class="fa fa-print"></i> ພີມອອກ</a>
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
                                                        <th>
                                                            <a href="#" wire:click="showAddCustomers()"><i class="fa fa-plus"></i></a>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $i = 1;@endphp
                                                    @foreach($customers as $item)
                                                    <tr class="text-center">
                                                        <td>{{$i++}}</td>
                                                        <td>
                                                            <a href=""><i class="fa fa-address"></i></a>
                                                        </td>
                                                        <td>ວັນຈັນ</td>
                                                        <td>{{$item->code}}</td>
                                                        <td>{{$item->customer_name}}</td>
                                                        <td>{{!empty($item->alley) ? $item->alley : ''}}</td>
                                                        <td>{{!empty($item->h_number) ? $item->h_number : ''}}</td>
                                                        <td>{{!empty($item->villagename->village_name) ? $item->villagename->village_name : ''}}</td>
                                                        <td>{{$item->phone}}</td>
                                                        <td>{{number_format($item->b_amount)}}</td>
                                                        <td>
                                                            <a href="#" wire:click="showEditCustomers('{{$item->id}}')" class="mr-3"><i class="fa fa-edit"></i> ແກ້ໄຂ</a>
                                                            <a href="#" wire:click="showDetory_Customers('{{$item->id}}')" class="text-red"><i class="fa fa-trash"></i> ລືບ</a>
                                                        </td>
                                                        <td>
                                                            <button wire:click="showAddCustomers()" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> ເພີ່ມໃໝ່</button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{$customers->links()}}
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
    <div wire:ignore.self class="modal fabe" id="modal-data-customer-add">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="text-center">@if($this->hiidenId_customer)ແກ້ໄຂ @else ເພີ່ມຂໍ້ມູນລູກຄ້າ@endif</h4>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="hidden" wire:model="hiidenId_customer" value="{{$hiidenId_customer}}">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">ຊື່ ແລະ ນາມສະກຸມ <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input wire:model="cus_name" type="text" class="form-control @error('cus_name') is-invalid @enderror" placeholder="ຊື່ ແລະ ນາມສະກຸມ">
                                    @error('cus_name')
                                    <span class=" error text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">ເມືອງ</label>
                                <div class="form-group">
                                    <select wire:model="" name="" id="" class="form-control @error('') is-invalid @enderror">
                                        <option value="">ເລືອກ</option>
                                    </select>
                                    @error('')
                                    <span class=" error text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">ບ້ານ</label>
                                <div class="form-group">
                                    <select wire:model="cus_villId" name="" id="" class="form-control @error('cus_villId') is-invalid @enderror">
                                        <option value="">ເລືອກ</option>
                                    </select>
                                    @error('cus_villId')
                                    <span class=" error text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>ຮ່ອມ</label>
                                <div class="form-group">
                                    <input wire:model="cus_alley" type="text" class="form-control" placeholder="ຮ່ອມ">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>ເຮືອນເລກທີ</label>
                                <div class="form-group">
                                    <input wire:model="cus_h_number" type="text" class="form-control" placeholder="ເຮືອນເລກທີ">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>ເບີໂທ <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input wire:model="cus_phone" type="text" class="form-control @error('cus_phone') is-invalid @enderror">
                                    @error('cus_phone')
                                    <span class=" error text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>ທີ່ຢູ່</label>
                                <div class="form-group">
                                    <input wire:model="" type="text" class="form-control @error('') is-invalid @enderror">
                                    @error('')
                                    <span class=" error text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>ຈຳນວນຕຸກທີຕ້ອງການ <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input wire:model="cus_b_amount" type="text" class="form-control @error('cus_b_amount') is-invalid @enderror" placeholder="0.00">
                                    @error('cus_b_amount')
                                    <span class=" error text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button wire:click="getbackAddCustomers()" type="button" class="btn btn-outline-danger">ຍົກເລີກ</button>
                    @if($this->hiidenId_customer)
                    <button wire:click="EditData_Customers()" type="button" class="btn btn-success">ແກ້ໄຂ</button>
                    @else
                    <button wire:click="Store_Customers()" type="button" class="btn btn-success">ບັນທືກ</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- show-delete ຂໍ້ມູນລູກຄ້າ -->
    <div wire:ignore.self class="modal fabe" id="modal-data-customer-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">ລືບຂໍ້ມູນລູກຄ້າ</h4>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" wire:model="hiidenId_customer" hidden="{{$hiidenId_customer}}">
                    <p class="text-center">ທ່ານຕ້ອງການລືບຂໍ້ມູນນີ້ ຫືຼ ບໍ? <i class="fa fa-trash text-danger"></i></p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button wire:click="get_backCustomers()" class="btn btn-sm btn-primary">ກັບຄືນ</button>
                    <button wire:click="delete_Customers()" class="btn btn-sm btn-success">ຕົກລົງ</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end customer -->

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
                                                <input type="hidden" wire:model="hiddenId_waterline" value="{{$hiddenId_waterline}}">
                                                <div class="col-md-12">
                                                    <label>ສາຍນໍ້າ <span class="text-danger">*</span></label>
                                                    <div class="form-group">
                                                        <input wire:model="waterline_name" type="text" class="form-control @error('waterline_name') is-invalid @enderror" placeholder="ສາຍນໍ້າ">
                                                        @error('waterline_name')
                                                        <span class="error text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button wire:click="resetFiledWaterline()" type="button" class="btn btn-primary"><i class="fa fa-refresh" aria-hidden="true"></i> ຣີເຊັດ</button>
                                            <button wire:click="Store_Waterline()" type="button" class="btn btn-success"><i class="fa fa-download"></i> ບັນທືກ</button>
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
                                                <input wire:model.live="search" type="text" class="form-control" placeholder="search...">
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
                                                    @php $stt = 1;
                                                    @endphp
                                                    @foreach($waterlines as $items)
                                                    <tr class="text-center">
                                                        <td>{{$stt++}}</td>
                                                        <td>{{$items->name}}</td>
                                                        <td>
                                                            <a href="#" wire:click="showEditWaterline(' {{$items->id}} ')" class="mr-3"><i class="fa fa-edit"></i> ແກ້ໄຂ</a>
                                                            <a href="#" wire:click="showDetory_Waterline(' {{$items->id}} ')" class="text-red"><i class="fa fa-trash"></i> ລືບ</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{$waterlines->links()}}
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
    <!-- show-delete ຂໍ້ມູນສາຍນໍ້າ -->
    <div wire:ignore.self class="modal fabe" id="modal-data-water-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">ລືບຂໍ້ມູນສາຍນໍ້າ</h4>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" wire:model="hiddenId_waterline" hidden="{{$hiddenId_waterline}}">
                    <p class="text-center">ທ່ານຕ້ອງການລືບຂໍ້ມູນນີ້ ຫືຼ ບໍ? <i class="fa fa-trash text-danger"></i></p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button wire:click="get_backWaterline()" class="btn btn-sm btn-primary">ກັບຄືນ</button>
                    <button wire:click="delete_Waterline()" class="btn btn-sm btn-success">ຕົກລົງ</button>
                </div>
            </div>
        </div>
    </div>

    <!-- show ຂໍ້ມູນທີມສົ່ງນໍ້າ -->
    <div wire:ignore.self class="modal fabe" id="modal-data-user-waterline">
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
                                                <input type="hidden" wire:model="hiddenId_userwaterline" value="{{$hiddenId_userwaterline}}">
                                                <div class="col-md-12">
                                                    <label>ເລືອກພະນັກງານ <span class="text-danger">*</span></label>
                                                    <div class="form-group">
                                                        <select wire:model="userwaterline_employeeId" name="" id="" class="form-control @error('userwaterline_employeeId') is-invalid @enderror">
                                                            <option value="">ເລືອກພະນັກງານ</option>
                                                            @foreach($data_employees as $valueemploy)
                                                            <option value="{{$valueemploy->id}}">{{$valueemploy->fullname}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('userwaterline_employeeId')
                                                        <span class="error text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>ສາຍນໍ້າ <span class="text-danger">*</span></label>
                                                    <div class="form-group">
                                                        <select wire:model="waterline_waterlineId" name="" id="" class="form-control @error('waterline_waterlineId') is-invalid @enderror">
                                                            <option value="">ເລືອກສາຍນໍ້າ</option>
                                                            @foreach($data_waterlines as $valuewater)
                                                            <option value="{{$valuewater->id}}">{{$valuewater->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('waterline_waterlineId')
                                                        <span class="error text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button wire:click="resetFiledUserwaterline()" type="button" class="btn btn-primary"><i class="fa fa-refresh" aria-hidden="true"></i> ຣີເຊັດ</button>
                                            <button wire:click="Store_Userwaterline()" type="button" class="btn btn-success"><i class="fa fa-download"></i> ບັນທືກ</button>
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
                                                <select wire:model.live="search_UwateremployeeId" name="" id="" class="form-control">
                                                    <option value="">ເລືອກພະນັກງານ</option>
                                                    @foreach($data_employees as $searchvalue)
                                                    <option value="{{$searchvalue->id}}">{{$searchvalue->fullname}}</option>
                                                    @endforeach
                                                </select>
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
                                                        <th>ການຈັດການ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $stt = 1;@endphp
                                                    @foreach($userwaterlines as $item)
                                                    <tr class="text-center">
                                                        <td>{{$stt++}}</td>
                                                        <td>{{$item->tbemployeename->fullname}}</td>
                                                        <td>{{$item->tbwaterlinename->name}}</td>
                                                        <td>
                                                            <a href="#" wire:click="showEditUserWaterline('{{$item->id}}')" class="mr-3"><i class="fa fa-edit"></i> ແກ້ໄຂ</a>
                                                            <a href="#" wire:click="showDetory_UserWaterline('{{$item->id}}')" class="text-red"><i class="fa fa-trash"></i> ລືບ</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
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
        <!-- show-delete ຂໍ້ມູນທີມສົ່ງນໍ້າ -->
        <div wire:ignore.self class="modal fabe" id="modal-data-user-waterline-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">ລືບຂໍ້ມູນທີມສົ່ງນໍ້າ</h4>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" wire:model="hiddenId_userwaterline" hidden="{{$hiddenId_userwaterline}}">
                    <p class="text-center">ທ່ານຕ້ອງການລືບຂໍ້ມູນນີ້ ຫືຼ ບໍ? <i class="fa fa-trash text-danger"></i></p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button wire:click="get_backUserWaterline()" class="btn btn-sm btn-primary">ກັບຄືນ</button>
                    <button wire:click="delete_UserWaterline()" class="btn btn-sm btn-success">ຕົກລົງ</button>
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
    window.initSelectDrop = () => {
        $('#productId_price').select2({
            placeholder: '{{ __("lang.select") }}',
            allowClear: true
        });
    }
    $('#productId_price').on('change', function(e) {
        var data = $('#productId_price').select2("val");
        @this.set('productId_price', data);
    });
    initSelectDrop();
    window.livewire.on('productId_price', () => {
        initSelectDrop();
    });
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

    // add ຂໍ້ມູນຕຳແໜ່ງ
    window.addEventListener('show-modal-data-position', event => {
        $('#modal-data-position').modal('show');
    })
    window.addEventListener('hide-modal-data-position', event => {
        $('#modal-data-position').modal('hide');
    })
    window.addEventListener('show-modal-data-position-delete', event => {
        $('#modal-data-position-delete').modal('show');
    })
    window.addEventListener('hide-modal-data-position-delete', event => {
        $('#modal-data-position-delete').modal('hide');
    })
    // end ຂໍ້ມູນຕຳແໜ່ງ

    // add ຂໍ້ມູນພະນັກງານ
    window.addEventListener('show-modal-data-staff', event => {
        $('#modal-data-staff').modal('show');
    })
    window.addEventListener('hide-modal-data-staff', event => {
        $('#modal-data-staff').modal('hide');
    })
    // ຂໍ້ມູນພະນັກງານ
    window.addEventListener('show-modal-data-staff-delete', event => {
        $('#modal-data-staff-delete').modal('show');
    })
    window.addEventListener('hide-modal-data-staff-delete', event => {
        $('#modal-data-staff-delete').modal('hide');
    })
    // end ຂໍ້ມູນພະນັກງານ

    // add ຂໍ້ມູນສາຂາ ແລະ ລູກຄ້າປະຈຳ
    window.addEventListener('show-modal-data-branch-regular-customer', event => {
        $('#modal-data-branch-regular-customer').modal('show');
    })
    window.addEventListener('hide-modal-data-branch-regular-customer', event => {
        $('#modal-data-branch-regular-customer').modal('hide');
    })
    window.addEventListener('show-modal-data-branch-regular-customer-delete', event => {
        $('#modal-data-branch-regular-customer-delete').modal('show');
    })
    window.addEventListener('hide-modal-data-branch-regular-customer-delete', event => {
        $('#modal-data-branch-regular-customer-delete').modal('hide');
    })
    // end ຂໍ້ມູນສາຂາ ແລະ ລູກຄ້າປະຈຳ

    // add ຂໍ້ມູນລາຄາ
    window.addEventListener('show-modal-data-price', event => {
        $('#modal-data-price').modal('show');
    })
    window.addEventListener('hide-modal-data-price', event => {
        $('#modal-data-price').modal('hide');
    })
    window.addEventListener('show-modal-data-price-delete', event => {
        $('#modal-data-price-delete').modal('show');
    })
    window.addEventListener('hide-modal-data-price-delete', event => {
        $('#modal-data-price-delete').modal('hide');
    })
    // end ຂໍ້ມູນລາຄາ

    // add ຂໍ້ມູນລູກຄ້າ
    window.addEventListener('show-modal-data-customer', event => {
        $('#modal-data-customer').modal('show');
    })
    window.addEventListener('hide-modal-data-customer', event => {
        $('#modal-data-customer').modal('hide');
    })
    window.addEventListener('show-modal-data-customer-add', event => {
        $('#modal-data-customer-add').modal('show');
    })
    window.addEventListener('hide-modal-data-customer-add', event => {
        $('#modal-data-customer-add').modal('hide');
    })
    window.addEventListener('show-modal-data-customer-edit', event => {
        $('#modal-data-customer-edit').modal('show');
    })
    window.addEventListener('hide-modal-data-customer-edit', event => {
        $('#modal-data-customer-edit').modal('hide');
    })
    window.addEventListener('show-modal-data-customer-delete', event => {
        $('#modal-data-customer-delete').modal('show');
    })
    window.addEventListener('hide-modal-data-customer-delete', event => {
        $('#modal-data-customer-delete').modal('hide');
    })
    // end ຂໍ້ມູນລູກຄ້າ

    // ຂໍ້ມູນສາຍນໍ້າ
    window.addEventListener('show-modal-data-water', event => {
        $('#modal-data-water').modal('show');
    })
    window.addEventListener('hide-modal-data-water', event => {
        $('#modal-data-water').modal('hide');
    })
    window.addEventListener('show-modal-data-water-delete', event => {
        $('#modal-data-water-delete').modal('show');
    })
    window.addEventListener('hide-modal-data-water-delete', event => {
        $('#modal-data-water-delete').modal('hide');
    })

    // ຂໍ້ມູນທີມສົ່ງນໍ້າ
    window.addEventListener('show-modal-data-user-waterline', event => {
        $('#modal-data-user-waterline').modal('show');
    })
    window.addEventListener('hide-modal-data-user-waterline', event => {
        $('#modal-data-user-waterline').modal('hide');
    })
    window.addEventListener('show-modal-data-user-waterline-delete', event => {
        $('#modal-data-user-waterline-delete').modal('show');
    })
    window.addEventListener('hide-modal-data-user-waterline-delete', event => {
        $('#modal-data-user-waterline-delete').modal('hide');
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