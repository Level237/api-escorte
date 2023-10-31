<?php

namespace App\Http\Controllers;

use App\Repositories\AnnouncementRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AnnouncementController extends Controller 
{
    private AnnouncementRepository $annoucementRepository;

    public function __construct(AnnouncementRepository $announcementRepository) 
    {
        $this->announcementRepository = $announcementRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->announcementRepository->getAllannouncements()
        ]);
    }

    public function store(Request $request): JsonResponse 
    {
        $announcementDetails = $request->only([
            'client',
            'details'
        ]);

        return response()->json(
            [
                'data' => $this->announcementRepository->createAnnouncement($announcementDetails)
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request): JsonResponse 
    {
        $announcementId = $request->route('id');

        return response()->json([
            'data' => $this->announcementRepository->getAnnouncementById($announcementId)
        ]);
    }

    public function update(Request $request): JsonResponse 
    {
        $announcementId = $request->route('id');
        $announcementDetails = $request->only([
            'client',
            'details'
        ]);

        return response()->json([
            'data' => $this->announcementRepository->updateAnnouncement($announcementId, $announcementDetails)
        ]);
    }

    public function destroy(Request $request): JsonResponse 
    {
        $announcementId = $request->route('id');
        $this->announcementRepository->deleteAnnouncement($announcementId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }

    public function getAnnouncesByTown(): JsonResponse 
    {
       
        try{
               return response()->json([
                    'data' => $this->announcementRepository->getAnnouncementsByTown()
                ]);
        }
        catch(e){
            return response("{error:Unable to fetch data}", 500)
                  ->header('Content-Type', 'application/json');
        }
    }
}
