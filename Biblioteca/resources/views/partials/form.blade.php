<form method="POST" action="/saveregister">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <label for="_ISBN" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="_ISBN" name="_ISBN" value="{{old('_ISBN')}}">
                @if($errors->first('_ISBN'))
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first('_ISBN')}}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="_Title" class="form-label">Book title</label>
                <input type="text" class="form-control" id="_Title" name="_Title" value="{{old('_Title')}}">
                @if($errors->first('_Title'))
                    <div class="alert alert-danger" role="alert" >
                        {{$errors->first('_Title')}}
                    </div>
                @endif
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="_Author" class="form-label">Author</label>
                <input type="text" class="form-control" id="_Author" name="_Author" value="{{old('_Author')}}">
                @if($errors->first('_Author'))
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first('_Author')}}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="_Pages" class="form-label">Pages</label>
                <input type="number" class="form-control" id="_Pages" name="_Pages" value="{{old('_Pages')}}">
                @if($errors->first('_Pages'))
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first('_Pages')}}
                    </div>
                @endif
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="_Publisher" class="form-label">Publisher</label>
                <input type="text" class="form-control" id="_Publisher" name="_Publisher" value="{{old('_Publisher')}}">
                @if($errors->first('_Publisher'))
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first('_Publisher')}}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <label for="_email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="_email" name="_email" value="{{old('_email')}}">
                @if($errors->first('_email'))
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first('_email')}}
                    </div>
                @endif
            </div>
            
        </div>
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>    
</form>