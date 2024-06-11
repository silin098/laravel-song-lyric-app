
<x-layout>
    <h1 class="dashboard-title">DashBoard</h1>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Total Song</th>
                <th>Total Artist</th>
                <th>Total Album</th>
                <th>Total Genre</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    1
                </td>
                <td>{{$count['songCount']}}</td>
                <td>{{$count['artistCount']}}</td>
                <td>{{$count['albumCount']}}</td>
                <td>{{$count['genre']}}</td>

            </tr>
        </tbody>
    </table>

</x-layout>
