<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-sm-12">
                    <h4><b>ຈັດການກຳນົດສິດໄຫ້ຜູ້ໃຊ້</b></h4>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-8">
                                    <h6><b>ຂໍ້ມູນຜູ້ໃຊ້ລະບົບ</b></h6>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="search...">
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
                                                <th>ຊື່ ແລະ ນາມສະກຸມ</th>
                                                <th>ຊື່ຜູ້ໃຊ້</th>
                                                <th>ລະຫັດຜ່ານ</th>
                                                <th>ໜ້າທີ່</th>
                                                <th>ກຳນົດສິດ</th>
                                                <th>ການຈັດການ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>ບັນຍາ ລໍລະບຸກ</td>
                                                <td>len 1234</td>
                                                <td>123456</td>
                                                <td>ພະນັກງານ/ຂາຍ</td>
                                                <td>
                                                    <a href="#" wire:click="showDefineRights()" class="btn btn-primary btn-sm">ກຳນົດສິດ</a>
                                                </td>
                                                <td>
                                                    <a href="" class="mr-3"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="" class="text-red"><i class="fa fa-trash"></i> ລືບ</a>
                                                </td>
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

    <div wire:ignore.self class="modal fabe" id="modal-define-rights">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><b>ຂໍ້ມູນສິດທິ</b></h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                                <label class="form-check-label">ຈັດການຂໍ້ມູນສາຍນໍ້າ</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check2" name="option1" value="something" checked>
                                <label class="form-check-label">ຈັດການຂໍ້ມູນລູກຄ້າ</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check3" name="option1" value="something" checked>
                                <label class="form-check-label">ຈັດການຂໍ້ມູນລາຄາ</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-primary">ຣີເຊັດ</button>
                    <button class="btn btn-sm btn-success">ບັນທືກ</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    window.addEventListener('show-modal-define-rights', event => {
        $('#modal-define-rights').modal('show');
    })
    window.addEventListener('hide-modal-define-rights', event => {
        $('#modal-define-rights').modal('hide');
    })
</script>
@endpush