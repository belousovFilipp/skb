<div class="custom-control custom-checkbox">
    <input type="checkbox"
           @if(isset($name))name="{{$name}}" @endif
           class="custom-control-input"
           id="customCheck1"
           @if($value) checked="checked" @endif
    >
    <label class="custom-control-label @error($name) is-invalid @enderror"
           for="customCheck1">{{$label}}</label>
    @error($name)
        <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
    @enderror
</div>
