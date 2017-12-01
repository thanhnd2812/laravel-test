<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <form method="get" role="form" action="/sales">

            <div class="form-group">
                <label for="neighborhood">Neighborhood:</label>
                <select name="neighborhood" id="neighborhood" class="form-control" >
                    <option value="">Choose one:</option>
                    @foreach ($neighborhoods as $key=>$value)
                        <option
                            value="{{ $value}}"
                            {{ old('neighborhood') === $value ? 'selected' : '' }}
                        >
                            {{ $value}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="bedroom">Bedrooms:</label>
                <select name="bedroom" id="bedroom" class="form-control" >
                    <option value="">Choose one:</option>
                    @foreach ($bedrooms as $key=>$value)
                        <option
                            value="{{ $value}}"
                            {{ old('bedroom') === $value ? 'selected' : '' }}
                        >
                            {{ $value}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="badroom">Badrooms:</label>
                <select name="badroom" id="badroom" class="form-control" >
                    <option value="">Choose one:</option>
                    @foreach ($badrooms as $key=>$value)
                        <option
                            value="{{ $value}}"
                            {{ old('badroom') === $value ? 'selected' : '' }}
                        >
                            {{ $value}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="type">Types:</label>
                <select name="type" id="type" class="form-control" >
                    <option value="">Choose one:</option>
                    @foreach ($types as $key=>$value)
                        <option
                            value="{{ $value}}"
                            {{ old('type') === $value ? 'selected' : '' }}
                        >
                            {{ $value}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="min_price">Price from:</label>
                <input type="number" class="form-control" id="min_price" name="min_price" placeholder="price from">
            </div>

            <div class="form-group">
                <label for="min_price">Price to:</label>
                <input type="number" class="form-control" id="max_price" name="max_price" placeholder="price to">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
                <a href="/sales" class="btn btn-primary">Clear</a>
            </div>


            @if (count($errors))
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

        </form>
    </div>
</div>