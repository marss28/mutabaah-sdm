@if($data->count() > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Nama Tugas</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->data_tugas_mingguan }}</td>
                    <td>{{ $item->deskripsi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Tidak ada data ditemukan untuk: <strong>{{ $keyword }}</strong></p>
@endif
