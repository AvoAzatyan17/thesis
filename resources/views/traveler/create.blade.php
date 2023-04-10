<div class="wrapper">
    @include('admin/head')
    @include('admin/headTop')
    @include('admin/sidebar')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('travelers.index') }}">Travelers</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create Accounting</h3>
                            </div>
                            <form method="POST" action="{{ route('travelers.store') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Name">Name</label>
                                                <input type="text" class="form-control" name="name" id="Name" placeholder="Name" value="{{ old("name") }}">
                                            </div>
                                            @error('name')
                                            <p class="w-100 text-danger">{{ $message }}</p>
                                            @enderror
                                            <div class="form-group">
                                                <label for="Phone">Phone</label>
                                                <input type="number" class="form-control" name="phone" id="Phone" placeholder="Phone" value="{{ old("phone") }}">
                                            </div>
                                            @error('phone')
                                            <p class="w-100 text-danger">{{ $message }}</p>
                                            @enderror
                                            <div class="form-group">
                                                <label for="Paid">Paid</label>
                                                <select class="custom-select rounded-0" id="Paid" name="paid">
                                                    <option style="display:none;" selected value="">Choose Paid</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                            </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Passport">Passport</label>
                                                <input type="text" name="passport" class="form-control" id="Passport" placeholder="Passport" autocomplete="new-password">
                                            </div>
                                            <div class="form-group">
                                                <label for="Paid">Paid</label>
                                                <select class="custom-select rounded-0" id="Paid" name="paid">
                                                    <option style="display:none;" selected value="">Choose Tour</option>
                                                    @foreach($tours as $tour)
                                                        <option value="{{$tour->id}}">{{$tour->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="Status">Status</label>
                                                <select class="custom-select rounded-0" id="Status" name="status">
                                                    <option style="display:none;" selected value="">Choose Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Blocked</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary fa-pull-right">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
