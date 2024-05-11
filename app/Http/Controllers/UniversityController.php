<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;
use App\Models\User;
use App\Models\Category;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topUniversities = University::orderBy('marks', 'desc')->take(3)->get();

        return view("index", compact("topUniversities"));

    }

    public function raking()
    {
        $allUniversities = University::orderBy('marks', 'desc')->get();

        return view("raking", compact("allUniversities"));

    }

    public function schools()
    {
        $allUniversities = University::orderBy('marks', 'desc')->get();

        return view("schools",compact("allUniversities"));

    }

    public function schools_list()
    {
        $allUniversities = University::orderBy('created_at', 'desc')->get();

        return view("admin.schools_list",compact("allUniversities"));

    }


    public function users_list()
    {
        $allUsers = User::orderBy('created_at', 'desc')->get();


        return view("admin.users_list",compact("allUsers"));

    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'asc')->get();
        return view("admin.create_school", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'headmaster' => 'required|string|max:255',
            'tuition' => 'required|numeric',
            'create_date' => 'required|date',
            'marks' => 'required|numeric',
            'category_id' => 'required|numeric',
            'population' => 'required|numeric',
            'label' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Assurez-vous que le dossier de destination est accessible en écriture
        ]);

        // Enregistrer les données dans la base de données
        $university = new University();
        $university->name = $request->name;
        $university->address = $request->address;
        $university->headmaster = $request->headmaster;
        $university->tuition = $request->tuition;
        $university->create_date = $request->create_date;
        $university->marks = $request->marks;
        $university->population = $request->population;
        $university->label = $request->label;
        $university->category_id = $request->category_id;

        // Enregistrer l'image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $university->image = $imageName;
        }

        $university->save();

        // Rediriger l'utilisateur vers une page de confirmation ou une autre vue
        return redirect()->route('schools_list')->with('success', 'Université enregistrée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(University $university)
    {
    
        return view("showSchool", compact("university"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(University $university)
    {
        return view("rating", compact("university"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $quality = $request->input('quality');
        $building = $request->input('building');
        $search = $request->input('search');
        $insertion = $request->input('insertion');
        $tuition = $request->input('tuition');
        $opportunity = $request->input('opportunity');
        $teacher = $request->input('teacher');
        $geographic = $request->input('geographic');

        $mark = $quality + $building + $search + $insertion + $tuition + $opportunity + $teacher + $geographic;

        $universityId = $id;
        $university = University::find($universityId);
        $university -> marks = $mark;
        $university->save();

        return redirect()->route('raking')->with('success', 'Notation enregistre avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
