@if($label ?? null)<label for="exampleInputEmail1">{{$label}}</label>@endif
<textarea class="form-control @error($name) is-invalid @enderror"
          @if(isset($name))name="{{$name}}" @endif
          rows="3"
>{{$value}}</textarea>
@error($name)
<small id="emailHelp" class="form-text text-danger" >{{$message}}</small>
@enderror
