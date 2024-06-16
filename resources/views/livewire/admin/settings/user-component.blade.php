<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h4><b>ຈັດການຂໍ້ມູນຜູ້ໃຊ້ລະບົບ</b></h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <label>ເພີ່ມ</label>
                                </div>
                                <div class="card-header">
                                    <div class="row">
                                        <input type="hidden" wire:model="hiddenId" value="{{$hiddenId}}">
                                        <div class="col-md-12">
                                            <label>ຊື່ຜູ້ໃຊ້ <span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input wire:model="username" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="ຊື່ຜູ້ໃຊ້">
                                                @error('username')
                                                <span class="error text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label>ລະຫັດຜ່ານ <span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input wire:model="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="ລະຫັດຜ່ານ">
                                                @error('password')
                                                <span class="error text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label>ເລືອກພະນັກງານ <span class="text-danger">*</span></label>
                                            <select wire:model="emoplyeeId" name="" id="" class="form-control @error('emoplyeeId') is-invalid @enderror">
                                                <option value="">ເລືອກພະນັກງານ</option>
                                                @foreach($employees as $item)
                                                <option value="{{$item->id}}">{{$item->fullname}}</option>
                                                @endforeach
                                            </select>
                                            @error('emoplyeeId')
                                            <span class="error text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label>ເລືອກໜ້າທີ <span class="text-danger">*</span></label>
                                            <select wire:model="roleId" name="" id="" class="form-control @error('roleId') is-invalid @enderror">
                                                <option value="">ເລືອກໜ້າທີ</option>
                                                @foreach($roles as $items)
                                                <option value="{{$items->id}}">{{$items->role}}</option>
                                                @endforeach
                                            </select>
                                            @error('roleId')
                                            <span class="error text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label>ປ້າຍລົດ</label>
                                            <div class="form-group">
                                                <input wire:model="car_sign" type="text" class="form-control" placeholder="ປ້າຍລົດ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-between">
                                        <button wire:click="resetFiledUser()" class="btn btn-primary btn-sm"><i class="fa fa-refresh" aria-hidden="true"></i> ຣີເຊັດ</button>
                                        <button wire:click="creat_Store()" class="btn btn-success btn-sm"><i class="fa fa-download" aria-hidden="true"></i> ບັນທືກ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6><b>ຂໍ້ມູນຜູ້ໃຊ້ລະບົບ</b></h6>
                                        </div>
                                        <div class="col-md-5"></div>
                                        <div class="col-md-3">
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
                                                    <th>ຊື່ ແລະ ນາມສະກຸມ</th>
                                                    <th>ຊື່ຜູ້ໃຊ້</th>
                                                    <th>ໜ້າທີ</th>
                                                    <th>ປ້າຍລົດ</th>
                                                    <th>ການຈັດການ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $i = 1; @endphp
                                                @foreach($users as $item)
                                                <tr class="text-center">
                                                    <td>{{$i++}}</td>
                                                    <td>{{!empty($item->employees->fullname) ? $item->employees->fullname : ''}}</td>
                                                    <td>{{$item->username}}</td>
                                                    <td>{{!empty($item->rolename->role) ? $item->rolename->role : ''}}</td>
                                                    <td>{{!empty($item->car_sign) ? $item->car_sign : ''}}</td>
                                                    <td>
                                                        <a href="#" wire:click="show_edit(' {{$item->id}} ')"><i class="fa fa-edit mr-3"></i></a>
                                                        <a href="#" wire:click="show_detory('{{$item->id}}')"><i class="fa fa-trash text-red"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{$users->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div wire:ignore.self class="modal fabe" id="modal-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title">ລືບຂໍ້ມູນຜູ້ໃຊ້</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" wire:model="hiddenId" value="{{$hiddenId}}">
                    <p class="text-center">ທ່ານຕ້ອງການລືບຂໍ້ມູນ ຫືຼ ບໍ?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button data-dismiss="modal" type="button" class="btn btn-sm btn-light">ປີດ</button>
                    <button wire:click="create_Detory()" type="button" class="btn btn-sm btn-success">ຕົກລົງ</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    window.addEventListener('show-modal-delete', event => {
        $('#modal-delete').modal('show');
    })
    window.addEventListener('hide-modal-delete', event => {
        $('#modal-delete').modal('hide');
    })
</script>
@endpush