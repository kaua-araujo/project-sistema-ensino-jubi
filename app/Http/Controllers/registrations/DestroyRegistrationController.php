<?php

namespace App\Http\Controllers\registrations;

use App\Http\Controllers\Controller;
use App\Http\Services\registrations\destroyRegistrationService;
use Illuminate\Support\Facades\Redirect;

class DestroyRegistrationController extends Controller
{
    public function destroy(destroyRegistrationService $service, string $id)
    {

        try {
            $registrationDeleted = $service->execute($id);
            return Redirect::route('registrations.index');
        } catch (\Exception $e) {
            return response()->json(['error'=>$e->getMessage()],400);

        }
        
    }
}