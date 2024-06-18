<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h4><b>ຈັດການຂໍ້ມູນໜ້າທີຜູ້ໃຊ້</b></h4>
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
                                            <label>ຊື່ສິດນຳໃຊ້ລະບົບ <span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input wire:model="rolename" type="text" class="form-control @error('rolename') is-invalid @enderror" placeholder="ຊື່ສິດນຳໃຊ້ລະບົບ">
                                                @error('rolename')
                                                <span class="error text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-between">
                                        <button wire:click="resetFiled()" class="btn btn-primary btn-sm"><i class="fa fa-refresh" aria-hidden="true"></i> ຣີເຊັດ</button>
                                        <button wire:click="create_Store()" class="btn btn-success btn-sm"><i class="fa fa-download" aria-hidden="true"></i> ບັນທືກ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6><b>ຂໍ້ມູນໜ້າທີຜູ້ໃຊ້ລະບົບ</b></h6>
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
                                                    <th>ຊື່ສິດນຳໃຊ້ລະບົບ</th>
                                                    <th>ການຈັດການ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $i = 1;@endphp
                                                @foreach($roles as $item)
                                                <tr class="text-center">
                                                    <td>{{$i++}}</td>
                                                    <td>{{$item->role}}</td>
                                                    <td>
                                                        <a href="#" wire:click="show_edit('{{$item->id}}')"><i class="fa fa-edit mr-1"></i> ແກ້ໄຂ</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{$roles->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
