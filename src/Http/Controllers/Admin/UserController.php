<?php

declare(strict_types=1);

namespace Companybase\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Companybase\Repositories\Contracts\UserRepositoryInterface;
use Companybase\Http\Requests\AddUserRequest;
use Auth;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->user->all(['id', 'name','email', 'created_at']);

        return view('companybase::admin.user.index',compact('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        try {
            $check = $this->user->findByid($id);

            if (Auth::user()->role === 'admin') {
                $this->user->delete($id);

                return redirect()->route('user.index')->with('message','Xóa thành công');
            }

            return redirect()->back()->with('error','Bạn không có quyền thực hiện chức năng này');
        } catch (\Exception $e) {
            Log::error('error(loi):'.$e->getMessage().$e->getLine());
        }
    }
}
