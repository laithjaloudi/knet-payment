<?php


namespace DeveloperH\Knet\Services;


use DeveloperH\Knet\SDK\{Request,Response};


class KNet
{
    public function request(){
        return new Request();
    }

    /**
     * @param \Illuminate\Http\Request $request
     */
    public function response(\Illuminate\Http\Request $request ){
        return new Response($request);
    }
}
