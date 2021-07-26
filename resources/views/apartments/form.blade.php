@extends('layout.master-layout')
@section('content')
    <div class="basic-form-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline12-list">
                        <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h1>All Form Element</h1>
                            </div>
                        </div>
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="all-form-element-inner">
                                            <form action="" method="post">
                                                @csrf
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">Apartment Name
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control" name="apartmentName"
                                                                   value="{{$current ? $current->apartmentName:''}}"/>
                                                            @error('apartmentName')
                                                            <div class="text-danger">* {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">Address</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control" name="address"
                                                                   value="{{$current ? $current->address:''}}"/>
                                                            @error('address')
                                                            <div class="text-danger">* {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">Price</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control" name="portfolio"
                                                                   value="{{$current ? $current->price:''}}"/>
                                                            @error('price')
                                                            <div class="text-danger">* {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">General Information</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control" name="generalInformation"
                                                                   value="{{$current ? $current->generalInformation:''}}"/>
                                                            @error('generalInformation')
                                                            <div class="text-danger">* {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">Private Information</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control" name="privateInformation"
                                                                   value="{{$current ? $current->privateInformation:''}}"/>
                                                            @error('privateInformation')
                                                            <div class="text-danger">* {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">Avatar</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control" name="avatar"
                                                                   value="{{$current ? $current->avatar:''}}"/>
                                                            @error('avatar')
                                                            <div class="text-danger">* {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label
                                                                class="login2 pull-right pull-right-pro">Status</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                        name="status">
                                                                    @foreach(\App\Enums\ApartmentStatus::getValues() as $type)
                                                                        <option
                                                                            {{$current && $current->status === $type ? 'selected' : ''}}  value="{{$type}}">{{\App\Enums\ApartmentStatus::getDescription($type)}}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('status')
                                                                <div class="text-danger">* {{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="login-btn-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3"></div>
                                                            <div class="col-lg-9">
                                                                <div
                                                                    class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                    <button
                                                                        class="btn btn-sm btn-primary login-submit-cs"
                                                                        type="submit">Save Change
                                                                    </button>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

