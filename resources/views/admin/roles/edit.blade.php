@extends('home')

@section('title')
    Edit Permission
@endsection

@section('extra-css')

@endsection

@section('index')
        <div class="content">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="">
                            <h3>
                                Edit Role
                            </h3>
                        </div>
                        <div class="card-body">
                           <form id="form_validation" method="POST" action="{{ route('roles.update',$role->id) }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input name="_method" type="hidden" value="PUT">
                                    <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ $role->name }}" required>
                                    @error('name')
                                        <label id="name-error" class="error" for="email">{{ $message }}</label>
                                     @enderror
                                </div>
                                 <div class="form-group">
                                    <label class="form-label">Permissions (Multiple Selection)</label>
                                    <select class="form-control  @error('permission') is-invalid @enderror" id="your-select" multiple>
                                        @foreach($permissions as $permission)
                                            <option value="{{ $permission }}">{{ $permission }}</option>
                                        @endforeach
                                    </select>

                                    @error('permission')
                                        <label id="name-error" class="error" for="email">{{ $message }}</label>
                                     @enderror
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
<script type="text/javascript">
    var test = "{{$selectedPermissions}}";
    if (test != '') {
        document.getElementById('your-select').value = test;
    }
</script>
@endsection

