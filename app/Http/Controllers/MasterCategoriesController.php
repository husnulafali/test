<?php

namespace App\Http\Controllers;

use App\Models\MasterCategory;
use Illuminate\Http\Request;

class MasterCategoriesController extends Controller
{
    public function index()
    {
        return view('master_categories.index.index');
    }

    public function search(Request $request)
    {
        $kode = $request->kode;
        $nama = $request->nama;

        $data_search = MasterCategory::query();

        if (!empty($kode)) $data_search = $data_search->where('kode', $kode);
        if (!empty($nama)) $data_search = $data_search->where('nama', 'LIKE', '%' . $nama . '%');

        $data_search = $data_search->select('kode', 'nama')->orderBy('id','desc')->get();

        return json_encode([
            'status' => 200,
            'data' => $data_search
        ]);
    }

    public function formView($method, $id = 0)
    {
        if ($method == 'new') {
            $category = [];
        } else {
            $category = MasterCategory::with('items')->find($id);
        }
        $data['category'] = $category;
        $data['method'] = $method;
        return view('master_categories.form.index', $data);
    }

    public function singleView($kode)
    {
        $data['data'] = MasterCategory::where('kode', $kode)->first();
        return view('master_categories.single.index', $data);
    }

    public function formSubmit(Request $request, $method, $id = 0)
    {
        if ($method == 'new') {
            $data_category = new MasterCategory;
            $kode = MasterCategory::count('id');
            $kode = $kode + 1;
            $kode = str_pad($kode, 5, '0', STR_PAD_LEFT);
            sleep(3);
        } else {
            $data_category = MasterCategory::find($id);
            $kode = $data_category->kode;
        }

        $data_category->nama = $request->nama;
        $data_category->kode = $kode;
        $data_category->save();

        return redirect('master-categories');
    }

    public function delete($id)
    {
        MasterCategory::find($id)->delete();
        return redirect('master-categories');
    }

    public function updateRandomData()
    {
        $data = MasterCategory::get();
        foreach($data as $category)
        {
            $kode = $category->id;
            $kode = str_pad($kode, 5, '0', STR_PAD_LEFT);

            $category->harga_beli = rand(100,1000000);
            $category->laba = rand(10,99);
            $category->kode = $kode;
            $category->supplier = $this->getRandomSupplier();
            $category->jenis = $this->getRandomJenis();
            $category->save();
        }
    }
}
