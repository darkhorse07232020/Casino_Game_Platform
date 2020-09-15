@extends('home')

@section('title')
    Edit Permission
@endsection

@section('extra-css')

@endsection

@section('index')
<div class="content">
        <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Permission</h5>
              </div>
              <div class="card-body">

              <form id="form_validation" method="POST" action="{{ route('permissions.update',$permission->id) }}">
                    @csrf
                    <div class="form-group">
                        <div class="form-line">
                            <input name="_method" type="hidden" value="PUT">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $permission->name }}" required>
                            @error('name')
                                <label id="name-error" class="error" for="name">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit">UPDATE</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('extra-script')

@endsection
