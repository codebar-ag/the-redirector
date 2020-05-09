<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class StartController extends Controller
{
    protected $redirect_url;

    public function __construct()
    {
        $this->redirect_url = config('redirect.url');
    }

    public function index()
    {
        $status = $this->getRedirectUrlStatus();

        return $status ? $this->redirectToRedirectUrl() : $this->redirectToFallbackView();
    }

    protected function getRedirectUrlStatus() : bool
    {
        try
        {
            return Http::timeout(1)->get($this->redirect_url)->throw()->ok();
        }
        catch (\Exception $exception)
        {
            return false;
        }
    }

    protected function redirectToFallbackView()
    {
        return view('layouts.default', [
            'redirect_url' => $this->redirect_url
        ]);
    }

    protected function redirectToRedirectUrl()
    {
        return redirect()->to($this->redirect_url);
    }

}
