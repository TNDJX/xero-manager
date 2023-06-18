<?php

namespace Tndjxd\XeroManager\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\ResponseFactory;
use Webfox\Xero\OauthCredentialManager;

class XeroController extends Controller
{
    public function __invoke(Request $request, OauthCredentialManager $xeroCredentials): Response|ResponseFactory
    {
        try {
            // Check if we've got any stored credentials
            if ($xeroCredentials->exists()) {
                /*
                 * We have stored credentials so we can resolve the AccountingApi,
                 * If we were sure we already had some stored credentials then we could just resolve this through the controller
                 * But since we use this route for the initial authentication we cannot be sure!
                 */
                /** @var \XeroAPI\XeroPHP\Api\AccountingApi $xero */
                $xero = resolve(\XeroAPI\XeroPHP\Api\AccountingApi::class);

                $organisationName = $xero->getOrganisations($xeroCredentials->getTenantId())
                    ->getOrganisations()[0]->getName();
                $user = $xeroCredentials->getUser();
                $username = "{$user['given_name']} {$user['family_name']} ({$user['username']})";
            }
        } catch (\throwable $e) {
            // This can happen if the credentials have been revoked or there is an error with the organisation (e.g. it's expired)
            $error = $e->getMessage();
        }

        return inertia('XeroManager', [
            'connected' => $xeroCredentials->exists(),
            'error' => $error ?? null,
            'organisationName' => $organisationName ?? null,
            'username' => $username ?? null,
            'xeroAuthUrl' => route('xero.auth.authorize')
        ]);
    }

}
