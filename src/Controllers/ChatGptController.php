<?php

namespace Tanvir\ChatgptApi\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tanvir\ChatgptApi\ChatGptApiDriver\ApiParameters\ChatGptApiParameter;
use Tanvir\ChatgptApi\ChatGptApiDriver\Factory\ApiDriverFactory;
use Tanvir\ChatgptApi\Models\ChatGptResponse;

class ChatGptController extends Controller
{
    protected ApiDriverFactory $apiDriverFactory;

    /**
     * @param ApiDriverFactory $apiDriverFactory
     */
    public function __construct(ApiDriverFactory $apiDriverFactory)
    {
        $this->apiDriverFactory = $apiDriverFactory;
    }

    public function getResponse(Request $request)
    {
        try {
            $request->validate([
                'prompt' => 'required',
            ]);

            $apiDriver = $this->apiDriverFactory->create('real-time');
            $response = $apiDriver->sendRequest(new ChatGptApiParameter($request->get('prompt')));
            $response = $response->getResponse();
            ChatGptResponse::create([
                'user_id' => Auth::user()->id,
                'prompt' => $request->get('prompt'),
                'response' => $response
            ]);

            return response()->json([
                'data' => $response
            ]);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 501);
        }

    }
}
