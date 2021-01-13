@extends('home')
@section('title', 'Chỉnh sửa khách hàng')
@section('store')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Chỉnh sửa</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('stores.update', $store->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Ma Dai ly</label>
                        <input type="number" class="form-control" name="code" value="{{ $store->code }}" required>
                    </div>


                    <div class="form-group">
                        <label>Ten Dai Ly</label>
                        <input type="text" class="form-control" name="name" value="{{ $store->name }}" required>
                    </div>



                    <div class="form-group">
                        <label>Dien thoai</label>
                        <input type="number" class="form-control" name="phone" value="{{ $store->phone }}" required>
                    </div>



                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $store->email }}" required>
                    </div>



                    <div class="form-group">
                        <label>Dia Chi</label>
                        <input type="text" class="form-control" name="address" value="{{ $store->address }}" required>
                    </div>



                    <div class="form-group">
                        <label>Ten quan Ly</label>
                        <input type="text" class="form-control" name="manager" value="{{ $store->manager }}" required>
                    </div>


                    <div class="form-group">
                        <label>Trang Thai</label>
                        <input type="text" class="form-control" name="status" value="{{ $store->status }}" required>
                    </div>




                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection

