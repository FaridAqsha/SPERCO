<?php

namespace Tests\Feature;

use App\Models\Stt;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Tests\TestCase;

class ShowTableSTTTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_insert_stt_data()
    {
        // variabel untuk inputan data
        $stt = new Stt();
        //$stt->id = 100;
        $stt->usid = 1;
        $stt->event = 'testosteron';
        $stt->time = '2024-06-12 14:53:58.000000';
        $stt->original = 'awawwaddaw';
        $stt->speech = 'ini sesudah di update ya gess';
        $stt->created_at = '2024-06-12 19:53:58';
        $stt->updated_at = '2024-06-12 19:53:58';
        $stt->save();

        //     'usid' => 1,
        //     'event' => 'test',
        //     'time' => '2024-06-12 14:53:58.000000',
        //     'original' => 'awawwaddaw',
        //     'speech' => 'ini sesudah di update ya gess',
        //     'created_at' => '2024-06-12 19:53:58',
        //     'updated_at' => '2024-06-12 19:53:58'
        // ];

        // menjalankan function create data

        //$insert = Stt::create($input_data);

        // Coba untuk menemukan data yang sudah ada
        //$stt = Stt::find(100);

        // Pastikan data ditemukan sebelum menghapusnya
        // if ($stt) {
        //     $this->assertDatabaseHas('stt', ['id' => 100]);  // Memeriksa apakah data ada

        //     $stt->delete();

        //     // Memeriksa apakah data telah dihapus dari database
        //     $this->assertDatabaseMissing('stt', ['id' => 100]);
        // } else {
        //     $this->fail('Data with id 1 not found in the database.');
        // }

        // assert
        // $this->assertInstanceOf(stt::class, $insert);
        $this->assertDatabaseHas('stt', ['event' => 'testosteron']);
        // $this->assertEquals('test', $insert->event);
        // $this->assertIsInt($insert);
    }

    /** @test */
    public function it_can_delete_stt_data()
    {
        // Buat data contoh dengan factory jika belum ada
        $input_data = [
            'id' => '100',
            'usid' => '1',
            'event' => 'test',
            'time' => '2023-05-17 09:14:00',
            'original' => 'awawwaddaw',
            'speech' => 'ini sesudah di update ya gess'
        ];

        // menjalankan function create data
        $input_data = Stt::create($input_data);

        // Coba untuk menemukan data yang sudah ada
        $stt = Stt::find(100);

        // Pastikan data ditemukan sebelum menghapusnya
        if ($stt) {
            $stt->delete();

            // Memeriksa apakah data telah dihapus dari database
            $this->assertDatabaseMissing('stt', ['id' => 100]);
        } else {
            $this->fail('Data with id 1 not found in the database.');
        }
    }
}
