use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NFeController;

Route::post('/emitir-nfe', [NFeController::class, 'emitir']); 