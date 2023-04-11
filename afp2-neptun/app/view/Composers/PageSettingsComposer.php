<?php 

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\PageSettings;

class PageSettingsComposer
{
    public function compose(View $view): void
    {
        $view->with('pageSettings', PageSettings::first());
    }
}
