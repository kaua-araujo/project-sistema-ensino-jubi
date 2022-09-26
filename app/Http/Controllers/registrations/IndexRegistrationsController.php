<?php

namespace App\Http\Controllers\registrations;

use App\Http\Controllers\Controller;
use App\Http\Services\registrations\indexRegistrationsService;
use App\Http\Services\registrations\showRegistrationService;
use Illuminate\Http\Request;

class IndexRegistrationsController extends Controller
{
    public function index(indexRegistrationsService $service)
    {

        try {
            $registrations = $service->execute();
            return view('registration/indexRegistration',[
                'registrations' => $registrations
            ]);
        } catch(\Exception $e) {
            return response()->json(["error" => $e->getMessage()],400);
        }

    }
}