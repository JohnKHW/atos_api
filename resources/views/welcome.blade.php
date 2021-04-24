<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito';
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
            color: rgb(61, 146, 201);
        }

        a:hover,
        a:focus {
            text-decoration: underline;
        }

        h3 {
            font-weight: 100;
        }

        /* LAYOUT CSS */
        .pure-img-responsive {
            max-width: 100%;
            height: auto;
        }

        #layout {
            padding: 0;
        }

        .header {
            text-align: center;
            top: auto;
            margin: 3em auto;
        }

        .sidebar {
            background: rgb(61, 79, 93);
            color: #fff;
        }

        .brand-title,
        .brand-tagline {
            margin: 0;
        }

        .brand-title {
            text-transform: uppercase;
        }

        .brand-tagline {
            font-weight: 300;
            color: rgb(176, 202, 219);
        }

        .nav-list {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .nav-item {
            display: inline-block;
            *display: inline;
            zoom: 1;
        }

        .nav-item a {
            background: transparent;
            border: 2px solid rgb(176, 202, 219);
            color: #fff;
            margin-top: 1em;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            font-size: 85%;
        }

        .nav-item a:hover,
        .nav-item a:focus {
            border: 2px solid rgb(61, 146, 201);
            text-decoration: none;
        }

        .content-subhead {
            text-transform: uppercase;
            color: #aaa;
            border-bottom: 1px solid #eee;
            padding: 0.4em 0;
            font-size: 80%;
            font-weight: 500;
            letter-spacing: 0.1em;
        }

        .content {
            padding: 2em 1em 0;
        }

        .post {
            padding-bottom: 2em;
        }

        .post-title {
            font-size: 2em;
            color: #222;
            margin-bottom: 0.2em;
        }

        .post-avatar {
            border-radius: 50px;
            float: right;
            margin-left: 1em;
        }

        .post-description {
            font-family: Georgia, "Cambria", serif;
            color: #444;
            line-height: 1.8em;
        }

        .post-meta {
            color: #999;
            font-size: 90%;
            margin: 0;
        }

        .post-category {
            margin: 0 0.1em;
            padding: 0.3em 1em;
            color: #fff;
            background: #999;
            font-size: 80%;
        }

        .post-category-design {
            background: #5aba59;
        }

        .post-category-pure {
            background: #4d85d1;
        }

        .post-category-yui {
            background: #8156a7;
        }

        .post-category-js {
            background: #df2d4f;
        }

        .post-images {
            margin: 1em 0;
        }

        .post-image-meta {
            margin-top: -3.5em;
            margin-left: 1em;
            color: #fff;
            text-shadow: 0 1px 1px #333;
        }

        .footer {
            padding: 1em 0;
        }

        .footer a {
            color: #ccc;
            font-size: 80%;
        }

        .footer .pure-menu a:hover,
        .footer .pure-menu a:focus {
            background: none;
        }

        @media (min-width: 48em) {
            .content {
                padding: 2em 3em 0;
                margin-left: 25%;
            }

            .header {
                margin: 80% 2em 0;
                text-align: right;
            }

            .sidebar {
                position: fixed;
                top: 0;
                bottom: 0;
            }

            .footer {
                text-align: center;
            }
        }
    </style>
</head>

<body class="antialiased">
    <div id="layout" class="pure-g">
        <div class="sidebar pure-u-1 pure-u-md-1-4">
            <div class="header">
                <h1 class="brand-title">{{ config('app.name', 'Laravel') }}
                </h1>
                <h2 class="brand-tagline">From City University of Hong Kong</h2>

                <nav class="nav">
                    @if (Route::has('login'))
                    <ul class="nav-list">
                        @auth
                        <li class="nav-item">

                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                        </li>

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        </li>
                        @endif
                        @endauth
                    </ul>

                    @endif
                </nav>
            </div>
        </div>

        <div class="content pure-u-1 pure-u-md-3-4">
            <div>
                <!-- A wrapper for all the blog posts -->
                <div class="posts">
                    <h1 class="content-subhead">What is this?</h1>

                    <!-- A single blog post -->
                    <section class="post">
                        <header class="post-header">

                            <h2 class="post-title">Description</h2>

                        </header>

                        <div class="post-description">
                            <p>
                                CarboNet aims to visualize individuals' carbon footprint and encourage them to lower it. We also would like to enhance our influence on society, creating a regional report to facilitate research or policymaking. CarboNet visualizes the carbon footprint created in different daily life aspects, mainly focused on food consumption and public transportation. It will transfer the individual decarbonization actions into personal points in our application. The NET points bring real-life benefits to end-users, for example, turning into discounts or coupons. To take a further step, we plan to cooperate with tree-planting NGOs, so NET points will be donated to all these NGOs and turn into a tree, reaching decarbonization in a practical method. Despite NET points, our application will also calculate and compare the decarbonization effort in each country in terms of a regional point. With the help of AI, CarboNet will create a report in every season summarizing the data. The most eco-friendly region will be announced quarterly, rewarding extra NET points, encouraging other users. As global citizens, we all have the responsibility of taking part in decarbonization. We believe that small changes in daily life can evolve into waves and become the game-changer. CarboNet is not just an application. It builds up a community of endeavors passionate about making a change and helping in decarbonization.
                            </p>
                        </div>
                    </section>
                </div>

                <div class="posts">
                    <h1 class="content-subhead">Our good and bad</h1>

                    <section class="post">
                        <header class="post-header">

                            <h2 class="post-title">Benefit</h2>

                        </header>

                        <div class="post-description">
                            <p>
                                Concerning the benefits for end-users, Carbonet will transfer individual decarbonization actions into NET points. These points can be used to exchange for discounts and coupons or donate to NGOs planting trees in real-life. Visualizing the carbon footprint produced can build up better guidelines to flows for individuals. CarboNet provides reports for individual users to track their carbon footprint created by every action and choice. Besides personal aspects, CarboNet also generates regional reports reflects both individuals and local performances in rank, providing actual data for both policymaking and individual levels.

                                Furthermore, concerning the benefits for business partners, Carbonet will provide a platform for advertising and create a community. It provides levels of qualification to qualify the carbon footprint of partners’ products. And our business partners will also be able to cooperate with one and another through the community of CarboNet.

                            </p>
                        </div>
                    </section>

                    <section class="post">
                        <header class="post-header">

                            <h2 class="post-title">Technical Feasibility</h2>

                        </header>

                        <div class="post-description">
                            <p>
                                The first concern is development tools.</p>
                            <p>
                                Today’s mobile app development can be divided into at least three main approaches. There are Native applications, web app, hybrid applications. The two leading mobile OS platforms are Apple’s iOS and Google’s Android.
                                Native apps are written in the code preliminarily used for the device and its OS. For example, developers write iOS applications in Objective-C or Swift, while they create Android-native apps in Java.
                            </p>
                            <p>
                                A web app is an application that the user does not download and instead accesses via a web browser over a network. Example web browsers include Google Chrome, Safari, and Mozilla Firefox. Web apps provide functionality from bank account access to YouTube video viewing via, for example, Safari on an iPhone.
                            </p>
                            <p>
                                Hybrid applications are built with HTML and CSS. Developers create one code base, then make small changes to tailor the app to each platform. Fewer developers are dedicated to each venue with a hybrid app than with a fully native app. Hybrid apps typically run a web app through a container or WebView, a browser containing a mobile app.
                            </p>
                            <p>
                                Hybrid applications were supposed to use for our app development. The reasons are that we do not need to build dual versions for android and iOS applications. When we have some function we want to add, we only modify once to create the updated version. Also, the running time of the app is faster than using a web browser.
                            </p>
                            <p>
                                The second concern is the formula of carbon emission.
                            </p>
                            <p>
                                It is easy to apply the formulas to the application. However, the recipes may be less persuasive, and it may cause the end-users not to trust our app to reduce carbon emissions, and the result is not our expectation. So, we should do much research to find the exact formulas of the calculation to apply that into our application. Then, we have to do some validation to validate that the procedure is suitable for our targets, which may cost our team much time to do that. Finally, we can apply the formulas to our app to calculate the carbon emission.
                            </p>
                            <p>
                                The third concern is the Artificial Intelligence (AI) applying.
                            </p>
                            <p>
                                The main AI application is identifying food types. To get access to the data, we have found the food types that are open source and made up the identities. We may then request to use an online machine learning (ML) platform to train the machine to identify them because ML uses many hardware resources from our computers. Using the online platform can reduce our development time and prevent the crashing case of the learning period.
                                The final concern is about the usage of plugins.
                            </p>
                            <p>
                                In the development period, we may want to reduce the development time. We can use some plugins for us to finish the tasks. To find the plugins, we will discover some open-source plugins to ensure that the plugins are secure without a backdoor to protect the end user’s data security. We also avoid the overlapping plugins in services that are just taking up valuable space and bandwidth, potentially posing additional security risks.

                            </p>
                        </div>
                    </section>

                </div>

            </div>
        </div>
    </div>
</body>

</html>