
<x-layout>
    <x-admin-side-bar/>

    <h2 class="artist-table">Artists Info</h2>
    <div class="artist-input-form">
        <x-input-form/>

    </div>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Track</th>
            <th>Created</th>
            <th colspan="2">Action</th>


        </tr>
        </thead>
        <tbody>
        @foreach($artists as $index=>$artist)

        <tr>
            <td>
                {{$index+1}}
            </td>
            <td>{{$artist->name}}</td>
            <td>{{$artist->songs_count}}</td>
            <td>{{$artist->created_at->diffForHumans()}}</td>
            <td><button>Edit</button></td>
            <td><button>Delete</button></td>

        </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>
