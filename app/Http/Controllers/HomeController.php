<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View  
    {  
        $posts = Crud::orderBy('id', 'DESC')->paginate(10);  
        // dd($posts);
        return view('crud.index', compact('posts'));  
    }

    public function create(): \Illuminate\Contracts\View\View  
    {  
        return view('crud.create');  
    }

    public function edit(Crud $crud)
    {
        return view('crud.edit', compact('crud'));
    }

    public function destroy(Crud $crud): RedirectResponse  
    {  
        $crud->delete();  
        return redirect()  
            ->route('crud.index')  
            ->with('success', 'Product deleted successfully.');  
    }

    public function store(Request $request): RedirectResponse  
    {  
        $this->validate($request, [  
            'name' => 'required|string|max:151',  
            'qty' => 'required',  
            'description' => 'required'  
        ]);  

        Crud::create([  
            'name' => $request->get('name'),  
            'qty' => $request->get('qty'),  
            'description' => $request->get('description'),  
            'created_at' => Carbon::now()
        ]);  

        return redirect()->route('crud.index')  
            ->with('success', 'Product Berhasil di tambahkan!');  
    }

    public function update(Request $request, Crud $crud): RedirectResponse  
    {  
        $this->validate($request, [  
            'name' => 'required|string|max:151',  
            'qty' => 'required',  
            'description' => 'required'  
        ]);  

        $crud->update([  
            'name' => $request->get('name'),  
            'qty' => $request->get('qty'),  
            'description' => $request->get('description'),  
        ]);  

        return redirect()->route('crud.index')  
            ->with('success', 'Product berhasil dirubah!');  
    }

}
