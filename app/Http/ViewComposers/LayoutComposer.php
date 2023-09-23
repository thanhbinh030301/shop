<?php
namespace App\Http\ViewComposers;

use App\Services\API\BlogApi;
use Illuminate\View\View;

class LayoutComposer
{
    private $blogApi;
    private $categories;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct(BlogApi $blogApi)
    {
        $this->categories = $blogApi->getCategories();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categories', $this->categories);
    }
}
