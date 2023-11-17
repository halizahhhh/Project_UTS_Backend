<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        # menggunakan model News untuk select data
     $news = News::all();

     if (!empty($news)) {
         $response = [
             'message' => 'Menampilkan semua data berita',
             'data' => $news,
         ];
         return response()->json($response, 200);
     } else {
         $response = [
             'message' => 'Data berita tidak ada'
         ];
         return response()->json($response, 200);
     }
 }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) 
	{
        #untuk mengimput data ke data base, diambil dari model
		// $input = [
		// 	'title' => $request->title,
		// 	'author' => $request->author,
		// 	'description' => $request->description,
		// 	'content' => $request->content,
        // 	'url' => $request->url,
        // 	'url_image' => $request->url_image,
        // 	'published_at' => $request->published_at,
        // 	'category' => $request->category
		// ];

		$news = News::create($request->all());

		$response = [
			'message' => 'Berita Berhasil Dibuat',
			'data' => $news,
		];

		return response()->json($response, 201);
	}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    #untuk menampilkan data berita
    {
        $news = News::find($id);

		if ($news) {
			$response = [
				'message' => 'Get detail berita',
				'data' => $news
			];
	
			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data not found'
			];
			
			return response()->json($response, 404);
		}
    }

    #membuat public function category untuk memanggil berita berdasarkan category
    public function category($category)
    {
        $news = News::where('category', $category)->get();

        if ($news->isEmpty()) {
            return response()->json(['message' => 'Tidak ada berita berdasarkan kategori tersebut'], 404);
        }

        return response()->json($news);
    }

    #membuat search untuk memanggil beita berdasarkan title 
    public function search($search)
    {
        $news = News::where('title', $search)->get();

        if ($news->isEmpty()) {
            return response()->json(['message' => 'Tidak ada judul berita tersebut'], 404);
        }

        return response()->json($news);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    #untuk mengubah atau mengupdate suatu data berdasarkan id
    {
        $news = News::find($id);

		if ($news) {
			$response = [
				'message' => 'Berita berhasil diupdate',
				'data' => $news->update($request->all())
			];
	
			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data not found'
			];

			return response()->json($response, 404);
		}
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    #untuk menghapus data berdasarkan id
    {
        $news = News::find($id);

		if ($news) {
			$response = [
				'message' => 'Berita berhasil dihapus',
				'data' => $news->delete()
			];

			return response()->json($response, 200); 
		} else {
			$response = [
				'message' => 'Data not found'
			];

			return response()->json($response, 404);
		}
    }
}
