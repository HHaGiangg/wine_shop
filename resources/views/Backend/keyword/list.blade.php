<div class="col-lg-7">
    <div class="card">
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($keywords as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->k_name }}</td>
                            <td>{{ $item->k_slug }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="{{ route('get_backend.keyword.update', $item->id) }}" class="btn btn-xs btn-primary">Update</a>
                                <a href="{{ route('get_backend.keyword.delete', $item->id) }}" class="btn btn-xs btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
