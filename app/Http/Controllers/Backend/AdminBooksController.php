<?php

namespace App\Http\Controllers\Backend;

use App\Models\Books;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class AdminBooksController extends Controller
{
    function index(Request $request)
    {

        $book = Books::with('author')->paginate(5);
        return view('backend.books.index', [
            'page_title' => 'Buku',
            'list_books' => $book

        ]);
    }

    function getCreate(Request $request)
    {
        return view('backend.books.create', [
            'page_title' => 'Tambah Buku',
            'list_author' => Author::all()
        ]);
    }

    function postSave(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|file',
            'author_id' => 'required'
        ]);
        $fileUpload = Storage::put('uploads/books', $request->file('gambar'));
        $data = $request->only([
            'judul',
            'deskripsi',
            'author_id'
        ]);

        Books::create(array_merge($data, [
            'gambar' => $fileUpload
        ]));

        return redirect()->route('admin.books')->with([
            'success' => 'Data Berhasil Disimpan'
        ]);
    }

    function getEdit(Request $request, $id)
    {
        $find = Books::findOrFail($id);
        $data = Author::all();
        return view('backend.books.edit', [
            'page_title' => 'Edit Buku',
            'data' => $find,
            'list_author'   => $data
        ]);
    }

    function postUpdate(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'author_id' => 'required'
        ]);

        if ($request->hasFile('gambar')) {
            $fileUpload = Storage::put('uploads/books', $request->file('gambar'));

            $data = $request->only([
                'judul',
                'deskripsi',
                'author_id'
            ]);

            Books::whereId($request->id)->update(array_merge($data, [
                'gambar' => $fileUpload
            ]));
        } else {
            Books::whereId($request->id)->update($request->only([
                'id',
                'judul',
                'deskripsi',
                'author_id'
            ]));
        }
        return redirect()->route('admin.books')->with([
            'success' => 'Data Berhasil Diedit'
        ]);
    }

    function getDelete(Request $request, $id)
    {
        Books::findOrFail($id)->delete();
        return redirect()->route('admin.books')->with([
            'success' => 'Data Berhasil Dihapus'
        ]);
    }
}
