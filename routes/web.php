<?php

use App\Http\Controllers\ResepController;

Route::get('/', function () {
    return redirect()->route('reseps.index');
});

Route::resource('reseps', ResepController::class);

// Halaman untuk melihat resep yang dihapus (soft delete)
Route::get('reseps-deleted', [ResepController::class, 'deleted'])->name('reseps.deleted');

// Untuk restore data yang dihapus
Route::post('reseps/{id}/restore', [ResepController::class, 'restore'])->name('reseps.restore');

Route::get('/reseps/{id}', [ResepController::class, 'show'])->name('reseps.show');



?>
