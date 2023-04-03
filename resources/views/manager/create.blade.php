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
                            <li class="breadcrumb-item"><a href="{{ route('manager.index') }}">Admin</a></li>
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
                                <h3 class="card-title">Create Manager</h3>
                            </div>
                            <form method="POST" action="{{ route('manager.store') }}">
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
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="Language">Language</label>
                                                        <select class="custom-select rounded-0" id="Language" name="lang">
                                                            <option style="display:none;" selected value="">Choose Language</option>
                                                            <option value="en">English</option>
                                                            <option value="fr">France</option>
                                                            <option value="hy">Armenian</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="Status">Status</label>
                                                        <select class="custom-select rounded-0" id="Status" name="status">
                                                            <option style="display:none;" selected value="">Choose Status</option>
                                                            <option value="active">Active</option>
                                                            <option value="blocked">Blocked</option>
                                                            <option value="waiting">Waiting</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="Status">Choose Admin</label>
                                                        <select class="custom-select rounded-0" id="admin_id" name="admin_id">
                                                            <option style="display:none;" selected value="">Choose Admin</option>
                                                            @foreach($admins as $admin)
                                                                <option value="{{$admin->id}}">{{$admin->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" autocomplete="new-password">
                                            </div>
                                            @error('email')
                                            <p class="w-100 text-danger">{{ $message }}</p>
                                            @enderror
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input autocomplete="new-password" name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            @error('password')
                                            <p class="w-100 text-danger">{{ $message }}</p>
                                            @enderror
                                            <div class="form-group">
                                                <label for="ConfirmPassword">Confirm Password</label>
                                                <input autocomplete="off" type="password" name="password_confirmation" step="1"
                                                       class="form-control" id="password_confirmation" placeholder="Confirm Password">
                                            </div>
                                            @error('password_confirmation')
                                            <p class="w-100 text-danger">{{ $message }}</p>
                                            @enderror
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
