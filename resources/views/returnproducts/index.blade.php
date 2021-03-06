@extends('layouts.app')
@section('return-content')
    <div class="card card-4">
    @if($message = Session::get('success'))
                           <div class="alert alert-success">
                             <p>{{$message}}</p>
                          </div>
            @endif
      <div class="card-body">
          <h2 class="title">Product Return</h2>
          <form method="POST" action="{{ route('returnproduct.store') }}" enctype="multipart/form-data">
          @csrf
            <h4 style="margin-bottom: 20px">1. Thông tin đơn hàng</h4>
              <div class="row row-space">
                  <div class="col-md-6 col-xs-12">
                      <div class="input-group">
                          <label class="label">Họ và tên</label>
                          <input class="input--style-4" type="text" name="name">
                      </div>
                  </div>
              </div>
              <div class="row row-space">
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                        <label class="label">E-mail</label>
                        <input class="input--style-4" type="email" name="email">
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                        <label class="label">Số điện thoại</label>
                        <input class="input--style-4" type="tel" name="phone">
                    </div>
                </div>
            </div>
              <div class="row row-space">
                  <div class="col-md-6 col-xs-3">
                    <div class="input-group">
                        <label class="label">Mã đơn hàng</label>
                        <div class="input-group">
                            <input class="input--style-4" type="text" name="order_id">
                        </div>
                    </div>
                  </div>
              </div>
            <h4 style="margin-bottom: 20px">2. Thông tin sản phẩm</h4>
            <div class="row row-space">
              <div class="col-md-6 col-xs-12">
                  <div class="input-group">
                      <label class="label">Tên sản phẩm</label>
                      <input class="input--style-4" type="text" name="product_name">
                  </div>
              </div>
              <div class="col-md-6 col-xs-12">
                  <div class="input-group">
                      <label class="label">Mã sản phẩm</label>
                      <input class="input--style-4" type="text" name="product_code">
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                  <div class="input-group">
                      <label class="label">Số lượng</label>
                      <input class="input--style-4" type="number" name="product_quantity">
                  </div>
              </div>
            </div>
           <div class="row">
              <div class="col-4">
                <label for="photo">{{ trans('cruds.return.fields.photo') }}</label>
  
                <input type="file" name="fileToUpload" id="fileToUpload">
    
                <span class="help-block">{{ trans('cruds.return.fields.photo_helper') }}</span>
                </div>
            </div> 
            <h5 style="margin-top: 10px; margin-bottom: 20px; font-size: 16px">Lí do trả hàng</h5>
            <div style="margin-left : 5px" class="row">
            <div class="col-12"> 
              <input id="option-one" name="reason" value="Hàng nhận được bị thiếu/sai/bể vỡ/không hoạt động/khác mô tả/đã qua sử dụng/giả nhái" checked="checked" type="radio"> 
              <label for="option-one"> 
                <span></span>Hàng nhận được bị thiếu/sai/bể vỡ/không hoạt động
                <br>
                /khác mô tả/đã qua sử dụng/giả nhái
              </label> 
            </div> 
            <div class="col-12"> 
              <input id="option-two" name="reason" value="Chưa nhận được hàng nhưng Shipper đã cập nhật giao hàng thành công" type="radio"> 
              <label for="option-two"> <span></span> Chưa nhận được hàng nhưng Shipper đã cập nhật giao hàng <br> thành công
              </label> 
            </div>
            <div class="col-12"> 
              <input id="option-three" name="reason" value="Chưa nhận được hàng sau thời gian giao hàng dự kiến" type="radio"> 
              <label for="option-three"> <span></span> Chưa nhận được hàng sau thời gian giao hàng dự kiến
              </label> 
            </div>
            <div class="col-12"> 
              <input id="option-three" name="reason" value="Lí do khác" type="radio"> 
              <label for="option-three"> <span></span> Lí do khác
              </label> 
            </div>
          </div>
          <div class="row form-group">
            <div class="col-12">
              <label style="font-size:16px; margin:30px 0 20px 0" for="exampleFormControlTextarea1">Chi tiết lí do khác</label>
              <textarea name="other_details" placeholder="Faulty or other details" class="form-control col-12" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>
          </div>
              <div style=" margin-top: 20px;"
              class="p-t-15">
                  <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
              </div>
          </form>
      </div>
</section>
@endsection

@section('scripts')
<script>
    Dropzone.options.photoDropzone = {
    url: '{{ route('returnproduct.storeMedia') }}',
    maxFilesize: 5, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($coupon) && $coupon->photo)
      var file = {!! json_encode($coupon->photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@endsection