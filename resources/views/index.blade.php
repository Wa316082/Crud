
@if (session('status'))
    <div>{{ session('status') }}</div>
    
@endif
<div>
   <span>Informations</span> 
    <button> <a href="{{ url('info/create') }}">Create</a></button>
</div>
<br><br>
<div>
    
        
    
<table>
    <tr >
      <th >Name</th>
      <th >Email</th>
      <th >Location</th>
      <th>Actions</th>
    </tr>
    @foreach ($informations as $information)
    <tr>
        
      <td >{{ $information->name}}</td>
    
      <td>{{ $information->email }}</td>
      
      <td >{{ $information->location }}</td>
      
      <td>
        <button><a href="{{ url('info/' .$information->id. '/edit') }}" > Edit</a> </button>
        
        <form action="{{ url('info/'.$information->id) }}" method="POST">
            @csrf
            @method('Delete')
            <button type="submit" >Delete</button>
        </form>
    </td>
    </tr>
    @endforeach
    
  </table>
 
</div>
 