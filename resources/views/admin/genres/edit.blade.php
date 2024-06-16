<x-layout>
    <div class="form-container">
        <h2>Update Genres</h2>
        <form action="/genre/update/{{$genre->id}}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{$genre->name}}">
            </div>
            @error('name')
            <div class="error">{{$message}}</div>
            @enderror

            <div class="form-group">
                <a href="/genres">Cancel</a>
                <button type="submit">Update</button>
            </div>

        </form>
    </div>
</x-layout>


