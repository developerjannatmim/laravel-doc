<?php

namespace App\Observers;

use App\Models\Blog;
use App\Models\Publics;
use Ramsey\Uuid\Type\Integer;
use Str;

class BlogObserver
{
    /**
     * Handle the Blog "creating" event.
     */
    public function creating(Blog $blog, Publics $public): void
    {
        $blog->public_id = Str::slug($blog->id);
    }

        /**
     * Handle the Blog "created" event.
     */
    public function created(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "updated" event.
     */
    public function updated(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "deleted" event.
     */
    public function deleted(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "restored" event.
     */
    public function restored(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "force deleted" event.
     */
    public function forceDeleted(Blog $blog): void
    {
        //
    }
}
