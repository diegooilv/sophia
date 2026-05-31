<?php

function footer()
{
    return <<<HTML
<footer class="footer">
    <div class="footer-container">

        <p class="footer-text">
            Projeto desenvolvido em <strong>Projeto Integrador II</strong> - IFRS
        </p>

        <div class="footer-links">

            <a class="footer-link" href="https://github.com/diegooilv" target="_blank" rel="noopener noreferrer">
                <svg class="footer-icon" viewBox="0 0 24 24" fill="currentColor" width="18" height="18">
                    <path d="M12 .5C5.7.5.5 5.9.5 12.3c0 5.1 3.3 9.4 7.9 10.9.6.1.8-.3.8-.6v-2.1c-3.2.7-3.9-1.4-3.9-1.4-.5-1.3-1.3-1.6-1.3-1.6-1-.7.1-.7.1-.7 1.1.1 1.7 1.2 1.7 1.2 1 .1.8 2.2 2.8 2.9.1-.7.4-1.2.7-1.5-2.6-.3-5.3-1.3-5.3-6 0-1.3.5-2.4 1.2-3.3-.1-.3-.5-1.6.1-3.2 0 0 1-.3 3.3 1.3.9-.3 1.9-.4 2.9-.4s2 .1 2.9.4c2.3-1.6 3.3-1.3 3.3-1.3.6 1.6.2 2.9.1 3.2.8.9 1.2 2 1.2 3.3 0 4.7-2.7 5.7-5.3 6 .4.3.8 1 .8 2.1v3.1c0 .3.2.7.8.6 4.6-1.5 7.9-5.8 7.9-10.9C23.5 5.9 18.3.5 12 .5z"/>
                </svg>
                GitHub
            </a>

            <span class="footer-separator">•</span>

            <a class="footer-link" href="https://ifrs.edu.br" target="_blank" rel="noopener noreferrer">
                <svg class="footer-icon" viewBox="0 0 24 24" fill="currentColor" width="18" height="18">
                    <path d="M12 2L1 7l11 5 9-4.09V17h2V7L12 2zm0 9L3.74 7 12 3.5 20.26 7 12 11z"/>
                </svg>
                IFRS
            </a>

            <span class="footer-separator">•</span>

            <a class="footer-link" href="/">
                <svg class="footer-icon" viewBox="0 0 24 24" fill="currentColor" width="18" height="18">
                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                </svg>
                Início
            </a>

        </div>

    </div>
</footer>
HTML;
}