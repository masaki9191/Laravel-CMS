    <div class="row">
        <div class="offset-md-1 col-md-10">
            <table class="table officer-table table-bordered mt-7">
                @foreach($records as $record)
                <tr>
                    <th>{{ $record->name }}</th>
                    <td>{{ $record->company }}</td>
                    <td>{{ $record->class_name_text }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-10 offset-md-4">
        </div>
    </div>