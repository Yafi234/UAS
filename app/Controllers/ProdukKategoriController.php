<?php

namespace App\Controllers;

use App\Models\KategoriProdukModel;
use CodeIgniter\Controller;

class ProdukKategoriController extends Controller
{
    protected $kategoriModel;

    public function __construct()
    {
        $this->kategoriModel = new KategoriProdukModel();
    }

    // TAMPILKAN DAFTAR KATEGORI
    public function index()
    {
        $data['kategori'] = $this->kategoriModel->findAll();
        return view('v_kategoriproduk', $data);
    }

    // TAMBAH KATEGORI
    public function create()
    {
        $data = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'deskripsi'     => $this->request->getPost('deskripsi')
        ];

        if ($this->kategoriModel->insert($data)) {
            return redirect()->to('/kategori-produk')->with('success', 'Kategori berhasil ditambahkan.');
        } else {
            return redirect()->to('/kategori-produk')->with('failed', 'Gagal menambahkan kategori.');
        }
    }

    // EDIT KATEGORI
    public function edit($id)
    {
        $data = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'deskripsi'     => $this->request->getPost('deskripsi')
        ];

        if ($this->kategoriModel->update($id, $data)) {
            return redirect()->to('/kategori-produk')->with('success', 'Kategori berhasil diubah.');
        } else {
            return redirect()->to('/kategori-produk')->with('failed', 'Gagal mengubah kategori.');
        }
    }

    // HAPUS KATEGORI
    public function delete($id)
    {
        if ($this->kategoriModel->delete($id)) {
            return redirect()->to('/kategori-produk')->with('success', 'Kategori berhasil dihapus.');
        } else {
            return redirect()->to('/kategori-produk')->with('failed', 'Gagal menghapus kategori.');
        }
    }
}
