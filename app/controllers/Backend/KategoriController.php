<?php

class Backend_KategoriController extends BackendController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

       public function getKategoriekle(){
           return View::make('backend.kategori.ekle');
       }
       
       public function postKategoriekle(){
           
           $validate=Validator::make(Input::all(),Kategori::$rules);
           $messages=$validate->messages();
           if($validate->fails())
                { 
                return Redirect::back()->with(array('mesaj'=>'true','title'=>'Doğrulama Hatası','text'=>''.$mesaj->first().'','type'=>'error'));
                }
                
                $kategori=new Kategori;
                $kategori->kategoriadi=Input::get('kategoriadi');
                $kategori->slug=Str::slug(Input::get('kategoriadi'));
                $kategori->save();
                if($kategori->save()){
                return Redirect::back()->with(array('mesaj'=>'true','title'=>'Kategori Eklendi','text'=>'Kategori başarılı bir şekilde eklendi','type'=>'success'));

                }
                else{
              return Redirect::back()->with(array('mesaj'=>'true','title'=>'Kategori Eklenemedi','text'=>'Kategori eklenirken bir sorun ile karşılaşıldı','type'=>'error'));

                }
       }
        
       
       public function getKategorilistele(){
           $kategoriler=Kategori::all();
           return View::make('backend.kategori.listele',array('kategoriler'=>$kategoriler));
       }
         public function getKategorisil($id){
             $kategori=Kategori::findOrFail($id);
             $kategori->delete();
             if(!$kategori->delete()){
                return Redirect::back()->with(array('mesaj'=>'true','title'=>'Kategori Silindi','text'=>'Kategori başarılı bir şekilde silindi','type'=>'success'));

                }
                else{
              return Redirect::back()->with(array('mesaj'=>'true','title'=>'Kategori Silinemedi','text'=>'Kategori silinirken bir sorun ile karşılaşıldı','type'=>'error'));

                }
         }
         
         public function getKategoriduzenle($id){
             $kategori=Kategori::findOrFail($id);
             return View::make('backend.kategori.duzenle',array('kategori'=>$kategori));
             
         }
         
         public function postKategoriduzenle($id) {
        $validate = Validator::make(Input::all(), Kategori::$rules);
        $messages = $validate->messages();
        if ($validate->fails()) {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Doğrulama Hatası', 'text' => '' . $mesaj->first() . '', 'type' => 'error'));
        }
        $kategori=Kategori::findOrFail($id);
        $kategori->kategoriadi=Input::get('kategoriadi');
        $kategori->slug=Str::slug(Input::get('kategoriadi'));
        $kategori->save();
        if($kategori->save()){
                return Redirect::back()->with(array('mesaj'=>'true','title'=>'Kategori Güncellendi','text'=>'Kategori başarılı bir şekilde güncellendi','type'=>'success'));

                }
                else{
              return Redirect::back()->with(array('mesaj'=>'true','title'=>'Kategori Güncellenemedi','text'=>'Kategori güncellenirken bir sorun ile karşılaşıldı','type'=>'error'));

                }
    }
}
