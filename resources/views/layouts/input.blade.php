<div class="modal fade" id="modalInput" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="myModalTitle">Input Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="/insertdata" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="mb-3">
            </div>
            <div class="mb-3">
              <label for="kodeBaju" class="form-label">Kode Baju</label>
              <select class="form-select"  id="kodeBaju" name="kodeBaju">
                <option selected>Pilih Kode Baju</option>
                {{-- @foreach ($kode as $row ) --}}
                <option value="A01">A01</option>
                <option value="D02">D02</option>
                <option value="MD03">MD03</option>
                <option value="T04">T04</option>
                {{-- @endforeach --}}
              </select>
            </div>
            {{-- <div class="mb-3">
              <label for="">Nama Baju</label>
              <input type="text" id="jenisBaju" name="jenisBaju" class="form-control">
            </div> --}}
            <div class="mb-3">
                <label for="ukuranBaju" class="form-label">Ukuran Baju</label>
                <select class="form-select form-select-sm" id="ukuranBaju" name="ukuran">
                  <option selected>Pilih Ukuran Baju</option>
                  <option value="M">M</option>
                  <option value="L">L</option>
                  <option value="XL">XL</option>
                  <option value="All Size">All Size</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlahBaju" class="form-label">Jumlah Baju</label>
                <input type="text" class="form-control" id="jumlahBaju" name="jumlah">
            </div>
            <div class="mb-3">
              <label for="foto" class="form-label">Foto</label>
              <input type="file" class="form-control" id="foto" name="foto">
          </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div> --}}
    </div>
</div>
</div>

   <script>
      $('#kodeBaju').on('change', function() {
              var value = $(this).val();
              console.log("value")
              if(value) {
                  $.ajax({
                      url: '{{ url('/baju/jenisBaju') }}/'+value,
                      type: "GET",
                      dataType: "json",
                      success:function(data) {
                        $('#jenisBaju').val(data.jenisBaju);
                      }
                  });
              }
      });
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>