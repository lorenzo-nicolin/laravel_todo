
<div>
    <table>

        <tr>
            <td>Name</td>
            <td>Status</td>
        </tr>

        @foreach($todoItems as $item)
            <tr>
                <td>
                    {{$item->ItemName}}
                </td>
                <td>
                    {{$item->Status}}
                </td>
                <td>
                    <form action="{{ route('update', $item->id) }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <input type="hidden" name="Status" value="1">
                        <button type="submit">Update</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
</div>