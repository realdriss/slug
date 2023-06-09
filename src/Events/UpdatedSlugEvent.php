<?php

namespace RealDriss\Slug\Events;

use RealDriss\Base\Events\Event;
use RealDriss\Slug\Models\Slug;
use Eloquent;
use Illuminate\Queue\SerializesModels;

class UpdatedSlugEvent extends Event
{
    use SerializesModels;

    /**
     * @var Eloquent|false
     */
    public $data;

    /**
     * @var Slug
     */
    public $slug;

    /**
     * UpdatedSlugEvent constructor.
     * @param Eloquent $data
     * @param Slug $slug
     */
    public function __construct($data, Slug $slug)
    {
        $this->data = $data;
        $this->slug = $slug;
    }
}
