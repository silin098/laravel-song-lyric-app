<x-layout>
    <div class="form-container">
        <h2>Update Artists</h2>
        <form action="/artist/update/{{$artist->id}}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{$artist->name}}">
            </div>
            @error('name')
            <div class="error">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label for="text">Slug:</label>
                <input type="text" id="text" name="slug" value="{{$artist->slug}}">
            </div>
            @error('slug')
            <div class="error">{{$message}}</div>
            @enderror

            <div class="form-group">
                <label for="genre">Genre:</label>
                <select id="genre" name="genres[]"  multiple size="3">
                    <option value="">Select Genre</option>
                    @foreach($allGenres as $genre)
                        <option value="{{$genre->id}}" {{$artist->genres->contains($genre->id)? 'selected':''}}>{{$genre->name}}</option>
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
                <a href="/artists">Cancel</a>
                <button type="submit">Cancel</button>
            </div>

        </form>
    </div>
</x-layout>


