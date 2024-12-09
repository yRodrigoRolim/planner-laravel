<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('', function () {
    return redirect()->route('note.index'); 
})->name('home');

Route::resource('note', NoteController::class);


//Route::get('products', [ProductController::class, 'index'])->name('products.index');        // Listar todos os produtos
//Route::get('products/create', [ProductController::class, 'create'])->name('products.create'); // Formulário de criação de produto
//Route::post('products', [ProductController::class, 'store'])->name('products.store');         // Salvar um novo produto
//Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');   // Exibir um produto específico
//Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Formulário de edição de produto
//Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');  // Atualizar um produto específico
//Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy'); // Excluir um produto específico


