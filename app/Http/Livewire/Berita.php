<?php  

namespace App\Http\Livewire;

use Livewire\Component;

class Berita extends Component
{
    public $txtkomentar;
    public function simpan()
    {
        $simpan = new komentar();
        $simpan->isi_komentar = $this->txtkomentar;
        $simpan->save();
        $this->reset();
    }
    public function hapus($idhapus)
    {
        $hapus = Komentar::findOrfail($idhapus);
        $hapus->delete();
        $this->reset();
    }
    public function render()
    {
        return view('livewire.berita', [
            'isi_komentar' => Komentar::orderBy('created_at','desc')->get()
        ]);
    }
}