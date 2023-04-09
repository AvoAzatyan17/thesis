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
                            <li class="breadcrumb-item active">EDIT - {{$user->id}}</li>
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
                                <h3 class="card-title">EDIT - {{$user->id}}</h3>
                            </div>
                            <form method="POST" action="{{ route('tours.update', $user->id) }}">
                                @csrf
                                @method("PUT")
                                <div class="card-body">
                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="start_country">Start Place</label>
                                                <input type="text" class="form-control" name="start_country" id="start_country" placeholder="Start Place" value="{{ $user->start_country }}">
                                            </div>
                                            @error('start_country')
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
                                                            <input type="datetime-local" class="form-control" value="{{ $user->start_date }}" name="start_date" id="start_date">
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
                                                            <input type="datetime-local" class="form-control" value="{{ $user->end_date }}" name="end_date" id="end_date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="end_country">End Place</label>
                                                <input type="text" name="end_country" value="{{ $user->end_country }}" class="form-control" id="end_country" placeholder="End Place">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="status">Status</label>
                                                        <select class="custom-select rounded-0" id="status" name="status">
                                                            <option style="display:none;" selected value="">Choose Status</option>
                                                            <option value="1" @if($user->status == 1) selected @endif>Active</option>
                                                            <option value="0" @if($user->status == 0) selected @endif>Expired</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Count">Count</label>
                                                        <input type="number" name="count" class="form-control" value="{{ $user->count }}" id="Count" placeholder="End Please" autocomplete="new-password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" id="description" name="description" rows="10" cols="50">{!! $user->description !!} </textarea>
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
