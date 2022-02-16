
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">NIP</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">DIVISI</th>
                    <th scope="col">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($modals as $row)    
                  <tr>
                    <th scope="row">{{ $row->nip }}</th>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->divisi }}</td>
                    <td>
                    <button class="btn btn-primary" onClick="show({{ $row->id }})">EDIT</button>
                    <button class="btn btn-danger" onClick="destroy({{ $row->id }})">HAPUS</button>
                    </td>
                  </tr>
                  @endforeach    
                </tbody>
              </table>
