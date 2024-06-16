<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h4><b>ຈັດການສິດທີ</b></h4>
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
                                            <label>ຊື່ສິດທີ <span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input wire:model="permission" type="text" class="form-control @error('permission') is-invalid @enderror" placeholder="ຊື່ສິດທີ">
                                                @error('permission')
                                                <span class="error text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Path</label>
                                            <div class="form-group">
                                                <input wire:model="path" type="text" class="form-control @error('path') is-invalid @enderror" placeholder="path">
                                                @error('path')
                                                <span class="error text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-between">
                                        <button wire:click="resetFiled()" class="btn btn-primary btn-sm"><i class="fa fa-refresh" aria-hidden="true"></i> ຣີເຊັດ</button>
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
                                            <h6><b>ຂໍ້ມູນລາຍການສິດທີ</b></h6>
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
                                                    <th>ຊື່ສິດທີ</th>
                                                    <th>Path</th>
                                                    <th>ການຈັດການ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $i = 1;@endphp
                                                @foreach($permissions as $item)
                                                <tr class="text-center">
                                                    <td>{{$i++}}</td>
                                                    <td>{{$item->permission}}</td>
                                                    <td>
                                                        <a href="{{ $item->path }}">{{ $item->path }}</a>
                                                    </td>

                                                    <td>
                                                        <a href="#" wire:click="show_edit('{{$item->id}}')" class="mr-3"><i class="fa fa-edit"></i> ແກ້ໄຂ</a>
                                                        <a href="#" wire:click="show_detory('{{$item->id}}')" class="text-red"><i class="fa fa-trash"></i> ລືບ</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{$permissions->links()}}
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
                    <h5 class="modal-title">ລືບຂໍ້ມູນສິດທີ</h5>
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