<x-layout>
    <div class="form-container">
        <h2>Artists</h2>
        <form action="/genre" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Genre:</label>
                <input type="text" id="name" name="name">
            </div>
            @error('name')
            <span class="error">{{$message}}</span><br>
            @enderror

            <div class="form-group">
                <button type="submit">Save</button>
            </div>
        </form>
    </div>
</x-layout>


