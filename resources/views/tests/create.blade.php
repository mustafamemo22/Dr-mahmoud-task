@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('tests.store')}}" method="post">
    @csrf
    <input type="text" name="name" value="{{old('name')}}" placeholder="name"/>
    <input type="submit" value="create">
</form>