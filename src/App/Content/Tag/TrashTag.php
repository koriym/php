<?php
declare(strict_types=1);

namespace Argo\App\Content\Tag;

use Argo\Domain\Content\ContentLocator;
use Argo\App\Payload;
use Argo\App\UseCase;
use Argo\Infra\BuildFactory;

class TrashTag extends UseCase
{
    protected $content;

    public function __construct(
        ContentLocator $content,
        BuildFactory $buildFactory
    ) {
        $this->content = $content;
        $this->buildFactory = $buildFactory;
    }

    protected function exec(string $relId) : Payload
    {
        $tag = $this->content->tags->getItem($relId);

        if ($tag === null) {
            return Payload::notFound();
        }

        $posts = $this->content->posts->getItems();

        foreach ($posts as $i => $post) {
            if (! in_array($tag->relId, $post->data->tags)) {
                unset($posts[$i]);
                continue;
            }

            $key = array_search($tag->relId, $post->data->tags);
            unset($post->data->tags[$key]);

            if (empty($post->data->tags)) {
                $post->data->tags[] = 'general';
            }

            $this->content->posts->save($post);
        }

        $this->content->tags->trash($tag);
        $build = $this->buildFactory->new()->trashedTag($tag, $posts);

        return Payload::deleted(['item' => $tag]);
    }
}
