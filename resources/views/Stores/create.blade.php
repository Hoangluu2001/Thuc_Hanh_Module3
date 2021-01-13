@extends('home')
@section('title', 'Thêm mới khách hàng')
@section('store')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm Mới</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('stores.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Mã Số Đại Lý </label>
                        <input type="number" class="form-control" name="code"  required>

{{--                        @if($errors->any())--}}
{{--                            <p class="alert-danger my-sm-4">{{ $errors->first('code') }}</p>--}}
{{--                        @endif--}}
                    </div>


                    <div class="form-group">
                        <label>Tên Đại Lý </label>
                        <input type="text" class="form-control" name="name"  required>

{{--                        @if($errors->any())--}}
{{--                            <p class="alert-danger my-sm-4">{{ $errors->first('name') }}</p>--}}
{{--                        @endif--}}
                    </div>

                    <div class="form-group">
                        <label>Điện Thoai </label>
                        <input type="number" class="form-control" name="phone" required>

{{--                        @if($errors->any())--}}
{{--                            <p class="alert-danger my-sm-4">{{ $errors->first('phone') }}</p>--}}
{{--                        @endif--}}
                    </div>



                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" >

{{--                        @if($errors->any())--}}
{{--                            <p class="alert-danger my-sm-4">{{ $errors->first('email') }}</p>--}}
{{--                        @endif--}}
                    </div>


                    <div class="form-group">
                        <label> Địa Chỉ </label>
                        <input type="text" class="form-control" name="address" required>

{{--                        @if($errors->any())--}}
{{--                            <p class="alert-danger my-sm-4">{{ $errors->first('address') }}</p>--}}
{{--                        @endif--}}
                    </div>



                    <div class="form-group">
                        <label>Tên người Quản Lý  </label>
                        <input type="text" class="form-control" name="manager" required>
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <label>Trạng Thái  </label>--}}
{{--                        <input type="text" class="form-control" name="status" >--}}
{{--                    </div>--}}


                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select name="status" id="status">
                            <option value="Hoạt động">Hoạt động</option>
                            <option value="Ngừng hoạt động ">Ngừng hoạt động</option>
                            </option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
