 <?php

namespace App\Http\Controllers;

use App\Models\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    public function index()
    {
        $villes = Ville::with(['region', 'formations'])->get();
        return response()->json($villes);
    }

    public function store(Request $request)
    {
        $request->validate([
            'idVille' => 'required|unique:villes',
            'idRegion' => 'required|exists:regions,idRegion'
        ]);

        $ville = Ville::create($request->all());
        return response()->json($ville, 201);
    }

    public function show(Ville $ville)
    {
        return response()->json($ville->load(['region', 'formations']));
    }

    public function update(Request $request, Ville $ville)
    {
        $request->validate([
            'idVille' => 'required|unique:villes,idVille,' . $ville->id,
            'idRegion' => 'required|exists:regions,idRegion'
        ]);

        $ville->update($request->all());
        return response()->json($ville);
    }

    public function destroy(Ville $ville)
    {
        $ville->delete();
        return response()->json(null, 204);
    }
} 