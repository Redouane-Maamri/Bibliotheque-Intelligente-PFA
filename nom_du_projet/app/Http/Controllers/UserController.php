<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Display the list of books
    public function index(Request $request)
    {
        // $books = Book::all();
        // return view("books.index", compact('books'));

        $query=Book::query();

        if($request->has('filterByPrice')){
            $pricefilter=$request->filterByPrice;

            if($pricefilter == "low"){
                $query->where('price' , '<' , 20);

            }elseif($pricefilter == "medium"){
                $query->whereBetween('price' , [20,60]);

            }elseif($pricefilter=="high"){
                $query->where('price' , '>' , 60);
            }
        }

        $books=$query->get();
        return view("books.index",compact("books"));
    }


    public function FilterByCategorie(Request $request)
{
    $filterCat = $request->input('filterByCategorie');

    // Validate if the selected category is one of the allowed options
    $allowedCategories = ['Development', 'Fantasy', 'scienceFiction'];

    if (in_array($filterCat, $allowedCategories)) {
        // Filter only if valid category is selected
        $books = Book::where('categorie', $filterCat)->get();
    } else {
        // If 'All' is selected or no filter, get all books
        $books = Book::all();
    }

    return view('books.index', compact('books'));
}



    public function admin()
    {
        $books = Book::all();
        return view("books.admin", compact('books'));
    }

    // Show the form for creating a new book
    public function create()
    {
        return view("books.create");
    }

    // Store a newly created book in the database
    public function store(Request $request)
    {

        // dd($request->all());

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'categorie'=>'required|string|max:255',
            'reviews'=>'required | numeric',
            'description'=>'required',
            'link' => 'required|url', 
            'NombrePages'=>'required'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('products'), $imageName);

        // Create the new book and save it to the database
        $book = new Book;
        $book->image = $imageName;
        $book->title = $request->title;
        $book->price = $request->price;
        $book->categorie = $request->categorie;
        $book->reviews = $request->reviews;
        $book->description = $request->description;
        $book->link=$request->link;
        $book->NombrePages=$request->NombrePages;

        $book->save();

        // Redirect to the books index page with a success message
        return redirect()->route('books.index')->with('success', 'Livre ajouté avec succès !');
    }


    // Display the specified book
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view("books.show", compact('book'));
    }

    // Show the form for editing the specified book
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view("books.edit", compact('book'));
    }

    // Update the specified book in the database
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $validated = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'categorie'=>'required|string|max:255',
            'reviews'=>'required | numeric',
            'description'=>'required',
            'link'=>'required|url',
            'NombrePages'=>'required'
        ]);

        // Handle image update
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('books', 'public');
            $validated['image'] = $imagePath;
        }

        // Update book
        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Livre mis à jour avec succès !');
    }

    // Delete the specified book
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Livre supprimé avec succès !');
    }
}
