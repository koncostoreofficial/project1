<div>
    <div class="container">
        <div class="row">
            <div class="col-3">
               <div class="card">
                   <div class="card-header">
                         Status
                   </div>
                   <div class="card-body">

                   <div clas="card-body">
                         komentar <br />
                        <input type="text" class="from-control" wire:model='txtHAVE_FUN' />
                        <br />
                        <input type="submit" class="btn btn-primary" value="KIRIM" wire:click='simpan' />
                    </div>

                   </div>
               </div>
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        kiriman saya
                    </div>
                    <div class="card-body">
                        saya :<br />
                        <p>
                            <i>
                                {{ $txtkomentar }}
                            </i>
                        </p>
                        <hr />
                        @foreach ($isi_komentar as $item)
                        saya pada{{ Carbon\Carbon::pares($item->created_at)->isoFormat('dddd,D MMMMM Y') }}
                        menulis:<br />
                        <p>
                            <i>
                                {{ $item->isi_komentar }}
                            </i>
                            <button class="float-and btn btn-denger" wire:click="hapus('{{ $sistem->id }}')">
                                HAPUS
                        </p>
                        <hr />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

      