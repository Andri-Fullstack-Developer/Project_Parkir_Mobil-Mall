<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded-top p-4">
        <h1 class="text-center ket">Data Keluar</h1>

        <div class="row">
            <table class="table table-striped data-parkir-das">
                <thead>
                    <tr>
                        <th>N</th>
                        <th>M</th>
                        <th>Mo</th>
                        <th>G&L</th>
                        <th>Ha</th>
                        <th>J&t</th>
                        <th>Ak</th>
                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>Plazza Marina</td>
                        <td>D 111 AA</td>
                        <td>B</td>
                        <td>8</td>
                        <td>12:12</td>
                        <td>
                            <a href="#" class="btn-sm btn-edit">
                                <span class="hover-edit">Edit</span>
                                <i class="fas fa-edit icon-edit"></i>
                            </a>
                            <a href="#" class="btn-sm">
                                <span class="hover-hps">Hapus</span>
                                <i class="fas fa-trash icon-delete"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>Plazza Marina</td>
                        <td>B 8 CVC</td>
                        <td>D</td>
                        <td>2</td>
                        <td>12:12</td>
                        <td>
                            <a href="#" class="btn-sm btn-edit">
                                <span class="hover-edit">Edit</span>
                                <i class="fas fa-edit icon-edit"></i>
                            </a>
                            <a href="#" class="btn-sm">
                                <span class="hover-hps">Hapus</span>
                                <i class="fas fa-trash icon-delete"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>Plazza Marina</td>
                        <td>A 221 BB</td>
                        <td>A</td>
                        <td>1</td>
                        <td>12:12</td>
                        <td>
                            <a href="#" class="btn-sm btn-edit">
                                <span class="hover-edit">Edit</span>
                                <i class="fas fa-edit icon-edit"></i>
                            </a>
                            <a href="#" class="btn-sm">
                                <span class="hover-hps">Hapus</span>
                                <i class="fas fa-trash icon-delete"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
