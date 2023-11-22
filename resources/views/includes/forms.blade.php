    @csrf
    <div class="form-group row">
        <div class="col-md-12">
            <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" placeholder="Rentrer un pseudo...." value="{{ old('name') ?? $client->name}}">
            @error('name')
            <div class="invalid-feedback">
                    {{$errors->first('name')}}
            </div>
            @enderror
        </div>
    </div>
    <br>
    <div class="form-group row">
        <div class="col-md-12">
            <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" placeholder="Rentrer un email...." value="{{ old('email') ?? $client->email}}">
            @error('email')
            <div class="invalid-feedback">
                    {{$errors->first('email')}}
            </div>
            @enderror
        </div>
    </div>
    <br>
    <div class="form-group justify-content"> 
        <select class="form-select form-select-sm  @error('status') is-invalid @enderror" name="status" aria-label=".form-select-sm example">
            {{-- <option value="1">Actif</option>
            <option value="0">Inactif</option> --}}
            @foreach ($client->getStatusOptions() as $key => $value )
            <option value="{{$key}}">{{$value}}</option>
            @endforeach
        </select>
        @error('status')
            <div class="invalid-feedback">
                    {{$errors->first('status')}}
            </div>
        @enderror
    </div>
    <br>
    <div class="form-group"> 
        <select class="form-select form-select-sm  @error('entreprise_id') is-invalid @enderror" name="entreprise_id" aria-label=".form-select-sm example">
            {{-- <option value="0">Inactif</option> --}}
            @foreach ($entreprises as $entreprise)
                <option value="{{$entreprise->id}}" {{$client->entreprise_id == $entreprise->id ? 'seleected':''}}>{{$entreprise->name}}</option>
            @endforeach
        </select>
        @error('entreprise_id')
            <div class="invalid-feedback">
                    {{$errors->first('entreprise_id')}}
            </div>
        @enderror
    </div>
    <br>