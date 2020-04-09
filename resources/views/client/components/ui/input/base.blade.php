@if($label ?? null)<label for="exampleInputEmail1">{{$label}}</label>@endif
<input type="{{$type ?? 'text'}}"
       @if(isset($name))name="{{$name}}" @endif
       class="form-control @error($name) is-invalid @enderror"
       id="exampleInputEmail1"
       value="{{$value}}"
>
@isset($subLabel)
    <small id="emailHelp" class="form-text text-muted" >{{$subLabel}}</small>
@endif
@error($name)
<small id="emailHelp" class="form-text text-danger" >{{$message}}</small>
@enderror
