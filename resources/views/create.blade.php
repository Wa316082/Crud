<div>
    <span>Information Create</span>
    <button><a href="{{ url('info') }}">Back</a></button>
</div>
<br><br>

<div>
    <form action="{{ url('info') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email">
        <br><br>
        <label for="location">Location:</label>
        <input type="location" name="location">
        <br><br>
        <button type="submit">Save</button>

    </form>
</div>

