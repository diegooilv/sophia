<?php

function post($post)
{
    $linksHtml = "";

    foreach ($post->getLinks() as $link) {
        $linksHtml .= "<a class='post-link' href='{$link}' target='_blank'>{$link}</a>";
    }

    return "
    <article class='post' id='post-{$post->getId()}'>

        <a class='post-wrapper' href='/post/{$post->getId()}'>

            <div class='post-content'>

                <h2 class='post-title'>{$post->getTitle()}</h2>

                <img
                    class='post-banner'
                    src='{$post->getBanner()}'
                    alt='{$post->getTitle()}'
                >

                <p class='post-description'>
                    {$post->getDescription()}
                </p>

            </div>
        </a>

        <div class='post-content'>

            <div class='post-links'>
                {$linksHtml}
            </div>

           <div class='post-author'>

                <img
                    class='post-author-img'
                    src='{$post->getImageUserUrl()}'
                    alt='{$post->getAuthorName()}'
                >

                <a href='/user/{$post->getUserId()}' class='post-author-name'>
                    {$post->getAuthorName()}
                </a>

            </div>

            <a
                class='post-btn-report'
                href='/report/{$post->getId()}'
            >
                Report
            </a>

        </div>

    </article>
    ";
}