<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Laravel\Fortify\Fortify;
use Vinkas\Discourse\Models\Connect as DiscourseConnect;
use Vinkas\Cda\Server\Client as CdaClient;

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

        $discourseConnect = DiscourseConnect::find();
        if ($discourseConnect) {
            return $discourseConnect->getRedirectResponse();
        }

        $cdaClient = CdaClient::findValid();
        if ($cdaClient) {
            return $cdaClient->redirect();
        }

        return redirect()->intended(Fortify::redirects('login'));
    }
}
