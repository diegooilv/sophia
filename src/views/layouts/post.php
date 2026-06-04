<?php

function renderPost($postView)
{
    $post = $postView->getPost();
    $author = $postView->getAuthor();

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
                    src='{$author->getImageUrl()}'
                    alt='{$author->getUsername()}'
                >

                <a
                    href='/user/{$author->getId()}'
                    class='post-author-name'
                >
                    {$author->getUsername()}
                </a>

            </div>

            <a
                class='post-btn-report'
                href='/report/post/{$post->getId()}'
            >
                Report
            </a>

        </div>

    </article>
    ";
}