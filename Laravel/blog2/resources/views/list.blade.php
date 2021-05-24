<h1>List Member</h1>
<a href="/addmember">Add member</a>
<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>address</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['address']}}</td>
        <td><a href="/delete/{{$item['id']}}">Xoa</a></td>
        <td><a href="/update/{{$item['id']}}">Sua</a></td>
    </tr>
    @endforeach
    
</table>
<span>
    {{$data->links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style>