namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'service' => 'required|string|max:255',
        ]);

        // Simpan data vendor
        $vendor = new Vendor();
        $vendor->name = $request->name;
        $vendor->service = $request->service;
        $vendor->save();

        return redirect()->route('vendor.success');  // Redirect ke halaman sukses
    }
}
