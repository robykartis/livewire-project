<div class="table-responsive">
    <table class="table table-centered mb-0 table-nowrap" id="btn-editable">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Type</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $key => $user)
                <tr>
                    <td>{{ $loop->iteration + $users->perPage() * ($users->currentPage() - 1) }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->type }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="">edit</a>
                            <a href="">show</a>
                            <a href="">delete</a>
                        </div>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>

    <div class="mt-2">
        {{ $users->links() }}
    </div>
</div>
