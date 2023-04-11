<?php

use App\Http\Controllers\Controller;
use App\Models\PageSetting;
use Illuminate\Http\Request;

class PageSettingsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $pageSettings = PageSetting::firstOrFail();

        return view('page-settings.show', compact('pageSettings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $pageSettings = PageSetting::firstOrFail();

        return view('page-settings.edit', compact('pageSettings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $pageSettings = PageSetting::firstOrFail();

        $pageSettings->fill($request->only([
            'name',
            'version',
            'contact_email',
            'logo',
        ]));

        $pageSettings->save();

        return redirect()->route('page-settings.show')->with('success', 'Page settings updated.');
    }
}
