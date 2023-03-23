@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('tests.update',['test'=>$test->id])}}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" value="{{$test->name}}" placeholder="name"/>
    <input type="submit" value="Update">
</form>