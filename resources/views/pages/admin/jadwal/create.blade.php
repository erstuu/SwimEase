<dialog id="my_modal_1" class="modal">
    <div class="modal-box bg-slate-50 text-black">
        <h1 class="text-center text-xl font-semibold mb-5"> Tambah Jadwal </h1>
        <form action="{{ route('jadwal.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="text-lg font-bold">Hari</label>
                <select name="hari" class="form-control bg-slate-100 py-2 w-full mt-2">
                    <option value="">Pilih Hari</option>
                    @foreach (['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'] as $hari)
                    <option value="{{ $hari }}">{{ $hari }}</option>
                    @endforeach
                </select>
            </div>
            <div class="grid grid-cols-2 mt-3 text-lg font-bold">
                <div class="form-group mt-2">
                    <label>Waktu Mulai</label>
                    <input type="time" name="waktu_mulai" class="form-control bg-primaryy rounded-md w-36">
                </div>
                <div class="form-group mt-2">
                    <label>Waktu Selesai</label>
                    <input type="time" name="waktu_selesai" class="form-control bg-primaryy rounded-md w-36">
                </div>
            </div>

            <div class="flex justify-end space-x-3 mt-6">
                <button type="submit" class="py-2 px-5 rounded-xl text-white font-bold bg-primaryy">Simpan</button>
                <button type="button" class="py-2 px-5 rounded-xl text-white font-bold bg-red-400" onclick="document.getElementById('my_modal_1').close()">Tutup</button>
            </div>
        </form>
    </div>
</dialog>