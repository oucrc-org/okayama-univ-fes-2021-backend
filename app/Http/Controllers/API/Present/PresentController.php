<?php

namespace App\Http\Controllers\API\Present;

use App\Http\Controllers\Controller;
use App\Models\Present;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PresentController extends Controller
{
    private $mPresent;

    function __construct(Present $present)
    {
        $this->mPresent = $present;
    }

    public function get(): JsonResponse
    {
        try {
            $data = $this->mPresent->query()
                ->get()
                ->map(function ($item){
                    return $item->only(['id', 'name', 'image_path', 'required_stamps', 'stock']);
                });

            return response()->json([
                'success' => true,
                'data' => $data
            ]);
        }
        catch (ModelNotFoundException $e)
        {
            return response()->json(['success' => false, 'message' => $e], 500);
        }
    }
}
