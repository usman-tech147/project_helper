<form method="post" action="{{route('post_data')}}" style="padding: 50px">
    @csrf
    <div class="form-row" style="padding: 20px">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" id="inputEmail4" name="email" placeholder="Email">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6" style="padding: 20px">
            <label for="inputCity">City</label>
            <input type="text" name="city" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4" style="padding: 20px">
            <label for="inputState">State</label>
            <select id="program" name="program" class="form-control">
                @foreach($list as $l)
                    <option value="{{$l}}"> {{$l}} </option>
                @endforeach
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">post data</button>
</form>