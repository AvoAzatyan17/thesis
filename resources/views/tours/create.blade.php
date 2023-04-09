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
                            <li class="breadcrumb-item"><a href="{{ route('tours.index') }}">Tours</a></li>
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
                                <h3 class="card-title">Create Tour</h3>
                            </div>
                            <form method="POST" action="{{ route('tours.store') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="start_country">Start Place</label>
                                                <input type="text" class="form-control" name="start_country" id="start_country" placeholder="Start Place" value="{{ old("start_country") }}">
                                            </div>
                                            @error('name')
                                            <p class="w-100 text-danger">{{ $message }}</p>
                                            @enderror
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="start_date">Start Date</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                            </div>
                                                            <input type="datetime-local" class="form-control" name="start_date" id="start_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="end_date">End Date</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                            </div>
                                                            <input type="datetime-local" class="form-control" name="end_date" id="end_date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="end_country">End Place</label>
                                                <input type="email" name="end_country" class="form-control" id="end_country" placeholder="End Place">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Language">Status</label>
                                                        <select class="custom-select rounded-0" id="Language" name="status">
                                                            <option style="display:none;" selected value="">Choose Status</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Expired</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Count">Count</label>
                                                        <input type="email" name="count" class="form-control" id="Count" placeholder="End Please" autocomplete="new-password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" id="description" name="description" rows="10" cols="50"></textarea>
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
@include('admin/footer')
