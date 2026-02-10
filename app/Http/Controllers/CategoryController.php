<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('parent')
            ->where('is_delete', 0)
            ->get();

        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::where('is_delete', 0)->get();
        return view('admin.category.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'       => 'required|string|max:255',
            'description'=> 'nullable|string',
            'parent_id'  => 'nullable|exists:categories,id',
            'is_active'  => 'nullable|boolean',
        ]);

        $data['is_delete'] = 0;
        $data['is_active'] = $data['is_active'] ?? 1;

        Category::create($data);

        return redirect()
            ->route('category.index')
            ->with('success', 'Thêm danh mục thành công');
    }

    public function edit(string $id)
    {
        $category = Category::findOrFail($id);

        // Loại chính nó + con cháu
        $invalidIds = $category->getAllChildrenIds();
        $invalidIds[] = $category->id;

        $categories = Category::where('is_delete', 0)
            ->whereNotIn('id', $invalidIds)
            ->get();

        return view('admin.category.edit', compact('category', 'categories'));
    }

    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        $data = $request->validate([
            'name'      => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
            'is_active' => 'nullable|boolean',
        ]);

        // Không cho chọn con / cháu
        if ($request->parent_id && $request->parent_id == $category->id) {
            return back()->withErrors([
                'parent_id' => 'Danh mục không thể là cha của chính nó'
            ]);
        }

        $category->update($data);

        return redirect()
            ->route('category.index')
            ->with('success', 'Cập nhật danh mục thành công');
    }

    public function destroy(string $id)
    {
        Category::findOrFail($id)->update([
            'is_delete' => 1
        ]);

        return redirect()
            ->route('category.index')
            ->with('success', 'Xóa danh mục thành công');
    }
}
