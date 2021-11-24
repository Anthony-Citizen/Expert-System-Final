<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ConnectorModel extends Model
{
    public function firstData()
    {
        return DB::table('hubungan')->first();
    }

    public function question($quest_id)
    {
        //dd($quest_id);
        return DB::table('pertanyaan')->where('ID',$quest_id)->get();
    }

    public function getData($desc)
    {
        return DB::table('hubungan')->where('ID', $desc)->first();
    }

    public function getIDYes($id)
    {
        return DB::table('hubungan')->where('ID', $id)->value('Ya');
    }

    public function getIDNo($id)
    {
        return DB::table('hubungan')->where('ID', $id)->value('Tidak');
    }

    public function getResult($desc)
    {
        return DB::table('solusi')->where('ID', $desc)->first();
    }
}
