{{-- =================================== add ======================================= --}}
<script>
  document.addEventListener('success', function(e) {
    Swal.fire({
      title: "ສໍາເລັດແລ້ວ",
      icon: "success",
      iconColor: 'success',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>
<script>
  document.addEventListener('add', function(e) {
    Swal.fire({
      title: "@lang('ເພີ່ມຂໍ້ມູນສຳເລັດ')",
      icon: "success",
      iconColor: 'success',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>
{{-- =================================== edit ======================================= --}}
<script>
  document.addEventListener('edit', function(e) {
    Swal.fire({
      title: "@lang('ແກ້ໄຂ້ຂໍ້ມູນສຳເລັດ')",
      icon: "success",
      iconColor: 'success',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>
{{-- =================================== delete ======================================= --}}
<script>
  document.addEventListener('delete', function(e) {
    Swal.fire({
      title: "@lang('ລືບຂໍ້ມູນສຳເລັດ')",
      icon: "success",
      iconColor: 'success',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>
{{-- =================================== something-went-wrong ======================================= --}}
<script>
  document.addEventListener('something_went_wrong', function(e) {
    Swal.fire({
      title: "@lang('ມີບາງຢ່າງຜີດພາດ')",
      icon: "error",
      iconColor: 'danger',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>
{{-- =================================== can_not_delte ======================================= --}}
<script>
  document.addEventListener('openapproved', function(e) {
    Swal.fire({
      title: "@lang('ເປີດອະນຸມັດສຳເລັດ')",
      icon: "success",
      iconColor: 'success',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>
{{-- =================================== login_failded ======================================= --}}
<script>
  document.addEventListener('closeapproved', function(e) {
    Swal.fire({
      title: "@lang('ປີດອະນຸມັດສຳເລັດ')",
      icon: "success",
      iconColor: 'success',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>
{{-- =================================== wrong_password ======================================= --}}
<script>
  document.addEventListener('wrong_password', function(e) {
    Swal.fire({
      title: "ຊື່ຜູ້ໃຊ້ ຫຼື ລະຫັດບໍ່ຖືກຕ້ອງ",
      icon: "error",
      iconColor: 'danger',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>
{{-- =================================== password_not_match ======================================= --}}
<script>
  document.addEventListener('password_not_match', function(e) {
    Swal.fire({
      title: "@lang('lang.password_not_match')",
      icon: "warning",
      iconColor: 'danger',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>
{{-- =================================== already-data ======================================= --}}
<script>
  document.addEventListener('already_data', function(e) {
    Swal.fire({
      title: '@lang("ຂໍອະໄພ ຂໍ້ມູນນີ້ມີການໃຊ້ງານແລ້ວ")',
      icon: "error",
      iconColor: 'danger',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>
{{-- =================================== warning ======================================= --}}
<script>
  document.addEventListener('warning-data', function(e) {
    Swal.fire({
      title: '@lang("lang.The_start_time_must_be_less_than_the_end_time")',
      icon: "error",
      iconColor: 'danger',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>
{{-- =================================== logout success ======================================= --}}
<script>
  document.addEventListener('logout', function(e) {
    Swal.fire({
      title: '@lang("lang.logout_success")',
      icon: "success",
      iconColor: 'success',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>
{{-- =================================== login success ======================================= --}}
<script>
  document.addEventListener('login_success', function(e) {
    Swal.fire({
      title: '@lang("lang.login_success")',
      icon: "success",
      iconColor: 'success',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>
{{-- =================================== login success ======================================= --}}
<script>
  document.addEventListener('transaction_success', function(e) {
    Swal.fire({
      title: '@lang("lang.transaction_success")',
      icon: "success",
      iconColor: 'success',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>
{{-- =================================== alert_success ======================================= --}}
<script>
  document.addEventListener('alert_success', function(e) {
    Swal.fire({
      title: '@lang("lang.alert_success")',
      icon: "success",
      iconColor: 'success',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>

{{-- ===================== login ========================= --}}
<script>
  window.addEventListener('swal:login', event => {
    swal({
      title: event.detail.message,
      text: event.detail.text,
      icon: event.detail.type,
      timer: 3000,
      buttons: false,
      showConfirmButton: false,
      dangerMode: true,
    })
  });
</script>
{{-- =================================== add more then qty ======================================= --}}
<script>
  document.addEventListener('add_more_then_price', function(e) {
    Swal.fire({
      title: '@lang("lang.add_more_then_price")',
      icon: "warning",
      iconColor: 'warning',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>
{{-- =================================== login success ======================================= --}}
<script>
  document.addEventListener('please_choose_car', function(e) {
    Swal.fire({
      title: '@lang("lang.please_choose_car")',
      icon: "warning",
      iconColor: 'warning',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>
{{-- =================================== login success ======================================= --}}
<script>
  document.addEventListener('this_car_is_not_empty', function(e) {
    Swal.fire({
      title: '@lang("lang.this_car_is_not_empty")',
      icon: "warning",
      iconColor: 'warning',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>
{{-- =================================== login success ======================================= --}}
<script>
  document.addEventListener('please_select_data', function(e) {
    Swal.fire({
      title: '@lang("lang.please_select_data")',
      icon: "warning",
      iconColor: 'warning',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>
{{-- =================================== you are not driver ======================================= --}}
<script>
  document.addEventListener('you_are_not_driver', function(e) {
    Swal.fire({
      title: '@lang("lang.you_are_not_driver")',
      icon: "warning",
      iconColor: 'warning',
      timer: 3000,
      toast: true,
      position: 'top-right',
      showConfirmButton: false,
    });
  });
</script>