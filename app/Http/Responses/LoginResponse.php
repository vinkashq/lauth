<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Laravel\Fortify\Fortify;
use Vinkas\Discourse\Models\Connect;

class LoginResponse implements LoginResponseContract
{
    /**
     * @param $request
     *
     * @return mixed
     */
    public function toResponse($request)
    {
        if ($request->wantsJson()) {
            return response()->json(['two_factor' => false]);
        }

        $response = Connect::find()?->getRedirectResponse();
        if ($response) {
            return $response;
        }

        return redirect()->intended(Fortify::redirects('login'));
    }
}
