<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
route::get ("/categories",[CategorieController::class,"index"]);
route::post("/categories",[CategorieController::class,"store"]);
route::get("/categories/{id}",[CategorieController::class,"show"]);
route::put("/categories/{id}",[CategorieController::class,"update"]);
route::delete("/categories/{id}",[CategorieController::class,"destroy"]);
//middleware y3awa4 les methode el kol (les routes el kol ya3tihem wa7dou)
route::middleware('api')->group(function(){
    Route::resource('categories',CategorieController::class);
});

route::middleware('api')->group(function(){
    Route::resource('scategories',CategorieController::class);
});
route::middleware('api')->group(function(){
    Route::resource('articles',ArticleController::class);
});

route::get ("/listarticles/{idscat}",[ArticleController::class,"showArticlesBySCAT"]);//nejmouch na3mlou middelware 
route::get ('/larticles/art/articlespaginate',[ArticleController::class,'articlesPaginate']);