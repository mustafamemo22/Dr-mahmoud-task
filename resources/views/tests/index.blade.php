<a href="tests/create">Create</a>
<hr/>
<table width="100%" border="1" cellspacing="1" cellpading="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Show</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tests as $test)
        <tr>
            <td>{{ $test->id }}</td>
            <td>{{ $test->name }}</td>
            <td><a href="{{route('tests.edit', ['test'=>$test->id])}}">Edit</a></td>
            <td><a href="{{route('tests.show', ['test'=>$test->id])}}">Show</a></td>
            <td>
                <form action="{{ route('tests.destroy',['test'=>$test->id])}}" method="post">
                    @csrf
                    @method('delete')
                    
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
       
    </tbody>
</table>