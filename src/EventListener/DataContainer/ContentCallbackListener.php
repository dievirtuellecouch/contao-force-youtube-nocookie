<?php

namespace DVC\ForceYoutubeNocookie\EventListener\DataContainer;

use Contao\CoreBundle\DependencyInjection\Attribute\AsCallback;
use Contao\DataContainer;
use Contao\StringUtil;

class ContentCallbackListener
{
    private const YOUTUBE_NOCOOKIE_VALUE = 'youtube_nocookie';

    #[AsCallback(
        table: 'tl_content',
        target: 'fields.youtubeOptions.save',
    )]
    public function onYoutubeOptionsSave(?string $options, DataContainer $dataContainer): array
    {
        return $this->addNocookieToOptions($options);
    }

    private function addNocookieToOptions(?string $options): array
    {
        $options = StringUtil::deserialize($options);

        if ($options === null) {
            $options = [];
        }

        if (\array_search(self::YOUTUBE_NOCOOKIE_VALUE, $options) === false) {
            $options = \array_merge($options, [self::YOUTUBE_NOCOOKIE_VALUE]);
        }

        return $options;
    }
}
