<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded-top p-4">
        <h1 class="text-center ket">Data masuk</h1>

        <div class="row">
            <table class="table table-striped data-parkir-das">
                <thead>
                    <tr>
                        <th>N</th>
                        <th>M</th>
                        <th>Mo</th>
                        <th>G&L</th>
                        <th>Ha</th>
                        <th>Sta</th>
                        <th>J&t</th>
                        <th>Ak</th>
                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>
                    @foreach ($Pmasuk as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->mall }}</td>
                            <td>{{ $item->plat }}</td>
                            <td>{{ $item->gedung }}{{ $item->lantai }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->jam }}</td>
                            <td>
                                <a href="#" class="btn-sm btn-edit">
                                    <span class="hover-edit">Edit</span>
                                    <i class="fas fa-edit icon-edit"></i>
                                </a>
                                <Form action="/delete/{{ $item->id }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin ingin mengahus data')">
                                    @csrf
                                    @method('delete')
                                    <button href="#" class="btn-sm">
                                        <span class="hover-hps">Hapus</span>
                                        <i class="fas fa-trash icon-delete"></i>
                                    </button>
                                </Form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
