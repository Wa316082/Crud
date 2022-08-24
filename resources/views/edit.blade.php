<div>
    <span>Information Edit</span>
    <button><a href="{{ url('info') }}">Back</a></button>
</div>
<br><br>

<div>
    <form action="{{ url('info/'.$information->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $information->name }}">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $information->email }}">
        <br><br>
        <label for ="location">Location: </label>
        <input type="location" name="location" value="{{ $information->location }}">
        <br><br>
        <button type="submit">Update</button>

    </form>
</div>