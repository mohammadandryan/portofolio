<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB; //ORM TIDAK PERLU
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\DaftarMahasiswa;

class MahasiswaController extends Controller
{
   //MODUL8
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//     public function __invoke(Request $request)
//     {
//         //
//     }

//     public function index(){
//         return "Berhasi di Proses";
//     }

//     public function insertSql(){
//         $result = DB::insert('insert into mahasiswas (nim, nama, tanggal_lahir, ipk) values (?, ?, ?, ?)', [210535614840, 'Mohammad Andryan', '2002-11-19', 4.0]);
//         dump($result);
//     }
//     public function insertTimeStamp(){
//         $result = DB::insert('insert into mahasiswas (nim, nama, tanggal_lahir, ipk, created_at, updated_at) values (?, ?, ?, ?, ?, ?)', [210535614841, 'Ali bin Abi Tholib', '2002-11-19', 4.0, now(), now()]);
//         dump($result);
//     }
//     public function update(){
//         $result = DB::update("UPDATE mahasiswas SET created_at=now(), updated_at=now() where nama = ?", ['Mohammad Andryan']);
//         dump($result);
//     }

// public function delete(){
//     $result = DB::delete('delete from mahasiswas where nama = ?', ['Ali bin Abi Tholib']);
//     return $result;
// }
// public function select(){
//     $result = DB::select("SELECT * FROM mahasiswas");
//     dump($result);
// }
// public function selectTampil(){
//     $result = DB::select("SELECT * FROM mahasiswas");
//     echo $result[0]->id."<br>";
//     echo $result[0]->nim."<br>";
//     echo $result[0]->nama."<br>";
//     echo $result[0]->tanggal_lahir."<br>";
//     echo $result[0]->ipk."<br>";
// }
// public function selectView(){
//     $result = DB::select("SELECT * FROM mahasiswas");
//     return view('tampil-mahasiswa',['mahasiswas'=>$result]);
// }

// public function statement(){
//     $result = DB::statement("TRUNCATE mahasiswas");
//     return "Tabel mahasiswas kembali kosong";
// }

// //QUERY BUILDER
// public function insert(){
//     $result=DB::table('mahasiswas')->insert(

//         [
//             'nim'=>210535614840,
//             'nama'=>"Mohammad Andryan",
//             'tanggal_lahir'=>"2002-11-19",
//             'ipk'=>"4.0",
//             'created_at'=>now(),
//             'updated_at'=>now()
//         ]
//         );
//         dump($result);
// }
// public function insertBanyak(){
//     $result=DB::table('mahasiswas')->insert(
// [
//         [
//             'nim'=>210535614841,
//             'nama'=>"Mohammad Andryan",
//             'tanggal_lahir'=>"2002-11-19",
//             'ipk'=>"4.0",
//             'created_at'=>now(),
//             'updated_at'=>now()
//         ],
//         [
//             'nim'=>210535614842,
//             'nama'=>"Mohammad Andryan",
//             'tanggal_lahir'=>"2002-11-19",
//             'ipk'=>"4.0",
//             'created_at'=>now(),
//             'updated_at'=>now()
//         ],
//         [
//             'nim'=>210535614843,
//             'nama'=>"Mohammad Andryan",
//             'tanggal_lahir'=>"2002-11-19",
//             'ipk'=>"4.0",
//             'created_at'=>now(),
//             'updated_at'=>now()
//         ],
//         [
//             'nim'=>210535614844,
//             'nama'=>"Mohammad Andryan",
//             'tanggal_lahir'=>"2002-11-19",
//             'ipk'=>"4.0",
//             'created_at'=>now(),
//             'updated_at'=>now()
//         ]
// ]
//         );
//         dump($result);
// }

// public function update(){
//     $result = DB::table('mahasiswas')
//         ->where('nim', 210535614843)
//         ->update(
//             [
//                 'nama'=>'Umar bin Khattab',
//                 'updated_at'=>now()
//             ]
//             );
// dump($result);
// }

// public function updateOrInsert(){
//     $result = DB::table('mahasiswas')->updateOrInsert(
//     ['nim'=>210535614841],
//         [
//             'ipk'=>5.0,
//             'created_at'=>now(),
//             'updated_at'=>now()
//         ]
//         );
//         dump($result);
// }

// public function delete(){
//     $result = DB::table('mahasiswas')->where('ipk','>',4.0)->delete();
//     dump($result);
// }
// public function getTampil(){
//     $result = DB::table('mahasiswas')->get();
//     return view('tampil-mahasiswa',['mahasiswas'=>$result]);
// }
// public function getWhere(){
//     $result = DB::table('mahasiswas')->where('nim','>',210535614840)->orderBy('nama','desc')->get();
//     return view('tampil-mahasiswa',['mahasiswas'=>$result]);
// }
// public function select(){
//     $result = DB::table('mahasiswas')->select('nama','nim')->get();
//     dump($result);
// }
// public function take(){
//     $result = DB::table('mahasiswas')->skip(2)->take(2)->get();
//     return view('tampil-mahasiswa',['mahasiswas'=>$result]);
// }
// public function first(){
//     $result = DB::table('mahasiswas')->where('nim',210535614844)->first();
//     return view('tampil-mahasiswa',['mahasiswas'=>[$result]]);
// }
// public function find(){
//     $result=DB::table('mahasiswas')->find(1);
// //   dump($result);
//     return view('tampil-mahasiswa',['mahasiswas'=>[$result]]);
// }
// public function raw(){
//     $result=DB::table('mahasiswas')->selectRaw('count(*) as total_mahasiswa')->get();
//     dump($result);
// }

//ELOQUENT ORM
public function cekObject(){
    $mahasiswa = new Mahasiswa;
    dump($mahasiswa);
}
public function insert(){
    $mahasiswa = new Mahasiswa;
    $mahasiswa->nim=210535614840;
    $mahasiswa->nama='Mohammad Andryan';
    $mahasiswa->tanggal_lahir='2002-11-19';
    $mahasiswa->ipk=4.0;
    $mahasiswa->save();
    dump($mahasiswa);
}
public function massAssigment(){
    Mahasiswa::create(
        [
'nim'=>210535614841,
'nama'=>"Abu Bakar as-Siddiq",
'tanggal_lahir'=>'2002-11-19',
'ipk'=>4.0
        ]
        );
        return "Berhasil diproses";
}
public function massAssigment2(){
    $mahasiswa1=Mahasiswa::create(
        [
'nim'=>210535614842,
'nama'=>"Abu Bakar as-Siddiq",
'tanggal_lahir'=>'2002-11-19',
'ipk'=>4.0
        ]
        );
        dump($mahasiswa1);
    $mahasiswa2=Mahasiswa::create(
        [
'nim'=>210535614843,
'nama'=>"Abu Bakar as-Siddiq",
'tanggal_lahir'=>'2002-11-19',
'ipk'=>4.0
        ]
        );
        dump($mahasiswa2);
    $mahasiswa3=Mahasiswa::create(
        [
'nim'=>210535614844,
'nama'=>"Abu Bakar as-Siddiq",
'tanggal_lahir'=>'2002-11-19',
'ipk'=>4.0
        ]
        );
        dump($mahasiswa3);
}
public function update(){
    $mahasiswa = Mahasiswa::find(1);
    $mahasiswa->nama = "Mohammad Andryan";
    $mahasiswa->save();
    dump($mahasiswa);
}
public function updateWhere(){
    $mahasiswa=Mahasiswa::where('nim',210535614843)->first();
    $mahasiswa->nama="Usman bin Affan";
    $mahasiswa->save();
    dump($mahasiswa);
}

public function massUpdate(){
    $mahasiswa = Mahasiswa::where('nim',210535614844)->first()->update(
        [
            'nama'=>'Ali bin Abi Tholib'
        ]
        );
    dump($mahasiswa);
}
public function softDelete(){
    Mahasiswa::where('nim',210535614843)->delete();
    return "Berhasil dihapus";
}
public function forceDelete(){
    Mahasiswa::where('nim',210535614842)->forceDelete();
    return "Berhasil dihapus";
}
public function restore(){
    Mahasiswa::where('nim',210535614842)->restore();
    return "Berhasil direstore";
}
public function withTrashed(){
    $mahasiswa=Mahasiswa::withTrashed()->get();
    return view('tampil-mahasiswa',['mahasiswas'=>$mahasiswa]);
}
public function allTampil(){
    $mahasiswa=Mahasiswa::all();
    return view('tampil-mahasiswa',['mahasiswas'=>$mahasiswa]);
}
public function index(){
    return view('form-pendaftaran');
}
public function prosesForm(Request $request){
    $validateData = $request->validate(
        [
            'nama' => 'required|min:3|max:50',
            'nim' => 'required|size:12',
            'email' => 'required|email',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required'
        ]
    );
    dump($validateData);

}
public function prosesFormValidator(Request $request){
   $rules = [
    'nama' => 'required|min:3|max:50',
    'nim' => 'required|size:12',
    'email' => 'required|email',
    'jenis_kelamin' => 'required',
    'jurusan' => 'required',
    'alamat' => 'required'
   ];

   $eror_message = [
    'required' => ':attribute harus diisi',
    'min' => ':attribute harus berisi minimal :min karakter',
    'size' => ':attribute harus berisi :size karakter',
    'max' => ':attribute harus berisi maksimal :min karakter',
    'email' => 'Inputan harus berisi email'
   ];
   $validator = Validator::make($request->all(),$rules,$eror_message);
   if ($validator->fails()) {
      return redirect('/daftar')->withInput()
      ->withErrors($validator);
   }
   echo $request->nim. "<br>";
   echo $request->nama. "<br>";
   echo $request->email. "<br>";
   echo $request->jenis_kelamin. "<br>";
   echo $request->jurusan. "<br>";
   echo $request->alamat. "<br>";

}
 public function prosesFormCustom(DaftarMahasiswa $request){
    $validateData = $request->validated();
    dump($validateData);
 }

}

