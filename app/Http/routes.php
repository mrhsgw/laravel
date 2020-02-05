<?php

use App\Task;
use Illuminate\Http\Request;

/**
 * 全タスク表示
 */
Route::get('/', function () {
	return view('tasks');
});

/**
 * 新タスク追加
 */
Route::post('/task', function (Request $request) {
    //
});

Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    // タスク作成…
});

/**
 * 既存タスク削除
 */
Route::delete('/task/{id}', function ($id) {
    //
});
