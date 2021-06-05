<head>
    <meta name="viewport" content="width=device-width, 
    initial-scale=1">
    <title>Data Transaksi</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>

<body>
    <div style="overflow-x:auto">

        
         <p>Cari Data Pegawai :</p>
	    <form action="/cari" method="GET">
		    <input type="text" name="cari" placeholder="Cari Data ..">
		    <input type="submit" value="CARI">
	    </form>
        <a class="tambah" href="{{route('tambah_transaksi0267.create')}}">Tambah Data </a>
        <table>
            <thead>
                <tr>
                    <th>ID transaksi</th>
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>Pembelian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($toko as $tk)
                    <tr>
                        <td>{{$tk->id}}</td>
                        <td>{{$tk->nama}}</td>
                        <td>{{$tk->alamat}}</td>
                        <td>{{$tk->harga}}</td>
                        <td> 
                            <a href="{{ url('toko/' . $tk->id . "/edit") }}">Edit </a>
                            |
                            <form action="{{ url('toko/' . $tk->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>

    </div>
</body>