<?php

namespace App\Http\Controllers;
use App\Http\Resources\AnnounceResource;
use App\Models\Announcement;
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

    public function index()
    {
        return AnnounceResource::collection(Announcement::orderBy('subscribe_id', 'DESC')->where('subscribe_id','!=',3)->get());
    }

    public function getAdsByTown($townId)
    {
        return AnnounceResource::collection(Announcement::where('town_id', $townId)->get());
    }

    public function getAdsByCategory($categoryId)
    {
        return AnnounceResource::collection(Announcement::where('announcement_category_id', $categoryId)->get());
    }

    public function AdsByUser($userId)
    {
        return AnnounceResource::collection(Announcement::where('user_id', $userId)->get());
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

    public function show(Announcement $announce)
    {
       return new AnnounceResource($announce);
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
               return response()->json($this->announcementRepository->getAnnouncementsByTown());
        }
        catch(e){
            return response("{error:Unable to fetch data}", 500)
                  ->header('Content-Type', 'application/json');
        }
    }

    public function displayAdsImage($id, $path)
    {
       return response()->download(storage_path('app/public/ads//'.$id.'//'. $path));

    }
}
