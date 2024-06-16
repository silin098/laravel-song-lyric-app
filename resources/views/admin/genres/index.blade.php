
<x-layout>
    <x-admin-side-bar/>

    <h2 class="artist-table">All Genres</h2>
    <div class="artist-input-form">
        <x-input-form url="/genre/create">Add Genre</x-input-form>
    </div>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Genres</th>
            <th>Track</th>
            <th>Created</th>
            <th colspan="2">Action</th>


        </tr>
        </thead>
        <tbody>
        @foreach($genres as $index=>$genre)

            <tr>
                <td>
                    {{$index+1}}
                </td>
                <td>{{ucwords($genre->name)}}</td>
                <td>{{$genre->songs_count}}</td>
                <td>{{$genre->created_at->diffForHumans()}}</td>
                <td><a href="/genre/edit/{{$genre->id}}">Edit</a></td>
                <td>
                    <form action="/genre/delete/{{$genre->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="return confirm('Are you Sure You want to Delete')">Delete</button>
                    </form>

                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>
