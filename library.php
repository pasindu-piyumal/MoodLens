<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/library.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Rounded" rel="stylesheet">
</head>
<body>
    
<nav class="navbar">
        <div class="logo">
            <a href="#">SocialMoodLens</a>
        </div>
        <div class="menu-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul id="nav-menu" class="nav-menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="dropdown-parent">
                Feedbacks
                <div class="dropdown">
                    <a href="feedback.php">Add Feedback</a>
                    <a href="all_feedbacks.php">Show Feedbacks</a>
                </div>
            </li>
            <?php
            if (isset($_SESSION["username"])) {
                echo '<li><a href="includes/logout.inc.php">Logout</a></li>';
                echo '<li><span class="user"><a href=""><a href="profile.php">' . htmlspecialchars($_SESSION["username"]) . '</a> </span></li>';
            } else {
                echo '<li><a href="login.php">Login</a></li>';  // Show login link if user is not logged in
            }
            ?>
        </ul>
    </nav>

    <header id="home">
        <h1>The Impact of Social Media on Study</h1>
        <p>Explore how social platforms affect focus, productivity, and academic success</p>
    </header>

    <main>
        <section class="resources" id="books">
            <h2>📚 Recommended Books, Researches and Articles </h2>
            <div class="card">
                <h3>Social Media Usage and Study Habits of College Students in the Pandemic</h3>
                <p>Authors: Angelica Celeste, Aaron Diocson, Mark Christian Lobaton and Chris Feli Joy Tajonera</p>
                <a href="https://www.researchgate.net/publication/389067630_Social_Media_Usage_and_Study_Habits_of_College_Students_in_the_Pandemic" target="_blank">More Info</a>
            </div>
            <div class="card">
                <h3>Social Media and Study Habits of Secondary School Students in Anambra State, Nigeria</h3>
                <p>Author: Chibueze Maureen</p>
                <a href="https://digitalcommons.unl.edu/cgi/viewcontent.cgi?article=5562&context=libphilprac" target="_blank">More Info</a>
            </div>
            <div class="card">
                <h3>The Influence of Social Media and Study Habit on Student Academic Performance</h3>
                <p>Author: Hafisha L. Mangacop, Junge B. Guillena</p>
                <a href="https://journals.indexcopernicus.com/api/file/viewByFileId/2307185" target="_blank">More Info</a>
            </div>
            <div class="card">
                <h3>social media and academic performance of students</h3>
                <p>Author: Peter Osharive</p>
                <a href="https://www.researchgate.net/publication/273765340_social_media_and_academic_performance_of_students" target="_blank">More Info</a>
            </div>
        </section>

        <section class="resources" id="videos">
            <h2>🎥 Related Videos</h2>
            <div class="video-row">
                <div class="card video-card">
                <h3>How Social Media Affects the Brain</h3>
                <a href="https://www.youtube.com/watch?v=HffWFd_6bJ0" target="_blank">
                    <img src="https://img.youtube.com/vi/HffWFd_6bJ0/hqdefault.jpg" alt="Social Media Brain Video" />
                </a>
                <p>Understanding the impact on attention and dopamine</p>
                <a href="https://www.youtube.com/watch?v=HffWFd_6bJ0" target="_blank">Watch Video</a>
                </div>

                <div class="card video-card">
                <h3>The Ugly Truth About Social Media - Neuroscientist Andrew Huberman</h3>
                <a href="https://www.youtube.com/watch?v=Zh-AcF_4Hao" target="_blank">
                    <img src="https://img.youtube.com/vi/Zh-AcF_4Hao/hqdefault.jpg" alt="Mental Health Video" />
                </a>
                <p>Dr Andrew Huberman explains what happens if you overuse social media. Does Dr Andrew Huberman think social media addiction is real? Does HubermanLab believe it is possible to develop OCD around your phone use?</p>
                <a href="https://www.youtube.com/watch?v=Zh-AcF_4Hao" target="_blank">Watch Video</a>
                </div>

                <div class="card video-card">
                    <h3>How to Make Learning as Addictive as Social Media</h3>
                    <a href="https://www.youtube.com/watch?v=P6FORpg0KVo" target="_blank">
                    <img src="https://img.youtube.com/vi/P6FORpg0KVo/hqdefault.jpg" alt="Mental Health Video" />
                    </a>
                    <p>When technologist Luis von Ahn was building the popular language-learning platform Duolingo, he faced a big problem: Could an app designed to teach you something ever compete with addictive platforms like Instagram and TikTok?</p>
                    <a href="https://www.youtube.com/watch?v=P6FORpg0KVo" target="_blank">Watch Video</a>
                </div>
                
                <div class="card video-card">
                    <h3>New study shows negative impacts of social media on teenagers</h3>
                    <a href="https://www.youtube.com/watch?v=eD0rKhi17-g" target="_blank">
                    <img src="https://img.youtube.com/vi/eD0rKhi17-g/hqdefault.jpg" alt="Mental Health Video" />
                    </a>
                    <p>A new study found teenagers who use social media more than five hours a day saw between a 35 and 50 percent spike in depression symptoms.</p>
                    <a href="https://www.youtube.com/watch?v=eD0rKhi17-g" target="_blank">Watch Video</a>
                </div>

                <div class="card video-card">
                    <h3>Mental Health and Social Media</h3>
                    <a href="https://www.youtube.com/watch?v=-QDjx_spkwI" target="_blank">
                    <img src="https://img.youtube.com/vi/-QDjx_spkwI/hqdefault.jpg" alt="Mental Health Video" />
                    </a>
                    <p>Learn about both the benefits and disadvantages of social media usage on your mental health. This video will cover health habits for social media, and what to do if social media is impacting your mental health.</p>
                    <a href="https://www.youtube.com/watch?v=-QDjx_spkwI" target="_blank">Watch Video</a>
                </div>

                <div class="card video-card">
                    <h3>Does social media negatively impact teen mental health?</h3>
                    <a href="https://www.youtube.com/watch?v=gnEpRDh4Y2A" target="_blank">
                    <img src="https://img.youtube.com/vi/gnEpRDh4Y2A/hqdefault.jpg" alt="Mental Health Video" />
                    </a>
                    <p>The increase in teen girls feeling “sad or hopeless” from 2011 to 2021 correlates with the rise in social media during the same period, according to the CDC.</p>
                    <a href="https://www.youtube.com/watch?v=gnEpRDh4Y2A" target="_blank">Watch Video</a>
                </div>
            </div>
        </section>
    </main>
    
</body>
</html>