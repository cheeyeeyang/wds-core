<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h4><b>ຈັດການຂໍ້ມູນລາຍຈ່າຍ</b></h4>
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
                                            <label>ຊື່ລາຍການ <span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="ຊື່ລາຍການ">
                                                @error('name')
                                                <span class="error text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label>ຈຳນວນ <span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input wire:model="qty" type="text" class="form-control @error('qty') is-invalid @enderror" placeholder="ຈຳນວນ">
                                                @error('qty')
                                                <span class="error text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label>ຈຳນວນເງິນ <span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input wire:model="amount" type="text" class="form-control money @error('amount') is-invalid @enderror" placeholder="ຈຳນວນເງິນ" onkeypress="validate(event)">
                                                @error('amount')
                                                <span class="error text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ເລືອກຫົວໜ່ອຍ <span class="text-danger">*</span></label>
                                                <select wire:model="unitId" name="" id="" class="form-control @error('unitId') is-invalid @enderror">
                                                    <option value="">ເລືອກ</option>
                                                    @foreach($units as $value)
                                                    <option value="{{$value->id}}">{{ $value->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('unitId')
                                                <span class="error text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-between">
                                        <button wire:click="resetForm()" class="btn btn-primary btn-sm"><i class="fa fa-refresh" aria-hidden="true"></i> ຣີເຊັດ</button>
                                        <button wire:click="Store()" class="btn btn-success btn-sm"><i class="fa fa-download" aria-hidden="true"></i> ບັນທືກ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h6><b>ຂໍ້ມູນບັນທືກລາຍຈ່າຍ</b></h6>
                                        </div>
                                        <div class="col-md-3">
                                            <input wire:model.live="search" type="text" class="form-control" placeholder="search...">
                                        </div>
                                        <!-- <div class="col-md-2">
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="date" class="form-control">
                                        </div> -->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table">
                                            <thead class="table-secondary">
                                                <tr class="text-center">
                                                    <th>ລຳດັບ</th>
                                                    <th>ລາຍການ</th>
                                                    <th>ຈຳນວນ</th>
                                                    <th>ຫົວໜ່ອຍ</th>
                                                    <th>ລາຄາລວມ</th>
                                                    <th>ວັນທີ</th>
                                                    <th>ຜູ້ບັນທືກ</th>
                                                    <th>ການຈັດການ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $i = 1; @endphp
                                                @foreach($expenses as $item)
                                                <tr class="text-center">
                                                    <td>{{$i++}}</td>
                                                    <td>{{$item->bill_name}}</td>
                                                    <td>{{$item->qty}}</td>
                                                    <td>{{!empty($item->unitname->name) ? $item->unitname->name : ''}}</td>
                                                    <td>{{number_format($item->amount)}}</td>
                                                    <td>{{date('d/m/Y', strtotime($item->created_at))}}</td>
                                                    <td>{{!empty($item->username->username) ? $item->username->username : ''}}</td>
                                                    <td>
                                                        <a href="#" wire:click="Edit(' {{$item->id}} ')"><i class="fa fa-edit mr-3"></i></a>
                                                        <a href="#" wire:click="detory('{{$item->id}}')"><i class="fa fa-trash text-red"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{$expenses->links()}}
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
                    <h4 class="modal-title">ລືບຂໍ້ມູນ</h4>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" wire:model="hiddenId" value="{{$hiddenId}}">
                    <h6 class="text-center"><b>ທ່ານຕ້ອງການລືບຂໍ້ມູນນີ້ ຫືຼ ບໍ? <i class="fa fa-trash text-danger"></i></b></h6>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" type="button" class="btn btn-primary">ຍົກເລີກ</button>
                    <button wire:click="deleteData()" type="button" class="btn btn-success">ຕົກລົງ</button>
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
    window.addEventListener('show-modal-delete', event => {
        $('#modal-delete').modal('show');
    })
    window.addEventListener('hide-modal-delete', event => {
        $('#modal-delete').modal('hide');
    })
</script>
@endpush