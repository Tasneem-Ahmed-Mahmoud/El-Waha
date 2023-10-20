<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index()
    {
        confirmDelete('حذف الصنف', "هل تريد حذف الصنف");
        $categories = Category::paginate(10, ['id', 'name', 'description', 'image']);
        // dd($categories);
        return view('dashboard.categories.index', compact('categories'));
    }
    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $category = Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => uploadImage($request->image, Category::PATH)
        ]);
        if ($category) {
            toast('تم اضافة الصنف بنجاح!', 'success');
        } else {
            toast('حدث خطا ', 'error');
        }
        return redirect(route('categories.index'));
    }

    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', compact('category'));
    }
    public function update(CategoryRequest $request, Category $category)
    {
        $image = $category->image;
        if ($request->file('image')) {
            deleteImage($image, Category::PATH);
            $image = uploadImage($request->image, Category::PATH);
        }
        $category = $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
        ]);

        if ($category) {
            toast('تم تعديل الصنف بنجاح!', 'success');
        } else {
            toast('حدث خطا ', 'error');
        }
        return redirect()->back();
    }
    public function destroy(Category $category)
    {
        $image = $category->image;
        $category = $category->delete();
        if ($category) {
            deleteImage($image, Category::PATH);
            toast('تم حذف الصنف بنجاح!', 'success');
        } else {
            toast('حدث خطا ', 'error');
        }
        return redirect(route('categories.index'));
    }

public function search(Request $request)
{
   
    $categories=[] ;
    if($request->ajax())
    {
        $categories = Category::where('name', 'like', '%' . $request->search . '%')->get(['id','name','description','image']);
// dd($categories);
         }

    return view('dashboard.categories.search',compact('categories'));
}


}
