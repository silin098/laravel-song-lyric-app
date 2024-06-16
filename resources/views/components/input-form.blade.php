<div>
    <div class="add-button">

        <a href="{{$url}}" class="add-artist-button">{{$slot}}</a>
    </div>
    <form>
        @csrf
        <input type="text" name="">
        <button type="submit" class="search-button">Search</button>
    </form>



</div>
