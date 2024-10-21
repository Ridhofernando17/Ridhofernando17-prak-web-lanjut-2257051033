<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    protected $userModel;
    protected $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function create()
    {
        $kelas = $this->kelasModel->getKelas(); // Use the kelas model instance

        // Prepare data for the view
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data); // Correctly pass $data to the view
    }

    public function store(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id', // Ensure the kelas_id exists in the kelas table
        ]);

        // Create user
        $user = $this->userModel->create($validatedData);

        // Redirect to user list or profile
        return redirect()->to('/user')->with('success', 'User created successfully.');
    }

    public function index()
    {
        $users = $this->userModel->all(); // Get all users
        $data = [
            'title' => 'List of Users',
            'users' => $users,
        ];
        
        return view('list_user', $data); // Pass the data to the list_user view
    }
}
