<?php namespace Flarum\Tags\Events;

use Flarum\Core\Models\Discussion;
use Flarum\Core\Models\User;

class DiscussionWasTagged
{
    /**
     * @var \Flarum\Core\Models\Discussion
     */
    public $discussion;

    /**
     * @var \Flarum\Core\Models\User
     */
    public $user;

    /**
     * @var array
     */
    public $oldTags;

    /**
     * @param \Flarum\Core\Models\Discussion $discussion
     * @param \Flarum\Core\Models\User $user
     * @param \Flarum\Categories\Category $oldCategory
     */
    public function __construct(Discussion $discussion, User $user, array $oldTags)
    {
        $this->discussion = $discussion;
        $this->user = $user;
        $this->oldTags = $oldTags;
    }
}