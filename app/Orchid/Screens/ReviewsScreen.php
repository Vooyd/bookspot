<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;

/**
 * Class ReviewsScreen
 * @package App\Orchid\Screens
 */
class ReviewsScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Reviews';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'BookSpot Reviews';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [];
    }
}
