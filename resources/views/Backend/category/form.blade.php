<form class="p-3" action="{{ $route }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" name="c_name" value="{{ old('c_name',$category->c_name ?? '') }}">
        @if($errors->first('c_name'))
            <small id="emailHelp" class="form-text text-danger">{{ $errors->first('c_name') }}</small>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Xử lý thông tin</button>
</form>
