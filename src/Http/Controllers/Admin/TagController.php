<?php

declare (strict_types = 1);

namespace Companybase\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Companybase\Http\Requests\TagRequest;
use Companybase\Repositories\Contracts\TagRepositoryInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Log;

class TagController extends Controller
{
    protected $tag;

    public function __construct(TagRepositoryInterface $tag)
    {
        $this->tag = $tag;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = $this->tag->all(['id', 'name', 'status']);

        return view('companybase::admin.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companybase::admin.tag.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        try {
            $this->tag->store(
                array_merge(
                    $request->validated(),
                    [
                        'slug' => Str::slug($request->name),
                    ])
            );

            return redirect()->back()->withInput($request->input())->with('message', 'Thêm thành công');
        } catch (Exception $exception) {
            Log::error('error(loi):' . $exception->getMessage() . $exception->getLine());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $tag = $this->tag->findByid($id);

        return view('companybase::admin.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, int $id)
    {
        try {
            $tag = array_merge(
                $request->validated(),
                [
                    'slug' => Str::slug($request->name)
                ]
            );

            $this->tag->update($id, $tag);

            return redirect()->route('tag.index')->with('message', 'Sửa thành công');
        } catch (Exception $exception) {
            Log::error('error(loi):' . $exception->getMessage() . $exception->getLine());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        try {
            $this->tag->delete($id);

            return redirect()->route('tag.index')->with('message', 'Xóa thành công');
        } catch (\Exception $e) {
            Log::error('error(loi):' . $e->getMessage() . $e->getLine());
        }
    }
}
