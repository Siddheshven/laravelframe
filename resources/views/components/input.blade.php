<div class class="form-group">
        <label for="">{{$label}}</label><br>
        <input type="{{$type}}" id="" name="{{$name}}" class="form-control" ><br><br>
        <span class="text-danger">
            {{$demo}}
            {{-- @error('name')
                {{$message}}
            @enderror --}}
        </span>
</div>
