<x-layout>
    <div class="form-container">
        <h2>Artists</h2>
        <form action="/artists" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>
            @error('name')
                <div class="error">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label for="text">Slug:</label>
                <input type="text" id="text" name="slug">
            </div>
            @error('slug')
            <div class="error">{{$message}}</div>
            @enderror

            <div class="form-group">
                <label for="genre">Genre:</label>
                <select id="genre" name="genres[]"  multiple size="3">
                    <option value="">Select Genre</option>
                    @foreach($genres as $genre)
                        <option value="{{$genre->id}}">{{$genre->name}}</option>
                    @endforeach

                </select>
            </div>
            @error('genres')
            <div class="error">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label for="message">Bio:</label>
                <textarea id="message" name="bio" required></textarea>
            </div>
            @error('bio')
            <div class="error">{{$message}}</div>
            @enderror
            <div class="form-group">
                <button type="submit">Save</button>
            </div>
        </form>
    </div>
</x-layout>


