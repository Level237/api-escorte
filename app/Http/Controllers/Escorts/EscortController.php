<?php

namespace App\Http\Controllers\Escorts;
use App\Http\Controllers\Controller;
use App\Repositories\Escort\EscortRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EscortController extends Controller 
{
    private EscortRepository $EscortRepository;

    public function __construct(EscortRepository $EscortRepository) 
    {
        $this->EscortRepository = $EscortRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json($this->EscortRepository->getAllEscorts());
    }

    public function store(Request $request): JsonResponse 
    {
        $EscortDetails = $request->only([
            'client',
            'details'
        ]);

        return response()->json(
            [
                'data' => $this->EscortRepository->createEscort($EscortDetails)
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request): JsonResponse 
    {
        $EscortId = $request->route('id');

        return response()->json([
            'data' => $this->EscortRepository->getEscortById($EscortId)
        ]);
    }

    public function update(Request $request): JsonResponse 
    {
        $EscortId = $request->route('id');
        $EscortDetails = $request->only([
            'client',
            'details'
        ]);

        return response()->json([
            'data' => $this->EscortRepository->updateEscort($EscortId, $EscortDetails)
        ]);
    }

    public function destroy(Request $request): JsonResponse 
    {
        $EscortId = $request->route('id');
        $this->EscortRepository->deleteEscort($EscortId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }

    public function indexWithTownName(): JsonResponse 
    {
       
        try{
               return response()->json($this->EscortRepository->getEscortsWithTownName());
        }
        catch(e){
            return response("{error:Unable to fetch data}", 500)
                  ->header('Content-Type', 'application/json');
        }
    }
}
