<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.0/dist/locomotive-scroll.min.css" />
    <style>
     /* Marquee styles */
        .marquee {
            --gap: 1rem;
            position: relative;
            display: flex;
            overflow: hidden;
            user-select: none;
            gap: var(--gap);
        }

        .marquee__content {
            flex-shrink: 0;
            display: flex;
            justify-content: space-around;
            gap: var(--gap);
            min-width: 100%;
            list-style: none;
        }
        .marquee__content img {
            height: 5rem;
        }
        @keyframes scroll {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(calc(-100% - var(--gap)));
        }
        }

        /* Pause animation when reduced-motion is set */
        @media (prefers-reduced-motion: reduce) {
            .marquee__content {
                animation-play-state: paused !important;
            }
        }

        /* Enable animation */
       

        /* Reverse animation */
        .marquee--reverse .marquee__content {
        animation-direction: reverse;
        }
  

       
        * {
        box-sizing: border-box;
        }

        body {
        padding: 2rem;
        width: 100%;
        min-height: 100vh;
        font-family: system-ui, sans-serif;
        font-size: 1rem;
        line-height: 1.5;
        }

        h1 {
        font-size: 2rem;
        font-weight: 600;
        line-height: 1.2;
        margin-block: 2rem 1rem;
        }

        h2 {
        font-size: 1.25rem;
        font-weight: 600;
        }

        section {
            margin-block: 3rem;
        }

        section > * + * {
            margin-block-start: 0.5rem;
        }

    </style>
</head>
<body > 
    <h1>CSS Marquee Examples</h1>
    <p>An exploration of responsive marquee-style animations with HTML and CSS for the article <a href="https://ryanmulligan.dev/blog/css-marquee/" target="_blank">The Infinite Marquee</a>.

    <section class=""> 
        <div class="marquee enable-animation">
            <ul class="marquee__content">
                <li><img src="assets/images/material/logo/logo-01.jpg"></li>
                <li><img src="assets/images/material/logo/logo-02.jpg"></li>
                <li><img src="assets/images/material/logo/logo-03.jpg"></li>
                <li><img src="assets/images/material/logo/logo-04.jpg"></li>
                <li><img src="assets/images/material/logo/logo-05.jpg"></li>
                <li><img src="assets/images/material/logo/logo-06.jpg"></li>
                <li><img src="assets/images/material/logo/logo-07.jpg"></li>
            </ul>

            <ul aria-hidden="true" class="marquee__content"> 
                <li><img src="assets/images/material/logo/logo-01.jpg"></li>
                <li><img src="assets/images/material/logo/logo-02.jpg"></li>
                <li><img src="assets/images/material/logo/logo-03.jpg"></li>
                <li><img src="assets/images/material/logo/logo-04.jpg"></li>
                <li><img src="assets/images/material/logo/logo-05.jpg"></li>
                <li><img src="assets/images/material/logo/logo-06.jpg"></li>
                <li><img src="assets/images/material/logo/logo-07.jpg"></li>
            </ul>
        </div>
    </section>
  
</body>
</html>